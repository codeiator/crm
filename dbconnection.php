<?php
//$conn = new mysqli("localhost","awaasonl_awaas","Razorback89","awaasonl_awaas");
//$con=mysqli_connect("localhost", "root", "", "crm");
$con=mysqli_connect("localhost", "root", "", "crm");
if(mysqli_connect_errno()){
echo "Connection Fail".mysqli_connect_error();
}




//$conn = new mysqli("localhost","awaasonl_awaas","Razorback89","awaasonl_awaas");
//$con=mysqli_connect("localhost", "root", "", "crm");
$con2=mysqli_connect("localhost", "root", "", "awaas");
if(mysqli_connect_errno()){
echo "Connection Fail".mysqli_connect_error();
}
?>
