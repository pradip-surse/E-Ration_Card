<?php
include 'admin-menu.php';
?>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-th-list"></i>Yellow Card User List</h1>
            <!-- <p>Table to display analytical data effectively</p> -->
          </div>
          <div>
            <ul class="breadcrumb side">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li>User</li>
              <li class="active"><a href="#">View Yellow Card User</a></li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                
              <?php

             

              //$page='view_yellow_card_users.php';
$count=0;
//$query = mysqli_query($con,"select u.*, r.*, i.item_name,item_id from user_ration_request r, user u, item i where r.u_income='Yellow' and r.ration_status='Requested' and r.item_name=i.item_id ");

$query = mysqli_query($con,"select u.*, r.*, i.item_name,item_id from user_ration_request r, user u, item i where r.u_income='Yellow' and r.ration_status='Requested' and r.item_name=i.item_id and r.u_aadhar=u.u_aadhar ");
if(mysqli_num_rows($query)>0)
{    

  ?>    
                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
                      <th>Sr. No</th>
                      <th>Aadhar No.</th>                    
                      <th>Name</th>
                      <th>Contact</th>
                      <th>Item Name</th>
                      <th>Weight</th>
                      <th>Price</th>
                      <th>Quantity</th>
                      <th>Total</th>
                      <th>Date</th>
                      <!-- <th>Action</th> -->
                    </tr>
                  </thead>
                  <tbody>
                  <?php 
       while($result=mysqli_fetch_assoc($query))
       {
        extract($result);
        $name="$u_last_name"."&nbsp;$u_first_name"."&nbsp;$u_middle_name";
        ?>
                    <tr>
                      <td><?php echo ++$count; ?></td>
                      <td><?php echo "$u_aadhar"; ?></td>
                      <td><?php echo "$name"; ?></td>
                     <td><?php echo "$u_mobile"; ?></td>
                     <td><?php echo "$item_name"; ?></td>
                     <td><?php echo "$item_weight"; ?></td>
                     <td><?php echo "$item_price"; ?></td>
                     <td><?php echo "$item_quantity"; ?></td>
                     <td><?php echo "$total"; ?></td>
                     <td><?php echo "$request_date"; ?></td>
                     
                     <!-- <td> --><!-- <a href="displayplace.php?id=<?=$id?>"><input type="button" value="View" class="btn btn-primary" /></a> -->
                              
                              
                              <!-- <a data-toggle="tooltip" title="Deliver Ration" class="btn btn-warning" href="deliver_ration.php?id=<?=$request_id?>&mobile=<?=$u_mobile?>&url=<?=$page?>"><i class="fa fa-lg fa-thumbs-up"></i></a> -->

                              <!-- <a data-toggle="tooltip" title="View" class="btn btn-danger" href="view_user_ration_history.php?u_aadhar=<?=$u_aadhar?>" ><i class="fa fa-lg fa-list"></i></a> -->
                             
                                      
                    <!--   </td>  -->

                     
                     
                    </tr>
                   <?php

       }
      ?>
                  </tbody>
                </table>
                <?php
              }
                else
                {
                  ?>
                  <center>
                  <?php
                  echo "NO USERS";
                }

?>
</center>
              </div>
            </div>
          </div>
        </div>
      </div>
    
    <?php
    include 'admin-footer.php';
    ?>
 