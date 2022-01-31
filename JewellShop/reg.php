<?php
if(isset($_POST['submit']))
{
	$uname=$_POST['uname'];
	$mailid=$_POST['mailid'];
	$phoneno=$_POST['phnno'];
	$pswd=$_POST['pswd'];
	
	include_once("connect.php");

	$sql= "INSERT INTO `registeration`( `uname`, `mailid`, `phoneno`, `passwd`)  VALUES ('$uname','$mailid','$phoneno','$pswd') ";
	$retval = mysqli_query( $conn, $sql );
	if(!$retval) {
      echo 'Could not enter data'.mysqli_error($conn);
	}
	else
	{
		?>
	   <script>
	   alert('Registeration Successful');	 
		window.location.href="login.php";
	   </script>
	   <?php   
	}
}
?>