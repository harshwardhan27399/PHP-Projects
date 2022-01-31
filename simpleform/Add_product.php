<?php
/*

CREATE TABLE `product` (
  `Product_name` varchar(50) NOT NULL,
  `price_per_kg` int(5) NOT NULL,
  `Available_quantity` int(5) NOT NULL,
  `nm_farmer` varchar(50) NOT NULL,
  `contact_no` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

*/

 	$link=mysqli_connect("localhost","root","");
	 mysqli_select_db($link,"demo");

?>
   <div>
            <div>
                <h2>
                   Add Product</h2>
                <div>
                    
					<form name="form1" action="" method="post" enctype="multipart/form-data">
					<table >
					<tr>
					<td>Product Name</td>
					<td><input type="text" name="pnm" ></td>
					</tr>
					<tr>
					<td>Product Price/kg</td>
					<td><input type="number" name="pprice" ></td>
					</tr>
					<tr>
					<td>Available Quantity</td>
					<td><input type="number" name="aqty" ></td>
					</tr>
					<tr>
					<td>Farmer Name</td>
					<td><input type="text" name="fnm" ></td>
					</tr>
					<tr>
					<td>Contact Number</td>
					<td><input type="text" name="contact" ></td>
					</tr>
					<tr>
					<td>Address</td>
					<td><input type="text" name="address" ></td>
					</tr>
					<tr>
					<td colspan="2" align="center"><input type="submit" name="submit1" value="upload"></td>
				</tr>
					</table>
					</form>

<?php
if(isset($_POST['submit1']))
{
	 
    $sql = "INSERT INTO `product`(`Product_name`, `price_per_kg`, `Available_quantity`, `nm_farmer`, `contact_no`, `Address`) VALUES 
	('".$_POST["pnm"]."',".$_POST["pprice"].",".$_POST["aqty"].",'".$_POST["fnm"]."','".$_POST["contact"]."','".$_POST["address"]."')";

mysqli_query($link,$sql);
?>

<script type=text/javascript>
alert('1 record add go back to add another product!');
</script>
<?php
}
?>
					
					
                </div>
            </div>
        
     