<?php
session_start();
include "../connection.php";

if(!isset($_SESSION['email']))
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
    <title>Admin</title>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')
    script(src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')
    -->
  </head>
  <body class="sidebar-mini fixed">
    <div class="wrapper">
      <!-- Navbar-->
      <header class="main-header hidden-print"><a class="logo" href="admin-home.php">Admin</a>
        <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button--><a class="sidebar-toggle" href="#" data-toggle="offcanvas"></a>

          <!-- Navbar Right Menu-->
          <div class="navbar-custom-menu">
            
          </div>
        </nav>
      </header>
      <!-- Side-Nav-->


      <aside class="main-sidebar hidden-print">
        <section class="sidebar">
          <div class="user-panel">
          <?php
      
$query = mysqli_query($con,"select * from admin");
if(mysqli_num_rows($query)>0)
{
  while($result=mysqli_fetch_assoc($query))
       {
        extract($result);
  ?>
          <div class="pull-left image"><img class="img-circle" src="../images/admin/admin.png" alt="User Image" height=50px;></div>
             <div class="pull-left info">
              <p><?php echo $result['username']; ?></p>
              <p class="designation">Admin</p>
            </div>
          </div> 
          <!-- Sidebar Menu-->
          <ul class="sidebar-menu">
            <li class="active"><a href="admin-home.php"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>


            <li class="treeview"><a href="#"><i class="fa fa-user-circle"></i><span>Ration Item</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="add_item.php"><i class="fa fa-circle-o"></i>Add Item</a></li>
                <li><a href="view_item.php"><i class="fa fa-circle-o"></i> View Item </a></li>
                
                </ul>
            </li>
            
            <li class="treeview"><a href="#"><i class="fa fa-laptop"></i><span>User</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                  <li><a href="view_registered_users.php"><i class="fa fa-circle-o"></i> Registered </a></li>

                  <li><a href="view_approved_users.php"><i class="fa fa-circle-o"></i> Approved</a></li>

                  <li><a href="view_disapproved_users.php"><i class="fa fa-circle-o"></i> Disapproved</a></li>
                </ul>
            </li>



            <li class="treeview"><a href="#"><i class="fa fa-laptop"></i><span>Ration Request</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                  <li><a href="view_yellow_card_ration_request_users.php"><i class="fa fa-circle-o"></i> Yellow Card User </a></li>

                  <li><a href="view_saffron_card_ration_request_users.php"><i class="fa fa-circle-o"></i> Saffron Card User</a></li>

                  <li><a href="view_white_card_ration_request_users.php"><i class="fa fa-circle-o"></i> White Card User</a></li>
                </ul>
            </li>


            <li class="treeview"><a href="#"><i class="fa fa-laptop"></i><span>Delivered Ration</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                  <li><a href="view_yellow_card_delivered_ration_request_users.php"><i class="fa fa-circle-o"></i> Yellow Card User </a></li>

                  <li><a href="view_saffron_card_delivered_ration_request_users.php"><i class="fa fa-circle-o"></i> Saffron Card User</a></li>

                  <li><a href="view_white_card_delivered_ration_request_users.php"><i class="fa fa-circle-o"></i> White Card User</a></li>
                </ul>
            </li>



            <li class="treeview"><a href="#"><i class="fa fa-laptop"></i><span>Rationshop</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                  <li><a href="view_registered_rationshop.php"><i class="fa fa-circle-o"></i> Registered </a></li>

                  <li><a href="view_approved_rationshop.php"><i class="fa fa-circle-o"></i> Approved</a></li>

                  <li><a href="view_disapproved_rationshop.php"><i class="fa fa-circle-o"></i> Disapproved</a></li>
                </ul>
            </li>


            


            <li><a href="change_password.php"><i class="fa fa-exchange"></i><span>Change Password</span></a></li>

            <li><a href="admin-logout.php" onclick="return confirm('Are you sure you want to logout from this Admin account?');"><i class="fa fa-sign-out fa-lg"></i><span>Logout</span></a></li>
            
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
    

