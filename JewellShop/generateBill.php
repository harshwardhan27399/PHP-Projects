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

<div align="center" id="printdiv">
<center>
<font color="gold" size="10"><b align="center"><pre>  S R K   J E W E L L E R S</pre></b></font>
<?php
    $currentDateTime = date('F d, Y');
	$id=$_SESSION["Cid"];
	 $sql1=" SELECT  Cid,Cname,Caddress,Cphoneno,Cdate FROM customerdetails where Cid=$id ";
  $result = mysqli_query( $conn, $sql1 );
  if(!$result)
  {
    echo("No customer with the id $id");
  }
  if($row = mysqli_fetch_array($result))
  {
	   echo "<tr><td>Date : </td><td> " . $currentDateTime . "</td></tr>";
		echo "<table width=40% style='border-style:solid;border-width:1px 0;'>";
		echo "<tr><td>Customer Name </td><td> " . $row['Cname'] . "</td></tr>";
		echo "<tr><td>Customer Address  </td><td> " . $row['Caddress'] . "</td></tr>";
		echo "<tr><td>Customer Phone no </td><td> " . $row['Cphoneno'] . "</td></tr>";
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
		
  
  echo "<tr><td>Item Weight(in grams)[W]</td><td> " . $row['Iweight'] . "</td></tr>";

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
  echo "<tr><td>Price Per Gram[P] </td><td>" . $price . "</td></tr>";
  $tprice = $price*$_SESSION["qty"]*$row['Iweight'];
  echo "<tr><td>Total Price [ W * Q * P ] </td><td><b>" . $tprice . "</b></td></tr>";
  
  
  echo "</tr></table>";
	}
	
	
?>
</center>
</div>
<br>
<br>
<br>
<center>
<button onclick="printDiv('printdiv')">Save and Print </button>
<br>
<br>
<br>
<form  method="post" action="next_Bill.php">
   <input type="submit" name="Billid" value="Next Bill">
</form>
</center>
</body>
</html>


