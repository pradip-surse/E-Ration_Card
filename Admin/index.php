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
    <title>Admin</title>
    
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <h1>Admin</h1>
      </div>
      <div class="login-box">
        <form class="login-form" method="post">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>LOGIN</h3>
          <div class="form-group">
            <label class="control-label">EMAIL</label>
            <input class="form-control" type="email" name="email" placeholder="Email" autofocus required="required">
          </div>
          <div class="form-group">
            <label class="control-label">PASSWORD</label>
            <input class="form-control" type="password" name="password" placeholder="Password" required="required">
          </div>
          
          <div class="form-group btn-container">
            <input type="submit" name="login" class="btn btn-primary btn-block" value="Login">
            <a href="../index.php" class="btn btn-warning btn-block">Back</a>
          </div>

<?php

if (isset($_POST['login'])) 
{
  
  $query="select * from admin where email='".$_POST['email']."' and password='".$_POST['password']."'";

          $result=mysqli_query($con,$query) or die(mysqli_error($con));
          if(mysqli_num_rows($result)>0)
          {
              $rows=mysqli_fetch_array($result);
              extract($rows);

        $_SESSION['id']=$rows['id'];        
        $_SESSION['email']=$rows['email'];
        $_SESSION['password']=$rows['password'];

              echo "<script>";
              echo "alert('Login Successfully');";
              echo "window.location.href='admin-home.php'";
              echo "</script";
  }
  else
         {
              echo "<script>";
              echo "alert('Email  or Password is Invalid');";
              echo "window.location.href='index.php';";
              echo "</script>";
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
          <div class="form-group">
            <label class="control-label">EMAIL</label>
            <input class="form-control" type="text" placeholder="Email">
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block"><i class="fa fa-unlock fa-lg fa-fw"></i>RESET</button>
          </div>
          <div class="form-group mt-20">
            <p class="semibold-text mb-0"><a data-toggle="flip"><i class="fa fa-angle-left fa-fw"></i> Back to Login</a></p>
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