<?php 

include "../dbconnection.php";
$pid = $_POST['pid'];

		$query = "DELETE FROM buy_sell_property_list WHERE p_id =".$pid;

		 if($con2->query($query)){

		 echo 1;
        } else
        {
        	echo 0; //$con -> error;
        }

 ?>