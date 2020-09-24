<?php 
include 'includes/header.inc.php';
include 'includes/nav.inc.php'; 
?>
<div class="container-fluid mb-3">
	<div class="row justify-content-center">
		<div class="col-md-4">
		
			<form method="post" action="includes/registration.inc.php" enctype="multipart/form-data" class="mt-3">


				<div class="form-group">
				  <label class="col-form-label" for="inputDefault">Full Name</label>
				  <input type="text" class="form-control" placeholder="Full Name" name="full_name" id="inputDefault">
				</div>

				<div class="form-group">
				  <label class="col-form-label" for="inputDefault">E-mail</label>
				  <input type="email" class="form-control" placeholder="example@website.com" name="email" id="inputDefault">
				</div>

				<div class="form-group mt-3">
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    	<label class="btn btn-outline-secondary disabled active">
                           <input type="radio" name="gender" id="male" value="male" autocomplete="off" disabled=""> Gender
                        </label>
                        <label class="btn btn-outline-secondary">
                           <input type="radio" name="gender" id="male" value="male" autocomplete="off"> Male
                        </label>
                        <label class="btn btn-outline-secondary">
                           <input type="radio" name="gender" id="female" value="female" autocomplete="off"> Female
                        </label>
                    </div>
                </div>

				<div class="form-group">
				  <label class="col-form-label" for="inputDefault">Date of Birth</label>
				  <input type="date" class="form-control" placeholder="DD/MM/YYYY" name="dob" id="inputDefault">
				</div>

				<div class="form-group">
				  <label class="col-form-label" for="inputDefault">Contact Number</label>
				  <input type="text" class="form-control" placeholder="Contact NUmber" name="contact" id="inputDefault">
				</div>

				<div class="form-group">
				  <label class="col-form-label" for="inputDefault">City</label>
				  <input type="text" class="form-control" placeholder="City" name="city" id="inputDefault">
				</div>

				<div class="form-group">
				  <label class="col-form-label" for="inputDefault">Pincode</label>
				  <input type="text" class="form-control" placeholder="Pincode" name="pincode" id="inputDefault">
				</div>

				<div class="form-group">
				  <label class="col-form-label" for="inputDefault">Password</label>
				  <input type="password" class="form-control" placeholder="Password" name="password" id="inputDefault">
				</div>

				<div class="form-group">
				  <label class="col-form-label" for="inputDefault">Country</label>
				  <input type="text" class="form-control" placeholder="Country" name="country" id="inputDefault">
				</div>

				<div class="form-group">
                    <label for="exampleTextarea">Reason</label>
                    <textarea class="form-control" id="exampleTextarea" name="reason" placeholder="Why Do You Want To Join Us?" rows="4"></textarea>
                </div>

				<div class="form-group m-3">
				  <div class="d-flex justify-content-center m-3">
				    <button name="register" class="btn btn-outline-primary m-3">
				      REGISTER
				    </button>
				  </div>
				</div>


			</form>
		</div>
	</div>
</div>

 <?php 
include 'includes/footer.nav.inc.php';
include 'includes/footer.inc.php';
 ?>