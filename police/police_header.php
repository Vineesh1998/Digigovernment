<?php 
  include '../db/connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>POLICE</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Your page description here" />
  <meta name="author" content="" />

  <!-- css -->
  <link href="https://fonts.googleapis.com/css?family=Handlee|Open+Sans:300,400,600,700,800" rel="stylesheet">
  <link href="css/bootstrap.css" rel="stylesheet" />
  <link href="css/bootstrap-responsive.css" rel="stylesheet" />
  <link href="css/flexslider.css" rel="stylesheet" />
  <link href="css/prettyPhoto.css" rel="stylesheet" />
  <link href="css/camera.css" rel="stylesheet" />
  <link href="css/jquery.bxslider.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />

  <!-- Theme skin -->
  <link href="color/default.css" rel="stylesheet" />

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png" />
  <link rel="shortcut icon" href="ico/favicon.png" />

  <!-- =======================================================
    Theme Name: Eterna
    Theme URL: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>

  <div id="wrapper">

    <!-- start header -->
    <header>
      <div class="top">
        <div class="container">
          <div class="row">
            <div class="span6">
              <p class="topcontact"></p>
            </div>
            <div class="span6">

              <ul class="social-network">
                <li><a href="../logout.php" style="color: white">Logout</a></li>
              </ul>

            </div>
          </div>
        </div>
      </div>
      <div class="container">


        <div class="row nomargin">
          <div class="span4">
            <div class="logo">
              <a href="police_index.php"><img src="emplam.jpg" alt=""></a>
            </div>
          </div>
          <div class="span8">
            <div class="navbar navbar-static-top">
              <div class="navigation">
                <nav>
                  <ul class="nav topnav">
                    <li class="dropdown">
                      <a href="index.html"><i class="icon-home"></i> Home <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="index-alt2.html">Homepage 2</a></li>
                        <li><a href="index-alt3.html">Homepage 3</a></li>
                        <li><a href="index-alt4.html">Parallax slider</a></li>
                        <li><a href="index-landingpage.html">Landing page</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#">Services <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="typography.html">Public Functions</a></li>
                        <li><a href="components.html">Complaints</a></li>
                        <li><a href="police_death.php">Death Reports</a></li>
                        <li><a href="icon-variations.html">Finance</a></li>
                        <li class="dropdown"><a href="#">Cases<i class="icon-angle-right"></i></a>
                          <ul class="dropdown-menu sub-menu-level1">
                            <li><a href="index.html">Active Cases</a></li>
                            <li><a href="index.html">Closed Cases</a></li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#">Cases <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="about.html">About us</a></li>
                        <li><a href="faq.html">FAQ</a></li>
                        <li><a href="team.html">Team</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="pricingbox.html">Pricing boxes</a></li>
                        <li><a href="404.html">404</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#">Portfolio <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="portfolio-2cols.html">Portfolio 2 columns</a></li>
                        <li><a href="portfolio-3cols.html">Portfolio 3 columns</a></li>
                        <li><a href="portfolio-4cols.html">Portfolio 4 columns</a></li>
                        <li><a href="portfolio-detail.html">Portfolio detail</a></li>
                      </ul>
                    </li>
                  </ul>
                </nav>
              </div>
              <!-- end navigation -->
            </div>
          </div>
        </div>
      </div>
    </header>


    <section id="content">
      <div class="container">
        <div class="row">

          <div class="span4">

            <aside class="left-sidebar">

              <div class="widget">
                <form>
                  <div class="input-append">
                    <input class="span2" id="appendedInputButton" type="text" placeholder="Type here">
                    <button class="btn btn-theme" type="submit">Search</button>
                  </div>
                </form>
              </div>

              <div class="widget">

                <h5 class="widgetheading">Services</h5>

                <ul class="cat">
                  <li><i class="icon-angle-right"></i> <a href="#">Public Functions</a><span> (20) </span></li>
                  <li><i class="icon-angle-right"></i> <a href="#">Active Cases</a><span> (11)</span></li>
                  <li><i class="icon-angle-right"></i> <a href="police_death.php">Death Reports</a><span></span></li>
                  <li><i class="icon-angle-right"></i> <a href="#">Complaints</a><span> (12)</span></li>
                  <li><i class="icon-angle-right"></i> <a href="#">About finance</a><span> (18)</span></li>
                </ul>
              </div>

              <div class="widget">
                <div class="tabs">
                  <ul class="nav nav-tabs">
                    <li class="active"><a href="#one" data-toggle="tab"><i class="icon-star"></i> Popular</a></li>
                    <li><a href="#two" data-toggle="tab">Recent</a></li>
                  </ul>
                  <div class="tab-content">
                    <div class="tab-pane active" id="one">
                      <ul class="popular">
                        <li>
                          <img src="img/dummies/blog/small/1.jpg" alt="" class="thumbnail pull-left" />
                          <p><a href="#">Dorlorem ipsum et mea dolor sit amet</a></p>
                          <span>20 June, 2013</span>
                        </li>
                        <li>
                          <img src="img/dummies/blog/small/2.jpg" alt="" class="thumbnail pull-left" />
                          <p><a href="#">Fierent adipisci iracundia est ei, usu timeam persius ea</a></p>
                          <span>20 June, 2013</span>
                        </li>
                        <li>
                          <img src="img/dummies/blog/small/3.jpg" alt="" class="thumbnail pull-left" />
                          <p><a href="#">Usu ea justo malis, pri quando everti electram ei</a></p>
                          <span>20 June, 2013</span>
                        </li>
                      </ul>
                    </div>
                    <div class="tab-pane" id="two">
                      <ul class="recent">
                        <li>
                          <p><a href="#">Dorlorem ipsum et mea dolor sit amet</a></p>
                        </li>
                        <li>
                          <p><a href="#">Fierent adipisci iracundia est ei, usu timeam persius ea</a></p>
                        </li>
                        <li>
                          <p><a href="#">Usu ea justo malis, pri quando everti electram ei</a></p>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>

            </aside>
          </div>