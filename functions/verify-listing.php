<?php 

include "../dbconnection.php";

if(isset($_POST['pid']))
{
	$pid = $_POST['pid'];
	$query = "UPDATE buy_sell_property_list SET validated = 1 WHERE p_id = ".$pid;

		if($con2->query($query)){

		echo 1;
	} else
	{
		echo $con -> error;
	}
}


if(isset($_POST['av_pid']))
{
	$pid = $_POST['av_pid'];
	$query = "UPDATE buy_sell_property_list SET aw_validate = 1 WHERE p_id = ".$pid;
	if($con2->query($query)){
		echo 1;
	} else
	{
		echo $con -> error;
	}

}

		

 ?>