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
                     <select class="form-control" name="item_name" id="name" required>
                        <option value="">Select Item</option>
                        <?php             

                            $query = mysqli_query($con,"select item_name,item_id from item");
                                  while($result=mysqli_fetch_assoc($query))
                                   {
                                    extract($result);
                                    
                                    ?>
                                    <option value="<?php echo $item_id; ?>"><?php echo $item_name; ?></option>
                                    <?php
                                  }
                        ?>
                    </select>
                </div>



                <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".6s">
                                        <select class="form-control" name="weight" id="wt" required>
                                          <option value="">Select Weight</option>                                             
                                        </select> 
                </div>


                                    <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".6s">
                                        <select class="form-control" name="price" id="prc" required>
                                            <option value="">Select Price</option>                                             
                                         </select>
                                    </div>
                                    
                                                                 
                                    <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1s">
                                        <input type="text" class="form-control" id="qnt" name="quantity"  required placeholder="Enter Quantity" onkeyup="mul()" pattern="[0-9.]+"> 
                                    </div>

                                    
                                    
                                    <div class="form-group fadeInDown" data-wow-duration="500ms" data-wow-delay="1s">
                                       <input type="text" class="form-control" name="total"  placeholder="Total" id="ttl" readonly="" required="">
                                    </div>

                                    <script>


function mul() 
{
        var txtFN1 = parseInt(document.getElementById('prc').value);
        var txtSN1 = parseInt(document.getElementById('qnt').value);
        var result = parseInt(txtFN1) * parseInt(txtSN1);
        document.getElementById('ttl').value = result;

}



</script>
  

                                    <div id="submit" class="wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1.4s">
                                        <input type="submit" class="btn btn-success btn-send" value="Add" name="request" >
                                       
                                    </div> 

        </fieldset>
</form>





<?php
                                include('connection.php');
                                    error_reporting('');
                                    if(isset($_POST['request']))
                                    {
                                        extract($_POST);

                                        $phone=$_SESSION['mobile'];
                                        $msg='Ration Request Successfully';

    

            $query=mysqli_query($con,"insert into user_ration_request (u_aadhar,item_name,item_weight,item_price,item_quantity,total,ration_status,u_income) values ('".$_SESSION['aadhar']."','$item_name','$weight','$price','$quantity','$total','Requested','".$_SESSION['income']."')") or die(mysqli_error($con));

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
                                echo "alert('Request Successfully!!! ');";
                                echo "window.location.href='ration_request.php'";
                                echo "</script";
                              }                           
             
          }
                                        else
                                        {
                                            echo"<script>";
                                            echo"Error While Request. Please try again";
                                            echo"</script>";
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






    <script src="js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript">
$(document).ready(function(){
  $("select#name").change(function(){
        var d = $("#name option:selected").val();
    
        $.ajax({
            type: "POST",
            url: "model.php", 
            data: { name : d  } 
        }).done(function(data){
            $("#wt").html(data);
        });
    });
});
</script>


<script type="text/javascript">
$(document).ready(function(){
  $("select#name").change(function(){
        var p = $("#name option:selected").val();
            
        $.ajax({
            type: "POST",
            url: "fetch_price.php", 
            data: { name1 : p
             } 
        }).done(function(data){
            $("#prc").html(data);
        });
    });
});
</script>
