<?php
$to="webs.com"
$subject="test mail";
$message="this email is from dipali";
$headers="from:dipali chavan<chavan_dipali95@yahoo.com>";
if(mail($to,$subject,$message,$headers));

{
	echo "thank you for sending us email.we will contact you shortly.";
}
else
{
	echo "please try again letter";
}
?>
	