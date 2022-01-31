
<?php
 	$link=mysqli_connect("localhost","root","");
	 mysqli_select_db($link,"shopopet");

     $id=$_GET["id"];
     $res = "select * from  product where id='$id'";
	 $r=mysqli_query($link,$res);
	 while($row=mysqli_fetch_array($r))
	 {


		$pro_name=$row["productname"];
		$pro_price=$row["productprice"];
		$pro_qty=$row["productqty"];
		$pro_img=$row["product_image"];
		$pro_cat=$row["productcatg"];
		$pro_desc=$row["productdescription"];
	 }
    
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
					<td colspan="2" align="center">
					<img src="<?php echo "$pro_img"; ?>" height="100" width="100"></td>
					</tr>
					
					<tr>
					<td>Product Name</td>
					<td><input type="text" name="pnm" value="<?php echo "$pro_name";?>" ></td>
					</tr>
					<tr>
					<td>Product Price</td>
					<td><input type="text" name="pprice" value="<?php echo "$pro_price";?>" ></td>
					</tr>
					<tr>
					<td>Product Quantity</td>
					<td><input type="text" name="pqty" value="<?php echo "$pro_qty";?>" ></td>
					</tr>
					<tr>
					<td>Product Image</td>
					<td><input type="file" name="pimage"></td>
					</tr>
					<tr>
					<td>Product Categoty</td>
					<td>
					 <input type="text" name="pcategory" value="<?php echo "$pro_cat";?>">
					
					</td>
					</tr>
					<tr>
					<td>Product Description</td>
					<td> 
					<textarea cols="15" rows="10" name="pdesc"><?php echo "$pro_qty";?>"</textarea>
			        </td>
					</tr>
					<tr>
					<td colspan="2" align="center"><input type="submit" name="submit1" value="upload"></td>
				</tr>
					
					
					</table>
					
					
					</form>

					
                </div>
            </div>

			<?php

  if(isset($_POST["submit1"]))
  {

	$fnm=$_FILES["pimage"]["name"];

	if($fnm=="")
	{


		mysqli_query($link,"update product set productname='$_POST[pnm]',productprice='$_POST[pprice]',productqty='$_POST[pqty]',productcatg='$_POST[pcategory]',productdescription='$_POST[pdesc]' where id=$id");

	}

	else
	{


	$v1=rand(1111,9999);
   $v2=rand(1111,9999);
   
   $v3=$v1.$v2;
   
   $v3=md5($v3);
 
   
   $fnm=$_FILES["pimage"]["name"];
   $dst="./product_image/".$v3.$fnm;
   $dst1="product_image/".$v3.$fnm;
   move_uploaded_file($_FILES["pimage"]["tmp_name"],$dst);

   mysqli_query($link,"update product set product_image='$dst1', productname='$_POST[pnm]',productprice='$_POST[pprice]',productqty='$_POST[pqty]',productcatg='$_POST[pcategory]',productdescription='$_POST[pdesc]' where id=$id");

   
	}
	?>
	
<script type="text/javascript">

alert('1 record update go back to update another!');
window.location ="displayitem.php";
</script>
<?php
  }
  ?>
<?php
include "footer.php";  
  
?>         
     