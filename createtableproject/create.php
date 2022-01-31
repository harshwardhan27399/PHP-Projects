<?php
$conn= new mysqli('localhost','root','','login1');
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
echo 'Connected successfully<br/>';  
  
$sql = "create table emp5(id INT AUTO_INCREMENT,name VARCHAR(20) NOT NULL,  
emp_salary INT NOT NULL,primary key (id))";  
if(mysqli_query($conn, $sql)){  
 echo "Table emp5 created successfully";  
}else{  
echo "Could not create table: ". mysqli_error($conn);  
}  
  
mysqli_close($conn);    
	?>