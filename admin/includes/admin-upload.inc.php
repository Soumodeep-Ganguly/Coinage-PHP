<?php

include 'connection.php';
if (isset($_POST['upload'])) {
	
	// upload details
	$Name = mysqli_real_escape_string($conn, $_POST['coin_name']);
	$coinName = strtolower(str_replace(" ", "-", $Name));
	$currencyType = mysqli_real_escape_string($conn, $_POST['currency_type']);
    $coinCountry = mysqli_real_escape_string($conn, $_POST['coin_country']);
	$coinDate = mysqli_real_escape_string($conn, $_POST['coin_date']);
	$coinValue = mysqli_real_escape_string($conn, $_POST['coin_value']);
	$coinDescription = mysqli_real_escape_string($conn, $_POST['coin_description']);

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
				$headsDestination = "../gallery/" . $headsFullName;

				$tailsFullName = $coinName . ".tails." . $uniqueId . "." . $tailsActualExt;
				$tailsDestination = "../gallery/" . $tailsFullName;

			

				if (empty($Name) || empty($currencyType) || empty($coinCountry) || empty($coinDate) || empty($coinValue) || empty($coinDescription)) {
					header("Location: admin-upload.php?fields=empty");
					exit();
				}else{
					if (!$conn) {
						header("Location: ../admin-upload.php?connection=error");
					}else{
						$select_sql1 = "SELECT * FROM coin_details;";
						$select_result1 = mysqli_query($conn, $select_sql1);
                        $rowCount1 = mysqli_num_rows($select_result1);

						$sql = "INSERT INTO `coin_details`(`coin_name`, `currency_type`, `coin_country`, `coin_date`, `coin_value`, `coin_description`, `heads`, `tails`) VALUES('$coinName', '$currencyType', '$coinCountry', '$coinDate','$coinValue', '$coinDescription', '$headsFullName', '$tailsFullName');";
						$result = mysqli_query($conn, $sql); 

                        $select_sql2 = "SELECT * FROM coin_details;";
						$select_result2 = mysqli_query($conn, $select_sql2);
						$rowCount2 = mysqli_num_rows($select_result2);

                        if(($rowCount2 = mysqli_num_rows($select_result2))>($rowCount1 = mysqli_num_rows($select_result1))){
                            move_uploaded_file($headsTempName, $headsDestination);
                            move_uploaded_file($tailsTempName, $tailsDestination);

                            header("Location: ../admin-upload.php?upload=success");
                            exit();
                        }else{
                            header("Location: ../admin-upload.php?connection=failed");
                            exit();
                        }
					}
				}

			}else{
				header("Location: ../admin-upload.php?file=big");
				exit();
			}
		}else{
			header("Location: ../admin-upload.php?upload=error");
			exit();
		}
	}else{
		header("Location: ../admin-upload.php?file=type");
		exit();
	}

}

?>