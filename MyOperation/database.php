<?php 
	$servername='localhost';
	$username='root';
	$password='';
	$dbname='demo';
	
	$con=mysqli_connect($servername,$username,$password,$dbname);
	if($con)
		echo 'connected';
	else
		echo 'not connected';
	
?>