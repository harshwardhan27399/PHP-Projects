<?php
$connect=new mysql('localhost','root','login');
if($connect->connect_error)
{
	die('coonection failed');
	
}else

	echo "connect worked";
?>