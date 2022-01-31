<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `product` WHERE CONCAT('id','productname','productprice','productqty','product_image','productcatg','productdescription') LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM product";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
	
 	$connect=mysqli_connect("localhost","root","");
	 mysqli_select_db($connect,"shopopet");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>
<?php
include "header.php";
	
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"shopopet");
?>
            <?php
            //include "left_menu.php";
            ?>
            <div class="col-sm-9 padding-right">
                <div class="features_items"><!--features_items-->
                   <h1 class="title text-center">Featured Items</h1>
 </div>
<form action="" method="post" >
</br>
<?php

 //include("pagination/function.php");
	
 $page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
    	$limit = 5; //if you want to dispaly 10 records per page then you have to change here
    	$startpoint = ($page * $limit) - $limit;
        $statement = "product"; //you have to pass your query over here

$search_result=mysqli_query($link,"select * from {$statement} LIMIT {$startpoint} , {$limit}");

while($row=mysqli_fetch_array($search_result))
{
?>

 <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="../admin/<?php echo $row["product_image"]; ?>" height="200" width="200" />
                                    <h2>RS.<?php echo $row["productprice"]; ?></h2>
                                    <p><?php echo $row["productname"]; ?></p>
                                   <a href="product_details.php?id=<?php echo $row["id"]; ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>View Description</a>
                                    </div>
                                <div class="product-overlay">
                                    <div class="overlay-content">
                                        <h2>Rs. <?php echo $row["productprice"]; ?></h2>
                                        <p><?php echo $row["productname"]; ?></p>
                                        <a href="product_details.php?id=<?php echo $row["id"]; ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>View Description</a>  
                                           </div>
                                </div>
                            </div>
                            <div class="choose">
                                <ul class="nav nav-pills nav-justified">
                                </ul>
                            </div>
                        </div>
                    </div>

<?php
}
?>
</form></div>

<?php
//include "footer.php";
?>