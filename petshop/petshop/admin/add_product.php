
<?php
 	$link=mysqli_connect("localhost","root","");
	 mysqli_select_db($link,"shopopet");
?>
      
     
<?php

?>
<?php

include "header.php";
include "menu.php";
?>
   <div class="grid_10">
            <div class="box round first">
                <h2>
                   Add Product</h2>
                <div class="block">
                    
					<form name="form1" action="" method="post" enctype="multipart/form-data">
					<table >
					<tr>
					<td>Product Name</td>
					<td><input type="text" name="pnm" ></td>
					</tr>
					<tr>
					<td>Product Price</td>
					<td><input type="text" name="pprice" ></td>
					</tr>
					<tr>
					<td>Product Quantity</td>
					<td><input type="text" name="pqty" ></td>
					</tr>
					<tr>
					<td>Product Image</td>
					<td><input type="file" name="pimage"></td>
					</tr>
					<tr>
					<td>Product Categoty</td>
					<td>
					<select name="pcategory">
					<option value="dog accessories">dog accessories</option>
					<option value="cat accessories" selected>cat accessories</option>
					<option value="rabbit accessories">rabbit accessories</option>
					<option value="rodent accessories">rodent accessories</option>
					<option value="fish accessories">fish accessories</option>
					</select>
					</td>
					</tr>
					<tr>
					<td>Product Description</td>
					<td>
					<textarea cols="15" rows="10" name="pdesc">this is nice product</textarea>
			        </td>
					</tr>
					<tr>
					<td colspan="2" align="center"><input type="submit" name="submit1" value="upload"></td>
				</tr>
					
					
					</table>
					
					
					</form>

<?php
if(isset($_POST['submit1']))
{
	$v1=rand(1111,9999);
   $v2=rand(1111,9999);
   
   $v3=$v1.$v2;
   
   $v3=md5($v3);
 
   
   $fnm=$_FILES["pimage"]["name"];
   $dst="./product_image/".$v3.$fnm;
   $dst1="product_image/".$v3.$fnm;
   move_uploaded_file($_FILES["pimage"]["tmp_name"],$dst);



    $sql = "INSERT INTO product (productname,productprice,productqty,product_image,productcatg,productdescription)
   VALUES ('".$_POST["pnm"]."','".$_POST["pprice"]."','".$_POST["pqty"]."','$dst1','".$_POST["pcategory"]."','".$_POST["pdesc"]."')";

mysqli_query($link,$sql);
?>


<script type=text/javascript>
alert('1 record add go back to add another product!');
window.location ="add_product.php";
</script>
<?php
}
?>
					
					
                </div>
            </div>
<?php
include "footer.php";  
  
?>         
     