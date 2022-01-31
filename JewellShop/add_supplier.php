<?php

session_start();
if(!$_SESSION["user"])
{
	header("Location: login.php");
}
?>
<?php

if(isset($_POST["Sname"]) && isset($_POST["Saddress"]) && isset($_POST["Sphoneno"]) && isset($_POST["Sdate"]) )
{
	$Sname=$_POST["Sname"];
	$Saddress=$_POST["Saddress"];
	$Sphoneno=$_POST["Sphoneno"];
	$Sdate=$_POST["Sdate"];

	include_once("connect.php");

 	$sql= "INSERT into supplierdetails (Sid,Sname,Saddress,Sphoneno,Sdate) VALUES('$Sid','$Sname','$Saddress','$Sphoneno','$Sdate') ";
   $retval = mysqli_query( $conn, $sql );
   if(!$retval) {
      echo 'Could not enter data'.mysqli_error($conn);
   }
   else
   {
		?>
	   <script>
	   alert('Supplier Registered Successfully');	 
		window.location.href="supplier.php";
	   </script>
	   <?php   
   }
mysqli_close($conn);
}
?>