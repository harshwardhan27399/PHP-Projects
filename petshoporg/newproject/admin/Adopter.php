<?php
	include('inc/connect.inc.php');
?>
<?php
	$pg_name = basename(__FILE__);
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Adopter :Real Care Clinic</title>
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
					<center><h3 class="title1">Adopter Detail</h3></center>
					<div class="panel-body widget-shadow">
						<?php
							$get_downloads = mysqli_query($dbc, "SELECT * FROM adopter_registration") or die("sdf");
							if(mysqli_num_rows($get_downloads)<=0)	{
								echo '<center><p>You don\'t have any Adopted added yet.</p></center>';
							}
							else	{
						?>
								<table class="table table-bordered">
									<thead>
										<tr>
										  <th width="2%">Sr.No.</th>
										  <th width="10%">Name</th>
										  <th width="8%">Mobile No</th>
										  <th width="12%">Email</th>
										  <th width="10%">Aadhar No</th> 
										  <th width="12%">Address</th>
										  <th width="8%">Preference</th>
										  <th width="2%">Adoption Id</th>
										  <th width="2%">Pet Detail</th>
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
														<td>'.$ct.'</td>
														<td>'.$get_downloads_data['name'].'</td>
														<td>'.$get_downloads_data['mobile'].'</td>
														<td>'.$get_downloads_data['email_id'].'</td>
														<td>'.$get_downloads_data['aadhar'].'</td>
														<td>'.$get_downloads_data['address'].'</td>
														<td>'.$get_downloads_data['Preference'].'</td>
														<td>'.$get_downloads_data['pet_id'].'</td>
														<td><a href="pet_detail.php?pet_id='.$get_downloads_data['pet_id'].'"><input type="button" class="sub" value="View" name="view"/></a></td>
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