<?php 

include "../dbconnection.php";
$pid = $_POST['pid'];

		$query = "UPDATE buy_sell_property_list SET validated = 1 WHERE p_id = ".$pid;

		 if($con2->query($query)){

		 echo 1;
        } else
        {
        	echo $con -> error;
        }

 ?>