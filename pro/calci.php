<html>
<body>
<center>
<form action="" method="post">
<input type="radio" name="Number" value="add">add<br><br>
<input type="radio" name="Number" value="sub">sub<br><br>
<input type="radio" name="Number" value="mul">mul<br><br>
<input type="radio" name="Number" value="div">div<br><br>

Number1:<input type="Number" name="Number1"><br><br>

Number2:<input type="Number" name="Number2"><br><br>
<input type="submit"><br>
</form>
</center>

</body>
</html>

	<?php
	if(isset($_POST['Number']));
$calculate = $_POST['Number'];
if(isset($_POST['Number']));
$Number1=$_POST['Number1'];
if(isset($_POST['Number']));
$Number2=$_POST['Number2'];
switch($calculate)
{
	case'add':
	$calculate1=$Number1+$Number2;
	echo"Addition is".$calculate1;
	break;
	case 'sub':
	$calculate2=$Number1-$Number2;
	echo "Substraction is".$calculate2;
	break;
	case 'mul':
	$calculate3=$Number1*$Number2;
	echo "Multipication is" .$calculate3;
	break;
	case 'div':
	$calculate4=$Number1/$Number2;
	echo "Dividation is ".$calculate4;
	break;
	
}
?>
