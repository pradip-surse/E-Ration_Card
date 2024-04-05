
<?php
include '../connection.php';
  if(isset($_GET['id']))

  {
          

        $sel=mysqli_query($con,"select * from rationshop where rationshop_id='".$_GET['id']."' ");
        while ($fetch=mysqli_fetch_array($sel))
         {
          $img=$fetch["r_photo"];
          $doc=$fetch["r_documents"];
          
                 
        }

          $isrc="../images/Rationshop/Photo/".$img;
          $isdoc="../images/Rationshop/Documents/".$doc;
          
         
          unlink($isrc);
          unlink($isdoc);
        
                  
        
          $query= 'delete from rationshop where rationshop_id="'.$_GET['id'].'" ' ;
          $result = mysqli_query($con,$query);
         
   if($result)
   {
      
             echo '<script type="text/javascript">';
       echo " alert('Record Deleted Successfully....!!!');";
       echo 'window.location.href = "view_registered_rationshop.php";';
       echo '</script>';
   }
   else
    {
      echo "Error !!!";
    }

 }