<?php
include '../connection.php';

if(isset($_GET['id']))

{
 
$update=mysqli_query($con,"update user set u_status='Disapproved' where user_id='".$_GET['id']."' ") or die(mysqli_error($con));
if($update)
	{
		echo '<script type="text/javascript">';
		echo " alert('User DisApproved Successfully');";
		echo 'window.location.href = "view_registered_users.php"';
		echo '</script>';
	
	}
else
	{
		echo '<script type="text/javascript">';
		echo " alert('Not Set. Please try again');";
		echo '<script>';
	
	
	}	
	
}

?>