<?php
include '../connection.php';

if(isset($_GET['id']))

{

 
$update=mysqli_query($con,"update rationshop set r_status='Approved' where rationshop_id='".$_GET['id']."' ") or die(mysqli_error($con));
if($update)
	{
		echo '<script type="text/javascript">';
		echo " alert('Rationshop Approved Successfully');";
		echo 'window.location.href = "view_approved_rationshop.php"';
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