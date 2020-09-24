<?php 
include 'includes/header.inc.php';
include 'includes/admin-nav.inc.php'; 
include 'includes/connection.php';
?>

<div class="container-fluid mb-3">
	<div class="row justify-content-center">
		<div class="col-md-12">
			
		
		
		<table class="table table-hover">
		  <thead>
		    <tr class="table-info">
		      <th>Name</th>
		      <th>E-Mail</th>
		      <th>Message</th>
		      <th>Status</th>
		    </tr>
		  </thead>
		  <tbody>
<?php
	$sql = "SELECT * FROM coin_details;";
	$result = mysqli_query($conn, $sql);

	while ($row = mysqli_fetch_array($result)) {
?>
		  	<tr>
		      <td><?= $row['coin_name'];?></td>
		      <td><?= $row['coin_date'];?></td>
		      <td><?= $row['coin_description'];?></td>
		      <td><a href="drop-contact.php?drop=<?= $row['coin_id'];?>" class="btn btn-danger">Drop</a></td>
		    </tr>

		    <?php
		}
		?>

		  </tbody>
		</table>

</div>
</div>
</div>

<?php include 'includes/footer.inc.php'; ?>