<?php 

include "../dbconnection.php";
$pid = $_POST['pid'];

		$query = "UPDATE awaas.buy_sell_property_list SET vaildated = 1 WHERE p_id = ".$pid;

		 if($con->query($query)){

		 echo 1;
        } else
        {
        	echo $con -> error;
        }

 ?>