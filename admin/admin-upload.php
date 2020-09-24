<?php 
include 'includes/header.inc.php';
include 'includes/admin-nav.inc.php'; 
?>
<div class="container-fluid mb-3">
	<div class="row justify-content-center">
		<div class="col-md-4">
		
			<form method="post" action="includes/admin-upload.inc.php?upload=somethig" enctype="multipart/form-data" class="mt-3">


				<div class="form-group">
				  <label class="col-form-label" for="inputDefault">Coin Name</label>
				  <input type="text" class="form-control" placeholder="Coin Name" name="coin_name" id="inputDefault">
				</div>

				<div class="form-group">
				  <label class="col-form-label" for="inputDefault">Currency Type</label>
				  <input type="text" class="form-control" placeholder="Currency Type" name="currency_type" id="inputDefault">
				</div>

                <div class="form-group">
				  <label class="col-form-label" for="inputDefault">Coin Country</label>
				  <input type="text" class="form-control" placeholder="Coin Country" name="coin_country" id="inputDefault">
				</div>

				<div class="form-group">
				  <label class="col-form-label" for="inputDefault">Coin Date</label>
				  <input type="text" class="form-control" placeholder="Coin Date" name="coin_date" id="inputDefault">
				</div>

				<div class="form-group">
				  <label class="col-form-label" for="inputDefault">Coin Value</label>
				  <input type="text" class="form-control" placeholder="Coin Value" name="coin_value" id="inputDefault">
				</div>

                <div class="form-group">
                    <label for="exampleTextarea">Coin Description</label>
                    <textarea class="form-control" id="exampleTextarea" name="coin_description" placeholder="Coin Description" rows="4"></textarea>
                </div>

				<div class="form-group">
				    <div class="input-group mb-3">
				      <div class="custom-file">
				        <input type="file" class="custom-file-input" id="inputGroupFile02" name="heads">
				        <label class="custom-file-label" for="inputGroupFile02">Choose Heads File</label>
				      </div>
				    </div>
				</div>

				<div class="form-group">
				    <div class="input-group mb-3">
				      <div class="custom-file">
				        <input type="file" class="custom-file-input" id="inputGroupFile02" name="tails">
				        <label class="custom-file-label" for="inputGroupFile02">Choose Tails File</label>
				      </div>
				    </div>
				</div>

				<div class="form-group m-3">
				  <div class="d-flex justify-content-center m-3">
				    <button name="upload" class="btn btn-outline-primary m-3">
				      UPLOAD
				    </button>
				  </div>
				</div>


			</form>
		</div>
	</div>
</div>

<?php include 'includes/footer.inc.php'; ?>