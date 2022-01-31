<?php
	$dbc = mysqli_connect('localhost','root','','shopopet') or die('ERROR IN FETCHING CONNECTION WITH DATABASE');
	@session_start();
	date_default_timezone_set('Asia/Calcutta');
?>