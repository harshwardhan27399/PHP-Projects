
<?php
if(isset($_POST['submit']))
{
 $name=$_POST['Name'];
$email=$_POST['Email'];
 $comments=$_POST['Comments'];
 $to="$name<$email>";
 $headers="from:chavan_dipali95@yahoo.com";

  $message="Name: $name \n\n Email: $email \n\n Comments:$comments \n\n";
if (mail($to,$comments,$headers))
{
	echo "email sent";
}
else
{
	echo "email error";
}
 }
?>


<!doctype html>
<html>
<body>
<center>

<form action="" method="POST" style="">
<ul><li>
Name:  </td><td><input type="text" name="Name"></li><br>
<li>Email:  </td><td><input type="text" name="Email"></li><br>
<li>Comments:  <textarea row="3" cols="20" name="Comments"/></textarea></li><br>



<li><input type="submit" value="send" name="submit" style="border-radius: 15px;color: #000123;height: 30px;width:200px; "> </li></br>
<li><input type="reset" name="reset" style="border-radius: 15px;color: #000123;height: 30px;width:80px;">
   </li></ul>


</form>
<u/center>
</body>
</html>

