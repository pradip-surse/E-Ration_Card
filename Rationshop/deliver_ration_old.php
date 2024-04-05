<?php

include 'menu.php';

?>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-edit"></i>Ration</h1>
           
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li>Deliver Ration</li>
              <li><a href="#">Ration</a></li>
            </ul>
          </div>
        </div>
        <div class="row">
        <div class="col-md-6">
            <div class="card">
              
  

              <h3 class="card-title">Deliver Ration</h3>
              <div class="card-body">
                <form class="form-horizontal" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    
                    <label class="control-label col-md-3">Name</label>
                    <div class="col-md-8">
                      
                      <select class="form-control" name="name" required="required" id="name">
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
                  </div>
                 
                  

                  <div class="form-group">
                    <label class="control-label col-md-3">Weight</label>
                    <div class="col-md-8">

                    <select class="form-control" name="weight" id="wt" required>
                      <option value="">Select Weight</option>                                             
                    </select>                   
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-md-3">Price</label>
                    <div class="col-md-8">
                       <select class="form-control" name="price" id="prc" required>
                      <option value="">Select Price</option>                                             
                    </select> 
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-md-3">Quantity</label>
                    <div class="col-md-8">
                      <input type="text" name="quantity" class="form-control" pattern="[0-9.]+" required="" id="qnt" placeholder="Enter Quantity of Item" onkeyup="mul()">
                    </div>
                  </div>


                  <div class="form-group">
                    <label class="control-label col-md-3">Total</label>
                    <div class="col-md-8">
                      <input type="text" readonly="" name="total" id="ttl" class="form-control" placeholder="Total Price">
                    </div>
                  </div>
            
                               
              <div class="card-footer">
                <div class="row">
                  <div class="col-md-8 col-md-offset-3">
                    <button type="submit" name="add" class="btn btn-primary icon-btn" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Add</button>&nbsp;&nbsp;&nbsp;

                    <a href="home.php"> <button class="btn btn-warning icon-btn" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Cancel</button></a>&nbsp;&nbsp;&nbsp;
                  </div>
                </div>
              </div> 

              

<?php
if (isset($_POST['add']))
 {

  extract($_POST);
  

  $query=mysqli_query($con,"insert into delivered_ration (r_aadhar,u_aadhar,item_name,item_weight,item_price,total) values ('".$_SESSION['aadhar']."','".$_GET['u_aadhar']."','$name','$weight','$price','$total')") or die(mysqli_error($con));
    if($query)
    {
      
      echo "<script>";
      echo "alert('Ration Delivered Successfully');";
      echo 'window.location.href="'.$_GET['url'].'"';
      echo "</script";
    }
    else
      {
      echo "<script>";
      echo "alert('Not Delier');";
      echo 'window.location.href="'.$_GET['url'].'"';
      echo "</script";
    }
}
?>



                </form>
<script>


function mul() 
{
        var txtFN1 = parseInt(document.getElementById('prc').value);
        var txtSN1 = parseInt(document.getElementById('qnt').value);
        var result = parseInt(txtFN1) * parseInt(txtSN1);
        document.getElementById('ttl').value = result;

}



</script>

                

              </div>
       
            </div>
          </div>
         
          <div class="clearix"></div>
          
        </div>
      </div>
    <?php
include 'admin-footer.php';
    ?>
    

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
        var d = $("#name option:selected").val();
            
        $.ajax({
            type: "POST",
            url: "model1.php", 
            data: { name1 : d,
             } 
        }).done(function(data){
            $("#prc").html(data);
        });
    });
});
</script>

