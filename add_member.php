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
                     <input type="text" placeholder="Last Name" class="form-control" name="l_name" id="name" pattern="[A-Za-z]+" required >
                </div>



                <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".6s">
                                        <input type="text" placeholder="First Name" class="form-control" name="f_name" id="name" pattern="[A-Za-z]+" required >
                                    </div>


                                    <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".6s">
                                        <input type="text" placeholder="Middle Name" class="form-control" name="m_name" id="name" pattern="[A-Za-z]+" required >
                                    </div>
                                    
                                                                 
                                    <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1s">
                                        <input type="text" placeholder="Aadhar Number" class="form-control" name="aadhar" pattern="[0-9]+" minlength="12" maxlength="12" required >
                                    </div>

                                    <!-- <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1s">
                                        <input type="text" placeholder="Mobile Number Start with 7,8,9" class="form-control" name="mobile" pattern="[7-9][0-9]+" minlength="10" maxlength="10" required title="Enter number start with 7,8,9" >
                                    </div> -->
                                    
                                    <div class="form-group fadeInDown" data-wow-duration="500ms" data-wow-delay="1s">
                                        <input type="file" class="form-control" name="u_photo" accept=".jpg, .png, .jpeg, .bmp, .png" required title="Upload Member Photo">
                                    </div>

                                    
                                    <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1s">
                                        
                                        <select class="form-control" name="gender" required>
                                            <option value="">Gender</option>
                                            <option value="Male" >Male</option>
                                            <option value="Female" >Female</option>                                     
                                        </select>
                                    </div>

                                    <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1s">
                                        <input type="text" placeholder="Date of Birth" class="form-control" name="dob" id="datepicker" required >
                                    </div>


                                    <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1s">
                                        
                                        <select class="form-control" name="relation" required="required" >
                                            <option value="">Relation</option>                        
                                            <option value="Wife">Wife</option>
                                            <option value="Son">Son</option>
                                            <option value="Daughter">Daughter</option>
                                            <option value="Father">Father</option>
                                            <option value="Mother">Mother</option>
                                            <option value="Sister">Sister</option>
                                            <option value="Brother">Brother</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>


                                    
                                    <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1.2s">
                                        <textarea rows="4" placeholder="Address" class="form-control" name="address" id="message" required ></textarea>    
                                    </div>

                                    <div id="submit" class="wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1.4s">
                                        <input type="submit" class="btn btn-success btn-send" value="Add" name="submit" >
                                       
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
                                include('connection.php');
                                    
                                    if(isset($_POST['submit']))
                                    {
                                        extract($_POST);

                                        $coulmn=array();
                                $query1=mysqli_query($con,"select u_aadhar from user");
    while ($row1=mysqli_fetch_assoc($query1))
    {
      $coulmn[]=$row1['u_aadhar'];
    }

      foreach ($coulmn as $value) 
      {

       if (strpos($aadhar, $value) !== FALSE ) 
       {
        echo '<script type="text/javascript">'; 
      echo 'alert("This Aadhar Number Is Already Exist. Please Add with another Aadhar number");';
      echo "window.location.href = 'add_member.php';";
      echo '</script>'; 
        return true;

       }
    
      }
      
$df1=md5(time());

$name1=$_FILES['u_photo']['name'];
$size1=$_FILES['u_photo']['size'];
$type=$_FILES['u_photo']['type'];
$temp=$_FILES['u_photo']['tmp_name'];
$dst1="".$df1.$name1;
move_uploaded_file($temp,"images/User/".$dst1);



                                        $query=mysqli_query($con,"insert into user (head_member_aadhar,u_aadhar,u_last_name,u_first_name,u_middle_name,u_dob,u_address,u_photo,u_gender,u_status,relation) values ('".$_SESSION['aadhar']."','$aadhar','$l_name','$f_name','$m_name','$dob','$address','$dst1','$gender','Approved','$relation')") or die(mysqli_error($con));

                                        if($query==1)
                                        {   
                                            echo"<script>";
                                            echo"alert('Added Successfully !!!!!')";
                                            echo"</script>";
                                        }
                                        else
                                        {
                                            echo"<script>";
                                            echo"Error While Adding. Please try again";
                                            echo"</script>";
                                        } 


                                    }

                                ?>
