<?php 
include 'includes/header.inc.php';
include 'includes/admin-nav.inc.php'; 
include 'includes/connection.php';

extract($_REQUEST);

$sql=mysqli_query($conn, "SELECT * FROM `coin_details` WHERE coin_id='$update';");

$row=mysqli_fetch_array($sql);
?>




<div class="container-fluid mb-3">
	<div class="row justify-content-center">
		<div class="col-md-6">	
		
			<form method="post" action="includes/admin-update.inc.php" enctype="multipart/form-data" class="mt-3">

				<div class="form-group">
				  <fieldset>
				    <label class="control-label" for="readOnlyInput">Coin Name</label>
				    <input class="form-control" id="readOnlyInput" type="text" placeholder="<?=  $row['coin_name']; ?>" readonly="">
				    <input type="hidden" value="<?=  $row['coin_id']; ?>" name="coin_id">

				  </fieldset>
				</div>

				<div class="row">
				  	<div class="col-md-6">			  		
				  		<img style="height: 200px; width: 100%; display: block;" src="gallery/<?=  $row['heads']; ?>" alt="Card image">
				 	</div>
				 	<div class="col-md-6">			  		
				  		<img style="height: 200px; width: 100%; display: block;" src="gallery/<?=  $row['tails']; ?>" alt="Card image">
				 	</div>
			 	</div>	

				<div class="form-group">
				  <label class="col-form-label" for="inputDefault">Currency Type</label>
				  <input type="text" class="form-control" value="<?=  $row['currency_type']; ?>" name="currency_type" id="inputDefault">
				</div>

				<div class="form-group">
				  <label class="col-form-label" for="inputDefault">Coin Country</label>
				  <input type="text" class="form-control" value="<?=  $row['coin_country']; ?>" name="coin_country" id="inputDefault">
				</div>

				<div class="form-group">
				  <label class="col-form-label" for="inputDefault">Coin Date</label>
				  <input type="text" class="form-control" value="<?=  $row['coin_date']; ?>" name="coin_date" id="inputDefault">
				</div>

				<div class="form-group">
				  <label class="col-form-label" for="inputDefault">Coin Value</label>
				  <input type="text" class="form-control" value="<?=  $row['coin_value']; ?>" name="coin_value" id="inputDefault">
				</div>

				<div class="form-group">
                    <label for="exampleTextarea">Coin Description</label>
                    <textarea class="form-control" id="exampleTextarea" name="coin_description" placeholder="Coin Description" rows="4"><?=  $row['coin_description']; ?></textarea>
                </div>

				<div class="form-group m-3">
				  <div class="d-flex justify-content-center m-3">
				      <input class="btn btn-primary m-3" type="submit" name="update" value="UPDATE">
				  </div>
				</div>

				<a href="admin-coins.php" class="card-link btn btn-outline-secondary"><i class="fa fa-arrow-left"></i> BACK</a>


			</form>
		</div>
	</div>
</div>




<?php include 'includes/footer.inc.php'; ?>