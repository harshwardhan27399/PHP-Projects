<?php

session_start();

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
  <a href="login2.php">Home</a>
  <a href="rates2.php">Rates</a>
  <a href="items2.php">Items</a>
  <a href="bookj.php">Book a Jwellery</a>
  <a href="bookdtls.php">My Bookings</a>
  <a href="logout.php">Logout</a>
</div>

<h2> Item Details :- </h2>
<center><table border=2 width=70% style="border-collapse:collapse">
  <tr>
    <th align=center>Item id</th>
    <th align=center>Item Image</th>
    <th align=center>Item Weight(in grams)</th>
    <th align=center>Type</th>
    <th align=center>Category</th>
    <th align=center>Available Copies</th>
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
  <img src="upload/<?php echo $row['Iimage']; ?>" width="200" height="200">
  <?php
  echo "</td>";


  echo "<td align=center>" . $row['Iweight'] . "</td>";

  echo "<td align=center>" . $row['Itype'] . "</td>";

  echo "<td align=center>" . $row['Icategory'] . "</td>";
  
  echo "<td align=center>" . $row['Icopies'] . "</td>";
  
  
  echo "</tr>";

  }
?>

</table></center>

</body>
</html>