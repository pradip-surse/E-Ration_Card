<?php
session_start();
include "../connection.php";

if(!isset($_SESSION['aadhar']))
{
         echo "<script>";
         echo "window.location.href='index.php';";
         echo "</script>";
   
}

?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Rationshop</title>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')
    script(src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')
    -->
  </head>
  <body class="sidebar-mini fixed">
    <div class="wrapper">
      <!-- Navbar-->
      <header class="main-header hidden-print"><a class="logo" href="home.php">Rationshop</a>
        <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button--><a class="sidebar-toggle" href="#" data-toggle="offcanvas"></a>

          <!-- Navbar Right Menu-->
          <div class="navbar-custom-menu">
            <ul class="top-nav">
              <!--Notification Menu-->
              <!-- <li class="dropdown notification-menu"><a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell-o fa-lg"></i></a>
                <ul class="dropdown-menu">
                  <li class="not-head">You have 4 new notifications.</li>
                  <li><a class="media" href="javascript:;"><span class="media-left media-icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                      <div class="media-body"><span class="block">Lisa sent you a mail</span><span class="text-muted block">2min ago</span></div></a></li>
                  <li><a class="media" href="javascript:;"><span class="media-left media-icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                      <div class="media-body"><span class="block">Server Not Working</span><span class="text-muted block">2min ago</span></div></a></li>
                  <li><a class="media" href="javascript:;"><span class="media-left media-icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                      <div class="media-body"><span class="block">Transaction xyz complete</span><span class="text-muted block">2min ago</span></div></a></li>
                  <li class="not-footer"><a href="#">See all notifications.</a></li>
                </ul>
              </li> -->
              <!-- User Menu-->
              <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user fa-lg"></i></a>
                <ul class="dropdown-menu settings-menu">
                  <!-- <li><a href="page-user.html"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
                  <li><a href="page-user.html"><i class="fa fa-user fa-lg"></i> Profile</a></li> -->
                  <li><a href="logout.php" onclick="return confirm('Are you sure you want to logout from this account?');"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Side-Nav-->


      <aside class="main-sidebar hidden-print">
        <section class="sidebar">
          <div class="user-panel">
          <?php
      
$query = mysqli_query($con,"select * from rationshop where r_aadhar='".$_SESSION['aadhar']."' ");
if(mysqli_num_rows($query)>0)
{
  while($result=mysqli_fetch_assoc($query))
       {
        extract($result);

  ?>
          <div class="pull-left image"><img class="img-circle" src="../images/Rationshop/Photo/<?php echo $r_photo; ?>" alt="Rationshop Image" height=50px;></div>
             <div class="pull-left info">
              <p><?php echo $_SESSION['name']; ?></p>
              <p class="designation">Rationshop</p>
            </div>
          </div> 
          <!-- Sidebar Menu-->
          <ul class="sidebar-menu">
            <li class="active"><a href="home.php"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>


            <li class="treeview"><a href="#"><i class="fa fa-laptop"></i><span>Ration Request</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                  <li><a href="view_yellow_card_users_ration_request.php"><i class="fa fa-circle-o"></i> Yellow Card Users </a></li>

                  <li><a href="view_saffron_card_users_ration_request.php"><i class="fa fa-circle-o"></i> Saffron Card Users</a></li>

                  <li><a href="view_white_card_users_ration_request.php"><i class="fa fa-circle-o"></i> White Card Users</a></li>
                </ul>
            </li>



            <li class="treeview"><a href="#"><i class="fa fa-laptop"></i><span>Delivered Ration</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                  <li><a href="view_yellow_card_delivered_ration_users.php"><i class="fa fa-circle-o"></i> Yellow Card User</a></li>

                  <li><a href="view_saffron_card_delivered_ration_users.php"><i class="fa fa-circle-o"></i> Saffron Card User</a></li>

                  <li><a href="view_white_card_delivered_ration_users.php"><i class="fa fa-circle-o"></i> White Card User</a></li>
                </ul>
            </li>


            <li><a href="change_password.php"><i class="fa fa-exchange"></i><span>Change Password</span></a></li>

            <li><a href="logout.php" onclick="return confirm('Are you sure you want to logout from this Rationshop account?');"><i class="fa fa-sign-out fa-lg"></i><span>Logout</span></a></li>
            
          </ul>
        </section>
        <?php

      }
    }
    ?>
      </aside>
      
      <!--
            Content Here

      ?>
    </div> -->
    

