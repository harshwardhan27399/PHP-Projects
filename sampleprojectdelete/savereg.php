<?php

//include('dbconnect.php');
//$connect = mysqli_connect("$host","$username","$password","$db_name")or die("cant connect");


$uname=$_GET['uname'];
$upass=$_GET['upass'];
$address=$_GET['address'];
$mobno=$_GET['mobno'];
$education=$_GET['edu'];

$connect= new mysqli('localhost','root','','sampledb');

$sql="insert into users where uname=?";
mysqli_query($connect,$sql);
echo $sql;
?>