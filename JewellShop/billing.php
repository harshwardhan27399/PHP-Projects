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

<form method="post" action="Citem.php">
  Enter Customer ID :- <input type="text" name="Cid" autofocus placeholder="Customer Id" pattern="[0-9]+" title="Only numbers are allowed" required>
  <input type="submit" name="custid" value="submit">
</form>
<br>
<br>
<h2> Bill Details </h2>
<center><table border=2 width=70% style="border-collapse:collapse">
  <tr>
    <td align=center>Bill id</td>
    <td align=center>Bill date</td>
    <!--td align=center>Customer ID</td-->
    <td align=center>Customer Name</td>
    <td align=center>Customer Phone no.</td>
    <!--td align=center>Item ID</td-->
    <td align=center>Item Weight</td>
    <td align=center>Item Type</td>
    <td align=center>Price Per Gram</td>
    <td align=center>Quantity</td>
    <td align=center>Total Price</td>
  </tr>
<?php 
	
  $sql1=" SELECT `Bid`, `Bdate`, `custid`, `itemid`, `prpgram`, `qty`, `tprice` FROM `billingdetails`";
  $result = mysqli_query( $conn, $sql1 );
  if(!$result)
  {
    echo("Failed");
  }
   while($row = mysqli_fetch_array($result))
  {
	echo "<tr>";

	  echo "<td align=center>" . $row['Bid'] . "</td>";

	  echo "<td align=center>" . $row['Bdate'] . "</td>";

	 // echo "<td align=center>" . $row['custid'] . "</td>";
		$id=$row['custid'];
		$sql11=" SELECT  Cid,Cname,Caddress,Cphoneno,Cdate FROM customerdetails where Cid=$id ";
	  $result1 = mysqli_query( $conn, $sql11 );
	  if($row1 = mysqli_fetch_array($result1))
	  {
			echo "<td align=center> " . $row1['Cname'] . "</td>";
			echo "<td align=center> " . $row1['Cphoneno'] . "</td>";
	  
	  }

	  //echo "<td align=center>" . $row['itemid'] . "</td>";
	   
	  $itemid=$row['itemid'];
	  
	  $sql12="SELECT `Iid`, `Iweight`, `Itype`, `Icategory`, `Icopies`, `Idate` FROM `itemdetails` WHERE Iid=$itemid";
	  $result2 = mysqli_query( $conn, $sql12 );
	  while($row2 = mysqli_fetch_array($result2))
	  {
		echo "<td align=center>" . $row2['Iweight'] . "</td>";
		echo "<td align=center>" . $row2['Itype'] ." ". $row2['Icategory'] . "</td>";
	  }
	  echo "<td align=center>" . $row['prpgram'] . "</td>";
	  
	  echo "<td align=center>" . $row['qty'] . "</td>";
	  
	  echo "<td align=center>" . $row['tprice'] . "</td>";

	echo "</tr>";

  }
?>
</div>
</body>
</html>


