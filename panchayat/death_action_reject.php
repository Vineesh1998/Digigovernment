<?php
	include '../db/connect.php';
	$id = $_GET['id'];
	$sql = "update death set status = 2 where id = '$id'";
	$res = mysqli_query($conn,$sql);
	if($res){
		?>
		<script type="text/javascript">
			alert("Application Halted");
			window.location.href="death.php";
		</script>
		<?php
	}
?>