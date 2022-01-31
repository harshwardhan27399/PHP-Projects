<?php
$servername='localhost';
$username='root';
$password='';
$dbname = 'harsh';
$con=mysqli_connect($servername,$username,$password,$dbname);
$message = "Data connected.";;
	
if($con){
   echo '<script>alert("Connected");</script>';
}
?>