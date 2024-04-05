<?php include "header.php"; ?>
          <div class="content">
              <div style="max-width:400px; margin:0 auto;">
              
            
            <div class="text-center">
                <h3 class="heading text-success">Create your account</h3>
            </div>
            
            <div class="hpanel" id="SignContent">
            <div id="signup_msg"></div>
            <div class="panel-body">

            <form data-ajax="true" data-ajax-begin="$(&#39;#signupsubmitbtn&#39;).attr(&#39;disabled&#39;,&#39;&#39;).html(&#39;Please wait..&#39;);" data-ajax-complete="$(&#39;#signupsubmitbtn&#39;).removeAttr(&#39;disabled&#39;).html(&#39;SIGN UP&#39;);" data-ajax-method="POST" data-ajax-mode="replace" data-ajax-update="#SignContent" id="signupform" method="post" enctype="multipart/form-data">        
              <fieldset>
                
                
                       
            
            <div class="form-group">
                <label class="control-label text-success" for="FullName">Last Name</label>
                    <input class="form-control" data-val="true" required="" data-val-required="Please enter name." id="FullName" name="l_name" placeholder="Last Name" type="text" />
                <small class="field-validation-valid text-danger" data-valmsg-for="FullName" data-valmsg-replace="true"></small>
            </div>


            <div class="form-group">
                <label class="control-label text-success" for="FullName">First Name</label>
                    <input class="form-control" data-val="true" required="" data-val-required="Please enter name." id="FullName" name="f_name" placeholder="First Name" type="text" />
                <small class="field-validation-valid text-danger" data-valmsg-for="FullName" data-valmsg-replace="true"></small>
            </div>


            <div class="form-group">
                <label class="control-label text-success" for="FullName">Middle Name</label>
                    <input class="form-control" data-val="true" required="" data-val-required="Middle name." id="FullName" name="m_name" placeholder="Last Name" type="text" />
                <small class="field-validation-valid text-danger" data-valmsg-for="FullName" data-valmsg-replace="true"></small>
            </div>


            <div class="form-group">
                <label class="control-label text-success" for="Password">Aadhar Number</label>
                <input class="form-control" data-val="true" minlength="12" maxlength="12" required="" name="u_aadhar" placeholder="Aadhar Number" />
                <small class="field-validation-valid text-danger" data-valmsg-for="Password" data-valmsg-replace="true"></small>
            </div>



            <div class="form-group">
                <label class="control-label text-success" for="MobileNo">Mobile number</label>
                <div class="input-group">
                    <span class="input-group-addon " style="background-color:white;border-right:none;">+91</span>
                    <input class="form-control" data-val="true" required=""  pattern="[0-9]+" minlength="10" maxlength="10" name="u_mobile" placeholder="Enter Mobile Number" type="text" value="" />
                </div>
                <small class="field-validation-valid text-danger" data-valmsg-for="MobileNo" data-valmsg-replace="true"></small>
            </div>


            <div class="form-group">
                <label class="control-label text-success" for="Password">Photo</label>
                <input class="form-control" data-val="true" required="" name="u_photo" type="file" accept=".jpg, .png, .jpeg, .bmp, .png" />
                <small class="field-validation-valid text-danger" data-valmsg-for="Password" data-valmsg-replace="true"></small>
            </div>

            <div class="form-group">
                <label class="control-label text-success" for="Password">Gender</label>
                
                <select class="form-control" data-val="true" required="" name="gender">
                  <option value="">Select Gender</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>
                <small class="field-validation-valid text-danger" data-valmsg-for="Password" data-valmsg-replace="true"></small>
            </div>


            <div class="form-group">
                <label class="control-label text-success" for="FullName">Date of Birth</label>
                    <input type="text" placeholder="Date of Birth" class="form-control" name="dob" id="datepicker" required >
                <small class="field-validation-valid text-danger" data-valmsg-for="FullName" data-valmsg-replace="true"></small>
            </div>


            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1s">
              <h5 class="text-danger">You Will Never Change Your Income Later</h5>
              <select class="form-control" name="income" required="required" >
                      <option value="">Yearly Income</option>
                      <option value="Yellow">Less Than 15 Thousand</option>
                      <option value="Saffron">15 Thousand to 1 Lakh</option>
                      <option value="White">More Than 1 Lakh</option>
              </select>
            </div>

            <div class="form-group">
              <label class="control-label text-success" for="FullName">Address</label>
              
              <textarea class="form-control" name="u_addr" placeholder="Address" required=""></textarea>
                                    
            </div>

            <div class="form-group">
                <label class="control-label text-success" for="Password">Password</label>
                <input class="form-control" data-val="true" data-val-length="Password must contain atleast 6 characters..!" required="" data-val-length-max="100" data-val-length-min="6" data-val-required="Please enter password." id="Password" name="u_password" placeholder="Set Password" type="password" />
                <small class="field-validation-valid text-danger" data-valmsg-for="Password" data-valmsg-replace="true"></small>
            </div>
           
           
            <div class="form-group text-center">
                
                <button type="submit" name="register" class="btn btn-success p-l-md p-r-md font-bold" id="signupsubmitbtn">SIGN UP</button>
                
                <!--<a href="index.php" type="submit" class="btn btn-default p-l-md p-r-md font-bold" id="signupsubmitbtn"> BACK </a>-->
            </div>

        </fieldset>


        <?php
        error_reporting('');
                                include('connection.php');
                                    
                                    if(isset($_POST['register']))
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
      echo 'alert("This Aadhar Number Is Already Exist. Please register with another Aadhar number");';
      echo "window.location.href = 'SignUp.php';";
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

