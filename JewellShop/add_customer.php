<?php

session_start();
if(!$_SESSION["user"])
{
	header("Location: login.php");
}
?>
<?php
 
include_once("connect.php");

if(isset($_POST["Cname"]) && isset($_POST["Caddress"]) && isset($_POST["Cphoneno"]) && isset($_POST["Cdate"]) )
{
$Cname=$_POST["Cname"];
$Caddress=$_POST["Caddress"];
$Cphoneno=$_POST["Cphoneno"];
$Cdate=$_POST["Cdate"];

	$sql= "INSERT into customerdetails (Cname,Caddress,Cphoneno,Cdate) VALUES('$Cname','$Caddress','$Cphoneno','$Cdate') ";
   $retval = mysqli_query( $conn, $sql );
   
   if(!$retval) {
      echo 'Could not enter data'.mysqli_error($conn);
   }
   else
   {
		?>
	   <script>
	   alert('Customer Registered Successfully');	 
		window.location.href="customer.php";
	   </script>
	   <?php   
   }
   
mysqli_close($conn);
}
?>