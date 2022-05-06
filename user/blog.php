<?php 
    include '../db/connect.php';
    if (!isset($_SESSION['id'])){
        header("location:../login.php");
    }
    else{
    $id = $_SESSION['id'];
    $sql = "select * from user where civil_id = '$id'";
    $res = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($res);
    $name = $row['name'];
    $gender = $row['gender'];
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>User profile</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:300;400;600;700;800&display=swap" rel="stylesheet">

        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <div class="wrapper">
            <div class="sidebar">
                <div class="sidebar-text d-flex flex-column h-100 justify-content-center text-center">
                    <?php 
                        if (strcmp($gender,"Female")){
                            ?>
                            <img class="mx-auto d-block w-75 bg-primary img-fluid rounded-circle mb-4 p-3" src="img/user.jpg" alt="Image">
                            <?php
                        }
                        else{
                            ?>
                            <img class="mx-auto d-block w-75 bg-primary img-fluid rounded-circle mb-4 p-3" src="img/profile.jpg" alt="Image">
                            <?php
                        }
                    ?>
                    <h1 class="font-weight-bold"><?php echo $name ?></h1>
                  
              
                    <a href="../logout.php" class="btn btn-lg btn-block btn-primary mt-auto">Logout</a>
                </div>
                <div class="sidebar-icon d-flex flex-column h-100 justify-content-center text-right">
                    <i class="fas fa-2x fa-angle-double-right text-primary"></i>
                </div>
            </div>
            <div class="content">
                <!-- Navbar Start -->
                <div class="container p-0">
                    <nav class="navbar navbar-expand-lg bg-secondary navbar-dark">
                        <a href="" class="navbar-brand d-block d-lg-none">Navigation</a>
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav m-auto">
                                <a href="index.php" class="nav-item nav-link active">Home</a>
                                <a href="#" class="nav-item nav-link">About</a>
                                <div class="nav-item dropdown">
                                    <a href="blog.php" class="nav-link dropdown-toggle" data-toggle="dropdown">Download certificate</a>
                                    <div class="dropdown-menu">
                                        <a href="blog.php" class="dropdown-item">Death Certificate</a>
                                    
                                    </div>
                                </div>
                                <a href="#" class="nav-item nav-link">Contact</a>
                            </div>
                        </div>
                    </nav>
                </div>
                <!-- Navbar End -->
                
               
               
                <!-- Carousel End -->
                <div class="form">
                    <form class="header-form" method="post">
                        <br>
                        <br>
                        <br>
                        <center><div class="head"><h2>Issued Death Certificate</h2></div></center>
                        <br>
                        <br>
                        <div class="body">
                            <?php 
                                $sql1 = "select * from death where relative_id = '$id' and status=1";

                                 $res1 = mysqli_query($conn,$sql1);
                                 if (mysqli_num_rows($res1))
                                 {
                                    ?>
                                        <table align="center">
                                    <?php
                                    while($r = mysqli_fetch_assoc($res1))
                                    {
                                        $dead = $r['dead_id'];
                                        $sql_new = "select * from user where civil_id='$dead'";
                                        $query_new = mysqli_query($conn,$sql_new);
                                        $row_new = mysqli_fetch_array($query_new);
                                        $id_up = $r['id'];
                                        ?>
                                        <div style="padding: 10px; border:1px solid grey; box-shadow: 1px 1px 8px; color:black;">
                                            Certificate of <?php echo $row_new['name'] ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <a href="../pdf.php?id=<?php echo $id_up ?>"><button type = "button" class="btn btn-lg btn-primary mt-auto">Download Now</button></a>
                                        </div>
                                        <?php
                                        
                                    }
                                    ?>
                                        </table>
                                    <?php
                                 

                            ?>
                        <br>
                    </form>
                    <?php
                        }
                        else{
                                    echo "No Certificates Available"; 
                                 }
                        if(isset($_POST['submitbtn']))
                        {
                            $sql2 = "update death set rel_status = 1 where id='$id_up'";
                            if(mysqli_query($conn,$sql2))
                                echo "<script>alert('Updated')</script>";
                        }
                    }
                    ?> 
                </div>
            </div>  
        </div>
              
        
                
                
   
                
     
            </div>
        </div>
        
        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-angle-double-up"></i></a>
        
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>

        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>