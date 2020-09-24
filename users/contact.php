<?php 
include 'includes/header.inc.php';
include 'includes/user-nav.inc.php'; 
?>

<div class="container-fluid mb-3">
	<div class="row justify-content-center">
		<div class="col-md-4">

			<form method="post" action="includes/contact.inc.php" enctype="multipart/form-data" class="mt-3">

				<div class="form-group">
				  <label class="col-form-label" for="inputDefault">Your Name</label>
				  <input type="text" class="form-control" placeholder="Your Name" name="name" id="inputDefault" required>
				</div>

				<div class="form-group">
				  <label class="col-form-label" for="inputDefault">Your E-mail</label>
				  <input type="email" class="form-control" placeholder="Your E-mail" name="email" id="inputDefault" required="">
				</div>

				<div class="form-group">
                    <label for="exampleTextarea">Message</label>
                    <textarea class="form-control" id="exampleTextarea" name="message" placeholder="Enter Your Message Here" rows="4" required></textarea>
                </div>		

                <div class="form-group m-3">
				  <div class="d-flex justify-content-center m-3">
				    <button name="submit" class="btn btn-outline-primary m-3">
				      SEND MESSAGE
				    </button>
				  </div>
				</div>

			</form>

		</div>
	</div>
</div>

<?php include 'includes/footer.inc.php'; ?>