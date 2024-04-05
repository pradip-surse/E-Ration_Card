<?php include "header.php"; ?>
<div class="content">
<div class="container">
 


<form method="post" enctype="multipart/form-data">
    <div class="row">
      
            <div class="hpanel content-box">
              
                <div class="panel-body text-justify">
                  <center>
                    <h3 style="color: red;">
                  <?php
                      echo $_GET['exe_name'];
                      $exe_mob=$_GET['exe_mob'];
                      $exe_name=$_GET['exe_name'];
                  ?>
                </h3>
                </center>
                   
                   <div class="col-md-2">
                  
                    </div>
                     

                    <div class="col-md-4">
                      <h4 style="color: #62cb31"><center>NonVeg</center></h4>
                        <div class="hpanel text-center">
                            <div class="panel-body ratecard md">
                                <div class="media">
                                    <div class="media-body">
                            
                   <div class="row">
                    <?php
                      $veg_nonveg1='Nonveg';
                       $nonveg1="select image from menu where service_provider_mob='".$_GET['exe_mob']."' and veg_nonveg='Nonveg' ";

                       $nonvegque1=mysqli_query($con,$nonveg1);
                       $nonvegres1=mysqli_fetch_assoc($nonvegque1);
                                           
                   ?>
                      <div class="col-md-4">
                      </div>
                        <div class="col-md-4">
                          <img class="editable img-responsive" alt="" id="avatar2" src="Service_Provider/menu_images/<?php echo $nonvegres1['image']; ?>" width="100" height="100" />
                        </div>
                        <div class="col-md-4">
                        </div>
                      </div>
                        
                      <div class="row">
                        <?php
                      $veg_nonveg='Nonveg';
                       $nonveg="select * from menu where service_provider_mob='".$_GET['exe_mob']."' and veg_nonveg='Nonveg' ";

                       $nonvegque=mysqli_query($con,$nonveg);
                       while($nonvegres=mysqli_fetch_assoc($nonvegque))
                       {
                           extract($nonvegres);
                           $_SESSION['veg_nonveg']=$nonvegres['veg_nonveg'];
                                                  
                   ?>
                        <div class="col-md-6">
                         
                        <?php echo $nonvegres['menu_name']; ?>
                        </div>

                        <div class="col-md-6">

                        <?php echo $nonvegres['quantity']; ?>
                        </div>
                        <?php
                    }
                  ?>
                        
                      

                  </div>

                  

                  <?php
                
    $query4="select tiffin_cost,veg_nonveg,service_provider_mob,service_provider_name from menu where service_provider_mob='".$_GET['exe_mob']."' and veg_nonveg='Nonveg' ";

                       $que4=mysqli_query($con,$query4);
                       $res4=mysqli_fetch_assoc($que4);
                                             
                       
                   ?>
                   <br>
                      <button type="submit" class="btn btn-success p-l-md p-r-md font-bold " disabled="" >Cost: <?php echo $res4['tiffin_cost']; ?></button>

                      <?php
                      

                      if (!isset($_SESSION['user_mob'])) 
                      {

                        $menu_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
                    
                        ?>
                       
                        <a class="btn btn-success p-l-md p-r-md font-bold " href="SignIn_order.php?exe_mob=<?php echo $exe_mob; ?>&exe_name=<?php echo $exe_name; ?>" title="Approve Service Provider Request">Order</a>
                        <?php
                      }
                      else
                      {
                      ?>
                        <a class="btn btn-success p-l-md p-r-md font-bold " onClick="return confirm('Are You Sure You Want To Order ?');"  href="insert_nonveg_sp.php?veg_nonveg=<?php echo $veg_nonveg; ?>&exe_mob=<?php echo $service_provider_mob; ?>&exe_name=<?php echo $service_provider_name; ?>" title="Approve Service Provider Request">Order</a>
                      <?php
                      }
                      ?>
                                           
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                      <h4 style="color: #62cb31"><center>Veg</center></h4>
                        <div class="hpanel text-center">
                            <div class="panel-body ratecard md">
                                <div class="media">
                                    <div class="media-body">
                            
                   <div class="row">
                    <?php
                      $veg_nonveg2='Veg';
                       $nonveg2="select image from menu where service_provider_mob='".$_GET['exe_mob']."' and veg_nonveg='Veg' ";

                       $nonvegque2=mysqli_query($con,$nonveg2);
                       $nonvegres2=mysqli_fetch_assoc($nonvegque2);
                                           
                   ?>
                      
                        <div class="col-md-4">
                          
                        </div>
                        <div class="col-md-4">
                          <img class="editable img-responsive" alt="" id="avatar2" src="Service_Provider/menu_images/<?php echo $nonvegres2['image']; ?>" width="100" height="100" />
                          
                        </div>
                        <div class="col-md-4">
                          
                        </div>
                    </div>
                    <div class="row">
                      <?php
                        $veg_nonveg='Veg';
                       $query1="select * from menu where service_provider_mob='".$_GET['exe_mob']."' and veg_nonveg='Veg' ";

                       $que1=mysqli_query($con,$query1);
                       while($res1=mysqli_fetch_assoc($que1))
                       {
                           extract($res1);
                           $_SESSION['veg_nonveg']=$res1['veg_nonveg'];
                          
                                                     
                   ?>
                        <div class="col-md-6">
                         
                        <?php echo $res1['menu_name']; ?>
                        </div>

                        <div class="col-md-6">

                        <?php echo $res1['quantity']; ?>
                        </div>
                        <?php
                    }
                  ?>
                      
                  </div>

                  

                  <?php
                
                       $query2="select tiffin_cost,service_provider_mob,veg_nonveg from menu where service_provider_mob='".$_GET['exe_mob']."' and veg_nonveg='Veg' ";

                       $que2=mysqli_query($con,$query2);
                       $res2=mysqli_fetch_assoc($que2);                      
                       
                       
                   ?>
                   <br>
                   <button type="submit" class="btn btn-success p-l-md p-r-md font-bold" disabled="">Cost: <?php echo $res2['tiffin_cost']; ?></button>

                   <?php
                   $url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
                      if (!isset($_SESSION['user_mob'])) 
                      {
                        ?>
                      
                      <a class="btn btn-success p-l-md p-r-md font-bold " href="SignIn_order.php?url=<?php echo $url; ?>" title="Approve Service Provider Request">Order</a>
                      <?php
                      }
                      else
                      {
                      ?>
                      <a class="btn btn-success p-l-md p-r-md font-bold" onClick="return confirm('Are You Sure You Want To Order ?');"  href="insert_nonveg_sp.php?veg_nonveg=<?php echo $veg_nonveg; ?>&exe_mob=<?php echo $service_provider_mob; ?>&exe_name=<?php echo $service_provider_name; ?>" title="Tiffin Order">Order</a>
                      <?php
                      }
                      ?>

                      
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                      
                    </div>
                    <?php
                    
                       //}
                      
                   //}
            //      if(isset($_POST['order']))
            //         {
            //           extract($_POST);
                      
            //           date_default_timezone_set("Asia/Kolkata");
            //           $OrderDate = date('Y-m-d h:i:sA');
                      
            // $queryreg=mysqli_query($con,"insert into tiffin_order (service_provider_mob, service_provider_name,user_name, user_mob, user_city_id, user_mainarea_id, user_subarea_id, user_address, user_landmark, user_tiffin_address, veg_or_nonveg, order_date, order_status) values ('".$_SESSION['service_provider_mobile']."','".$_SESSION['service_provider_names']."','".$_SESSION['user_name']."', '".$_SESSION['user_mob']."', '".$_SESSION['user_city']."', '".$_SESSION['user_main_area']."','".$_SESSION['user_sub_area']."','".$_SESSION['user_address']."','".$_SESSION['user_landmark']."', '".$_SESSION['user_tiffin_order_address']."', '$veg_nonveg','$OrderDate','Ordered')") or die(mysqli_error($con));
  

            //         if($queryreg)
            //              {    
            //               echo "<script>";
            //               echo "alert('Ordered Successfully ');";
            //               //echo "window.location.href='order_tiffin.php';";
            //               echo "</script>";           
            //               }                       
                    
            //             else
            //             {
            //             echo "<script>";
            //             echo 'alert("Not Ordered. Please try again");';
            //             //echo "window.location.href='order_tiffin.php';";
            //             echo "</script>";
            //            }

            //         }


                       ?>
                    
                </div>
            </div>
     
    </div>
  </form>

   <?php
                   


                  ?>
    
</div>

          </div>
    
    
    
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