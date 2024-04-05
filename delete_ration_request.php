
<?php
include 'connection.php';
  if(isset($_GET['id']))

  {
          
        
          $query= 'delete from user_ration_request where request_id="'.$_GET['id'].'" ' ;
          $result = mysqli_query($con,$query);
         
   if($result)
   {
      
             echo '<script type="text/javascript">';
       echo " alert('Request Deleted Successfully....!!!');";
       echo 'window.location.href = "view_ration_request.php";';
       echo '</script>';
   }
   else
    {
      echo "Error !!!";
    }

 }