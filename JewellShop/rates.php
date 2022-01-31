<?php
session_start();
if(!$_SESSION["user"])
{
	header("Location: login.php");
}
include_once("connect.php");

   $sql= "SELECT `Rgold`, `Rsilver`, `Rplatinum` FROM `rate` ";

      
   $retval = mysqli_query( $conn, $sql );
   $row = mysqli_fetch_array($retval, MYSQLI_BOTH);
  $Rgold=$row['Rgold'];
  $Rsilver=$row['Rsilver'];
  $Rplatinum=$row['Rplatinum'];

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
<font color="gold" size="10"><b align="center"><pre>    J E W E L L E R S</pre></b></font>
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
<br><br>
 <table>
  <pre>
    <tr>
      <td>Current Gold Rate</td>
      <td> :- <?php echo "$Rgold";?>     per gram</td>
    </tr>
    <tr>
      <td>Current Silver Rate</td>
      <td> :- <?php echo "$Rsilver";?>      per gram</td>
    </tr>
    <tr>
      <td>Current Platinum Rate </td>
      <td> :- <?php echo "$Rplatinum";?>     per gram</td>
    </tr>
    </pre>
  </table>
<form method="post" name="update_rate" action="update_rate.php">
  <table>
    <tr>
      <td>Gold Rate</td>
      <td><input type="text" name="Rgold" pattern="[0-9]+"></td>
    </tr>
    <tr>
      <td>Silver Rate</td>
      <td><input type="text" name="Rsilver" pattern="[0-9]+"></td>
    </tr>
    <tr>
      <td>Platinum Rate</td>
      <td><input type="text" name="Rplatinum" pattern="[0-9]+"></td>
    </tr>
    <tr>
      <td colspan="2"> <input type="submit" value="Submit"></td>
    </tr>
  </table>
 
</form>

</body>
</html>


