
<?php 

include "header.php";
 ?>


    <div class="container">

       <div class="row">
            <div class="col-md-4">
                <div class="text-center m-t-lg">
                    <img src="images/Home/front_image.png" class="img-responsive"  />
                 
                </div>
            </div>
          
            <div class="col-md-4">
                <div class="hpanel m-t-md input-dark-border request-box" id="request_form_container" style="margin-top: 27px;">

                    <div class="panel-body text-center" style="padding-bottom: 26px; padding-top: 15px;">
                         <h3><b><a href="order_tiffin.php" class="btn btn-success btn-lg p-l-md p-r-md font-bold" id="sellbutton" type="submit">ORDER YOUR TIFFIN</a> </b></h3>

    <a href="SignIn.php" class="btn btn-success btn-sm">Already Account</a>
    <a href="SignUp.php" class="btn btn-success btn-sm">Create an Account</a>


                 <!-- <div class="hpanel" id="SignContent">
            <div id="signup_msg"></div>
            <div class="panel-body">
            <form data-ajax="true" data-ajax-begin="$(&#39;#signupsubmitbtn&#39;).attr(&#39;disabled&#39;,&#39;&#39;).html(&#39;Please wait..&#39;);" data-ajax-complete="$(&#39;#signupsubmitbtn&#39;).removeAttr(&#39;disabled&#39;).html(&#39;SIGN UP&#39;);" data-ajax-method="POST" data-ajax-mode="replace" data-ajax-update="#SignContent" id="signupform" method="post">        <fieldset>
           
            <div class="form-group">
                

                <select class="form-control" id="city" name="City_id" required>
                                                
                                                <option value="">Select City</option>
                                                 <?php
                                                                        
$city=mysqli_query($con,"select DISTINCT c.*, m.city_id from city c, menu m where m.city_id=c.City_id ");
                  while($city_row=mysqli_fetch_assoc($city))
                                           {
                                               extract($city_row);
                                                       ?>
    <option value="<?php echo $city_row['City_id'];?>"><?php echo $city_row['City_name'];?></option>
                                                                    <?php 
                                                                    } 
                                                                    ?>                                          
                                            </select>

                <small class="field-validation-valid text-danger" data-valmsg-for="MobileNo" data-valmsg-replace="true"></small>
            </div>
            
            
          <div class="form-group">
                
                <select class="form-control" id="l_m_a" name="Mainarea_id" required>
                    <option value="">Select Main Area</option>
                    <option value="<?php echo $row['main_area'];?>"><?php echo $row['Mainarea_name'];?></option>                                                              
                </select>
                <small class="field-validation-valid text-danger" data-valmsg-for="Password" data-valmsg-replace="true"></small>
            </div> 

         <div class="form-group">
                
                <select class="form-control" id="l_m_s" name="Subarea_id" required>
                    <option value="">Select Sub Area</option>
                    <option value="<?php echo $row['sub_area'];?>"><?php echo $row['Subarea_name'];?></option>
                </select>
                <small class="field-validation-valid text-danger" data-valmsg-for="MobileNo" data-valmsg-replace="true"></small>
            </div> 
            
                     
            
            <div class="form-group text-center">
                <button type="submit" name="submit" class="btn btn-success p-l-md p-r-md font-bold ">VIEW MENU</button>
                
               <a href="index.php" type="submit" class="btn btn-default p-l-md p-r-md font-bold" id="signupsubmitbtn"> BACK </a> 
            </div>

        </fieldset>
</form>
</div>

<div class="panel-footer">
    <a href="SignUp.php" class="btn btn-success btn-sm">Already Account</a>
    <a href="SignUp.php" class="btn btn-success btn-sm">Create an Account</a>
