<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Coinage</title>
	<link rel="stylesheet" type="text/css" href="css/sandstone.bootstrap.theme.css">
	<link rel="stylesheet" type="text/css" href="css/fontawesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/all.min.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">

    <script src="js/jquery.js"></script>

</head>
<body>

 <div class="module-small bg-primary">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12 col-sm-12">
		
			<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
			  <p class="navbar-brand ">Coinage</p>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>

			  <div class="collapse navbar-collapse" id="navbarColor01">
			    <ul class="navbar-nav mr-auto">
			      <li class="nav-item active">
			        <a class="nav-link" href="index.php">Home</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="coins.php">Coins</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="contact.php">Contact Us</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="about.php">About</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="login.php">Log In</a>
			      </li>
			    </ul>
			    <form class="form-inline my-2 my-lg-0">
			      <input class="form-control mr-sm-2" type="text" placeholder="Search">
			      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
			    </form>
			  </div>
			</nav>
		</div>
        </div>
        </div>
        </div>

<div class="container-fluid mb-3">
	<div class="row justify-content-center">
		<div class="col-md-4">

			<form method="post" action="contact.inc.php" enctype="multipart/form-data" class="mt-3">

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

<hr class="divider-d">
        <footer class="page-footer bg-primary font-small unique-color-primary">
            <div class="container-fluid mt-3">
                <div style="width: 100%; background-color: #3E3F3A; margin-left: 0px;" class="row justify-content-center">
                    <div style="color: white;" class="footer-copyright text-center py-3">&copy; 2019, Copyright: Soumodeep Ganguly
                </div>
                </div>
            </div>
        </footer>

<script src="js/popper.min.js"></script>
<script src="js/particles.js"></script>
<script src="js/app.js"></script>
<script src="js/all.min.js"></script>
<script src="js/fontawesome.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
	$(function(){
		$('.nav-item a').filter(function(){return this.href==location.href}).parent().addClass('active').siblings().removeClass('active')
		$('.nav-item a').click(function(){
			$(this).parent().addClass('active').siblings().removeClass('active')	
		})
	})
</script>

</body>
</html>