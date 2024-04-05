<?php
include 'admin-menu.php';
?>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-th-list"></i>Approved User List</h1>
            <!-- <p>Table to display analytical data effectively</p> -->
          </div>
          <div>
            <ul class="breadcrumb side">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li>User</li>
              <li class="active"><a href="#">View Approved User</a></li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
              <?php
$count=0;
$query = mysqli_query($con,"select * from user where u_status='Approved' ");
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
                      <th>Date of Birth</th>
                      <th>Address</th>
                      <th>Action</th>
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
                     <td><?php echo "$u_dob"; ?></td>
                     <td><?php echo "$u_address"; ?></td>
                     
                     <td><!-- <a href="displayplace.php?id=<?=$id?>"><input type="button" value="View" class="btn btn-primary" /></a> -->
                              
                              <!-- <a href="updateexecutive.php?id=<?=$id?>"><input type="button" value="Update" class="btn-xs btn-warning" /></a> -->
                              <!-- <a data-toggle="tooltip" title="Approve" class="btn btn-success" href="set_approve_user.php?id=<?=$user_id?>"><i class="fa fa-lg fa-thumbs-up"></i></a> -->

                              <a data-toggle="tooltip" title="Disapprove" class="btn btn-warning" href="set_disapprove_user.php?id=<?=$user_id?>&mobile=<?php echo $u_mobile; ?>"><i class="fa fa-lg fa-thumbs-down"></i></a>

                              <a data-toggle="tooltip" title="Delete" class="btn btn-danger" href="delete_registered_user.php?id=<?=$user_id?>&mobile=<?php echo $u_mobile; ?>" onclick="return confirm('Are you sure you want to delete this User record?');"><i class="fa fa-lg fa-trash"></i></a>
                             
                                      
                      </td> 

                     
                     
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
                  echo "NO APPROVED USERS";
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
 