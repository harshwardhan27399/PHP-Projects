<?php




$uername=$_GET['uername'];
$password=$_GET['password'];
$address=$_GET['address'];


$connect= new mysqli('localhost','root','','dipali');

$sql="insert into user1(`uername`,`password`,`address`) values 
('$uername','$password','$address')";

mysqli_query($connect,$sql);
echo "inserted successfully";
?>