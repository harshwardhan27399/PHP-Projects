<?php
	$pg_name = basename(__FILE__);
	@session_start();
	if (isset($_SESSION['uid'])) {
		echo '<script>alert("Logout Successful");</script>';
		$_SESSION = array();
		session_destroy();
	}  
	//'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/index.php'
	header("Location:index.php");
	
?>

