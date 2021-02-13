<?php 

include "../dbconnection.php";
$status = $_POST['val'];
$id = $_POST['id'];

		$query = "UPDATE home_loan SET status = ".$status." WHERE id = ".$id;

		 if($con2->query($query)){

		 echo 1;
        } else
        {
        	echo $con -> error;
        }

 ?>