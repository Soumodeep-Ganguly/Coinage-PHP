<?php 
include 'includes/header.inc.php';

if ( isset($_GET['fields']) && $_GET['fields'] == 'empty' )
{
     // treat the succes case ex:
     echo "<div class='container-fluid'><div class='row justify-content-center'><div class='col-md-6'><div class='alert alert-dismissible alert-info'>
  <button type='button' class='close' data-dismiss='alert'>&times;</button>
  <strong>Sorry!</strong> You cannot keep the fields empty.
</div></div></div></div>";
}
else if ( isset($_GET['input']) && $_GET['input'] == 'invalid' )
{
     // treat the succes case ex:
     echo "<div class='container-fluid'><div class='row justify-content-center'><div class='col-md-6'><div class='alert alert-dismissible alert-warning'>
  <button type='button' class='close' data-dismiss='alert'>&times;</button>
  <strong>Sorry!</strong> You are not an admin.
</div></div></div></div>";
}
else if ( isset($_GET['entry']) && $_GET['entry'] == 'not_found' )
{
     // treat the succes case ex:
     echo "<div class='container-fluid'><div class='row justify-content-center'><div class='col-md-6'><div class='alert alert-dismissible alert-warning'>
  <button type='button' class='close' data-dismiss='alert'>&times;</button>
  <strong>Sorry!</strong> No entry found.
</div></div></div></div>";
}

?>


<div class="container text-center mb-3" style="margin-bottom: 15% !important;">
  <div class="row justify-content-center align-items-center">

<div id="loginbox" class="mainbox col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 mt-5"> 
            
        <div class="panel panel-default" >
            <div class="panel-heading">
                <div class="panel-title text-center"><i class="fa fa-user-secret fa-4x"></i></div>
                <div class="panel-title text-center"><b>Admin Login</b></div>
            </div>     

            <div class="panel-body mt-3" >

                <form name="form" action="includes/login.inc.php" id="form" class="form-horizontal" enctype="multipart/form-data" method="POST">
                   
                    <div class="input-group">
                        <span class="input-group-addon mr-3 mt-3"><i class="fa fa-user-secret fa-2x"></i></span>
                        <input id="name" type="text" class="form-control mt-2 ml-1" name="name" value="" placeholder="Name">                                        
                    </div>

                    <div class="input-group">
                        <span class="input-group-addon mr-3 mt-3"><i class="fa fa-key fa-2x"></i></span>
                        <input id="password" type="password" class="form-control mt-2" name="password" placeholder="Password">
                    </div>      

                    <?php

                    if ( isset($_GET['input']) && $_GET['input'] == 'invalid' )
                    {
                         // treat the succes case ex:
                         echo "<div class='container-fluid'><div class='row justify-content-center'><div class='alert alert-dismissible alert-info'>
                      <button type='button' class='close' data-dismiss='alert'>&times;</button>
                      <strong> Please </strong>contact an admin to register you.
                    </div></div></div>";
                    }

                    ?>                                                            
                    <div class="container"><div class="row justify-content-center align-items-center">
                    <div class="form-group">
                        <!-- Button -->
                        
                        <div class="col-sm-12 controls mt-5">
                            <button type="submit" name="login" class="btn btn-danger"><i class="fa fa-unlock fa-2x"></i> Log in</button>                               
                        </div>

                    </div>
                    </div></div>
                </form>     

            </div>                     
        </div>  
    </div>
</div>
</div>


<?php include 'includes/footer.inc.php'; ?>