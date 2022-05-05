<?php 
	include '../db/connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Medilab Free Bootstrap HTML5 Template</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script src="js/jquery-3.6.0.js"></script>
  <!-- =======================================================
    Theme Name: Medilab
    Theme URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
  <!--banner-->
<?php 
	if(isset($_POST['submit'])){
		$civil_id = $_POST['civil_id'];
		$sql = "select * from user where civil_id = '$civil_id' and status = 1";
		$res = mysqli_query($conn,$sql);
		if (mysqli_num_rows($res)>0){
			$row = mysqli_fetch_array($res);
			$name = $row['name'];
      $gender = $row['gender'];

?>
  <script type="text/javascript">
  	$(document).ready(function(){
		$(".death_hide").toggle();
  	});
  </script>
 <?php
}
else{
	?>
  <script type="text/javascript">
  	$(document).ready(function(){
		$(".death_hide2").toggle();
  	});
  </script>
 <?php
}
}
?>
  <section>
    <div class="bg-color">
      <nav class="navbar navbar-default navbar-fixed-top top-nav-collapse">
        <div class="container">
          <div class="col-md-12">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#"><img src="img/logo.png" class="img-responsive" style="width: 140px; margin-top: -16px;"></a>
            </div>
            <div class="collapse navbar-collapse navbar-right" id="myNavbar">
              <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Home</a></li>
                <li class=""><a href="index.php#service">Services</a></li>
                <li class=""><a href="#">About</a></li>
                <li class=""><a href="#">Testimonial</a></li>
                <li class=""><a href="../logout.php">Logout</a></li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
      <form method="post" action="">
      <div class="container">
        <div class="row">
          <div class="death_me">
            <div class="banner-text">
              <h2 class=""><u>Report a death</u></h2>
              <div class="death_text">Enter Civil Id of the Deceased : <input type="text" name="civil_id"></div>
              <button id="death_search" type="submit" name="submit" class="btn btn-appoint death_btn_margin">Search / Find</button>
            </div>
            <div class="death_hide">
            	<div class="container">
            		<div class="row">
            			<div class="col-sm-4 death_bgm" >
   							<div class="card shadow p-3 mb-5 rounded">
   								<div class="row">
   									<div class="span_death_left">
                      <?php
                      if(strcmp($gender, "Female")){
                      ?>
   										<img src="img/user.jpg" width="100%" height="130px">
                      <?php
                      }
                      else{
                        ?>
                        <img src="img/profile.jpg" width="100%" height="130px">
                        <?php
                      }
                      ?>
   									</div>
   									<div class="span_death_left">
   										<div class="death_text_2">
   											Name : <?php echo $name ?> <br><br>
   											Civil Id : <?php echo $civil_id ?> <br><br>
   											<a href="">view profile</a>
   										</div> 
   									</div>
   								</div>
   							</div>
   						</div>
   						<a href="death_report_final.php?id=<?php echo $civil_id ?>"><div class="col-sm-2 death_bgm_btn">
   							 Continue
   						</div></a>
            		</div>
            	</div>
        	</div>
        	<div class="death_hide2" style="display: none;">
            	<div class="container">
            		<div class="row">
            			No Data Found
            		</div>
            	</div>
        	</div>
          </div>
        </div>
      </div>
  	</form>
    </div>
  </section>
<?php include 'doc_footer.php'; ?>