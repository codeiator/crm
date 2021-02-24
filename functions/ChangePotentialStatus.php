<?php 

include "../dbconnection.php";
$status = $_POST['status'];
$id = $_POST['id'];

		$query = "UPDATE leads SET status = ".$status." WHERE id = ".$id;

		 if($con2->query($query)){

		 echo 1;
        } else
        {
        	echo $con -> error;
        }

 ?>