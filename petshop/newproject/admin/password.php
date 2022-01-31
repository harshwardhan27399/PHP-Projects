<?php
	include('inc/connect.inc.php');
?>
<?php
	$pg_name = basename(__FILE__);
	if(isset($_POST['chng_pass']) && !empty($_POST['old_pass']) && !empty($_POST['new_pass1']) && !empty($_POST['new_pass2']))	{
		$old_pass = mysqli_real_escape_string($dbc, trim($_POST['old_pass']));
		$new_pass = mysqli_real_escape_string($dbc, trim($_POST['new_pass1']));
		$new_pass1 = mysqli_real_escape_string($dbc, trim($_POST['new_pass2']));
		if(!empty($old_pass) && !empty($new_pass) && !empty($new_pass1))	{
			if(($new_pass==$new_pass1))	{
				if((strlen($new_pass)>5) && (strlen($new_pass)<33))	{
					$username1 = $_SESSION['user_login1'];
					$result = mysqli_query($dbc, "SELECT * FROM user WHERE username = '$username1'") or die("ERROR");
					while($row = mysqli_fetch_assoc($result))	{
						$db_password = $row['password'];
					}
					$old_pass_md5 = md5($old_pass);
					if($db_password==$old_pass_md5)	{
						$new_pass_md5 = md5($new_pass);
						mysqli_query($dbc, "UPDATE user SET password='$new_pass_md5' WHERE username = '$username1'");
						$msg = "*Password Updated Successfully.";
					}
					else	{
						$msg = "*Please enter valid old password.";
					}
				}
				else{
					$msg = "*Password should be 6-32 character long.";
				}
			}
			else	{
				$msg = "*New password is not matching";
			}
		}
	}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>ShopOPet: Edit password</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

<link href="css/style.css" rel='stylesheet' type='text/css' />

<link href="css/font-awesome.css" rel="stylesheet"> 

<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>

<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
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
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
							<h4>Edit Profile:</h4>
						</div>
						<div class="form-body">
							<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post"> 
								<div class="form-group"> 
									<label for="exampleInputEmail1">Old Password</label> 
									<input type="password" class="form-control" id="exampleInputEmail1" placeholder="Old Password" name="old_pass"> 
								</div> 
								<div class="form-group"> 
									<label for="exampleInputPassword1">Password</label> 
									<input type="password" class="form-control" id="exampleInputPassword1" placeholder="New Password" name="new_pass1"> 
								</div> 
								<div class="form-group"> 
									<label for="exampleInputPassword1">Retype Password</label> 
									<input type="password" class="form-control" id="exampleInputPassword1" placeholder="New Password (Retype)" name="new_pass2"> 
								</div>  
								<button type="submit" class="btn btn-default" name="chng_pass">Update</button> </form> 
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
	<!-- Classie -->
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
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
</body>
</html>