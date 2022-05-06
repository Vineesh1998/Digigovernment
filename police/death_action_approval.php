<?php
	include '../db/connect.php';
	$id = $_GET['id'];
	$sql = "update death set pol_status = 1 where id = '$id'";
	$res = mysqli_query($conn,$sql);
	if($res){
		?>
		<script type="text/javascript">
			alert("Application verified");
			window.location.href="police_death.php";
		</script>
		<?php
	}
?>