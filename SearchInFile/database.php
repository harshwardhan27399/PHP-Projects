<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "searchfile";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
$message = "Data connected.";;
				echo "<script type='text/javascript'>alert('$message');</script>";
				
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}
?>