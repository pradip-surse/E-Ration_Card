<?php include "header.php"; ?>
<div class="content">
<div class="container">

<section id="service-page" class="pages service-page">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                            <h1 align="center" style="color: #02bdd5;" >View Delivered Ration</h1>
                            
                            <div class="col-md-12">
                               
                                <table class="table">
                                    <tr>
                                        <th>Sr. No</th>                                        
                                        <th>Item Name</th>
                                        <th>Weight</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                        <th>Date</th>
                                        
                                    </tr>
                                
                                <?php
                               $count=0;
                               
                               $query=mysqli_query($con,"select u.*, i.item_name,item_id from user_ration_request u, item i where u.u_aadhar='".$_SESSION['aadhar']."' and u.item_name=i.item_id and u.ration_status='Delivered'");                             
                               
                                while($row=mysqli_fetch_assoc($query))
                                {

                                  extract($row);
                                  
                                ?>
                                    <tr>
                                        <td><?php echo ++$count; ?></td>                       
                                        <td><?php echo $item_name; ?></td>
                                        <td><?php echo $item_weight; ?></td>
                                        <td><?php echo $item_price; ?></td>
                                        <td><?php echo $item_quantity; ?></td>
                                        <td><?php echo $total; ?></td>
                                        <td><?php echo $delivery_date; ?></td>
                                       
                                        
                                    </tr>
                                    <?php
                                  }
                                
                                    ?>
                                    
                                </table>
                            </div>                            
                        </div>

                    </div>
                    
                </div>
                </section>
            </div>
        

















</div>


<script>
      
      
      $(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            {
            "extend": "colvis",
            "text": "<i class='fa fa-search bigger-110 blue'></i> <span class='hidden'>Show/hide columns</span>",
            "className": "btn btn-white btn-primary btn-bold",
            columns: ':not(:first):not(:last)'
            },
            {
            "extend": "copy",
            "text": "<i class='fa fa-copy bigger-110 pink'></i> <span class='hidden'>Copy to clipboard</span>",
            "className": "btn btn-white btn-primary btn-bold"
            },
            {
            "extend": "csv",
            "text": "<i class='fa fa-database bigger-110 orange'></i> <span class='hidden'>Export to CSV</span>",
            "className": "btn btn-white btn-primary btn-bold"
            },
            {
            "extend": "excel",
            "text": "<i class='fa fa-file-excel-o bigger-110 green'></i> <span class='hidden'>Export to Excel</span>",
            "className": "btn btn-white btn-primary btn-bold"
            },
            {
            "extend": "pdf",
            "text": "<i class='fa fa-file-pdf-o bigger-110 red'></i> <span class='hidden'>Export to PDF</span>",
            "className": "btn btn-white btn-primary btn-bold"
            },
            {
            "extend": "print",
            "text": "<i class='fa fa-print bigger-110 grey'></i> <span class='hidden'>Print</span>",
            "className": "btn btn-white btn-primary btn-bold",
            autoPrint: false,
            message: 'View All Courses'
            }
           
        ]
    } );
  
} );
      </script>

    
</div>

          </div>
    
    
    
<?php include "footer.php"; ?>

