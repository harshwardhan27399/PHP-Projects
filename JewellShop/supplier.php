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

<form method="post" action="add_supplier.php">
  Add Supplier Information :-
<br>
    <table>
      <tr>
      <td>supplier Name</td>
      <td><input type="text" name="Sname"  placeholder="" pattern="[A-Za-z]+ [A-Za-z]+ [A-Za-z]+" title="Name format must be 'FIRSTNAME MIDDLENAME LASTNAME'" required></td>
    </tr>
    <tr>
      <td>supplier Address</td>
      <td><input type="text" name="Saddress"   placeholder="" required title="This Field is required"></td>
    </tr>
    <tr>
      <td>supplier Phone no</td>
      <td><input type="text" name="Sphoneno" placeholder="" pattern="[789][0-9]{9}" title="Mobile Number Must be of 10 digits only" required></td>
    </tr>
    <tr>
      <td>supplier Date</td>
      <td><input type="date" name="Sdate" placeholder="" required></td>
    </tr>
  </table>
  <input type="submit" value="submit">
</form>

<h2> Supplier Details :- </h2>
<center><table border=2 width=70% style="border-collapse:collapse">
  <tr>
    <th align=center>Supplier id</th>
    <th align=center> Name</th>
    <th align=center> Address</th>
    <th align=center> Phone no</th>
    <th align=center> Birth Date</th>
  </tr>
<?php 
	
  $sql1="SELECT `Sid`, `Sname`, `Saddress`, `Sphoneno`, `Sdate` FROM `supplierdetails`";
  $result = mysqli_query( $conn, $sql1 );
  if(!$result)
  {
    echo("Failed");
  }
   while($row = mysqli_fetch_array($result))

  {

  echo "<tr>";

  echo "<td align=center>" . $row['Sid'] . "</td>";

  echo "<td align=center>" . $row['Sname'] . "</td>";

  echo "<td align=center>" . $row['Saddress'] . "</td>";

  echo "<td align=center>" . $row['Sphoneno'] . "</td>";
  
  echo "<td align=center>" . $row['Sdate'] . "</td>";

  echo "</tr>";

  }
?>

</table></center>

</body>
</html>