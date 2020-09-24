<?php

include 'connection.php';

if (isset($_POST['register'])) {
	$full_name = mysqli_real_escape_string($conn, $_POST['full_name']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
	$gen = mysqli_real_escape_string($conn, $_POST['gender']);
	$dob = mysqli_real_escape_string($conn, $_POST['dob']);
	$contact = mysqli_real_escape_string($conn, $_POST['contact']);
	$city = mysqli_real_escape_string($conn, $_POST['city']);
	$pincode = mysqli_real_escape_string($conn, $_POST['pincode']);
	$country = mysqli_real_escape_string($conn, $_POST['country']);
	$reason = mysqli_real_escape_string($conn, $_POST['reason']);


	if (empty($full_name) || empty($password) || empty($email) || empty($gen) || empty($dob) || empty($contact) || empty($city) || empty($pincode) || empty($country) || empty($reason)) {
		header("Location: ../registration.php?fields=empty");
		exit();
	}else{
		
		$sql = mysqli_query($conn, "INSERT INTO `temp_registration`(`full_name`, `email`, `password`, `gender`, `city`, `pincode`, `country`, `reason`, `date_of_birth`, `contact`) VALUES ('$full_name', '$email', '$password', '$gen', '$city', '$pincode', '$country', '$reason', '$dob', '$contact');");
		header("Location: ../index.php?registration=successful");
		exit();
	}
}else {
	header("Location: ../registration.php?registration=failed");
}
?>