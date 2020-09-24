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
		      <th>Reason To Register</th>
		      <th>Status</th>
		    </tr>
		  </thead>
		  <tbody>
<?php
	$sql = "SELECT * FROM temp_registration;";
	$result = mysqli_query($conn, $sql);

	while ($row = mysqli_fetch_array($result)) {
?>
		  	<tr>
		      <td><?= $row['full_name'];?></td>
		      <td><?= $row['email'];?></td>
		      <td><?= $row['reason'];?></td>
		      <td>
		      	<a class="btn btn-success" href="includes/allow-request.php?allow=<?= $row['temp_id'];?>">Allow</a>
		      	<a class="btn btn-danger" href="#">Decline</a>
		      </td>

		      </form>
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