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
<head>

<link rel="stylesheet" type="text/css" href="mystyle.css">
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



@import url(https://fonts.googleapis.com/css?family=Roboto:300);

.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #4CAF50;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background: #43A047;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #4CAF50;
  text-decoration: none;
}
.form .register-form {
  display: none;
}
.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #EF3B3A;
}

	


</style>

</head>
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
  <a href="bookdtls.php">My Bookings</a>
  <a href="logout.php">Logout</a>
</div>

<div>

<center>
<h2> Booking Details </h2>
<table border=2 width=70% style="border-collapse:collapse">
  <tr>
    <td align=center>Booking id</td>
    <td align=center>Booking date</td>
    <!--td align=center>Customer ID</td-->
    <!--td align=center>Item ID</td-->
    <td align=center>Item Weight</td>
    <td align=center>Item Type</td>
    <td align=center>Price Per Gram (in Rs.)</td>
    <td align=center>Quantity</td>
    <td align=center>Payble amount  (in Rs.)</td>
    <td align=center>View Invoice</td>
  </tr>
<?php 
	
	$cid=$_SESSION["userid"];
	$bookid;
  $sql1=" SELECT `bookid`, `Bdate`, `custid`, `itemid`, `prpgram`, `qty`, `pay` FROM `bookjwellery` WHERE custid = $cid";
  $result = mysqli_query( $conn, $sql1 );
  if(!$result)
  {
    echo("Failed");
  }
   while($row = mysqli_fetch_array($result))
  {
	echo "<tr>";

	  echo "<td align=center>" . $row['bookid'] . "</td>";
		$bookid=$row['bookid'] ;
	  echo "<td align=center>" . $row['Bdate'] . "</td>";
	   
	  $itemid=$row['itemid'];
	  
	  $sql12="SELECT `Iid`, `Iweight`, `Itype`, `Icategory`, `Icopies`, `Idate` FROM `itemdetails` WHERE Iid=$itemid";
	  $result2 = mysqli_query( $conn, $sql12 );
	  while($row2 = mysqli_fetch_array($result2))
	  {
		echo "<td align=center>" . $row2['Iweight'] . " g</td>";
		echo "<td align=center>" . $row2['Itype'] ." ". $row2['Icategory'] . "</td>";
	  }
	  echo "<td align=center>" . $row['prpgram'] . "</td>";
	  
	  echo "<td align=center>" . $row['qty'] . "</td>";
	  
	  echo "<td align=center>" . $row['pay'] . " </td>";
	  
	  echo "<td align=center><a href='viewInvoice.php?id=$bookid'>View Invoice</a></td>";

	echo "</tr>";

  }
?>

</table></center>
</div>
</body>
</html>