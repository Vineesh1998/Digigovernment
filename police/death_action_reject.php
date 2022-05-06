<?php
	include '../db/connect.php';
	$id = $_GET['id'];
	$sql = "update death set pol_status = 2 where id = '$id'";
	$res = mysqli_query($conn,$sql);
	if($res){
		?>
		<script type="text/javascript">
			alert("Application Halted");
			window.location.href="police_death.php";
		</script>
		<?php
	}
?>