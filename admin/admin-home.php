<?php 
include 'includes/header.inc.php';
include 'includes/admin-nav.inc.php'; 

if ( isset($_GET['login']) && $_GET['login'] == 'success' )
{
     // treat the succes case ex:
     echo "<div class='container-fluid'><div class='row justify-content-center'><div class='col-md-6'><div class='alert alert-dismissible alert-success'>
  <button type='button' class='close' data-dismiss='alert'>&times;</button>
  <strong>Welcome ". $_SESSION['name'] ." !</strong> You have successfully logged in.
</div></div></div></div>";
}

?>

<div class="jumbotron">
  <h3 class="display-4">Hello, Admin to SandStone!</h3>
  <p class="lead">This is Online Campus Recruitement System. It helps students to search for companies to get placements. It also helps the companies to get their preferable candidate for their valueable posts.</p>
  <hr class="my-4">
  <p>Using Bootstrap we are designing Campus Recruitement System</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
      
  </p>
</div>


<?php include 'includes/footer.inc.php'; ?>