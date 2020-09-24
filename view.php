<?php 
include 'includes/header.inc.php';
include 'includes/nav.inc.php';
include 'includes/connection.php';

extract($_REQUEST);

$sql=mysqli_query($conn, "SELECT * FROM `coin_details` WHERE coin_id='$view';");

$row=mysqli_fetch_array($sql); 
?>

<div class="container-fluid">
	<div class="row justify-content-center">
	
		<div class="col-md-8">	
			<div class="card mb-3">
			  <h3 class="card-header"><b>Title:</b> <?=  $row['coin_name']; ?></h3>
			    <div class="row">
			  	<div class="col-md-6">			  		
			  		<img style="height: 300px; width: 100%; display: block;" src="admin/gallery/<?=  $row['heads']; ?>" alt="Card image">
			 	</div>
			 	<div class="col-md-6">			  		
			  		<img style="height: 300px; width: 100%; display: block;" src="admin/gallery/<?=  $row['tails']; ?>" alt="Card image">
			 	</div>
			  </div>			  
			  <ul class="list-group list-group-flush">
			    <li class="list-group-item"><b>Currency Type:</b> <?=  $row['currency_type']; ?></li>
			    <li class="list-group-item"><b>Date on Coin:</b> <?=  $row['coin_date']; ?></li>
			    <li class="list-group-item"><b>Coin Value:</b> <?=  $row['coin_value']; ?></li>			    
			  </ul>
			  <div class="card-body">
			    <p class="card-text"><b><u>Description</u></b><br/><br/><?=  $row['coin_description']; ?></p>
			  </div>
			  <div class="card-body">
			  	<a href="coins.php" class="card-link btn btn-outline-secondary"><i class="fa fa-arrow-left"></i> BACK</a>		    
			  </div>
			</div>
		</div>


	</div>
</div>     




 <?php 
include 'includes/footer.nav.inc.php';
include 'includes/footer.inc.php';
 ?>