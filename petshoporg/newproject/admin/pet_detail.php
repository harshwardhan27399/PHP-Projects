<?php
	include('inc/connect.inc.php');
?>
<?php
	$pet_id=$_GET['pet_id'];
	$pg_name = basename(__FILE__);
	if(isset($_POST['remove']))	{
		$upld_id = $_POST['id_upld'];
		$upld_name = $_POST['old_upld'];
		
		if($upld_name!="prev_nt_avl.png")	{
			@unlink("userdata/images/".$upld_name);
		}
		mysqli_query($dbc, "DELETE FROM puppyadoption WHERE id='$upld_id'") or die("fdsgdfg");
		$msg = "Puppy details deleted successfully.";
	}
	if(isset($_POST['updt_sts']))	{
		$upld_id = $_POST['id_upld'];
		$upld_sts = $_POST['status'];
		mysqli_query($dbc, "UPDATE puppyadoption SET status='$upld_sts' WHERE id='$upld_id'") or die("fdsgdfg");
		$msg = "Status Updated Successfully.";
	}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Pet Adoption</title>
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
					<center><h3 class="title1">Pet Adoption</h3></center>
					<div class="panel-body widget-shadow">
						<?php
						
							$get_downloads = mysqli_query($dbc, "SELECT * FROM puppyadoption where id='$pet_id'") or die("sdf");
							if(mysqli_num_rows($get_downloads)<=0)	{
								header("Location:"."edit_homepage.php");
								
							}
							else	{
						?>
								<table class="table table-bordered">
									<thead>
										<tr>
										  <th width="2%">Sr. No.</th>
										  <th width="10%">Pet Name</th>
										  <th width="5%">Age</th>
										  <th width="9%">Sex</th>
										  <th width="15%">Foster Name</th>
										  <th width="8%">Contact Number</th>
										  <th width="15%">Image</th>
										  <th width="15%">Status</th>
										  <th width="3%">Remove</th>
										</tr>
									</thead>
									<tbody>
										<?php
											$ct=0;
											while($get_downloads_data = mysqli_fetch_assoc($get_downloads))	{
												$ct++;
												$foster_id = $get_downloads_data['foster_id'];
												$get_foster = mysqli_query($dbc, "SELECT * FROM foster_registration WHERE id='$foster_id'") or die("sdf");
												$get_foster_data = mysqli_fetch_assoc($get_foster);
												echo '<form action="'.$_SERVER['PHP_SELF'].'" method="post"><tr>
														<td>'.$ct.'</td>
														<td>'.$get_downloads_data['name'].'</td>
														<td>'.$get_downloads_data['age'].'</td>
														<td>'.$get_downloads_data['sex'].'</td>
														<td>'.$get_foster_data['name'].'</td>
														<td>'.$get_foster_data['mobile'].'</td>
														<td><img src="../userdata/images/'.$get_downloads_data['image'].'" width="100%"><br/><br/> 
														<td>
															<select name="status">
																<option '.(($get_downloads_data['status']==0)?'selected="selected"':'""').' value="0">Pending For Approval</option>
																<option '.(($get_downloads_data['status']==1)?'selected="selected"':'""').' value="1">Approved</option>
																<option '.(($get_downloads_data['status']==2)?'selected="selected"':'""').' value="2">Adoption in Progress</option>
																<option '.(($get_downloads_data['status']==3)?'selected="selected"':'""').' value="3">Adopted</option>
															</select><br/><br/>
															<input type="submit" name="updt_sts" value="Update Status"/>
														</td>
														<input type="hidden" name="id_upld" value="'.$get_downloads_data['id'].'"/>
														<input type="hidden" name="old_upld" value="'.$get_downloads_data['image'].'"/>
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