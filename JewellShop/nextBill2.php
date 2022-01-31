<?php

session_start();
if(!$_SESSION["userid"])
{
	header("Location: login.php");
}

include_once("connect.php");
$id;
$pid;
$ppg;
$qty;
$tprice;
$gst;
$payamt;
if(isset($_POST["Billid"]))
	{
		$_SESSION['qty']=$_POST["qty"];
		$qty=$_SESSION["qty"];
	
	}
	
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
echo "<table width=35% style='border-style:solid;border-width:1px 0;'>";
		
   $now = new DateTime();
	$cdate = $now->format('Y-m-d'); 

	$pid=$_SESSION["iid"];
	$sql1l="SELECT `Iid`, `Iweight`, `Itype`, `Icategory`, `Icopies`, `Idate` FROM `itemdetails` WHERE Iid=$pid";
	$result = mysqli_query( $conn, $sql1l );
	if(!$result)
	{
		echo("No customer with the id $pid");
	}
	if($row = mysqli_fetch_array($result))
	{
	
  echo "<tr><td>Item Weight(in grams)[W]</td><td> " . $row['Iweight'] . " grams</td></tr>";

  echo "<tr><td>Item Type</td><td >" . $row['Itype'] . "</td></tr>";
$sql= "SELECT `Rgold`, `Rsilver`, `Rplatinum` FROM `rate`  ";
	$retval = mysqli_query( $conn, $sql );
	$rowww = mysqli_fetch_array($retval, MYSQLI_BOTH);
	$Rgold=$rowww['Rgold'];
	$Rsilver=$rowww['Rsilver'];
	$Rplatinum=$rowww['Rplatinum'];
	$price;
	if($row['Itype'] == 'silver')
	{
		$price=$Rsilver;
	}
	else if($row['Itype'] == 'gold')
	{
		$price=$Rgold;
	}
	else if($row['Itype'] == 'platinum')
	{
		$price=$Rplatinum;
	}

  echo "<tr><td>Item Category </td><td>" . $row['Icategory'] . "</td></tr>";
  $qty =  $_SESSION["qty"];
  echo "<tr><td>Item Quantity[Q] </td><td>" . $_SESSION["qty"] . "</td></tr>";
  $ppg=$price;
  echo "<tr><td>Price Per Gram[P] </td><td>" . $price . " per gram</td></tr>";
  $tprice = $price*$_SESSION["qty"]*$row['Iweight'];
  echo "<tr><td>Total Price [ W * Q * P ] </td><td><b>" . $tprice . " Rs. only /-</b></td></tr>";
  echo "<tr><td >GST (3%)</td>";
  $gst=0.03* $tprice ;
	  echo "<td > $gst Rs. only /-</td></tr>";
		echo "<tr><td >Payble Amount</td>";
	  $payamt=$tprice+$gst ;
	  echo "<td > $payamt Rs. only /-</td></tr>";
  
  echo "</table>";
  
	}
	
	
?>
	<br>
	<br>
<center>
<form action="" method="POST">
	<input type=hidden name="cid" value="<?php echo $_SESSION["userid"];?>">
	<input type=hidden name="pid" value="<?php echo $_SESSION["iid"];?>">
	<input type=hidden name="ppg" value="<?php echo $ppg;?>">
	<input type=hidden name="qty" value="<?php echo $qty;?>">
	<input type=hidden name="trprice" value="<?php echo $tprice;?>">
	<input type=hidden name="gst" value="<?php echo $gst;?>">
	<input type=hidden name="pay" value="<?php echo $payamt;?>">
	<input type=submit name="savedata" value = "Book Jwellery" />
</form>

<?php
if(isset($_POST['savedata']))
{
	$now = new DateTime();
	$cdate = $now->format('Y-m-d'); 
	$Cid=$_POST["cid"];
	$itemid=$_POST["pid"];
	$ppg=$_POST["ppg"];
	$qty=$_POST["qty"];
	$trprice=$_POST["trprice"];
	$gst = $_POST["gst"];
	$pay = $_POST["pay"];
	$sql="INSERT INTO `bookjwellery`(`Bdate`, `custid`, `itemid`, `prpgram`, `qty`, `tprice`, `gst`, `pay`) VALUES ('$cdate',$Cid,$itemid,$ppg,$qty,$tprice,$gst,$pay)";
	$retval = mysqli_query( $conn, $sql );
   
	if(!$retval) 
	{
		echo 'Could not enter data'.mysqli_error($conn);
	}
	else
	{
		?>
		<script>
		   alert('Jwellery Booked Successfully');	 
			window.location.href="generateBill2.php";
		</script>
	   <?php   
   }
}
?>
</center>
</div>
</body>
</html>