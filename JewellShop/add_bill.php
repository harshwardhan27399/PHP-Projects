<?php

session_start();
if(!$_SESSION["user"])
{
	header("Location: login.php");
}
?>
<?php

if(isset($_POST["bid"]) && isset($_POST["bdate"]) && isset($_POST["bcid"]) && isset($_POST["cphone"]) && isset($_POST["cname"])&& isset($_POST["caddress"])){

$bid=$_POST["bid"];
$bdate=$_POST["bdate"];
$bcid=$_POST["bcid"];
$cphone=$_POST["cphone"];
$cname=$_POST["cname"];
$caddress=$_POST["caddress"];
$Iid1=$_POST["Iid1"];
$Iid2=$_POST["Iid2"];
$Iid3=$_POST["Iid3"];
$Iid4=$_POST["Iid4"];
$Iamt1=$_POST["Iamt1"];
$Iamt2=$_POST["Iamt2"];
$Iamt3=$_POST["Iamt3"];
$Iamt4=$_POST["Iamt4"];

$conn=mysqli_connect('localhost','root','','jewelleryshop');
if(!$conn ){die('Could not connect');}
   

   if(isset($_POST["Iid1"])){
   $sql11=" INSERT INTO `billingdetails`(`billid`, `bdate`, `bcid`, `biid`, `bamt`) VALUES ('$bid','$bdate','$bcid','$Iid1','$Iamt1')  ";
   $result11 = mysqli_query( $conn, $sql11 );
   if(!$result11){
      echo "item 1 not set\n";
         }
   }
   
   if(isset($_POST["Iid2"])){
   $sql12=" INSERT into billingdetails (billid,bdate,bcid,biid,bamt) VALUES('$bid','$bdate','$bcid','$Iid2','$Iamt2')  ";
   $result12 = mysqli_query( $conn, $sql12 );
      if(!$result12){
      echo "item 2 not set\n";
         }
   }
   
   
   if(isset($_POST["Iid3"])){
   $sql13=" INSERT into billingdetails (billid,bdate,bcid,biid,bamt) VALUES('$bid','$bdate','$bcid','$Iid3','$Iamt3')  ";
   $result13 = mysqli_query( $conn, $sql13 );
    if(!$result13){
      echo "item 3 not set\n";
         }
   }


   if(isset($_POST["Iid4"])){
   $sql14=" INSERT into billingdetails (billid,bdate,bcid,biid,bamt) VALUES('$bid','$bdate','$bcid','$Iid4','$Iamt4')  ";
   $result14 = mysqli_query( $conn, $sql14 );
      if(!$result12){
      echo "item 4 not set\n";
         }
  }

   $sql2=" SELECT  Cid FROM customerdetails WHERE Cid=$bcid ";
   $result2 = mysqli_query( $conn, $sql2 );
     if(!$result2)
     {
       echo("Failed 2");
     }
   $retval2=mysqli_fetch_assoc($result2);
   if( $retval2 < 1)
   {
      $sql3="INSERT into customerdetails (Cid,Cname,Caddress,Cphoneno,Cdate) VALUES('$bcid','$cname','$caddress','$cphone','$bdate') ";
      $result3 = mysqli_query( $conn, $sql3 );
       if(!$result3)
       {
         echo("Failed 3");
       }
   
   }

echo "success";

header("Location: billing.php");
mysqli_close($conn);   
}


?>