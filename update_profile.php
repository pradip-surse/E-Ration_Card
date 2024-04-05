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
                <?php 
           
if($_SESSION['aadhar'])
{
$query1=mysqli_query($con,"select * from user where u_aadhar='".$_SESSION['aadhar']."' ") or die(mysqli_error($con));

$row = mysqli_fetch_array($query1);


                        ?>
            <form data-ajax="true" data-ajax-begin="$(&#39;#signupsubmitbtn&#39;).attr(&#39;disabled&#39;,&#39;&#39;).html(&#39;Please wait..&#39;);" data-ajax-complete="$(&#39;#signupsubmitbtn&#39;).removeAttr(&#39;disabled&#39;).html(&#39;SIGN UP&#39;);" data-ajax-method="POST" data-ajax-mode="replace" data-ajax-update="#SignContent" id="signupform" method="post" enctype="multipart/form-data">        
              <fieldset>


                <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".6s">
                     <input type="text" placeholder="Last Name" class="form-control" name="l_name" id="name" pattern="[A-Za-z]+" required value="<?php echo $row['u_last_name']?>">
                </div>



                <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".6s">
                                        <input type="text" placeholder="First Name" class="form-control" name="f_name" id="name" pattern="[A-Za-z]+" required value="<?php echo $row['u_first_name']?>">
                                    </div>


                                    <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".6s">
                                        <input type="text" placeholder="Middle Name" class="form-control" name="m_name" id="name" pattern="[A-Za-z]+" required value="<?php echo $row['u_middle_name']?>">
                                    </div>
                                    
                                                                 
                                    <!-- <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1s">
                                        <input type="text" placeholder="Aadhar Number" class="form-control" name="aadhar" pattern="[0-9]+" minlength="12" maxlength="12" required value="<?php echo $row['u_mobile']?>">
                                    </div> -->

                                    <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1s">
                                        <input type="text" placeholder="Mobile Number Start with 7,8,9" class="form-control" name="mobile" pattern="[7-9][0-9]+" minlength="10" maxlength="10" required title="Enter number start with 7,8,9" value="<?php echo $row['u_mobile']?>">
                                    </div>
                                    
                                   <!--  <div class="form-group fadeInDown" data-wow-duration="500ms" data-wow-delay="1s">
                                        <input type="file" class="form-control" name="u_photo" accept=".jpg, .png, .jpeg, .bmp, .png" required title="Upload Member Photo">
                                    </div> -->

                                    
                                    <!-- <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1s">
                                        
                                        <select class="form-control" name="gender" required>
                                            <option value="">Gender</option>
                                            <option value="Male" >Male</option>
                                            <option value="Female" >Female</option>                                     
                                        </select>
                                    </div> -->

                                    <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1s">
                                        <input type="text" placeholder="Date of Birth" class="form-control" name="dob" id="datepicker" required value="<?php echo $row['u_dob']?>">
                                    </div>


                                    <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1s">
                                        
                                        <select class="form-control" name="relation" required="required" >
                                            <option value="<?php echo $row['relation']?>"><?php echo $row['relation']?></option>
                                            <option value="">---Relation---</option>                <option value="Self">Self</option>        
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
                                        <textarea rows="4" placeholder="Address" class="form-control" name="address" id="message" required <?php echo $row['u_address']?>><?php echo $row['u_address']?></textarea>    
                                    </div>

                                    <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1.2s">
                                        
                                         <input type="text" class="form-control" name="rationcard_number" value="<?php echo $row['rationcard_number']?>">

                                    </div>

                                    <div id="submit" class="wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1.4s">
                                        <input type="submit" class="btn btn-success btn-send" value="Update" name="update" >
                                       
                                    </div> 

        </fieldset>
        <?php
    }
        ?>
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

 

            if(isset($_POST['update']))
            {

                extract($_POST);
                


                $upquery= "update user set 

                u_last_name='".$_POST['l_name']."',
                u_first_name='".$_POST['f_name']."',
                u_middle_name='".$_POST['m_name']."',                          
                u_mobile='".$_POST['mobile']."',
                u_dob='".$_POST['dob']."',
                relation='".$_POST['relation']."',          
                u_address='".$_POST['address']."',
                rationcard_number='".$_POST['rationcard_number']."'
                where u_aadhar='".$_SESSION['aadhar']."' ";


                 $upresult = mysqli_query($con,$upquery); 
                         
                if($upresult)
                {

                    echo "<script>alert('Profile Updated Successfully....!!!');
                    window.location.href='index.php';
                    </script>";
                }
                else
                {
                    echo "<script>alert('Error....!!!');
                    window.location.href='index.php';
                    </script>";
                }

            }
 
 ?> 

