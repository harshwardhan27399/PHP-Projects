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
<h3>Save and Print the invoice. We will contact you on provided Mobile Number or Email.</h3>
<div align="center" id="printdiv">
<center>
<font color="gold" size="10"><b align="center"><pre>  S R K   J E W E L L E R S</pre></b></font>

<div>

<center>
<h2> Booking Details </h2>
<table width=40% style='border-style:solid;border-width:1px 0;'>
  <tr>
    
	
    <!--td align=center>Customer ID</td-->
    
   
    <!--td >Item ID</td-->
   
  </tr>
<?php 
	
	$cid=$_SESSION["userid"];
	$bookid=$_GET['id'];;
  $sql1=" SELECT `bookid`, `Bdate`, `custid`, `itemid`, `prpgram`, `qty`, `tprice` FROM `bookjwellery` WHERE bookid = $bookid";
  $result = mysqli_query( $conn, $sql1 );
  if(!$result)
  {
    echo("Failed");
  }
   while($row = mysqli_fetch_array($result))
  {
	echo "<tr><td>Booking id</td>";

	  echo "<td >" . $row['bookid'] . "</td>";
	echo "</tr>";  
	
		$bookid=$row['bookid'] ;
	  echo "<tr><td>Booking date</td>";
	  echo "<td >" . $row['Bdate'] . "</td>";
	  echo "</tr>";  
	 // echo "<td >" . $row['custid'] . "</td>";
		$id=$row['custid'];
		$sql11=" SELECT `id`, `uname`, `mailid`, `phoneno` FROM `registeration` WHERE id=$id ";
	  $result1 = mysqli_query( $conn, $sql11 );
	  if($row1 = mysqli_fetch_array($result1))
	  {
			echo "<tr><td >Customer Name</td>";
			echo "<td > " . $row1['uname'] . "</td>";
			echo "</tr>";  
			echo "<tr> <td >Customer Phone no.</td>";
			echo "<td > " . $row1['phoneno'] . "</td>";
			echo "</tr>";  
			echo "<tr> <td >Customer Email Id</td>";
			echo "<td > " . $row1['mailid'] . "</td>";
			echo "</tr>";  
	  }

	  //echo "<td >" . $row['itemid'] . "</td>";
	    
	  $itemid=$row['itemid'];
	  
	  $sql12="SELECT `Iid`, `Iweight`, `Itype`, `Icategory`, `Icopies`, `Idate` FROM `itemdetails` WHERE Iid=$itemid";
	  $result2 = mysqli_query( $conn, $sql12 );
	  if($row2 = mysqli_fetch_array($result2))
	  {
		echo "<tr> <td >Item Weight [W]</td>";
		echo "<td >" . $row2['Iweight'] . " grams</td>";
		echo "</tr>";
		echo "<tr>    <td >Item Type</td>";
		echo "<td >" . $row2['Itype'] ." ". $row2['Icategory'] . "</td>";
		 echo "</tr>";
	  }
	 
	  echo "<tr><td >Price Per Gram [P]</td>";
	  echo "<td >" . $row['prpgram'] . " per gram</td>";
	  echo "</tr>";
	  echo "<tr><td >Quantity [Q]</td>";
	  echo "<td >" . $row['qty'] . "</td>";
	  echo "</tr>";
	  echo "<tr><td >Total Price [W * P *Q]</td>";
	  echo "<td >" . $row['tprice'] . " Rs. only /-</td></tr>";
	    echo "<tr><td >GST (3%)</td>";
  $gst=0.03* $row['tprice'] ;
	  echo "<td > $gst Rs. only /-</td></tr>";
		echo "<tr><td >Payble Amount</td>";
	  $payamt=$row['tprice']+$gst ;
	  echo "<td > $payamt Rs. only /-</td></tr>";
  
  }
?>

</table></center>
</div>
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


