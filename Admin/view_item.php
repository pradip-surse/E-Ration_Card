<?php
include 'admin-menu.php';
?>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-th-list"></i>Items List</h1>
            <!-- <p>Table to display analytical data effectively</p> -->
          </div>
          <div>
            <ul class="breadcrumb side">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li>Item</li>
              <li class="active"><a href="#">View Items</a></li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
              <?php
$count=0;
$query = mysqli_query($con,"select * from item");
if(mysqli_num_rows($query)>0)
{    

  ?>    
  <div style="overflow: scroll;">
                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
                      <th>Sr. No</th>
                      <th>Name</th>                    
                      <th>Weight</th>
                      <th>Price</th>                      
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php 
       while($result=mysqli_fetch_assoc($query))
       {
        extract($result);
        
        ?>
                    <tr>
                      <td><?php echo ++$count; ?></td>
                      <td><?php echo "$item_name"; ?></td>
                      <td><?php echo "$item_weight"; ?></td>
                     <td><?php echo "$item_price"; ?></td>
                                         
                     <td><!-- <a href="displayplace.php?id=<?=$id?>"><input type="button" value="View" class="btn btn-primary" /></a> -->
                              
                              <a data-toggle="tooltip" title="Edit" class="btn btn-warning" href="edit_item.php?id=<?=$item_id?>"><i class="fa fa-lg fa-edit"></i></a>
                              
                              <a data-toggle="tooltip" title="Delete" class="btn btn-danger" href="delete_item.php?id=<?=$item_id?>" onclick="return confirm('Are you sure you want to delete this Item record?');"><i class="fa fa-lg fa-trash"></i></a>
                             
                                      
                      </td> 

                     
                     
                    </tr>
                   <?php

       }
      ?>
                  </tbody>
                </table>
              </div>
                <?php
}
?>
              </div>
            </div>
          </div>
        </div>
      </div>
    
    <?php
    include 'admin-footer.php';
    ?>
 