<?php
	include '../db/connect.php';
	$id = $_GET['id'];
	$sql = "update death set status = 1 where id = '$id'";
	$res = mysqli_query($conn,$sql);
	if($res){
		?>
		<script type="text/javascript">
			alert("Application verified");
			window.location.href="death.php";
		</script>
		<?php
	}
?>