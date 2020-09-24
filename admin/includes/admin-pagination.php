<?php

include 'connection.php';

$q1 = mysqli_query($conn, "SELECT * FROM coin_details;");
$count = mysqli_num_rows($q1);

$rowsperpage = 3;

$page = $_REQUEST['i'];


if ($page == 0 OR $page == '') {
	$page = 1;
}


$page = $page - 1;

$i = $page * $rowsperpage;

$query = "SELECT * FROM coin_details ORDER BY `coin_id` DESC LIMIT ".$i.",".$rowsperpage.";";
$run = mysqli_query($conn, $query);

while ($row = mysqli_fetch_array($run)) {
	echo '

			<div class="col-md-4" >
			<div class="card mb-3">
			  <h3 class="card-header"><b>Title:</b>'.$row['coin_name'].'</h3>
			    <div class="row">
			  	<div class="col-md-6">			  		
			  		<img style="height: 200px; width: 100%; display: block;" src="gallery/'.$row['heads'].'" alt="Card image">
			 	</div>
			 	<div class="col-md-6">			  		
			  		<img style="height: 200px; width: 100%; display: block;" src="gallery/'.$row['tails'].'" alt="Card image">
			 	</div>
			  </div>			  
			  <div class="card-body">
			  	<a href="admin-view.php?view='.$row['coin_id'].'" class="card-link btn btn-outline-info">View</a>
			  	<a href="admin-update.php?update='.$row['coin_id'].'" class="card-link btn btn-outline-primary">Update</a>
			    <a href="includes/delete.php?delete='.$row['coin_id'].'" class="card-link btn btn-outline-danger">Delete</a>	    
			  </div>
			</div>
		</div>

	';
}
$req = $_REQUEST['i'];
$prev_page = $_REQUEST['i']-1;
$next_page = $_REQUEST['i']+1;
$check = $i + $rowsperpage;

echo "<div class='container'><div class='row justify-content-center'><nav aria-label='...'>
  <ul class='pagination'>
  ".($req > 1 ? "<li class='page-item'><span style='cursor:pointer;' class='page-link' onclick='LoadData(".$prev_page.")'>Previous</span></li>" : "<li class='page-item disabled'><span style='cursor:pointer;' class='page-link'>Previous</span></li>");


$limit = $count / $rowsperpage;
$limit = ceil($limit);
for ($p=1; $p <= $limit; $p++) {
	if ($p==$_REQUEST['i']) {
		echo "<li class='page-item active'><span class='page-link'>".$p."</span></li>";
	}else{
		echo "<li class='page-item'><span style='cursor:pointer;' class='page-link' onclick='LoadData(".$p.")'>".$p."</span> </li>";
	}
}


echo ($count > $check ? "<li class='page-item'><span style='cursor:pointer;' class='page-link' onclick='LoadData(".$next_page.")'> Next</span></li>" : "<li class='page-item disabled'><span style='cursor:pointer;' class='page-link'> Next</span></li>")."</ul></nav></div></div>";





?>