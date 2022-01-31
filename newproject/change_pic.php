<?php
	include('inc/connect.inc.php');
	$pg_name = basename(__FILE__);
	@$url = "login.php";
	if(!isset($_SESSION['user_id']))	{
		header("Location:".$url);
	}
?>
<?php
	define('MAX_SIZE', '62914560'); //62914560
	$msg="";
	$msg1="";
	$flag=0;
	$user_id = $_SESSION['user_id'];
	if(isset($_POST['submit']))	{
		$image_upld = mysqli_real_escape_string($dbc,trim(@$_FILES['image']['name']));
		$image_type = @$_FILES['image']['type'];
		if(($image_type=='image/gif') || ($image_type=='image/jpeg') ||($image_type=='image/png') || ($image_type=='image/pjpeg') || ($image_type=='image/jpg') && (@$_FILES['imagefile']['size']>0) && (@$_FILES['imagefile']['size']<MAX_SIZE))	{
			$newimage_upld = time().$image_upld;
			if(strlen($newimage_upld)>50)	{ 		//50
				$upld = substr($newimage_upld, 0, 50);	// substr($newimage_upld, 0, 30)
			}
			else {
				$upld=$newimage_upld;
			}
			if($image_type=="image/gif")	{
				$ext="gif";
			}
			if($image_type=="image/jpeg")	{
				$ext="jpg";
			}
			if($image_type=="image/pjpeg")	{
				$ext="pjpeg";
			}
			if($image_type=="image/png")	{
				$ext="png";
			}
			$newimage_upld = time().$upld.'.'.$ext;
			$target = 'userdata/images/'.$newimage_upld;
			$old_upld_nm = $_POST['olg_img'];
			if(move_uploaded_file($_FILES['image']['tmp_name'], $target))	{
				if($old_upld_nm!="noprofilepic.jpg")	{
					@unlink("userdata/images/".$old_upld_nm);
				}
				mysqli_query($dbc,"UPDATE foster_registration SET photo='".$newimage_upld."' WHERE id= '$user_id'") or die("dsdv");
				$msg = "Profile picture updated successfully.";
			}
			else	{
				$msg1="Error in uploading profile picture. Please try again.";
			}
		}
		else	{
			$msg1 = "Please select valid image to upload.";
		}
	}
?>
<!DOCTYPE html>
	<html>
		<head>
			<title>Change Profie Picture: Real Care Small Animal Clinic</title>
			<!-- for-mobile-apps -->
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
			function hideURLbar(){ window.scrollTo(0,1); } </script>
			<!-- //for-mobile-apps -->
			<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
			<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
			<!-- js -->
			<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
			<!-- //js -->
			<!-- cart -->
			<script src="js/simpleCart.min.js"></script>
			<!-- cart -->
			<!-- for bootstrap working -->
			<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
			
			<script src="js/jquery.easing.min.js"></script>
		</head>
		<body>
			<?php
				include('inc/header.inc.php');
			?>
			<div class="page-head">
				<div class="container">
					<h3></h3>
				</div>
			</div>
			<div class="typrography11">
				<div class="container">	
					<div class="grid_3 grid_5 wow fadeInLeft animated" data-wow-delay=".5s">
						<h3 class="bars"></h3>
						<?php
							include('inc/adopter.header.inc.php');
						
						?>
					<?php
						if($msg1!="" && $msg=="")	{
							echo '<div class="alert alert-danger alert-dismissable">
							<button aria-hidden="true" data-dismiss="alert" class="close" type="button"> × </button>'.$msg1.'</div>';
						}
						else if($msg!="" && $msg1=="")	{
							echo '<div class="alert alert-success alert-dismissable">
							<button aria-hidden="true" data-dismiss="alert" class="close" type="button"> × </button>'.$msg.'
							</div>';
						}
					?>
					<!--div class="col-sm-6 col-md-6 col-lg-6 mb-60">
						<div class="pageadoption11">
							<div class="container">
								<h2></h2>
							</div>
						</div>
					</div-->
					<div class="login-right login-right1">
						<center><h3 >Profile Picture Settings</h3>
						
						<form  style="border: 1px solid rgb(200,200,200); padding: 5% 5%;" method="post" action="<?php $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">		   
            				
							<div class="sign-in">
								<?php 
									$user_id = $_SESSION['user_id'];
									$get_downloads = mysqli_query($dbc, "SELECT id,photo FROM foster_registration WHERE id='$user_id'")or die('sdfs');
									$get_downloads_data = mysqli_fetch_assoc($get_downloads);
									echo '<img style="max-width: 200px;" src="userdata/images/'.$get_downloads_data['photo'].'"/>';
									echo '<input type="hidden" name="olg_img" value="'.$get_downloads_data['photo'].'">';
									
								?>
							
								<input type="file" name="image" class="clr_plc form-control"  required="" aria-describedby="basic-addon1">
							</div>
								<div class="btn grid_3 grid_5 wow fadeInRight animated" data-wow-delay=".5s">
									<h2 class="submit_btn">
										<input style="width:200px;margin-top:20px;" type="submit" name="submit" id="submit" class="btn_succ" value="Update"/>
									</h2>
								</div>
						</form></center>
						</div>
					</div>		
					<div class="clearfix"></div>
				</div>
			</div>
			<?php
				include('inc\footer.inc.php');
			?>
			<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
								<div class="login">
									<div class="login-bottom">
										<h3>Sign up for free</h3>
										<form>
											<div class="sign-up">
												<h4>Email :</h4>
												<input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">	
											</div>
											<div class="sign-up">
												<h4>Password :</h4>
												<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
												
											</div>
											<div class="sign-up">
												<h4>Re-type Password :</h4>
												<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
												
											</div>
											<div class="sign-up">
												<input type="submit" value="REGISTER NOW" >
											</div>
											
										</form>
									</div>
									<div class="login-right">
										<h3>Sign in with your account</h3>
										<form>
											<div class="sign-in">
												<h4>Email :</h4>
												<input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">	
											</div>
											<div class="sign-in">
												<h4>Password :</h4>
												<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
												<a href="#">Forgot password?</a>
											</div>
											<div class="single-bottom">
												<input type="checkbox"  id="brand" value="">
												<label for="brand"><span></span>Remember Me.</label>
											</div>
											<div class="sign-in">
												<input type="submit" value="SIGNIN" >
											</div>
										</form>
									</div>
									<div class="clearfix"></div>
								</div>
								<p>By logging in you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</body>
	</html>