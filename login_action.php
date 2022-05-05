<?php
	include "db/connect.php";
	$username = $_POST['username'];
	$pass = $_POST['pass'];
	$sql = "select type,civil_id from login where username = '$username' and password = '$pass'";
	$query = mysqli_query($conn,$sql);

	if(mysqli_num_rows($query)>0){
		$row = mysqli_fetch_array($query);
		$type = $row['type'];
		$id = $row['civil_id'];
		$_SESSION['id'] = $id;
		if ($type==1){
			header("location:doctor/index.php");
		}
		elseif($type==2){
			header("location:user/index.php");
		}
		elseif ($type==3) {
			header("location:police/police_index.php");
		}
		elseif($type==4){
			header("location:panchayat/index.php");
		}
	}
	else{
		?>
		<script type="text/javascript">
			alert("Invalid Username and Password");
			window.location.href="login.php";
		</script>
		<?php
	}
?>