<?php
//$conn = new mysqli("localhost","awaasonl_awaas","Razorback89","awaasonl_awaas");
$con=mysqli_connect("localhost", "root", "", "crm");
if(mysqli_connect_errno()){
echo "Connection Fail".mysqli_connect_error();
}

?>
