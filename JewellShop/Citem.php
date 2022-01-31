<?php

session_start();
if(!$_SESSION["user"])
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
  <a href="login1.php">Home</a>
  <a href="rates.php">Rates</a>
  <a href="billing.php">Billing</a>
  <a href="items.php">Items</a>
  <a href="customer.php">Customer</a>
  <a href="supplier.php">Suppliers</a>
  <a href="aboutus.php">About Us</a>
  <a href="logout.php">Logout</a>
</div>

<br><br><br>
<div align="center">

<?php
if(isset($_POST["custid"]))
{
	if(trim($_POST["Cid"])=='')
	{
		header("Location: billing.php");
	}
	$_SESSION['Cid']=$_POST["Cid"];
	$id=$_SESSION["Cid"];
	$sql1=" SELECT  Cid,Cname,Caddress,Cphoneno,Cdate FROM customerdetails where Cid=$id ";
  $result = mysqli_query( $conn, $sql1 );
 
  if($row = mysqli_fetch_array($result))
  {
		echo "<table border=1 width=30%>";
		echo "<tr><td>Customer Name </td><td align=center> " . $row['Cname'] . "</td></tr>";
		echo "<tr><td>Customer Address  </td><td align=center> " . $row['Caddress'] . "</td></tr>";
		echo "<tr><td>Customer Phone no </td><td align=center> " . $row['Cphoneno'] . "</td></tr>";
		echo "</table>";
  }
  else
	{
	  ?>
	   <script>
	   alert('Customer Does not exist');	 
		window.location.href="billing.php";
	   </script><?php
	}	
}
else
{
	header("Location: billing.php");
}
?>
<br><br><br>
<form  method="post" action="nextitem.php">
  Enter Item ID :- <input type="text" name="itemid" autofocus pattern="[0-9]+" title="Only numbers are allowed" required>
  <input type="submit" name="searchid" value="submit">
</form>


<br>
<br>


</div>
</body>
</html>


