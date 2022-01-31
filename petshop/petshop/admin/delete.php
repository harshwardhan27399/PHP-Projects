<?php
$id=$_GET["id"];
$con = mysqli_connect("localhost","root","");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}

mysqli_select_db($con ,"shopopet");

$sql="DELETE FROM product WHERE id='$id'";

if (!mysqli_query($con,$sql))
{
die('Error: ' . mysqli_error());
}

mysqli_close($con)
?>

<script type=text/javascript>
alert('1 record deleted go back to delete another!');
window.location ="displayitem.php";
</script>