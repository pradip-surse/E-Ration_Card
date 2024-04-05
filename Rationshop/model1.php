<?php
if(isset($_POST["name1"])){
    
    $str1 = $_POST['name1'];
				
     include "../connection.php"; 

	
	   $select2=mysqli_query($con,"select * from item where item_id='".$str1."' ") or die(mysqli_error($con));
	   
	 while($sele2=mysqli_fetch_array($select2))
{
	
	echo"<option value=\"{$sele2['item_price']}\">{$sele2['item_price']}</option>";

	}	 
		
}
?>