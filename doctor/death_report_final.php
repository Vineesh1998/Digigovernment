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
    $civil_id = $_GET['id'];
    $sql = "select * from user where civil_id = '$civil_id' and status = 1";
    $res = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($res);
    $name = $row['name'];
    $age = $row['age'];
    $pan = $row['pan_id'];
    $sql2 = "select * from police where pan_id = '$pan'";
    $query2 = mysqli_query($conn,$sql2);
    $row2 = mysqli_fetch_array($query2);
    $police = $row2['station_place'];
    $p_id = $row2['police_id'];
    if(isset($_POST['submit'])){
      $cause = $_POST['cause'];
      $date = $_POST['date'];
      $relative_id = $_POST['r_id'];
      $time = $_POST['time'];
      $doc_id = "KLM1997kpzha555";
      $sql1 = "insert into death values('','$civil_id','$cause','$date','$time','$doc_id','$p_id','$pan','$relative_id',1,0,0,0)";
      $query = mysqli_query($conn,$sql1);
      $sql3 = "update user set status = 2 where civil_id = '$civil_id'";
      $sql_last = "delete from login where civil_id = '$civil_id'";
      $query_last = mysqli_query($conn,$sql_last);
      $update = mysqli_query($conn,$sql3);
      if($query){
        ?>
        <script type="text/javascript">
          alert("Death Reported Successfully");
          window.location.href="index.php";
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
                <li class=""><a href="report_death.php">Services</a></li>
                <li class=""><a href="#">About</a></li>
                <li class=""><a href="#">Testimonial</a></li>
                <li class=""><a href="../logout">Logout</a></li>
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
              <div class="death_text"> 
                <div class="span_death_left2">
                  <table>
                    <tr>
                      <td style="border: none;padding-top: 40px;">Civil Id : </td><td style="border: none;padding-top: 40px;"><input type="text" name="civil_id" value="<?php echo $civil_id ?>" disabled></td>
                    </tr>
                    <tr>
                      <td style="border: none;padding-top: 40px;">Age : </td><td style="border: none;padding-top: 40px;"><input type="text" name="age" value="<?php echo $age ?>" disabled></td>
                    </tr>
                    <tr>
                      <td style="border: none;padding-top: 40px;">Cause of Death : </td><td style="border: none;padding-top: 40px;"><input type="text" name="cause" required></td>
                    </tr>
                    <tr>
                        <td style="border: none;padding-top: 40px;">Relative Civil Id : </td><td style="border: none;padding-top: 40px;"><input type="text" name="r_id" required></td>
                      </tr>
                  </table>
                </div>
                <div class="span_death_left2">
                  <table>
                      <tr>
                        <td style="border: none;padding-top: 40px;">Name : </td><td style="border: none;padding-top: 40px;"><input type="text" name="name" value="<?php echo $name ?>" disabled></td>
                      </tr>
                      <tr>
                        <td style="border: none;padding-top: 40px;">Police Station : </td><td style="border: none;padding-top: 40px;"><input type="text" name="pan" value="<?php echo $police ?>" disabled></td>
                      </tr>
                      <tr>
                        <td style="border: none;padding-top: 40px;">Date : </td><td style="border: none;padding-top: 40px;"><input type="date" name="date" required></td>
                      </tr>
                      <tr>
                        <td style="border: none;padding-top: 40px;">Time : </td><td style="border: none;padding-top: 40px;"><input type="time" name="time" required></td>
                      </tr>
                    </table>
                  </div>
                </div>
              <center>
              <button id="death_search" type="submit" name="submit" class="btn btn-appoint death_btn_margin_2" >SUBMIT</button>
              </center>
            </div>
            <div class="death_hide">
            	<div class="container">
            		<div class="row">
            			<div class="col-sm-4 death_bgm" >
   							<div class="card shadow p-3 mb-5 rounded">
   								<div class="row">
   									<div class="span_death_left">
   										<img src="img/doctor3.jpg" width="100%" height="130px">
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
   						<a href="death_report_final.php?id="><div class="col-sm-2 death_bgm_btn">
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