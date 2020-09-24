<?php
include 'includes/connection.php';
session_start();

$name=$_SESSION['reg_id'];
	if (!$name) {
	header("Location: ../login.php");
	}
?>
<div class="module-small bg-primary">
<div class="container-fluid">
		
			<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
			  <p class="navbar-brand ">Coinage</p>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>

			  <div class="collapse navbar-collapse" id="navbarColor01">
			    <ul class="navbar-nav mr-auto">
			      <li class="nav-item active">
			        <a class="nav-link" href="user-home.php">Home</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="user-coins.php">Coins</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="user-upload.php">Upload</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="contact.php">Contact Us</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="about.php">About</a>
			      </li>
			    </ul>
			    <ul class="nav ml-auto">
			    	<li class="nav-item my-2 my-lg-0">
			        <a class="nav-link btn btn-danger my-2 my-sm-0" href="includes/logout.php">Log Out</a>
			     </li>	
			    </ul>
			  </div>
			</nav>
		</div>
	</div>