

<?php
include '../connection.php';
session_start();
error_reporting('');
date_default_timezone_set("Asia/Kolkata");
$system_date=date("Y-m-d H:i:s");
if(isset($_GET['id']))

{

 $phone=$_GET['mobile'];
$msg='Ration Delivered Successfully';
$update=mysqli_query($con,"update user_ration_request set ration_status='Delivered', r_aadhar='".$_SESSION['aadhar']."',delivery_date='".$system_date."' where request_id='".$_GET['id']."' ") or die(mysqli_error($con));
if($update)
  
  {
            

              $ch = "SMTEST";

              $apiurl = "http://sms.happysms.in/api/sendhttp.php?authkey=242446A57b8VBMQpOd5bc06387&mobiles=$phone&message=$msg&sender=$ch&route=4&country=91";

                              $ch = curl_init($apiurl);

                              if($method == "GET")
                              {
                                  curl_setopt($ch, CURLOPT_POST,1);
                                  curl_setopt($ch, CURLOPT_POSTFIELDS,$apiurl);
                              } 
                              else 
                              {
                                  $get_url = $apiurl;
                                  curl_setopt($ch, CURLOPT_POST,0);
                                  curl_setopt($ch, CURLOPT_URL, $get_url);
                              }

                              curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
                              curl_setopt($ch, CURLOPT_HEADER,0);
                              // DO NOT RETURN HTTP HEADERS
                              curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
                              // RETURN THE CONTENTS OF THE CALL
                              $return_val = curl_exec($ch);

                              if($return_val=="")
                              {
                                echo "Process Failed"; 
                              }
                              else
                              {
                      echo '<script type="text/javascript">';
                      echo " alert('Delivered Successfully');";
                      echo 'window.location.href = "'.$_GET['url'].'"';
                      echo '</script>';
  
  }                         
             
          }
else
  {
    echo '<script type="text/javascript">';
    echo " alert('Not Delivered. Please try again');";
    echo '<script>';
  
  
  } 
  
}

?>