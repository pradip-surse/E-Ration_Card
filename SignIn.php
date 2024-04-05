<?php include "header.php"; ?>
          <div class="content">
              <div style="max-width:400px; margin:0 auto;">
              
            
            <div class="text-center">
                <h3 class="heading text-success">Login To Your account</h3>
            </div>
            
            <div class="hpanel" id="SignContent">
            <div id="signup_msg"></div>
            <div class="panel-body">
            <form data-ajax="true" data-ajax-begin="$(&#39;#signupsubmitbtn&#39;).attr(&#39;disabled&#39;,&#39;&#39;).html(&#39;Please wait..&#39;);" data-ajax-complete="$(&#39;#signupsubmitbtn&#39;).removeAttr(&#39;disabled&#39;).html(&#39;SIGN UP&#39;);" data-ajax-method="POST" data-ajax-mode="replace" data-ajax-update="#SignContent" id="signupform" method="post" >        
              <fieldset>
           
            <div class="form-group">
                <label class="control-label text-success" for="mobile number">Aadhar Number</label>
                <input class="form-control" data-val="true" required="" name="u_aadhar" placeholder="Enter Aadhar" type="text" />
                <small class="field-validation-valid text-danger" data-valmsg-for="MobileNo" data-valmsg-replace="true"></small>
            </div>
            
            
            <div class="form-group">
                <label class="control-label text-success" for="Password">Password</label>
                <input class="form-control" data-val="true" required="" data-val-required="Please enter password." id="Password" name="u_password" placeholder="Enter Password" type="password" />
                <small class="field-validation-valid text-danger" data-valmsg-for="Password" data-valmsg-replace="true"></small>
            </div>
            
                     
            
            <div class="form-group text-center">
                <button type="submit" name="login" class="btn btn-success p-l-md p-r-md font-bold ">SIGN IN</button>
                
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
    $error = "";
    if(isset($_POST['login']))
    {
        
        extract($_POST);
        
        $u_aadhar = $_POST['u_aadhar'];
        $u_password = $_POST['u_password'];
                
          
          $query="select * from user where u_aadhar='".$u_aadhar."' and u_password='".$u_password."' ";

          $result=mysqli_query($con,$query) or die(mysqli_error($con));
          if(mysqli_num_rows($result)>0)
          {
            
              $rows=mysqli_fetch_array($result);
              extract($rows);
              if($rows['u_status']=='Approved')
            { 
              $name="$u_last_name"."&nbsp;$u_first_name";
              
              $_SESSION['aadhar'] = $rows['u_aadhar'];
              $_SESSION['name']=$name;
              $_SESSION['u_photo'] = $rows['u_photo'];
              $_SESSION['mobile'] = $rows['u_mobile'];
              $_SESSION['income'] = $rows['u_income'];

              echo "<script>";
              echo "alert('Login Successfully');";
              echo "window.location.href='index.php';";
              echo "</script>";
            }
            else
            {
              echo "<script>";
              echo "alert('Still you are not approved by Admin');";
              echo "window.location.href='SignIn.php';";
              echo "</script>";
            }                   

          }

          else
          {
              echo "<script>";
              echo "alert('Aadhar or Password is Invalid');";
              echo "window.location.href='SignIn.php';";
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
									