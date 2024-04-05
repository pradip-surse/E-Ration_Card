<?php
include '../connection.php';
error_reporting('');
if(isset($_GET['id']))

{

$phone=$_GET['mobile'];
$msg='You are Approved Successfully by Admin.';
$update=mysqli_query($con,"update user set u_status='Approved' where user_id='".$_GET['id']."' ") or die(mysqli_error($con));
if($update)
	// {
	// 	echo '<script type="text/javascript">';
	// 	echo " alert('User Approved Successfully');";
	// 	echo 'window.location.href = "view_approved_users.php"';
	// 	echo '</script>';
	
	// }

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
                      echo " alert('User Approved Successfully');";
                      echo 'window.location.href = "view_approved_users.php"';
                      echo '</script>';
  
  }                         
             
          }

else
	{
		echo '<script type="text/javascript">';
		echo " alert('Not Set. Please try again');";
		echo '<script>';
	
	
	}	
	
}

?>