<?php
include 'menu.php';
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
                <h3 style="text-align: center; color: red;"><?php echo $_GET['name']; ?></h3>
                
              <?php

$count=0;
$query = mysqli_query($con,"select d.*, i.item_name,item_id from delivered_ration d, item i where d.u_aadhar='".$_GET['u_aadhar']."' and d.item_name=i.item_id order by date DESC ");
if(mysqli_num_rows($query)>0)
{    

  ?>    
                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
                      <th>Sr. No</th>
                      <th>Aadhar No.</th>                    
                      <th>Name</th>
                      <th>Weight</th>
                      <th>Price</th>
                      <th>Total</th>
                      <th>Date</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php 
       while($result=mysqli_fetch_assoc($query))
       {
        extract($result);
        // $name="$u_last_name"."&nbsp;$u_first_name"."&nbsp;$u_middle_name";
        ?>
                    <tr>
                      <td><?php echo ++$count; ?></td>
                      <td><?php echo "$u_aadhar"; ?></td>
                      <td><?php echo "$item_name"; ?></td>
                      <td><?php echo "$item_weight"; ?></td>
                      <td><?php echo "$item_price"; ?></td>
                      <td><?php echo "$total"; ?></td>                    
                      <td><?php echo "$date"; ?></td>
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
                  echo "No History";
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
 