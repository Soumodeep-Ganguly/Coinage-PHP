<?php
include 'connection.php';

extract($_REQUEST);

$sql=mysqli_query($conn, "SELECT * FROM `coin_details` WHERE coin_id='$delete';");

$row=mysqli_fetch_array($sql);

unlink("../../admin/gallery/$row[heads]");
unlink("../../admin/gallery/$row[tails]");

mysqli_query($conn, "DELETE FROM `coin_details` WHERE coin_id='$delete';");

header("Location:../user-coins.php");



?>