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

<form method="post" action="add_item.php" accept="image/*" enctype="multipart/form-data">
<h2>Add</h2>
<table>
  <tr>
      <td>Item Image</td>
      <td>Item Type</td>
    <td>Item Category</td>
	<td>Weight(in grams)</td>
   
    <td>No of Items</td>
    <td>Date</td>
  </tr>
  <tr>
<td><input type="file" name="file" /></td>
    <td><input list="ItemType" required name="Itype"><datalist id="ItemType"><option value="gold"><option value="silver"><option value="platinum"></datalist></td>
   <td><input list="ItemCategory" required  name="Icategory"><datalist id="ItemCategory">
        <option value="ring"><option value="pendant"><option value="chain">
        <option value="earring"><option value="payal"><option value="braclet">  </td>
    
    <td><input type="text" name="Iweight" required pattern="[0-9]+" title="Whole weight is required"></td>
    <td><input type="text" name="Icopies" required pattern="[0-9]+" title="Numbers are required"></td>
    <td><input type="date" required name="Idate"></td>
    <td><input type="submit" value="Submit"></td>
  </tr>
</table>

</form>
<br>
<hr>
<br>

<h2> Item Details :- </h2>
<center><table border=2 width=70% style="border-collapse:collapse">
  <tr>
    <th align=center>Item id</th>
    <th align=center>Item Image</th>
    <th align=center>Item Weight(in grams)</th>
    <th align=center>Type</th>
    <th align=center>Category</th>
    <th align=center>Copies</th>
    <th align=center>Item Add Date </th>
  </tr>
<?php 
	
  $sql1="SELECT `Iid`, `Iweight`, `Itype`, `Icategory`, `Icopies`,Iimage, `Idate` FROM `itemdetails`";
  $result = mysqli_query( $conn, $sql1 );
  if(!$result)
  {
    echo("Failed");
  }
   while($row = mysqli_fetch_array($result))
  {

  echo "<tr>";

  echo "<td align=center>" . $row['Iid'] . "</td>";
  
  echo "<td align=center>";
  ?>
  <img src="upload/<?php echo $row['Iimage']; ?>" width="100" height="100">
  <?php
  echo "</td>";

  echo "<td align=center>" . $row['Iweight'] . "</td>";

  echo "<td align=center>" . $row['Itype'] . "</td>";

  echo "<td align=center>" . $row['Icategory'] . "</td>";
  
  echo "<td align=center>" . $row['Icopies'] . "</td>";
  
  echo "<td align=center>" . $row['Idate'] . "</td>";
  
  echo "</tr>";

  }
?>

</table></center>

</body>
</html>