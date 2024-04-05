

<?php
include '../connection.php';
  if(isset($_GET['id']))

  {         
  
        
          $query= 'delete from user where user_id="'.$_GET['id'].'" ' ;
          $result = mysqli_query($con,$query);
         
   if($result)
   {
      
             echo '<script type="text/javascript">';
       echo " alert('User Record Deleted');";
       echo 'window.location.href = "view_registered_users.php";';
       echo '</script>';
   }
   else
    {
      echo '<script type="text/javascript">';
       echo " alert('User Record Not Deleted');";
       echo 'window.location.href = "view_registered_users.php";';
       echo '</script>';
    }

 }