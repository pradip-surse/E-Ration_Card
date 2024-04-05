
<?php
include '../connection.php';
  if(isset($_GET['id']))

  {
          

        $sel=mysqli_query($con,"select * from user where user_id='".$_GET['id']."' ");
        while ($fetch=mysqli_fetch_array($sel))
         {
          $img=$fetch["u_photo"];
          
                 
        }

          $isrc="../images/User/".$img;
          
         
          unlink($isrc);
        
                  
        
          $query= 'delete from user where user_id="'.$_GET['id'].'" ' ;
          $result = mysqli_query($con,$query);
         
   if($result)
   {
      
             echo '<script type="text/javascript">';
       echo " alert('Record Deleted Successfully....!!!');";
       echo 'window.location.href = "view_registered_users.php";';
       echo '</script>';
   }
   else
    {
      echo "Error !!!";
    }

 }