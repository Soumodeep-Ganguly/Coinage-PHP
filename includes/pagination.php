<?php

include 'connection.php';

$q1 = mysqli_query($conn, "SELECT * FROM coin_details;");
$count = mysqli_num_rows($q1);

$rowsperpage = 10;

$page = $_REQUEST['p'];


if ($page == 0 OR $page == '') {
	$page = 1;
}


$page = $page - 1;

$p = $page * $rowsperpage;

$query = "SELECT * FROM coin_details ORDER BY coin_id DESC LIMIT ".$p.",".$rowsperpage.";";
$run = mysqli_query($conn, $query);

while ($row = mysqli_fetch_array($run)) {
	echo '

			<div class="col-md-4" >
			<div class="card mb-3">
			  <h3 class="card-header"><b>Title:</b>'.$row['coin_name'].'</h3>
			    <div class="row">
			  	<div class="col-md-6">			  		
			  		<img style="height: 200px; width: 100%; display: block;" src="admin/gallery/'.$row['heads'].'" alt="Card image">
			 	</div>
			 	<div class="col-md-6">			  		
			  		<img style="height: 200px; width: 100%; display: block;" src="admin/gallery/'.$row['tails'].'" alt="Card image">
			 	</div>
			  </div>			  
			  <div class="card-body">
			  	<a href="view.php?view='.$row['coin_id'].'" class="card-link btn btn-outline-info">View</a>    
			  </div>
			</div>
		</div>

	';
}
$req = $_REQUEST['p'];
$prev_page = $_REQUEST['p']-1;
$next_page = $_REQUEST['p']+1;
$check = $p + $rowsperpage;

echo "<div class='container'><div class='row justify-content-center'><nav aria-label='...'>
  <ul class='pagination'>
  ".($req > 1 ? "<li class='page-item'><span style='cursor:pointer;' class='page-link' onclick='LoadData(".$prev_page.")'>Previous</span></li>" : "<li class='page-item disabled'><span style='cursor:pointer;' class='page-link'>Previous</span></li>");


$limit = $count / $rowsperpage;
$limit = ceil($limit);
for ($i=1; $i <= $limit; $i++) {
	if ($i==$_REQUEST['p']) {
		echo "<li class='page-item active'><span class='page-link'>".$i."</span></li>";
	}else{
		echo "<li class='page-item'><span style='cursor:pointer;' class='page-link' onclick='LoadData(".$i.")'>".$i."</span> </li>";
	}
}


echo ($count > $check ? "<li class='page-item'><span style='cursor:pointer;' class='page-link' onclick='LoadData(".$next_page.")'> Next</span></li>" : "<li class='page-item disabled'><span style='cursor:pointer;' class='page-link'> Next</span></li>")."</ul></nav></div></div>";





?>