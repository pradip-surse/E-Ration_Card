<?php
if(isset($_POST["name"])){
    
	 $str = $_POST['name'];
	 echo $str;
				
     include "connection.php"; 
	
	   $select1=mysqli_query($con,"select * from item where item_id='".$str."'") or die(mysqli_error($con));
	   
	 while($sele1=mysqli_fetch_array($select1))
{
	echo"<option value=\"{$sele1['item_weight']}\">{$sele1['item_weight']}</option>";

	}	 
		
}

?>