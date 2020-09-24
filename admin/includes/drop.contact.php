<?php

include 'connection.php';

extract($_REQUEST);

$sql=mysqli_query($conn, "DELETE * FROM `coin_details` WHERE coin_id='$drop';");


header("Location: ../contact.php?message=deleted");

?>