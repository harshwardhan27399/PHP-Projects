<?php
	include_once("connect.php");

	if(isset($_POST["username"]) && isset($_POST["password"])){
	$username=$_POST["username"];


	   
	   $sql = 'SELECT username, password FROM users WHERE username="'.$username.'"';


		  
	   $retval = mysqli_query( $conn, $sql );
	   
	   if(!$retval) {
		  die('Could not enter data');
	   }
	   
	  
	 $row = mysqli_fetch_array($retval, MYSQLI_BOTH);

		  
		  $uname=$row['username'];
		  $pass=$row['password'];
		


	if($_POST["username"]==$uname && $_POST["password"]==$pass){

	session_start();
	$_SESSION["user"] = $uname;
		?>
			<script type=text/javascript>
			alert('Login Successful');
			window.location ="login1.php";
		</script>
		<?php
	}
	
	$sql = 'SELECT `id`, `uname`, `mailid`, `phoneno`, `passwd` FROM `registeration` WHERE mailid="'.$username.'"';


		  
	   $retval = mysqli_query( $conn, $sql );
	   
	   if(!$retval) {
		  die('Could not enter data');
	   } 
	 $row = mysqli_fetch_array($retval, MYSQLI_BOTH);

		  
		  $uname=$row['mailid'];
		  $pass=$row['passwd'];
		  $uid=$row['id'];
		


	if($_POST["username"]==$uname && $_POST["password"]==$pass){

	session_start();
	$_SESSION["userid"] = $uid;
	?>
<script type=text/javascript>
alert('Login Successful');
window.location ="login2.php";
</script>
<?php


	}
	else
	{
		?>
			<script type=text/javascript>
			alert('Something went wrong. Please Enter Username and Password again');
			window.location ="login.php";
			</script>
		<?php

	}
	
	
	}
?>