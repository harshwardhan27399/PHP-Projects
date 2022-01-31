<?php
include_once('conn.php');
echo "hello evweerfe";

if (!defined("PHP_EOL")) define("PHP_EOL", "\r\n");

if(isset($_POST['submit']))
{
$first_name= $_POST['first_name'];
$comments= $_POST['comments'];
$star= $_POST['star'];
echo $first_name.'   '.$comments.'  '.$star;
echo "<h1>Email Sent Successfully.</h1>";
}
else
{
	echo "<h1>ERROR uNSuccessfully.</h1>";
}
?>
