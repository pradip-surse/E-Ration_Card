<?php

include 'menu.php';

?>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-edit"></i>Password</h1>
           
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li>Change Password</li>
              <li><a href="#">Password</a></li>
            </ul>
          </div>
        </div>
        <div class="row">
        <div class="col-md-6">
            <div class="card">
              
  

              <h3 class="card-title">Change Password</h3>
              <div class="card-body">
                <form class="form-horizontal" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    
                    <label class="control-label col-md-3">Old Password</label>
                    <div class="col-md-8">
                      
                      <input type="text" name="old_password" class="form-control" placeholder="Enter Old Password">
                        
                    </div>
                  </div>
                 
                  

                  <div class="form-group">
                    
                    <label class="control-label col-md-3">New Password</label>
                    <div class="col-md-8">
                      
                      <input type="text" name="new_password" class="form-control" placeholder="Enter New Password">
                        
                    </div>
                  </div>


                  <div class="form-group">
                    
                    <label class="control-label col-md-3">Confirm Password</label>
                    <div class="col-md-8">
                      
                      <input type="text" name="con_password" class="form-control" placeholder="Confirm Password">
                        
                    </div>
                  </div>



                               
              <div class="card-footer">
                <div class="row">
                  <div class="col-md-8 col-md-offset-3">
                    <button type="submit" name="change" class="btn btn-primary icon-btn" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Change</button>&nbsp;&nbsp;&nbsp;

                    <a href="home.php"> <button class="btn btn-warning icon-btn" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Cancel</button></a>&nbsp;&nbsp;&nbsp;
                  </div>
                </div>
              </div> 

         <?php

if(isset($_POST['change']))
{
  extract($_POST);
   $query='select * from rationshop where r_aadhar="'.$_SESSION['aadhar'].'" and r_password="'.$_POST['old_password'].'"';


   $res = mysqli_query($con,$query) or die(mysqli_error($con));
   
   
   if(mysqli_num_rows($res)>0)
   {
    
         if($_POST['new_password']==$_POST['con_password'])
           {
          $updt = 'update rationshop set r_password="'.$_POST['new_password'].'" where r_aadhar="'.$_SESSION['aadhar'].'" ';

            $res1=mysqli_query($con,$updt) or die(mysqli_error($con));

              if($res1)
              {
                echo "<script>";
                echo "alert('Your Password Changed');";
                echo "window.location.href='home.php'";
                echo "</script>";
              }
              else
              {

                echo "Password Not Changed";
                
              }
            }
          else
      {
             echo "<script>";
             echo "alert('Your Password Not Matched');";
               echo "window.location.href='change_password.php'";
             echo "</script>";
      }
    }
    
else
      {
       echo "<script>";
       echo "alert('Old Password is Wrong');";
        echo "window.location.href='change_password.php'";
        echo "</script>";
      }
    
}
?>
                </form>

              </div>
       
            </div>
          </div>
         
          <div class="clearix"></div>
          
        </div>
      </div>
    <?php
include 'admin-footer.php';
    ?>
    
