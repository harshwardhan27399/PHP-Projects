<?php
	ob_start();
	session_start();
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$conn = mysqli_connect('localhost', 'root', '');
	mysqli_select_db('db_project', $conn);

	$username = mysqli_real_escape_string($username);
	$query = "SELECT uid, pwd FROM login WHERE uid = '$username';";

	$result = mysqli_query($query);

	if(mysqli_num_rows($result) == 0)
	{
		echo 'Username not found!';
		echo "\r\n";
	}
	else
	{
		$userData = mysqli_fetch_array($result, MYSQL_ASSOC);
		$code = md5($password) ;

		if($code != $userData['pwd'])
		{
			echo 'Incorrect Password!';
		}
		else
		{
			session_regenerate_id();
			$_SESSION['sess_username'] = $userData['uid'];
			session_write_close();
			header("Location: $username.php");
		}
	}
?>
<html><head><title>Sale_returned</title></head><body><br /><a href="./login.html">Back To Login</a></body></html>
