<?php

include 'connection.php';

extract($_REQUEST);

$sql=mysqli_query($conn, "SELECT * FROM `temp_registration` WHERE temp_id='$allow';");

$row=mysqli_fetch_array($sql); 

	$name = $row['full_name'];
	$email = $row['email'];
	$password = $row['password'];
	$gen = $row['gender'];
	$dob = $row['date_of_birth'];
	$contact = $row['contact'];
	$city = $row['city'];
	$pincode = $row['pincode'];
	$country = $row['country'];
	$reason = $row['reason'];

	$sql = mysqli_query($conn, "INSERT INTO `registration`(`full_name`, `email`, `password`, `gender`, `city`, `pincode`, `country`, `reason`, `date_of_birth`, `contact`) VALUES ('$name', '$email', '$password', '$gen', '$city', '$pincode', '$country', '$reason', '$dob', '$contact');");

		header("Location: ../registration-request.php?registration=$allow");
		exit();


?>