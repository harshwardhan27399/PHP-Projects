<?php 
session_start();

if(!isset($_SESSION['email']))
{
    echo "You are not logged in";
}
else{
ob_start();
include('connection.php');

if(isset($_POST['delete_entries'])){
     $start_date = $_POST['d1'];
    $end_date = $_POST['d2'];
    //echo "Delete entries";

    $srno = $_POST['delete'];

    $deleted = "";

    foreach ($srno as $i) {
        echo "$i";

        $query = "delete from inventory where srno='$i'";
        $data = mysqli_query($conn,$query);
        if($data){
            $deleted="deleted";
            echo $deleted;
        }
    }

    if($deleted == "deleted"){
        header("Location:fetch_inventory.php?d1=$start_date&d2=$end_date");
           ob_end_flush();
    }
   

    }
}
     
?>