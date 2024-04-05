<?php
session_start();
include '../connection.php';

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
    
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <h1>Rationshop</h1>
      </div>
      <div style="background-color: white; min-height: 300px; padding: 10px;">
        <form class="login-form" method="post" enctype="multipart/form-data">
          <h3 class="login-head"><center><i class="fa fa-lg fa-fw fa-user"></i>REGISTRATION</center></h3><br>

          <div class="form-group">
            <label class="control-label">Last Name</label>
            <input class="form-control" type="text" name="l_name" placeholder="Last Name" pattern="[A-Za-z]+" autofocus required="required">
          </div>

          <div class="form-group">
            <label class="control-label">First Name</label>
            <input class="form-control" type="text" name="f_name" placeholder="First Name" pattern="[A-Za-z]+" autofocus required="required">
          </div>

          <div class="form-group">
            <label class="control-label">Middle Name</label>
            <input class="form-control" type="text" name="m_name" placeholder="Middle Name" pattern="[A-Za-z]+" autofocus required="required">
          </div>

          <div class="form-group">
            <label class="control-label">Aadhar</label>
            <input class="form-control" type="text" name="aadhar" placeholder="Aadhar" pattern="[0-9]+" minlength="12" maxlength="12" autofocus required="required">
          </div>

          <div class="form-group">
            <label class="control-label">Email</label>
            <input class="form-control" type="email" name="email" placeholder="Email" autofocus required="required">
          </div>

          <div class="form-group">
            <label class="control-label">Mobile</label>
            <input class="form-control" type="text" name="mobile" placeholder="Mobile" pattern="[7-9][0-9]+" minlength="10" maxlength="10" required title="Enter number start with 7,8,9" autofocus required="required">
          </div>

          <div class="form-group">
            <label class="control-label">Date of Birth</label>
            <input class="form-control" type="text" name="dob" id="dob" placeholder="Date of Birth" autofocus required="required">
          </div>

          <div class="form-group">
            <label class="control-label">Gender</label>
            
            <select class="form-control" name="gender" autofocus required="required">
              <option value="">Select Gender</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select>
          </div>

          <div class="form-group">
            <label class="control-label">Photo</label>
            <input class="form-control" type="file" name="r_photo" accept=".jpg, .png, .jpeg, .bmp, .png"
 autofocus required="required">
          </div>

          <div class="form-group">
            <label class="control-label">Address</label>
            <textarea class="form-control" required="required" autofocus name="address">
            
            </textarea>
          </div>


          <div class="form-group">
            <label class="control-label">Documents</label>
            <input class="form-control" type="file" name="documents" accept=".zip, .rar" autofocus required="required">
          </div>

          <div class="form-group">
            <label class="control-label">Password</label>
            <input class="form-control" type="password" name="password" placeholder="Password" required="required">
          </div>
          
          <div class="form-group btn-container">
            <input type="submit" name="register" class="btn btn-primary btn-block" value="Register">
          </div>


<?php
       $method='';
                                include('../connection.php');
                                    
                                    if(isset($_POST['register']))
                                    {
                                        extract($_POST);

                                        $coulmn=array();
                                $query1=mysqli_query($con,"select r_aadhar from rationshop");
    while ($row1=mysqli_fetch_assoc($query1))
    {
      $coulmn[]=$row1['r_aadhar'];
    }

      foreach ($coulmn as $value) 
      {

       if (strpos($aadhar, $value) !== FALSE ) 
       {
        echo '<script type="text/javascript">'; 
      echo 'alert("This Aadhar Number Is Already Exist. Please register with another Aadhar number");';
      echo "window.location.href = 'registration.php';";
      echo '</script>'; 
        return true;

       }
    
      }
      
$df1=md5(time());

$name1=$_FILES['r_photo']['name'];
$size1=$_FILES['r_photo']['size'];
$type=$_FILES['r_photo']['type'];
$temp=$_FILES['r_photo']['tmp_name'];
$dst1="".$df1.$name1;
move_uploaded_file($temp,"../images/Rationshop/Photo/".$dst1);


$df2=md5(time());

$name2=$_FILES['documents']['name'];
$size2=$_FILES['documents']['size'];
$type2=$_FILES['documents']['type'];
$temp2=$_FILES['documents']['tmp_name'];
$dst2="".$df2.$name2;
move_uploaded_file($temp2,"../images/Rationshop/Documents/".$dst2);

$phone=$_POST['mobile'];
$msg='You are registered Successfully as a Rationshop';


$query=mysqli_query($con,"insert into rationshop (r_aadhar,r_email,r_mobile,r_last_name,r_first_name,r_middle_name,r_dob,r_address,r_password,r_photo,r_gender,r_documents) values ('$aadhar','$email','$mobile','$l_name','$f_name','$m_name','$dob','$address','$password','$dst1','$gender','$dst2')") or die(mysqli_error($con));

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




          <div class="form-group">
            <div class="utility">
              <div class="animated-checkbox">
                <!-- <label class="semibold-text">
                  <input type="checkbox"><span class="label-text">Stay Signed in</span>
                </label> -->
              </div>
              <!-- <p class="semibold-text mb-0"><a href="signup.php">Create New Account</a></p> -->
            </div>
          </div>





        </form>
        <form class="forget-form" action="index.html">
         <!--  <h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>Forgot Password ?</h3> -->
          
          <div class="form-group mt-20">
            <p class="semibold-text mb-0"><a href="index.php"><i class="fa fa-angle-left fa-fw"></i> Back to Login</a></p>
          </div>
        </form>





      </div>
    </section>
  </body>
  <script src="js/jquery-2.1.4.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/plugins/pace.min.js"></script>
  <script src="js/main.js"></script>
</html>

<script src="js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="js/plugins/select2.min.js"></script>
    <script type="text/javascript" src="js/plugins/bootstrap-datepicker.min.js"></script>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/pace.min.js"></script>
    <script src="js/main.js"></script>
    <!-- Data table plugin-->
    <script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
<script type="text/javascript">
      
      
      $('#dob').datepicker({
        format: "yyyy-mm-dd",
        autoclose: true,
        todayHighlight: true
      });

           
      
      $('#demoSelect').select2();
    </script>
