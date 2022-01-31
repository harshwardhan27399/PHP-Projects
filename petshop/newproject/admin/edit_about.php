<?php 
	$pg_name = basename(__FILE__);
	include("inc/check.inc.php");
?>
<?php 
	include("inc/connect.inc.php");
?>
<?php

	$msg = "";
	if(!empty($_POST['info']))	{
		$info = $_POST['info'];
		$position = $_POST['position'];
		mysqli_query($dbc, "UPDATE clinic_content SET info='$info' WHERE pos='$position'") or die("ffdsfs");
		$msg .= "Info for $position is updated Successfully";
	}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Pet Clinic:About</title>
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
			<div class="main-page compose">
				<div class="col-md-8 compose-right widget-shadow ss">
					<div class="panel-default">
						<div class="panel-heading">
							<center>About</center> 							
						</div>
						<div class="panel-body">
							<form class="com-mail" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
								<?php
									$get_info = mysqli_query($dbc, "SELECT * FROM clinic_content WHERE pos='about_head'") or die("bsbs");
									$get_info_data = mysqli_fetch_assoc($get_info);
									echo '<textarea rows="6" class="form-control1 control2" name="info" placeholder="Message :" >'.$get_info_data['info'].'</textarea>';
									echo '<input type="hidden" name="position" value="about_head">';
								?>
								<input type="submit" value="Update" name="submitbtn"/> 
							</form>
							
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