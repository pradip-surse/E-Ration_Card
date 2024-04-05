<?php include "header.php"; ?>
<div class="content">
<div class="container">
 

<div class="row">
            <div class="col-md-4">
                
            </div>
          
            <div class="col-md-4">
                <div class="hpanel m-t-md input-dark-border request-box" id="request_form_container" style="margin-top: 27px;">
                    <div class="panel-body text-center" style="padding-bottom: 26px; padding-top: 15px;">
                        

                         <div class="hpanel" id="SignContent">
            <div id="signup_msg"></div>
            <div class="panel-body">
            <form data-ajax="true" data-ajax-begin="$(&#39;#signupsubmitbtn&#39;).attr(&#39;disabled&#39;,&#39;&#39;).html(&#39;Please wait..&#39;);" data-ajax-complete="$(&#39;#signupsubmitbtn&#39;).removeAttr(&#39;disabled&#39;).html(&#39;SIGN UP&#39;);" data-ajax-method="POST" data-ajax-mode="replace" data-ajax-update="#SignContent" id="signupform" method="post" enctype="multipart/form-data">        
              <fieldset>

                <?php
                    if(isset($_GET['id']))
                    {
                    $query=mysqli_query($con,"select * from user where user_id='".$_GET['id']."' ");
                    $row=mysqli_fetch_array($query);
                    extract($row);
                ?>

                                    <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".6s">
                                      <input type="text" placeholder="Last Name" class="form-control" name="l_name" id="name" pattern="[A-Za-z]+" required value="<?php echo $u_last_name; ?>">
                                    </div>



                                    <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".6s">
                                        <input type="text" placeholder="First Name" class="form-control" name="f_name" id="name" pattern="[A-Za-z]+" required value="<?php echo $u_first_name; ?>">
                                    </div>


                                    <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".6s">
                                        <input type="text" placeholder="Middle Name" class="form-control" name="m_name" id="name" pattern="[A-Za-z]+" required value="<?php echo $u_middle_name; ?>">
                                    </div>
                                    
                                                                 
                                    <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1s">
                                        <input type="text" placeholder="Aadhar Number" class="form-control" name="aadhar" pattern="[0-9]+" minlength="12" maxlength="12" required value="<?php echo $u_aadhar; ?>">
                                    </div>

                                                                        
                                    <div class="form-group fadeInDown" data-wow-duration="500ms" data-wow-delay="1s">
                                        <img class="editable img-responsive" alt="" id="avatar2" src="images/User/<?php echo $row['u_photo']; ?>" width="100" height="120" /><br>
                                        <input type="file" class="form-control" name="u_photo" accept=".jpg, .png, .jpeg, .bmp, .png" required title="Upload Member Photo">
                                    </div>

                                    
                                    <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1s">
                                       <select class="form-control" name="gender" required>
                                            
                                            <option value="Male"<?php if($u_gender=='Male'){ echo "selected";}?>>Male</option>
                                            <option value="Female"<?php if($u_gender=='Female'){ echo "selected";}?>>Female</option>
                                                                               
                                        </select>
                                    </div>

                                    <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1s">
                                        <input type="text" placeholder="Date of Birth" class="form-control" name="dob" id="datepicker" required value="<?php echo $u_dob; ?>">
                                    </div>


                                    <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1s">
                                        
                                        <select class="form-control" name="relation" required="required" >
                                            <option value="">Relation</option> 
                                            <option value="Self"<?php if($relation=='Self'){ echo "selected";}?>>Self</option>                       
                                            <option value="Wife"<?php if($relation=='Wife'){ echo "selected";}?>>Wife</option>
                                            <option value="Son"<?php if($relation=='Son'){ echo "selected";}?>>Son</option>
                                            <option value="Daughter"<?php if($relation=='Daughter'){ echo "selected";}?>>Daughter</option>
                                            <option value="Father"<?php if($relation=='Father'){ echo "selected";}?>>Father</option>
                                            <option value="Mother"<?php if($relation=='Mother'){ echo "selected";}?>>Mother</option>
                                            <option value="Sister"<?php if($relation=='Sister'){ echo "selected";}?>>Sister</option>
                                            <option value="Brother"<?php if($relation=='Brother'){ echo "selected";}?>>Brother</option>
                                            <option value="Other"<?php if($relation=='Other'){ echo "selected";}?>>Other</option>
                                        </select>
                                    </div>


                                    
                                    <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1.2s">
                                        <textarea rows="4" placeholder="Address" class="form-control" name="address" id="message" required value="<?php echo $u_address; ?>"><?php echo $u_address; ?></textarea>    
                                    </div>

                                    <div id="submit" class="wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1.4s">
                                        <input type="submit" class="btn btn-success btn-send" value="Update" name="update" >
                                       
                                    </div> 

                                    <?php
                                }
                                    ?>

        </fieldset>
</form>




<?php
                        
                        if(isset($_POST['update']))                      
        
{


    extract($_POST);
    
        $name1=$_FILES['u_photo']['name'];
    $size=$_FILES['u_photo']['size'];
    $type=$_FILES['u_photo']['type'];
    $temp=$_FILES['u_photo']['tmp_name'];

        if($name1)
        {
                    $upload_dir = 'images/User/';
                    $imgExt = strtolower(pathinfo($name1,PATHINFO_EXTENSION)); // get image extension
                    $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
                    $image = rand(1000,1000000).".".$imgExt;
                    unlink($upload_dir.$rows['u_photo']);
                    move_uploaded_file($temp,$upload_dir.$image);
                    
        }
        else
        {

                    $image=$row['u_photo'];           
        }



                $upquery= 'update user set                          
                          u_last_name="'.$_POST['l_name'].'" , 
                          u_first_name="'.$_POST['f_name'].'" , 
                          u_middle_name="'.$_POST['m_name'].'" , 
                          u_aadhar="'.$_POST['aadhar'].'" ,                                     
                          u_photo="'.$image.'",
                          u_gender="'.$_POST['gender'].'",
                          relation="'.$_POST['relation'].'",
                          u_dob="'.$_POST['dob'].'",
                          u_address="'.$_POST['address'].'"                                                                             
                          where user_id="'.$_GET['id'].'" ' ;

                          

                          $upresult = mysqli_query($con,$upquery);
                          if($upresult)
                            {
                                echo "<script>";
                                echo "alert('Updated Successfully');";
                                echo "window.location.href='view_members.php';";
                                echo "</script>";
                            }
                            else
                            {
                                echo "<script>";
                                echo "alert('Error! Not Updated');";
                                echo "window.location.href='view_members.php';";
                                echo "</script>";
                            }
}




?>




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

<link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>