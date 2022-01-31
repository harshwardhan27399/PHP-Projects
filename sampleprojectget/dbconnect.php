<?php
$connect= new mysqli('localhost','root','','login1');
if($connect->connect_error)
{
	die('connection failed');
}
else
	
	$username= $_POST['username'];
    $password= $_POST['password'];
	
	$sql="SELECT * FROM users WHERE username='$username' AND password='$password'"; 
	$result= $connect->query($sql);
	if($result->num_rows> 0)
	{
		while($row=$result->fetch_assoc())
		{
			echo"<br>Admin name is:" . $row["name"];
			echo"<br>username is:" . $row["username"];
			echo"<br>password is:" . $row["password"];
			
		}
	}
	else
	{
		if(empty($username))
{
die("username is required");
}
if(empty($password_1))
{
die("password is required");
}
	}
	?>