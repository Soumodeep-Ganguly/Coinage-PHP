<?php 
include 'includes/header.inc.php';
include 'includes/user-nav.inc.php'; 
?>



<div class="container-fluid">
	<div class="row" id="results">
		

		
		
	</div>
</div>     

<script type="text/javascript">

		$(document).ready(function(){
			LoadData(0);
		});

		function LoadData(pagenum){
			$.post('includes/user-pagination.php?i='+pagenum,function(reponse){
				$('#results').html(reponse);
			});
		}
	</script>

    

<?php include 'includes/footer.inc.php'; ?>