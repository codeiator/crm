<?php

//$con = new mysqli("localhost","root","Awaas@12389","awaasonl_crm");
$con=mysqli_connect("localhost", "root", "", "crm");

//lalit local
//$con=mysqli_connect("localhost", "root", "", "awaas_crm");
if(mysqli_connect_errno()){
echo "Connection Fail".mysqli_connect_error();
}



//$con2 = new mysqli("localhost","root","Awaas@12389","awaasonl_awaas");

//lalit local
//$con2 = new mysqli("localhost","root","","awaasonl_awwas");

$con2=mysqli_connect("localhost", "root", "", "awaas");

if(mysqli_connect_errno()){
echo "Connection Fail".mysqli_connect_error();
}
?>
