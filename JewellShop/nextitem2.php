<?php

session_start();
if(!$_SESSION["userid"])
{
	header("Location: login.php");
}

include_once("connect.php");

?>


<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style type="text/css">

/* Add a black background color to the top navigation */
.topnav {
    background-color: #333;
    overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
    background-color: #ddd;
    color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
    background-color: #4CAF50;
    color: white;
}
.input {
  width: 100%;
}
</style>
</head>
<body>

<div>
<font color="gold" size="10"><b align="center"><pre> S R K   J E W E L L E R S</pre></b></font>
</div>
<div class="topnav" id="myTopnav">
  <a href="login2.php">Home</a>
  <a href="rates2.php">Rates</a>
  <a href="items2.php">Items</a>
  <a href="bookj.php">Book a Jwellery</a>
  <a href="logout.php">Logout</a>
</div>

<br><br><br>
<div align="center">


<?php
if(isset($_POST["searchid"]))
{
	
	$_SESSION['iid']=$_POST["itemid"];
	$pid=$_SESSION["iid"];
	$sql1l="SELECT `Iid`, `Iweight`, `Itype`, `Icategory`, `Icopies`, `Idate` FROM `itemdetails` WHERE Iid=$pid";
	$result = mysqli_query( $conn, $sql1l );
	if($row = mysqli_fetch_array($result))
	{
		
  echo "<table width=35% style='border-style:solid;border-width:1px 0;'>";
		
  echo "<tr><td>Item Weight(in grams)</td><td align=center> " . $row['Iweight'] . "</td></tr>";

  echo "<tr><td>Item Type</td><td align=center>" . $row['Itype'] . "</td></tr>";

  echo "<tr><td>Item Category</td><td align=center>" . $row['Icategory'] . "</td></tr>";
  
  
  echo "</tr></table>";
  
	} else
	{
	  ?>
	   <script>
	   alert('Item Does not exist');	 
		window.location.href="bookj.php";
	   </script><?php
	}
}
?>
<br><br><br>
<form  method="post" action="nextBill2.php">
  Enter Quantity :- <input type="text" name="qty" autofocus pattern="[0-9]+" title="Only numbers are allowed" required>
  <input type="submit" name="Billid" value="submit">
</form>



</div>
</body>
</html>


