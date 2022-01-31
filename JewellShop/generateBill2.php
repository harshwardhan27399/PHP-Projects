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
  <script>
		function printDiv(divName){
			var printContents = document.getElementById(divName).innerHTML;
			var originalContents = document.body.innerHTML;

			document.body.innerHTML = printContents;

			window.print();

			document.body.innerHTML = originalContents;

		}
	</script>
</head>
<body>
<h3>Save and Print the invoice. We will contact you on provided Mobile Number or Email. You also view this invoice in "My Bookings" tab</h3>
<div align="center" id="printdiv">
<center>
<font color="gold" size="10"><b align="center"><pre>  S R K   J E W E L L E R S</pre></b></font>
<?php
		
    $currentDateTime = date('F d, Y');
	$id=$_SESSION["userid"];
	 $sql1="SELECT `id`, `uname`, `mailid`, `phoneno` FROM `registeration` WHERE id=$id ";
  $result = mysqli_query( $conn, $sql1 );
  if(!$result)
  {
    echo("No customer with the id $id");
  }
  if($row = mysqli_fetch_array($result))
  {
	   echo "<h2>Booking Details </h2>";
	   echo "<tr><td>Date : </td><td> " . $currentDateTime . "</td></tr>";
		echo "<table width=50% style='border-style:solid;border-width:1px 0;'>";
		echo "<tr><td>Name </td><td> " . $row['uname'] . "</td></tr>";
		echo "<tr><td>Email  </td><td> " . $row['mailid'] . "</td></tr>";
		echo "<tr><td>Phone no </td><td> " . $row['phoneno'] . "</td></tr>";
  }
?>
<?php
	$pid=$_SESSION["iid"];
	$sql1l="SELECT `Iid`, `Iweight`, `Itype`, `Icategory`, `Icopies`, `Idate` FROM `itemdetails` WHERE Iid=$pid";
	$result = mysqli_query( $conn, $sql1l );
	if(!$result)
	{
		echo("No customer with the id $id");
	}
	if($row = mysqli_fetch_array($result))
	{
		
  
  echo "<tr><td>Item Weight[W]</td><td> " . $row['Iweight'] . " grams</td></tr>";

  echo "<tr><td>Item Type</td><td>" . $row['Itype'] . "</td></tr>";

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
  echo "<tr><td>Total Price [ W * Q * P ] </td><td><b>" . $tprice . "</b></td></tr>";
  echo "<tr><td >GST (3%)</td>";
  $gst=0.03* $tprice ;
	  echo "<td > $gst Rs. only /-</td></tr>";
		echo "<tr><td >Payble Amount</td>";
	  $payamt=$tprice+$gst ;
	  echo "<td > $payamt Rs. only /-</td></tr>";
  
  
  echo "</table>";
	}
	
	
?>
</center>
</div>
<br>
<br>
<br>
<center>
<button onclick="printDiv('printdiv')">Print the invoice </button>
<br>
<br>
<br>
<a href="login2.php">Back to Main Page</a>
</center>
</body>
</html>


