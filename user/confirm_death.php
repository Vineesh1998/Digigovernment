<?php
	include '../db/connect.php';
	$id = $_GET['id'];
	$sql = "update death set rel_status = 1 where id = '$id'";
	$query = mysqli_query($conn,$sql);
	if($query){
		?>
		<script type="text/javascript">
			alert("Thanks for confirming the details\n Death Certificate will generate soon");
			window.location.href="index.php";
		</script>
		<?php
	}
?>