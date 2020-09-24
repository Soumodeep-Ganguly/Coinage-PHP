<?php

include 'connection.php';

if (isset($_POST['login'])) {
	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);

	if (empty($name)||empty($password)) {
		header("Location: ../login.php?fields=empty");
		exit();
	}else{
		$sql = "SELECT * FROM admin WHERE name='$name' AND password='$password'; ";
		$result = mysqli_query($conn, $sql);

		$sql_user = "SELECT * FROM `registration` WHERE (`email`='$name' AND `password`='$password') OR (`contact`='$name' AND `password`='$password'); ";
		$result_user = mysqli_query($conn, $sql_user);

		$temp_user = "SELECT * FROM `temp_registration` WHERE (`email`='$name' AND `password`='$password') OR (`contact`='$name' AND `password`='$password'); ";
		$result_temp = mysqli_query($conn, $temp_user);

		if(mysqli_num_rows($result_user) ==1){
			if ($row = mysqli_fetch_assoc($result_user)) {
				session_start();
				$_SESSION['reg_id'] = $row['reg_id'];
				header("Location: ../users/user-home.php?login=success");
				exit();
			}else{
				header("Location: ../login.php?input=invalid_user");
				exit();
			}
		}else if (mysqli_num_rows($result)==1) {
			if ($row = mysqli_fetch_assoc($result)) {
				session_start();
				$_SESSION['name'] = $row['name'];
				header("Location: ../admin/admin-home.php?login=success");
				exit();
			}else{
				header("Location: ../login.php?input=invalid_user");
				exit();
			}
			
		} else if (mysqli_num_rows($result_temp)==1) {
			header("Location: ../login.php?registration=under_process");
			exit();			
		} else{
			header("Location: ../registration.php?user=not_found");
			exit();	
		}

	}
}

?>