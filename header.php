<?php
session_start();
include('connection.php');
?>
<!DOCTYPE html>
<html>


<head>

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- bootstrap & fontawesome -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

        

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>E-Ration</title>
   
    <link href="bundles/font-awesome/css2cd1.css?v=JCKL1Ed_4Pba0_6fQSBydGvY3IeScxYKQIV-nl4W0DE1" rel="stylesheet"/>

    <link href="bundles/bootstrap/csse029.css?v=2YT8KxgCRf9J297iLxtDjg5FSyytUmGU8_fksbq1Qfw1" rel="stylesheet"/>

    <link href="bundles/landing/css9699.css?v=Ry22nXZyhRNhwocfLOU3dN9o4TZ9AP8nVJJXW4sOGzc1" rel="stylesheet"/>

    <link href="drpdn.css" rel="stylesheet">

    <!-- <script src="js3c98?v=Z_aaT5YHcCQOK63A56STVopNa3ZeBTKOXiF0hWzy0o81"></script> -->
    <style>

#frmCheckUsername {border-top:#F0F0F0 2px solid;background:#FAF8F8;padding:10px;}
.demoInputBox{padding:7px; border:#F0F0F0 1px solid; border-radius:4px;}
.status-available{color:#2FC332;}
.status-not-available{color:#D60202;}
</style>


<!-- Start WOWSlider.com HEAD section -->
    <link rel="stylesheet" type="text/css" href="wow/engine1/style.css" media="screen" />
    <style type="text/css">a#vlb{display:none}</style>
    <script type="text/javascript" src="wow/engine1/jquery.js"></script>
    <!-- End WOWSlider.com HEAD section -->

    
</head>
<body class="bg-white">
    

<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="index.php" class="navbar-brand">
                <img alt="onlinebhangarbazar" src="images/logo/e-ration logo.png" height="100" width="250">
            </a>
            <!--<a href="index.php" class="brand-desc">-->
            <!--   Online <span class="text-success">Bhangar Bazar</span>-->
            <!--</a>-->
        </div>
        <?php
        if(!isset($_SESSION['aadhar']))
        {

        ?>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right" >
                <li><a href="Admin/index.php" class="bg-danger">Admin</a></li>
                <li><a href="Rationshop/index.php" class="bg-warning">Rationshop</a></li>
                <li><a href="index.php">Home</a></li>
                <li><a href="about_us.php">About</a></li>
                <li><a href="SignIn.php">Request</a></li>
                <!-- <li><a href="#myModal" data-toggle="modal" data-target="#myModal">Price List</a></li>
                <li><a href="SignIn.php">Request Pickup</a></li> -->
                <li><a href="Contact-us.php">Contact Us</a></li>
                <!-- <li><a href="User/index.php">Sign In</a></li> -->
                
                <li><a href="SignUp.php">Sign Up</a></li>
                <li><a href="SignIn.php">Sign In</a></li>
            </ul>
        </div>
        <?php
        }
        else
        {
            $u_photo=$_SESSION['u_photo'];
        ?>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right" >
                <li><a href="index.php">Home</a></li>
                <li><a href="about_us.php">About</a></li>
                <li><a href="SignIn.php">Request</a></li>               
                <li><a href="Contact-us.php">Contact Us</a></li>
                <li class="dropdown">

                    
                    <center><img src="images/User/<?php echo $u_photo; ?>" height="50" width="50"><br><?php echo $_SESSION['name']; ?><br><a class="page-scroll" href="#" style="color: #62cb31;"><b>LOGOUT<i class="caret"></i></b></a></center>
                        <div class="dropdown-content">
                            <a href="add_member.php">Add Member</a>
                            <a href="view_members.php">View Members</a>
                            <a href="ration_request.php">Ration Request</a>
                            <a href="view_ration_request.php">View Ration Request</a>
                            <a href="delivered_ration.php">View Delivered Ration</a>
                            <a href="change_password.php">Change Password</a>     
                            <a href="update_profile.php">Update Profile</a>                     
                            <a href="logout.php">Logout</a>
                        </div>
               </li>

            </ul>
        </div>
        <?php
         }
        ?>
    </div>
</nav>
<header>

	