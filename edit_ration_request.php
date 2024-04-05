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
                <?php
                        if(isset($_GET['id']))
                        {
                            $query=mysqli_query($con,"select u.*, i.item_name,item_id from user_ration_request u, item i where u.request_id='".$_GET['id']."' and u.item_name=i.item_id ");
                                    $row=mysqli_fetch_array($query);
                                    extract($row);
                        ?>

                <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".6s">
                     <select class="form-control" name="item_name" id="name" required>
                      <option value="<?php echo $item_name; ?>"><?php echo $item_name; ?></option>
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
                                          <option value="<?php echo $item_weight; ?>"><?php echo $item_weight; ?></option>
                                          <option value="">Select Weight</option>                                             
                                        </select> 
                </div>


                                    <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".6s">
                                        <select class="form-control" name="price" id="prc" required>
                                          <option value="<?php echo $item_price; ?>"><?php echo $item_price; ?></option>
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
                                        <input type="submit" class="btn btn-success btn-send" value="Edit" name="edit" >

                                        <!-- <input type="submit" class="btn btn-success btn-send" value="Edit" name="edit" > -->
                                        <a href="view_ration_request.php" class="btn btn-danger btn-send" value="Cancel">Cancel</a>
                                       
                                    </div> 
<?php
}
?>
        </fieldset>
</form>




                                 <?php
                        
                        if(isset($_POST['edit']))                      
                    {


    extract($_POST);
    
                $upquery= 'update user_ration_request set                          
                          item_name="'.$_POST['item_name'].'" , 
                          item_weight="'.$_POST['weight'].'" , 
                          item_price="'.$_POST['price'].'" , 
                          item_quantity="'.$_POST['quantity'].'" ,                  
                          total="'.$_POST['total'].'"                                                                           
                          where request_id="'.$_GET['id'].'" ' ;

                          

                          $upresult = mysqli_query($con,$upquery);
                          if($upresult)
                            {
                                echo "<script>";
                                echo "alert('Edited Successfully');";
                                echo "window.location.href='view_ration_request.php';";
                                echo "</script>";
                            }
                            else
                            {
                                echo "<script>";
                                echo "alert('Error! Not Edited');";
                                echo "window.location.href='view_ration_request.php';";
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
