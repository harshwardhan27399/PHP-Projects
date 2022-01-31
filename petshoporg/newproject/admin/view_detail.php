<?php
	include('inc/connect.inc.php');
?>
<?php
	$pg_name = basename(__FILE__);	
?>

<!DOCTYPE HTML>
<html>
<head>
<title>View Detail :Real Care Clinic</title>
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
					<center><h3 class="title1">Foster Detail</h3></center>
					<div class="panel-body widget-shadow">
						<?php
							$get_downloads = mysqli_query($dbc, "SELECT * FROM foster_registration") or die("sdf");
							if(mysqli_num_rows($get_downloads)<=0)	{
								echo '<center><p>You don\'t have any Foster added yet.</p></center>';
							}
							else	{
						?>
								<table class="table table-bordered">
									<tbody>
										<?php
											if(isset($_GET['id'])) {
												$id=$_GET['id'];
												$get_downloads = mysqli_query($dbc, "SELECT * FROM foster_registration WHERE id='$id'")or die('sdfs');
												while($get_downloads_data = mysqli_fetch_assoc($get_downloads))	{
													echo '<tr>
															<td><label for="name">Image</label></td>
															<td><img src="../userdata/images/'.$get_downloads_data['photo'].'" width="150px"/></td>
														</tr>
														<tr>
															<td><label for="name">Name</label></td>
															<td><label for="name">'.$get_downloads_data['name'].'</label></td>
														</tr>
														<tr>
															<td><label for="name">DOB</label></td>
															<td><label for="name">'.$get_downloads_data['dob'].'</label></td>
														</tr>
														<tr>
															<td><label for="name">NGO/Individual</label></td>
															<td><label for="name">'.$get_downloads_data['ngo'].'</label></td>
														</tr>
														<tr>
															<td><label for="name">Sex</label></td>
															<td><label for="name">'.$get_downloads_data['sex'].'</label></td>
														</tr>
														<tr>
															<td><label for="name">Address</label></td>
															<td><label for="name">'.$get_downloads_data['address'].'</label></td>
														</tr>
														<tr>
															<td><label for="name">Contact No</label></td>
															<td><label for="name">'.$get_downloads_data['mobile'].'</label></td>
														</tr>
														<tr>
															<td><label for="name">Adhaar No</label></td>
															<td><label for="name">'.$get_downloads_data['aadhar'].'</label></td>
														</tr>
														<tr>
															<td><label for="name">Educational Qualification</label></td>
															<td><label for="name">'.$get_downloads_data['education'].'</label></td>
														</tr>
														<tr>
															<td><label for="name">Profession</label></td>
															<td><label for="name">'.$get_downloads_data['Profession'].'</label></td>
														</tr>
														<tr>
															<td><label for="name">Marital status</label></td>
															<td><label for="name">'.$get_downloads_data['Maritalstatus'].'</label></td>
														</tr>
														<tr>
															<td><label for="name">Type</label></td>
															<td><label for="name">'.$get_downloads_data['type'].'</label></td>
														</tr>
														<tr>
														<center><a href="Foster.php"><input type="submit" class="sub" value="Back To List" name="remove"></a></center><br />
														</tr>';
												}
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