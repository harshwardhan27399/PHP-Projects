<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "timepass";

// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
$con=mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  g

$sql="SELECT * FROM tp1";

if ($result=mysqli_query($con,$sql))
  {
  // Get field information for all fields
  while ($fieldinfo=mysqli_fetch_field($result))
    {
    printf("%s\n",$fieldinfo->name);
	
    //printf("Table: %s\n",$fieldinfo->table);
    //printf("max. Len: %d\n",$fieldinfo->max_length);
    g
  mysqli_free_result($result);
g

mysqli_close($con);
?>
