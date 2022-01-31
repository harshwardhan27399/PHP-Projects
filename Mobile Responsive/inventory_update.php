<?php 
ob_start();
include('connection.php');
if(isset($_POST['inventory_update'])){
     $start_date = $_POST['d1'];
    $end_date = $_POST['d2'];
    //echo "Helo";
   
   $upd_srn = $_POST['srno'];
   //echo "$upd_srn";

   $invoice=$_POST['invoice'];
   //echo $invoice;
   $inv_Date = $_POST['date'];
   //echo $inv_Date;

   $purchaseType = $_POST['purchase'];
   
    echo $purchasetype;
    
   $garden = $_POST['garden'];
   $grade_type= $_POST['grade_type'];
   $liquor_desc= $_POST['liquor_desc'];
   $dry_leaf_desc= $_POST['dry_leaf_desc'];
   $infusion_desc= $_POST['infusion_desc'];
   $rate= $_POST['rate'];
   //echo $rate;
   $no_bag= $_POST['no_bag'];
   $shortage = $_POST['shortage'];
    $kg_bag= $_POST['kg_bag'];
     $total= $_POST['total'];

     $grad = $_POST['grade'];
    $grade = "";

    foreach( $grad as $v ) {
    if($v != ""){
        $grade = $v;
    }
    }

    $grade_s = $_POST['grade_size'];
    $grade_size = "";

    foreach( $grade_s as $v ) {
    if($v != ""){
        $grade_size = $v;
    }
    }

    //echo $grade_size;
    //echo $grade;

    //$query = "update inventory set invoice='$invoice',date='$inv_Date',Garden='$garden' where srno='$upd_srn' ";
    $query = "update inventory set invoice='$invoice',date='$inv_Date',puchaseType='$purchaseType',Garden='$garden',grade_type = '$grade_type',grade_size='$grade_size',grade='$grade',rate='$rate',no_bag='$no_bag',kg_bag='$kg_bag',shortage='$shortage',total='$total',infusion='$infusion_desc',liquor='$liquor_desc',dry_leaf='$dry_leaf_desc' where srno='$upd_srn' ";
        $result = mysqli_query($conn,$query);
       // echo "Twist";
        if($result){
           
           header("Location:fetch_inventory.php?d1=$start_date&d2=$end_date");
           ob_end_flush();
        }
        else {
           // header("Location:fetch_inventory.php?d1=$start_date&d2=$end_date");
            //ob_end_flush();
        }

    
    
}
?>