$phone=$_POST['u_mobile'];
$msg='You are Successfully registered as a User';

$query=mysqli_query($con,"insert into user (head_member_aadhar,u_aadhar,u_mobile,u_last_name,u_first_name,u_middle_name,u_dob,u_address,u_password,u_photo,u_gender,relation,u_income) values ('$u_aadhar','$u_aadhar','$u_mobile','$l_name','$f_name','$m_name','$dob','$u_addr','$u_password','$dst1','$gender','Self','$income')") or die(mysqli_error($con));

                                        if($query==1)
                                        {

              

              $ch = "SMTEST";

              $apiurl = "http://sms.happysms.in/api/sendhttp.php?authkey=242446A57b8VBMQpOd5bc06387&mobiles=$phone&message=$msg&sender=$ch&route=4&country=91";

                              $ch = curl_init($apiurl);

                              if($method == "GET")
                              {
                                  curl_setopt($ch, CURLOPT_POST,1);
                                  curl_setopt($ch, CURLOPT_POSTFIELDS,$apiurl);
                              } 
                              else 
                              {
                                  $get_url = $apiurl;
                                  curl_setopt($ch, CURLOPT_POST,0);
                                  curl_setopt($ch, CURLOPT_URL, $get_url);
                              }

                              curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
                              curl_setopt($ch, CURLOPT_HEADER,0);
                              // DO NOT RETURN HTTP HEADERS
                              curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
                              // RETURN THE CONTENTS OF THE CALL
                              $return_val = curl_exec($ch);

                              if($return_val=="")
                              {
                                echo "Process Failed"; 
                              }
                              else
                              {
                                echo "<script>";
                                echo "alert('Register Successfully!!! ');";
                                echo "window.location.href='SignUp.php'";
                                echo "</script";
                              }                           
             
          }
                                        else
                                        {
                                            echo"<script>";
                                            echo"Error While Registration. Please try again";
                                            echo"</script>";
                                        } 


                                    }

                                ?>
</form>
</div>



<div class="panel-footer">
    <a href="SignIn.php" name="register" class="btn btn-success p-l-md p-r-md font-bold" id="signupsubmitbtn">Already had an account?</a>
    
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
    
<?php include "footer.php"; ?>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    $(function () {
        $.validator.unobtrusive.parse($("#signupform"));
        $("#signupform").on("submit", function (e) {
            $(".input-validation-error").closest(".form-group").addClass("has-error");
        });
        $("#signupform").on("focusout keyup", "textarea,input,select", function (e) {
            if ($('#signupform').validate().element(this)) {
                $(this).closest(".form-group").removeClass("has-error");
            } else {
                $(this).closest(".form-group").addClass("has-error");
            }
        });
    });
</script>



<script type="text/javascript">
  $(document).ready(function(){
    $("select#city").change(function(){
          var n = $("#city option:selected").val();
      
          $.ajax({
              type: "POST",
              url: "main_area.php", 
              data: { city_id : n  } 
          }).done(function(data){
              $("#main_area").html(data);
          });
      });
  });
</script> 

<script type="text/javascript">
  $(document).ready(function(){
    $("select#main_area").change(function(){
          var n = $("#main_area option:selected").val();
      
          $.ajax({
              type: "POST",
              url: "sub_area.php", 
              data: { main_area : n  } 
          }).done(function(data){
              $("#sub_area").html(data);
          });
      });
  });
</script>

<script type="text/javascript">
    function checkAvailability1() {
$("#loaderIcon1").show();
jQuery.ajax({
url: "mobexist.php",
data:'user_mob='+$("#user_mob").val(),
type: "POST",
success:function(data){
$("#email-availability-status1").html(data);
$("#loaderIcon1").hide();
},
error:function (){}
});
}

  </script>




<script type="text/javascript">
    function Validate() {
        var password = document.getElementById("txtPassword").value;
        var confirmPassword = document.getElementById("txtConfirmPassword").value;
        if (password != confirmPassword) {
            alert("Passwords Do Not Match.");
            return false;
        }
        return true;
    }
</script>


<link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>