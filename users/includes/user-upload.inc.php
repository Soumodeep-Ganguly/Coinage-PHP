<?php
session_start();

if (isset($_POST['upload'])) {
	
	// upload details
	$user = $_SESSION['reg_id'];
	$Name = $_POST['coin_name'];
	$coinName = strtolower(str_replace(" ", "-", $Name));
	$currencyType = $_POST['currency_type'];
    $coinCountry = $_POST['coin_country'];
	$coinDate = $_POST['coin_date'];
	$coinValue = $_POST['coin_value'];
	$coinDescription = $_POST['coin_description'];

	//heads file
	$heads = $_FILES['heads'];

	$headsName = $heads['name'];
	$headsType = $heads['type'];
	$headsTempName = $heads['tmp_name'];
	$headsError = $heads['error'];
	$headsSize = $heads['size'];

	$headsExt = explode(".", $headsName);
	$headsActualExt = strtolower(end($headsExt));

	//tails file
	$tails = $_FILES['tails'];

	$tailsName = $tails['name'];
	$tailsType = $tails['type'];
	$tailsTempName = $tails['tmp_name'];
	$tailsError = $tails['error'];
	$tailsSize = $tails['size'];

	$tailsExt = explode(".", $tailsName);
	$tailsActualExt = strtolower(end($tailsExt));

	$allowed = array("jpg", "png", "jpeg");

	if ((in_array($headsActualExt, $allowed)) && (in_array($tailsActualExt, $allowed))) {
		if (($headsError === 0)&&($tailsError === 0)) {
			if (($headsSize > 20000)&&($tailsSize > 20000)) {
				$uniqueId = uniqid("coin", true);

				$headsFullName = $coinName . ".heads." . $uniqueId . "." . $headsActualExt;
				$headsDestination = "../../admin/gallery/" . $headsFullName;

				$tailsFullName = $coinName . ".tails." . $uniqueId . "." . $tailsActualExt;
				$tailsDestination = "../../admin/gallery/" . $tailsFullName;

				include 'connection.php';

				if (empty($Name) || empty($currencyType) || empty($coinCountry) || empty($coinDate) || empty($coinValue) || empty($coinDescription)) {
					header("Location: ../user-upload.php?fields=empty");
					exit();
				}else{
					if (!$conn) {
						header("Location: ../user-upload.php?connection=failed");
					}else{
						$sql = "INSERT INTO `coin_details`(`coin_name`, `currency_type`, `coin_country`, `coin_date`, `coin_value`, `coin_description`, `heads`, `tails`, `coin_order_id`) VALUES('$coinName', '$currencyType', '$coinCountry', '$coinDate','$coinValue', '$coinDescription', '$headsFullName', '$tailsFullName', '$user');";
						$result = mysqli_query($conn, $sql);

						move_uploaded_file($headsTempName, $headsDestination);
						move_uploaded_file($tailsTempName, $tailsDestination);

						header("Location: ../user-upload.php?upload=success");
					}
				}

			}else{
				header("Location: ../user-upload.php?file=big");
				exit();
			}
		}else{
			header("Location: ../user-upload.php?upload=error");
			exit();
		}
	}else{
		header("Location: ../user-upload.php?file=type");
		exit();
	}

}

?>