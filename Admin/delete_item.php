
<?php
include '../connection.php';
  if(isset($_GET['id']))

  {
                
          $query= 'delete from item where item_id="'.$_GET['id'].'" ' ;
          $result = mysqli_query($con,$query);
         
   if($result)
   {
      
             echo '<script type="text/javascript">';
       echo " alert('Item Deleted Successfully....!!!');";
       echo 'window.location.href = "view_item.php";';
       echo '</script>';
   }
   else
    {
      echo "Error !!!";
    }

 }