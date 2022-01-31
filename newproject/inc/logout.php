<?php
	include("connect.inc.php");
	$pg_name = basename(__FILE__);
	@session_start();
	if (isset($_SESSION['user_id'])) {
		$_SESSION = array();
		session_destroy();
	}  
	//'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/index.php'
	header("Location:"."../login.php");
	
?>


