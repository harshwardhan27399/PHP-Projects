<?php
if(isset($_POST['submit']))
{
 $name=$_post['n'];
 $email=$_post['e'];
 $comments=$_post['c'];
	
	mail('example@example.com','sample contact us from',$msg);
	header('location: contact_us_thankyou.php');
}
else
{
	header('location:contact_us.php');
	exit(0);
}
	?>