</div>
</div> --> 
    
  
                    </div>

                </div>
            </div>

            <div class="col-md-4">
                <div class="text-center m-t-lg">
                    <img src="images/Home/front_image.png" class="img-responsive"  />
                 
                </div>
            </div>
        </div>

        
        <div class="row">
            <div class="col-md-8">
                <div class="text-center m-t-lg">
                    <img src="images/Home/front_image.png" class="img-responsive"  />
                 
                </div>
            </div>
            <!-- <div class="col-md-4">
                <div class="hpanel m-t-md input-dark-border request-box" id="request_form_container" style="margin-top: 27px;">
                    <div class="panel-body text-center" style="padding-bottom: 26px; padding-top: 15px;">
    <h3><b><a href="SignIn.php" class="btn btn-success btn-lg p-l-md p-r-md font-bold" id="sellbutton" type="submit">₹ SELL or Donate Your Scrap</a> </b></h3>
    
<form data-ajax="true" data-ajax-begin="$(&#39;#request_mobileno_fieldset&#39;).attr(&#39;disabled&#39;,&#39;&#39;); $(&#39;#sellbutton&#39;).html(&#39;Please wait..&#39;);" data-ajax-complete="$(&#39;#request_mobileno_fieldset&#39;).removeAttr(&#39;disabled&#39;); $(&#39;#sellbutton&#39;).html(&#39;₹ SELL&#39;);" data-ajax-method="POST" data-ajax-mode="replace" data-ajax-update="#request_form_container" id="form0" method="post">        <fieldset id="request_mobileno_fieldset">
          
        
            <div class="text-right phonetext">
           
            <img src="images/Home/advertisement.jpg" class="img-responsive" height="40" />
        </div>
        
        
        </fieldset>
</form>    
</div>

                </div>
            </div> -->



            <div class="col-md-4">
                <div class="hpanel m-t-md input-dark-border request-box" id="request_form_container" style="margin-top: 27px;">
                    <div class="panel-body text-center" style="padding-bottom: 26px; padding-top: 15px;">
    <h3><b><a href="SignIn.php" class="btn btn-success btn-lg p-l-md p-r-md font-bold" id="sellbutton" type="submit">₹ SELL or Donate Your Scrap</a> </b></h3>
    
<form data-ajax="true" data-ajax-begin="$(&#39;#request_mobileno_fieldset&#39;).attr(&#39;disabled&#39;,&#39;&#39;); $(&#39;#sellbutton&#39;).html(&#39;Please wait..&#39;);" data-ajax-complete="$(&#39;#request_mobileno_fieldset&#39;).removeAttr(&#39;disabled&#39;); $(&#39;#sellbutton&#39;).html(&#39;₹ SELL&#39;);" data-ajax-method="POST" data-ajax-mode="replace" data-ajax-update="#request_form_container" id="form0" method="post">        <fieldset id="request_mobileno_fieldset">
          
        
            <div class="text-right phonetext">
           
            <img src="images/Home/advertisement.jpg" class="img-responsive" height="40" />
        </div>
        
        
        </fieldset>
</form>    
</div>

                </div>
            </div>
        </div>
    </div>
   
</header>
<section>
    <div class="container text-center text-success">
        <h2>
            Why The Online Bhangar Bazar?
            <br />
            <small>
                You have various reasons to choose us
            </small>
        </h2>
        <div class="p-l-md p-r-md">
            <img src="images/Home/process_cycle.jpg" class="img-responsive" />
        </div>
        
    </div>
</section>

<section>
    <div class="container text-center text-success">
        <h2>
            Scrap Price
            <br />
            
        </h2>
        <div class="p-l-md p-r-md">
            <img src="images/Home/price_rates.png" class="img-responsive" />
        </div>
        
    </div>
</section>

<?php include "footer.php"; ?>



<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $("select#city").change(function(){
        var s = $("#city option:selected").val();
       
        $.ajax({
            type: "POST",
            url: "main_area.php",
            data: { city_id : s  }
        }).done(function(data){
            $("#l_m_a").html(data);           
        });
    });
});
</script>

<script type="text/javascript">
$(document).ready(function(){
  $("select#l_m_a").change(function(){
        var s = $("#l_m_a option:selected").val();
       
        $.ajax({
            type: "POST",
            url: "sub_area.php",
            data: { main_area : s  }
        }).done(function(data){
            $("#l_m_s").html(data);           
        });
    });
});
</script>