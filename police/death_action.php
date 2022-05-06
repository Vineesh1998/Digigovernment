<?php
	include '../db/connect.php';
	if(isset($_POST['success'])){
		$id = $_POST['id'];
		echo $id;
	}
?>