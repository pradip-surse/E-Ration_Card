<?php include "header.php"; ?>
<div class="content">
<div class="container">
 
<br>
<div style="overflow: scroll;">
<table id="example" class="display nowrap table-bordered table-hover" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th align="center">Sr. No.</th>       
        <th align="center">Service Provider Name</th>
        <th align="center">Service Provider Mob</th>
        <th align="center">Veg or Nonveg</th>
        <th align="center">Order Date</th>
        <th align="center">Delivered Date</th>
                    
      </tr>
        </thead>
    <tbody>
      
      <?php

        $query="select * from tiffin_order where user_mob='".$_SESSION['user_mob']."' and order_status='Delivered' ORDER BY order_id DESC";
        $res=mysqli_query($con,$query)or die (mysqli_error($con));
        $counter=0;
        while($row=mysqli_fetch_array($res))
        {
        extract($row)

      ?>

      <tr>
        <td><?php echo ++$counter ?></td>
        <td><?php echo $row['service_provider_name']?></td>
        <td><?php echo $row['service_provider_mob']?></td>
        <td><?php echo $row['veg_or_nonveg']?></td>
        <td><?php echo $row['order_date']?></td>
        <td><?php echo $row['action_date']?></td>
        
      </tr>
      <?php
        }
        ?>
  
    </tbody>
</table>
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