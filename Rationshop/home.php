<?php

include 'menu.php';
?>

<div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-archive"></i> Dashboard </h1>
           
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li>Dashboard</li>
              <li><a href="#">Dashboard</a></li>
            </ul>
          </div>
        </div>
        
       
       <div class="row">
          <div class="col-md-12">
            <div class="card">
            <h3 class="card-title">Ration Request</h3>
            <div class="row">
              <div class="col-md-4">
              <div class="widget-small primary"><i class="icon fa fa-hand-paper-o fa-3x"></i>
               <div class="info">

              <?php

$rat_req_yellow = mysqli_query($con,"select * from user_ration_request where u_income='Yellow' and ration_status='Requested' ") or die(myslqi_error($con));
$cnt_rat_req_yellow=mysqli_num_rows($rat_req_yellow);

  ?>   
                <h4>Yellow Card</h4>
                 <p><b><?php echo $cnt_rat_req_yellow; ?></b></p>
              </div>
              </div>
             </div>

          <div class="col-md-4">
            <div class="widget-small info"><i class="icon fa fa-hand-paper-o fa-3x"></i>
              <div class="info">

              <?php

$rat_req_saffron = mysqli_query($con,"select * from user_ration_request where u_income='Saffron' and ration_status='Requested' ") or die(myslqi_error($con));
$cnt_rat_req_saffron=mysqli_num_rows($rat_req_saffron);

  ?>   


                <h4>Saffron Card</h4>
                <p><b><?php echo $cnt_rat_req_saffron; ?></b></p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="widget-small danger"><i class="icon fa fa-hand-paper-o fa-3x"></i>
              <div class="info">

              <?php

$rat_req_white = mysqli_query($con,"select * from user_ration_request where u_income='White' and ration_status='Requested' ") or die(myslqi_error($con));
$cnt_rat_req_white=mysqli_num_rows($rat_req_white);

  ?>   


                <h4>White Card</h4>
                <p><b><?php echo $cnt_rat_req_white; ?></b></p>
              </div>
            </div>
          </div>
          
              
              </div>
            </div>
          </div>
          
        </div>





         <div class="row">
          <div class="col-md-12">
            <div class="card">
            <h3 class="card-title">Delivered Ration</h3>
            <div class="row">
              <div class="col-md-4">
              <div class="widget-small primary"><i class="icon fa fa-car fa-3x"></i>
               <div class="info">

              <?php

$rat_del_yellow = mysqli_query($con,"select * from user_ration_request where u_income='Yellow' and ration_status='Delivered' ") or die(myslqi_error($con));
$cnt_rat_del_yellow=mysqli_num_rows($rat_del_yellow);

  ?>   
                <h4>Yellow Card</h4>
                 <p><b><?php echo $cnt_rat_del_yellow; ?></b></p>
              </div>
              </div>
             </div>

          <div class="col-md-4">
            <div class="widget-small info"><i class="icon fa fa-car fa-3x"></i>
              <div class="info">

              <?php

$rat_del_saffron = mysqli_query($con,"select * from user_ration_request where u_income='Saffron' and ration_status='Delivered' ") or die(myslqi_error($con));
$cnt_rat_del_saffron=mysqli_num_rows($rat_del_saffron);

  ?>   


                <h4>Saffron Card</h4>
                <p><b><?php echo $cnt_rat_del_saffron; ?></b></p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="widget-small danger"><i class="icon fa fa-car fa-3x"></i>
              <div class="info">

              <?php

$rat_del_white = mysqli_query($con,"select * from user_ration_request where u_income='White' and ration_status='Delivered' ") or die(myslqi_error($con));
$cnt_rat_del_white=mysqli_num_rows($rat_del_white);

  ?>   


                <h4>White Card</h4>
                <p><b><?php echo $cnt_rat_del_white; ?></b></p>
              </div>
            </div>
          </div>
          
              
              </div>
            </div>
          </div>
          
        </div>

       




      </div>
<?php

include 'admin-footer.php';
?>