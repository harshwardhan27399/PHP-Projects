<?php
$uname=$_GET['uname'];
$connect= new mysqli('localhost','root','','sampledb');
if(!$connect){  
  die('Could not connect: '.mysqli_connect_error());  
}  
echo 'Connected successfully<br/>';  
  
$sql = "delete from users where uname=?";  
if(mysqli_query($connect, $sql))
{  
 echo "Record deleted successfully";  
}
else
{  
echo "Could not deleted record: ". mysqli_error($connect);  
}  
  
mysqli_close($connect);  
	?>
	<!doctype html>
<html>
<body>
<center>

<form action="" method="post" style="">
<h1>login page</h1>
<table border="2" align="center" allpadding="20">
<tr><td>username:</td><td><input type="text" value="uname" name="uname"></td></tr>



<tr><td><input type="submit" value="submit" name="submit" style="border-radius: 15px;color: #000123;height: 30px;width:80px; ">  </td>
<td><input type="reset" name="reset" style="border-radius: 15px;color: #000123;height: 30px;width:80px;">
   </td></tr>


</form>
</center>
</body>
</html>

