<?php include "header.php"; ?>
          <div class="content">
              <div style="max-width:400px; margin:0 auto;">
              
            
            <div class="text-center">
                <h3 class="heading text-success">Login To Your account</h3>
            </div>
            
            <div class="hpanel" id="SignContent">
            <div id="signup_msg"></div>
            <div class="panel-body">
            <form data-ajax="true" data-ajax-begin="$(&#39;#signupsubmitbtn&#39;).attr(&#39;disabled&#39;,&#39;&#39;).html(&#39;Please wait..&#39;);" data-ajax-complete="$(&#39;#signupsubmitbtn&#39;).removeAttr(&#39;disabled&#39;).html(&#39;SIGN UP&#39;);" data-ajax-method="POST" data-ajax-mode="replace" data-ajax-update="#SignContent" id="signupform" method="post">        <fieldset>
           
            <div class="form-group">
                <label class="control-label text-success" for="mobile number">Mobile number</label>
                <input class="form-control" data-val="true" required="" data-val-regex="Please enter a valid Mobile number." id="MobileNo" name="user_mob" placeholder="Enter Mobile" type="text" />
                <small class="field-validation-valid text-danger" data-valmsg-for="MobileNo" data-valmsg-replace="true"></small>
            </div>
            
            
            <div class="form-group">
                <label class="control-label text-success" for="Password">Password</label>
                <input class="form-control" data-val="true" required="" data-val-length-max="100" data-val-length-min="6" data-val-required="Please enter password." id="Password" name="user_password" placeholder="Enter Password" type="password" />
                <small class="field-validation-valid text-danger" data-valmsg-for="Password" data-valmsg-replace="true"></small>
            </div>
            
                     
            
            <div class="form-group text-center">
                <button type="submit" name="submit" class="btn btn-success p-l-md p-r-md font-bold ">SIGN IN</button>
                
                <a href="index.php" type="submit" class="btn btn-default p-l-md p-r-md font-bold" id="signupsubmitbtn"> BACK </a>
            </div>

        </fieldset>
</form>
</div>

<div class="panel-footer">
    <a href="SignUp.php" class="btn btn-success btn-sm">Create an Account</a>
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

									
								<?php
$exe_mob=$_GET['exe_mob'];
$exe_name=$_GET['exe_name'];

//$menu_url1 = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
                      //echo $menu_url1;

$url="veiw_menu.php?exe_mob=$exe_mob&exe_name=$exe_name";

if(isset($_POST['submit']))
{
  
  $user_mob = mysqli_real_escape_string($con, $_POST["user_mob"]);
  $password = mysqli_real_escape_string($con, $_POST["user_password"]);

                                 
 $query="select * from user where user_mob='$user_mob' and user_password='$password' ";

 $result=mysqli_query($con,$query) or die(mysqli_error($con));
 
if(mysqli_num_rows($result)>0)
      {
             $row=mysqli_fetch_array($result);
            extract($row);
                  
           //session_start();
          $_SESSION['user_id']=$row['user_id'];
          $_SESSION['user_mob']=$row['user_mob'];
          $_SESSION['user_name']=$row['user_name'];
          $_SESSION['user_city']=$row['user_city'];
          $_SESSION['user_main_area']=$row['user_main_area'];
          $_SESSION['user_sub_area']=$row['user_sub_area'];
          $_SESSION['user_address']=$row['user_address'];
          $_SESSION['user_landmark']=$row['user_landmark'];
          $_SESSION['user_tiffin_order_address']=$row['tiffin_order_address'];

      echo "<script>";
      //echo "alert('Login Successfully');";
      //echo "window.location.href='veiw_menu.php';";
      echo 'window.location.href = "'.$url.'"';
      echo "</script>";           
      }                       
      else
     {
          echo "<script>";
          echo "alert('Email or Password is Invalid');";
          echo "window.location.href='SignIn_order.php';";
          echo "</script>";
    }
}
?>	
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
									