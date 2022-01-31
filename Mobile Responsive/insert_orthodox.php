<?php 
ob_start();
session_start();
if(!isset($_SESSION['email']))
{
    echo "You are not logged in";
}
else{
include('connection.php');
if(isset($_POST['orthodox_form']))
{
    $invoice = $_POST['invoice'];
    $inv_date = $_POST['date'];
    $garden = $_POST['garden'];
    $grade_type = "orthodox";
    $grade_size = $_POST['g'];
    echo "Grade size : ".$grade_size;
    $grad = $_POST['grade'];
    $grade = "";

    foreach( $grad as $v ) {
    if($v != ""){
        $grade = $v;
    }
    }

     $purchaseType = $_POST['purchase'];
    $rate = $_POST['rate'];
    $kg_bag = $_POST['kg_bag'];
    $no_bag = $_POST['no_bag'];
    $shortage = $_POST['shortage'];
    $total = $_POST['total'];


    $infusion = $_POST['infusion'];
    $infusion_desc = "";
   foreach( $infusion as $i ) {
    //echo $i;
    $infusion_desc = $i."-".$infusion_desc;
    }
    echo "Infusion ".$infusion_desc;

    $liquor = $_POST['liquor'];
    $liquor_desc = "";
foreach( $liquor as $i ) {
    //echo $i;
    $liquor_desc = $i."-".$liquor_desc;
    }
    echo "liquor desc ".$liquor_desc;

    $dry_leaf = $_POST['dry_leaf'];
    $dry_leaf_desc = "";
    foreach( $dry_leaf as $i ) {
    //echo $i;
    $dry_leaf_desc = $i."-".$dry_leaf_desc;
    }

    echo "Dry leaf desc : ".$dry_leaf_desc;

    echo "Grade : ".$grade;
    echo "$invoice";



    $query = "insert into inventory (invoice,date,Garden,grade_type,grade_size,grade,puchaseType,rate,kg_bag,no_bag,shortage,total,infusion,liquor,dry_leaf) values ('$invoice','$inv_date','$garden','$grade_type','$grade_size','$grade','$purchaseType','$rate','$kg_bag','$no_bag','$shortage','$total','$infusion_desc','$liquor_desc','$dry_leaf_desc')";
    $data = mysqli_query($conn,$query);
    if($data){
       header('Location:orthodox_form.php');
       ob_end_flush();
    }
    else {
       header('Location:orthodox_form.php');
       ob_end_flush();
    }
}
}
?>