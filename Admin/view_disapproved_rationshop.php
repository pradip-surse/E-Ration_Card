<?php
include 'admin-menu.php';
?>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-th-list"></i>Disapproved Rationshop List</h1>
            <!-- <p>Table to display analytical data effectively</p> -->
          </div>
          <div>
            <ul class="breadcrumb side">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li>Rationshop</li>
              <li class="active"><a href="#">View Disapproved Rationshop</a></li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
              <?php
$count=0;
$query = mysqli_query($con,"select * from rationshop where r_status='Disapproved' ");
if(mysqli_num_rows($query)>0)
{    

  ?>    
  <div style="overflow: scroll;">
                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
                      <th>Sr. No</th>
                      <th>Aadhar No.</th>                    
                      <th>Name</th>
                      <th>Contact</th>
                      <th>Email</th>
                      <th>Date of Birth</th>                      
                      <th>Documents</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php 
       while($result=mysqli_fetch_assoc($query))
       {
        extract($result);
        $name="$r_last_name"."&nbsp;$r_first_name"."&nbsp;$r_middle_name";
        ?>
                    <tr>
                      <td><?php echo ++$count; ?></td>
                      <td><?php echo "$r_aadhar"; ?></td>
                      <td><?php echo "$name"; ?></td>
                     <td><?php echo "$r_mobile"; ?></td>
                     <td><?php echo "$r_email"; ?></td>
                     <td><?php echo "$r_dob"; ?></td>                     
                     
                     <td><center><a href="../images/Rationshop/Documents/<?php echo $result['r_documents']; ?>" class="btn btn-success btn-sm" download >Download</a></center></td>
                     
                     <td><!-- <a href="displayplace.php?id=<?=$id?>"><input type="button" value="View" class="btn btn-primary" /></a> -->
                              
                              <!-- <a href="updateexecutive.php?id=<?=$id?>"><input type="button" value="Update" class="btn-xs btn-warning" /></a> -->
                              <a data-toggle="tooltip" title="Approve" class="btn btn-success" href="set_approve_rationshop.php?id=<?=$rationshop_id?>"><i class="fa fa-lg fa-thumbs-up"></i></a>

                              <!-- <a data-toggle="tooltip" title="Disapprove" class="btn btn-warning" href="set_disapprove_rationshop.php?id=<?=$rationshop_id?>"><i class="fa fa-lg fa-thumbs-down"></i></a> -->

                              <a data-toggle="tooltip" title="Delete" class="btn btn-danger" href="delete_registered_rationshop.php?id=<?=$rationshop_id?>" onclick="return confirm('Are you sure you want to delete this Rationshop record?');"><i class="fa fa-lg fa-trash"></i></a>
                             
                                      
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
                else
                {
                  ?>
                  <center>
                  <?php
                  echo "NO RATIONSHOP";
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
 