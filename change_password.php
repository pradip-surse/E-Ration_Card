<?php include "header.php"; ?>
<div class="content">
<div class="container">
 

<div class="row">
            <div class="col-md-4">
                
            </div>
          
            <div class="col-md-4">
                <div class="hpanel m-t-md input-dark-border request-box" id="request_form_container" style="margin-top: 27px;">
                    <div class="panel-body text-center" style="padding-bottom: 26px; padding-top: 15px;">
                         <!-- <h3><b><a href="SignIn.php" class="btn btn-success btn-lg p-l-md p-r-md font-bold" id="sellbutton" type="submit">ORDER YOUR TIFFIN</a> </b></h3> -->

                         <div class="hpanel" id="SignContent">
            <div id="signup_msg"></div>
            <div class="panel-body">
            <form data-ajax="true" data-ajax-begin="$(&#39;#signupsubmitbtn&#39;).attr(&#39;disabled&#39;,&#39;&#39;).html(&#39;Please wait..&#39;);" data-ajax-complete="$(&#39;#signupsubmitbtn&#39;).removeAttr(&#39;disabled&#39;).html(&#39;SIGN UP&#39;);" data-ajax-method="POST" data-ajax-mode="replace" data-ajax-update="#SignContent" id="signupform" method="post" enctype="multipart/form-data">        
              <fieldset>

                                    <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".6s">
                                         <input type="text" placeholder="Old Password" class="form-control" name="old_password" required >
                                    </div>


                                    <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".6s">
                                        <input type="text" placeholder="New Password" class="form-control" name="new_password" required >
                                    </div>


                                    <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".6s">
                                        <input type="text" placeholder="Confirm Password" class="form-control" name="con_password" required >
                                    </div>
                                                                                  
                                    <div id="submit" class="wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1.4s">
                                        <input type="submit" class="btn btn-success btn-send" value="Change" name="change" >
                                       
                                    </div> 

        </fieldset>
</form>
</div>

</div> 
  
</div>

</div>
</div>

            <div class="col-md-4">
                
            </div>
        </div>


    
</div>

          </div>
    
    
    
<?php include "footer.php"; ?>

<?php

if(isset($_POST['change']))
{
  extract($_POST);
   $query='select * from user where u_aadhar="'.$_SESSION['aadhar'].'" and u_password="'.$_POST['old_password'].'"';


   $res = mysqli_query($con,$query) or die(mysqli_error($con));
   
   
   if(mysqli_num_rows($res)>0)
   {
    
         if($_POST['new_password']==$_POST['con_password'])
           {
          $updt = 'update user set u_password="'.$_POST['new_password'].'" where u_aadhar="'.$_SESSION['aadhar'].'" ';

            $res1=mysqli_query($con,$updt) or die(mysqli_error($con));

              if($res1)
              {
                echo "<script>";
                echo "alert('Your Password Changed');";
                echo "window.location.href='index.php'";
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