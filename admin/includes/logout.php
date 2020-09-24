<?php
	session_start();
	$name=$_SESSION['name'];
	session_unset();
	header('Location: ../../login.php');
?>