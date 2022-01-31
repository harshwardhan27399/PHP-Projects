<?php

//include('dbconnect.php');
//$connect = mysqli_connect("$host","$username","$password","$db_name")or die("cant connect");


$uname=$_GET['user'];
$upass=$_GET['pass'];
$address=$_GET['add'];
$mobno=$_GET['mobno'];
$education=$_GET['edu'];

$connect= new mysqli('localhost','root','','sampledb');

$sql="insert into users(`uname`,`upass`,`address`,`mobno`,`edu`) values 
('$uname','$upass','$address','$mobno','$education')";

mysqli_query($connect,$sql);
echo "inserted successfully";
?>