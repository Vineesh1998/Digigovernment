<?php
	$conn = mysqli_connect("localhost","root","","digi");
	if(!$conn){
		?>
		<script type="text/javascript">
			alert("Sorry Try again after some time");
		</script>
		<?php
	}
	session_start();
?>