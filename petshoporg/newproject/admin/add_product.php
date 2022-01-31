<?php
	include('inc/connect.inc.php');
?>
<?php
	$pg_name = basename(__FILE__);
	if(isset($_POST['sub']))	{
		if(isset($_POST['prdct_nm']) && !empty($_POST['prdct_nm']))	{
			$res_prd = mysqli_query($dbc, "SELECT * FROM products WHERE name = '".$_POST['prdct_nm']."'") or die("ss");
			if(mysqli_num_rows($res_prd)==0)	{
				if(isset($_POST['prdct_ct']) && $_POST['prdct_ct']!="sel")	{
					if(isset($_POST['prdct_prc']) && !empty($_POST['prdct_prc']))	{
						if(isset($_FILES['upld_file']) && $_FILES['upld_file']['size']>0)	{
							$image_upld = mysqli_real_escape_string($dbc,trim(@$_FILES['upld_file']['name']));
							$newimage_upld = time().$image_upld;
							$target = '../userdata/product/images/'.$newimage_upld;
							$date_added = date("Y-m-d H:i:s");
							move_uploaded_file($_FILES['upld_file']['tmp_name'],$target);
							mysqli_query($dbc, "INSERT INTO products (name, category, image, dscr, price, qty, upld_time) VALUES ('".$_POST['prdct_nm']."', '".$_POST['prdct_ct']."', '".$newimage_upld."', '".$_POST['prdct_desc']."', '".$_POST['prdct_prc']."', '".$_POST['prdct_qty']."', '".$date_added."')") or die("ERROR ooo");
							$msg = "Product added successfully.";
						}
						else	{
							$date_added = date("Y-m-d H:i:s");
							mysqli_query($dbc, "INSERT INTO products (name, category, image, dscr, price, qty, upld_time) VALUES ('".$_POST['prdct_nm']."', '".$_POST['prdct_ct']."', 'prev_nt_avl.png', '".$_POST['prdct_desc']."', '".$_POST['prdct_prc']."', '".$_POST['prdct_qty']."', '".$date_added."')") or die("ERROR ooo");
							$msg = "Product added successfully.";
						}
					}
					else	{
						$msg = "Please enter valid product price.";
					}
				}
				else	{
					$msg = "Please select valid product category.";
				}
			}
			else	{
				$msg = "Product with same name already exist.";
			}
		}
		else	{
			$msg = "Please enter valid product name.";
		}
	}
	
	
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Add Product</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

<link href="css/style.css" rel='stylesheet' type='text/css' />

<link href="css/font-awesome.css" rel="stylesheet"> 

<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>
 

<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>

<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
		
		<?php
			include('inc/left_sidebar.inc.php');
		?>
		
		<!-- header-starts -->
		<?php
			include('inc/header.inc.php');
		?>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<?php
				if(!empty($msg))	{
					echo '<script>
							alert("'.$msg.'");
						</script>';
				}
			?>
			<div class="main-page">
				<div class="forms">
					<center><h3 class="title1">Add Product</h3></center>
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
							<h4>Add Product :</h4>
						</div>
						<div class="form-body">
							<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data"> 
								<div class="form-group">
									<label for="exampleInputEmail1">Name of Product</label> 
									<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Name of Product" name="prdct_nm"> 
								</div>
								<div class="form-group">
									<label for="selector1" class="">Select Product Category</label>
									<select id="selector1" class="form-control1" name="prdct_ct">
										<option value="sel">Select Product Category</option>
										<?php
											$res = mysqli_query($dbc, "SELECT * FROM product_cat") or die("s");
											echo 'fsdgdfg';
											if(mysqli_num_rows($res)>0)	{
												while($res1 = mysqli_fetch_assoc($res))	{
													echo '<option value="'.$res1['name'].'">'.$res1['name'].'</option>';
												}
											}
										?>
									</select>
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Price of Product (Rs.)</label> 
									<input type="number" class="form-control" id="exampleInputEmail1" placeholder="Enter Price of Product" name="prdct_prc"> 
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Description of Product</label> 
									<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Description of Product" name="prdct_desc"> 
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Quantity of Product</label> 
									<input type="number" class="form-control" id="exampleInputEmail1" placeholder="Enter Quantity of Product in Stock" name="prdct_qty"> 
								</div>
								<div class="form-group"> 
									<label for="exampleInputFile">Image for product</label> 
									<input type="file" id="exampleInputFile" name="upld_file"> 
									<p class="help-block"></p> 
								</div>
								<button type="submit" class="btn btn-default" name="sub">Upload</button> 
							</form> 
						</div>
					</div>
					<div class=" form-grids row form-grids-right">
						<div class="widget-shadow " data-example-id="basic-forms"> 
						</div>
					</div>
					
				</div>
			</div>
		</div>
		<!--footer-->
		<?php
			include('inc/footer.inc.php');
		?>
        <!--//footer-->
	</div>
	
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			
			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	
   <script src="js/bootstrap.js"> </script>
</body>
</html>