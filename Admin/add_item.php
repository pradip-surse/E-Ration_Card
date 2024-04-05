<?php

include 'admin-menu.php';

?>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-edit"></i> Item</h1>
           
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li>Item</li>
              <li><a href="#">Add Item</a></li>
            </ul>
          </div>
        </div>
        <div class="row">
        <div class="col-md-6">
            <div class="card">

              <h3 class="card-title">Add Item</h3>
              <div class="card-body">
                <form class="form-horizontal" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label class="control-label col-md-3">Name</label>
                    <div class="col-md-8">
                      <input class="form-control" type="text" name="name" placeholder="Enter Item Name" required>
                    </div>
                  </div>
                  

                  <div class="form-group">
                    <label class="control-label col-md-3">Weight</label>
                    <div class="col-md-8">

                    <select class="form-control" name="weight" required>
                      <option value="">Select Weight</option>
                      <option value="KG">KG</option>
                      <option value="GM">GM</option>
                      <option value="LTR">LTR</option>                         
                    </select>                   
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-md-3">Price</label>
                    <div class="col-md-8">
                      <input class="form-control" type="text" name="price" placeholder="Enter Item Price" pattern="[0-9]+" required>
                    </div>
                  </div>
            
                               
              <div class="card-footer">
                <div class="row">
                  <div class="col-md-8 col-md-offset-3">
                    <button type="submit" name="add" class="btn btn-primary icon-btn" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Add</button>&nbsp;&nbsp;&nbsp;
                  </div>
                </div>
              </div> 

<?php
if (isset($_POST['add']))
 {

  extract($_POST);

  $query=mysqli_query($con,"insert into item (item_name,item_weight,item_price) values ('$name','$weight','$price')") or die(mysqli_error($con));
    if($query)
    {
      
      echo "<script>";
      echo "alert('Item Added Successfully');";
      echo "window.location.href='add_item.php'";
      echo "</script";
    }
    else
      {
      echo "<script>";
      echo "alert('Not Added');";
      echo "window.location.href='add_item.php'";
      echo "</script";
    }
}
?>



                </form>
              </div>
       
            </div>
          </div>
          <!-- <div class="col-md-6">
            <div class="card">
              <h3 class="card-title">Register</h3>
              <div class="card-body">
                <form>
                  <div class="form-group">
                    <label class="control-label">Name</label>
                    <input class="form-control" type="text" placeholder="Enter full name">
                  </div>
                  <div class="form-group">
                    <label class="control-label">Email</label>
                    <input class="form-control" type="email" placeholder="Enter email address">
                  </div>
                  <div class="form-group">
                    <label class="control-label">Address</label>
                    <textarea class="form-control" rows="4" placeholder="Enter your address"></textarea>
                  </div>
                  <div class="form-group">
                    <label class="control-label">Gender</label>
                    <div class="radio">
                      <label>
                        <input type="radio" name="gender">Male
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="gender">Female
                      </label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label">Identity Proof</label>
                    <input class="form-control" type="file">
                  </div>
                  <div class="form-group">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox">I accept the terms and conditions
                      </label>
                    </div>
                  </div>
                </form>
              </div>
              <div class="card-footer">
                <button class="btn btn-primary icon-btn" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Register</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-default icon-btn" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
              </div>
            </div>
          </div> -->
          <!-- <div class="col-md-6">
            <div class="card">
              <h3 class="card-title">Customer Registration</h3>
              <div class="card-body">
                <form class="form-horizontal" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label class="control-label col-md-3">Name</label>
                    <div class="col-md-8">
                      <input class="form-control" type="text" name="name" placeholder="Enter full name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3">Email</label>
                    <div class="col-md-8">
                      <input class="form-control col-md-8" type="email" name="email" placeholder="Enter email address">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3">Contact</label>
                    <div class="col-md-8">
                      <input class="form-control col-md-8" type="text" name="contact" placeholder="Enter Your Contact">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3">Address</label>
                    <div class="col-md-8">
                      <textarea name="address" class="form-control" rows="4" placeholder="Enter your address"></textarea>
                    </div>
                  </div>     
                  <div class="form-group">
                    <label class="control-label col-md-3">Enquiry</label>
                    <div class="col-md-8">
                      <textarea name="enquiry" class="form-control" rows="4" placeholder="Enter Customer Requirement"></textarea>
                    </div>
                  </div>  

                  <div class="form-group">
                    <label class="control-label col-md-3">Status</label>
                    <div class="col-md-8">
                      <!-- <input class="form-control col-md-8" type="text" name="status"> -->
                      <!-- <select class="form-control" id="demoSelect" name="status">
                       <option>Enquiry</option>
                       <option>Hold</option>
                       <option>Buy</option>
                           
                      </select>
                    </div>
                  </div> -->


                
                   <!-- <div class="card-footer">
                <div class="row">
                  <div class="col-md-8 col-md-offset-3">
                    <button type="submit" name="register" class="btn btn-primary icon-btn"><i class="fa fa-fw fa-lg fa-check-circle"></i>Register</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-default icon-btn" href="admin-home.php"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                  </div>
                </div>
              </div>  -->

<!-- <?php
// if (isset($_POST['register']))
//  {
  // extract($_POST);
  // date_default_timezone_set("Asia/Kolkata");
  // $date = date("d-m-Y");

  // $query=mysqli_query($con,"insert into customer (c_email,name,email,contact,address,enquiry,date,status) values ('".$_SESSION['admin_email']."','$name','$email','$contact','$address','$enquiry','$date','$status')") or die(mysqli_error($con));
    // if($query)
    // {
      
    //   echo "<script>";
    //   echo "alert('Customer Account Created Successfully');";
    //   echo "window.location.href='admin-add-customer.php'";
    //   echo "</script";
    // }
    // else
    //   {
      // echo "<script>";
      // echo "alert('Account Not Created');";
      // echo "window.location.href='admin-add-customer.php'";
      // echo "</script";
//     }
// }
?>
 -->


                <!-- </form>
              </div>
       
            </div> -->
          <!-- </div> -->
          <div class="clearix"></div>
          
        </div>
      </div>
    <?php
include 'admin-footer.php';
    ?>
    <script src="js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript">
$(document).ready(function(){
  $("select#vehicle_type").change(function(){
        var d = $("#vehicle_type option:selected").val();
    
        $.ajax({
            type: "POST",
            url: "model.php", 
            data: { vehicle_type : d  } 
        }).done(function(data){
            $("#vehicle_name").html(data);
        });
    });
});
</script>


<script type="text/javascript">
$(document).ready(function(){
  $("select#vehicle_name").change(function(){
        var d = $("#vehicle_name option:selected").val();
    
        $.ajax({
            type: "POST",
            url: "model1.php", 
            data: { vehicle_name : d  } 
        }).done(function(data){
            $("#vehicle_model").html(data);
        });
    });
});
</script>