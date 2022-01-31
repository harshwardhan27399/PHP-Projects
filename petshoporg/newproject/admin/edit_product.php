<?php
	include('inc/connect.inc.php');
	//mysqli_query($dbc, "UPDATE products SET qty = qty - 1 WHERE id = '10'") or die("ERROR ooos");
?>
<?php
	$pg_name = basename(__FILE__);
	$s = "";
	$s = @$_GET['s'];
	if($s == "scs")	{
		$msg = "Product information updated successfully.";
	}
	if(isset($_POST['remove_img']))	{
		$upld_id = $_POST['id_upld'];
		$upld_name = $_POST['old_upld'];
		if($upld_name!="prev_nt_avl.png")	{
			@unlink("../userdata/product/images/".$upld_name);
		}
		mysqli_query($dbc, "UPDATE products SET image='prev_nt_avl.png' WHERE id = '".$upld_id."'") or die("fdsgdfg");
		$msg = "Image removed successfully.";
	}
	if(isset($_POST['remove']))	{
		$upld_id = $_POST['id_upld'];
		$upld_name = $_POST['old_upld'];
		
		if($upld_name!="prev_nt_avl.png")	{
			@unlink("../userdata/product/images/".$upld_name);
		}
		mysqli_query($dbc, "DELETE FROM products WHERE id='$upld_id'") or die("fdsgdfg");
		$msg = "Product deleted successfully.";
	}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Edit Products</title>
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
				<div class="tables">
					<center><h3 class="title1">Edit Products</h3></center>
					<div class="panel-body widget-shadow">
						<?php
							$get_downloads = mysqli_query($dbc, "SELECT * FROM products") or die("sdf");
							if(mysqli_num_rows($get_downloads)<=0)	{
								echo '<center><p>You don\'t have any products added yet.</p></center>';
							}
							else	{
						?>
								<table class="table table-bordered">
									<thead>
										<tr>
										  <th width="2%">Sr. No.</th>
										  <th width="20%">Name</th>
										  <th width="10%">Category</th>
										  <th width="9%">Description</th>
										  <th width="10%">Price</th>
										  <th width="10%">Qty.</th>
										  <th width="15%">Image</th>
										  <th width="8%">Edit</th>
										  <th width="8%">Remove</th>
										</tr>
									</thead>
									<tbody>
										<?php
											$ct=0;
											while($get_downloads_data = mysqli_fetch_assoc($get_downloads))	{
												$ct++;
												echo '<form action="'.$_SERVER['PHP_SELF'].'" method="post"><tr>
														<input type="hidden" name="id_upld" value="'.$get_downloads_data['id'].'">
														<input type="hidden" name="name_upld" value="'.$get_downloads_data['name'].'">
														<input type="hidden" name="old_upld" value="'.$get_downloads_data['image'].'">
														<td>'.$ct.'</td>
														<td>'.$get_downloads_data['name'].'</td>
														<td>'.$get_downloads_data['category'].'</td>
														<td>'.$get_downloads_data['dscr'].'</td>
														<td>'.$get_downloads_data['price'].'</td>
														<td>'.$get_downloads_data['qty'].'</td>
														<td><img src="../userdata/product/images/'.$get_downloads_data['image'].'" width="100%"><br/><br/><center>'.(($get_downloads_data['image']!="prev_nt_avl.png") ? '<input type="submit" class="sub" value="Remove Image" name="remove_img"/>' : '').'</center></td>
														<td><a href="edit_prdct_indi.php?id='.$get_downloads_data['id'].'"><input type="button" class="sub" value="Edit" /></a></td>
														<td><input type="submit" class="sub" value="Remove" name="remove"/></td>
													</tr></form>';
											}
										?>
										
									</tbody>
								</table>
						<?php
							}
						?>
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