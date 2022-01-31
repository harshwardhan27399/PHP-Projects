<?php

$user=$_POST['username'];

$email1=$_POST['email'];
$pass1=$_POST['password_1'];
$pass2=$_POST['password_2'];

if(empty($user==""))
{
	echo "<script>alert('this is filled requirwed')</script>";
}

 else if(empty($email1==""))
{
	echo "<script>alert('this is filled requirwed')</script>";
}
else if(empty($pass1==""))
{
	echo "<script>alert('this is filled requirwed')</script>";
}

 else if(empty($pass2==""))
{
	echo "<script>alert('this is filled requirwed')</script>";
}





?>