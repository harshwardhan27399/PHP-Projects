<?php

session_start();
if(!$_SESSION["user"])
{
	header("Location: login.php");
}
?>
<?php

if(isset($_POST["Iweight"]) && isset($_POST["Itype"]) && isset($_POST["Icategory"]) && isset($_POST["Icopies"]) && isset($_POST["Idate"])){

$Iweight=$_POST["Iweight"];
$Itype=$_POST["Itype"];
$Icategory=$_POST["Icategory"];
$Icopies=$_POST["Icopies"];
$Idate=$_POST["Idate"];


include_once("connect.php");

   $file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];

 $folder="upload/";
 
 /* make file name in lower case */
 $new_file_name = strtolower($file);
 /* make file name in lower case */
 
 $final_file=str_replace(' ','-',$new_file_name);
 
 move_uploaded_file($file_loc,$folder.$final_file);
	$sql= "INSERT into itemdetails (Iweight,Itype,Icategory,Icopies,Idate,Iimage) VALUES('$Iweight','$Itype','$Icategory','$Icopies','$Idate','$final_file') ";
   $retval = mysqli_query( $conn, $sql );
   
   if(!$retval) {
      echo 'Could not enter data'.mysqli_error($conn);
   }
   else
   {
		?>
	   <script>
	   alert('Item added Successfully');	 
		window.location.href="items.php";
	   </script>
	   <?php   
   }
mysqli_close($conn);
}
?>