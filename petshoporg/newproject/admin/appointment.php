<?php
	include('inc/connect.inc.php');
?>
<?php
	$pg_name = basename(__FILE__);
	
	if(isset($_POST['updt']))	{
		if(isset($_POST['text_noti']) && !empty($_POST['text_noti']))	{
			$delete_id = $_POST['id_upld'];
			$name_new = $_POST['text_noti'];;
			mysqli_query($dbc, "Update product_cat SET name = '$name_new' WHERE id='$delete_id'") or die("sdssvsv");
			$msg = "Product category updated successfully.";
		}
		else	{
			$msg = "Please enter valid new name of product category.";
		}
	}
	if(isset($_POST['remove']))	{
		$delete_id = $_POST['id_upld'];
		mysqli_query($dbc, "DELETE FROM product_cat WHERE id='$delete_id'") or die("sdvsv");
		$msg = "Product category deleted successfully.";
	}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Show Appointment</title>
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
				<div class="tables">
					<center><h3 class="title1">Appointment</h3></center>
					<div class="panel-body widget-shadow">
					<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
					<center><input type="date" name="app_date">
					<input type="submit" name="submit" class="btn_succ" value="submit"><center>
					</form>
						<?php 
							$get_visiter;
							if(isset($_POST['submit'])) {
								$appdate=$_POST['app_date'];
								$get_visiter = mysqli_query($dbc, "SELECT * FROM visiter where con_date='$appdate'") or die("sdf");
							
							}
							else	{
								$currentdate=date("Y-m-d");
								echo$currentdate;
								$get_visiter = mysqli_query($dbc, "SELECT * FROM visiter where con_date='$currentdate'") or die("sdf");
							}
							if(mysqli_num_rows($get_visiter)<=0)	{
								echo '<center><p>You don\'t have any Appointment today!.</p></center>';
							}
							else	{
						?>
								<table class="table table-bordered">
									<thead>
										<tr>
										  <th width="5%">Sr.No.</th>
										  <th width="25%">Name Of Client</th>
										  <th width="15%">Mobile No</th>
										  <th width="15%">Date</th>
										  <th width="10%">Time</th>
										  <th width="35%">Description</th>
										</tr>
									</thead>
									<tbody>
									<?php
											//$ct=0;
											//while($get_downloads_data = mysqli_fetch_assoc($get_downloads))	{
												//$ct++;
												/*echo '<form action="'.$_SERVER['PHP_SELF'].'" method="post"><tr>
														<input type="hidden" name="id_upld" value="'.$get_downloads_data['id'].'">
														<td>'.$ct.'</td>
														<td>'.$get_downloads_data['name'].'</td>
														<td><input type="text" class="form-control" id="exampleInputEmail1" value="'.$get_downloads_data['name'].'" name="text_noti"></td>
														<td><input type="submit" class="sub" value="Update" name="updt"/></td>
														<td><input type="submit" class="sub" value="Remove" name="remove"/></td>
													</tr></form>';
											}*/
									?>
										<?php
											$ct=0;
											while($get_visiter_data = mysqli_fetch_assoc($get_visiter))	{
												$ct++;
												echo '<form action="'.$_SERVER['PHP_SELF'].'" method="post"><tr>
													
														<input type="hidden" name="id_upld" value="'.$get_visiter_data['id'].'">
														<td>'.$ct.'</td>
														<td>'.$get_visiter_data['Full_name'].'</td>
														<td>'.$get_visiter_data['mob_no'].'</td>
														<td>'.$get_visiter_data['con_date'].'</td>
														<td>'.$get_visiter_data['con_time'].'</td>
														<td>'.$get_visiter_data['visit_des'].'</td>
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