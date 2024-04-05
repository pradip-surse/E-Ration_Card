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
              <li><a href="#">Edit Item</a></li>
            </ul>
          </div>
        </div>
        <div class="row">
        <div class="col-md-6">
            <div class="card">

              <h3 class="card-title">Edit Item</h3>
              <?php
  if(isset($_GET['id']))
  {
   
   
   $query = mysqli_query($con,"select * from item where item_id='".$_GET['id']."' ") or die(mysqli_error($con));
      
          $row = mysqli_fetch_array($query);
          extract($row);
  
  
    ?>

              <div class="card-body">
                <form class="form-horizontal" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label class="control-label col-md-3">Name</label>
                    <div class="col-md-8">
                      <input class="form-control" type="text" name="name" value="<?php echo $item_name; ?>" required>
                    </div>
                  </div>
                  

                  <div class="form-group">
                    <label class="control-label col-md-3">Weight</label>
                    <div class="col-md-8">

                    <select class="form-control" name="weight" required>
                      <option value="<?php echo $item_weight; ?>"><?php echo $item_weight; ?></option>
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
                      <input class="form-control" type="text" name="price" pattern="[0-9]+" value="<?php echo $item_price; ?>" required>
                    </div>
                  </div>
            
                               
              <div class="card-footer">
                <div class="row">
                  <div class="col-md-8 col-md-offset-3">
                    <button type="submit" name="edit" class="btn btn-primary icon-btn" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Edit</button>&nbsp;&nbsp;&nbsp;

                    
                    <a href="view_item.php" class="btn btn-primary icon-btn" type="button" <i class="fa fa-fw fa-lg fa-check-circle"></i>Cancel</button>&nbsp;&nbsp;&nbsp;></a>
                  </div>
                </div>
              </div> 

                </form>
              </div>
              <?php

}
  ?>



<?php

if(isset($_POST['edit']))
{
 extract($_POST);

 
 $query=mysqli_query($con,"update item set
 item_name='".$_POST['name']."',
 item_weight='".$_POST['weight']."',
 item_price='".$_POST['price']."'
 
 where item_id='".$_GET['id']."' ") or die(mysqli_error($con));
 if($query)
                          {
       echo '<script type="text/javascript">';
       echo " alert('Item Edited Successfuly');";
       echo 'window.location.href = "view_item.php";';
       echo '</script>';
  
                      }
                     else
                     {
       echo '<script type="text/javascript">';
       echo "alert('Eror Occured');";
                        die(mysqli_error($con));
         echo '<script>';
                      
  
                     }
}


?>
       
            </div>
          </div>
         
          <div class="clearix"></div>
          
        </div>
      </div>
    <?php
include 'admin-footer.php';
    ?>
    