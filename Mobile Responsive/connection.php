<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gadre_tea_co";

$conn = mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
    //echo "connection ok gadre tea connected";
}
else{
    echo "connection failed";
}

?>
