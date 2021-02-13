<?php 

include "../dbconnection.php";
$pid = $_POST['pid'];

		$query = "UPDATE projects_add SET validated = 1 WHERE project_id = ".$pid;

		 if($con2->query($query)){

		 echo 1;
        } else
        {
        	echo $con -> error;
        }

 ?>