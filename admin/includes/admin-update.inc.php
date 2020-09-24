<?php

include 'connection.php';

if (isset($_POST['update'])) {

	$id = mysqli_real_escape_string($conn, $_POST['coin_id']);
	$currencyType = mysqli_real_escape_string($conn, $_POST['currency_type']);
	$coinCountry = mysqli_real_escape_string($conn, $_POST['coin_country']);
	$coinDate = mysqli_real_escape_string($conn, $_POST['coin_date']);
	$coinValue = mysqli_real_escape_string($conn, $_POST['coin_value']);
	$coinDescription = mysqli_real_escape_string($conn, $_POST['coin_description']);

	mysqli_query($conn,"UPDATE `coin_details` SET `currency_type` = '$currencyType', `coin_country` = '$coinCountry', `coin_date` = '$coinDate', `coin_value` = '$coinValue', `coin_description` = '$coinDescription' WHERE `coin_details`.`coin_id` = '$id';");
	
	header("Location: ../admin-update.php?update=$id");
	exit();
		
}else{
	header("Location: ../admin-update.php?update=$id");
	echo "error";
	exit();
}


?>