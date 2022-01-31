<?php
	include('inc/connect.inc.php');
	$pg_name = basename(__FILE__);
	@$url = "login.php";
	if(!isset($_SESSION['user_id']))	{
		header("Location:".$url);
	}
?>
<?php
	define('MAX_SIZE', '62914560');
	$msg="";
	$msg1="";
	$flag=0;
	$user_id = $_SESSION['user_id'];
	if(isset($_POST['chng_pass']) && !empty($_POST['old_pass']) && !empty($_POST['new_pass1']) && !empty($_POST['new_pass2']))	{
		$old_pass = mysqli_real_escape_string($dbc, trim($_POST['old_pass']));
		$new_pass = mysqli_real_escape_string($dbc, trim($_POST['new_pass1']));
		$new_pass1 = mysqli_real_escape_string($dbc, trim($_POST['new_pass2']));
		if(!empty($old_pass) && !empty($new_pass) && !empty($new_pass1))	{
			if(($new_pass==$new_pass1))	{
				if((strlen($new_pass)>5) && (strlen($new_pass)<33))	{
					$username1 = $_SESSION['user_login'];
					$result = mysqli_query($dbc, "SELECT password FROM foster_registration WHERE id = '$user_id'") or die("ERROR");
					while($row = mysqli_fetch_assoc($result))	{
						$db_password = $row['password'];
					}
					$old_pass_md5 = md5($old_pass);
					if($db_password==$old_pass_md5)	{
						$new_pass_md5 = md5($new_pass);
						mysqli_query($dbc, "UPDATE foster_registration SET password='$new_pass_md5' WHERE id = '$user_id'");
						$msg = "*Password Updated Successfully.";
					}
					else	{
						$msg1 = "*Please enter valid old password.";
					}
				}
				else{
					$msg1 = "*Password should be 6-32 character long.";
				}
			}
			else	{
				$msg1 = "*New password is not matching";
			}
		}
	}
?>
<!DOCTYPE html>
	<html>
		<head>
			<title>Change Password: Real Care Small Animal Clinic</title>
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
						<center><h3>Change Password</h3>
						<form method="post" action="<?php $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">		   
            				<div class="sign-in">
								<h4>Old Password</h4>
								<input type="password" name="old_pass" required="" onfocus="this.value = '';" required="">
							</div>
							<div class="sign-in">
								<h4>New Password</h4>
								<input type="password" name="new_pass1" required="" onfocus="this.value = '';" required="">
							</div>
							<div class="sign-in">
								<h4>Re-Type New Password</h4>
								<input type="password" name="new_pass2" required="" onfocus="this.value = '';" required="">
							</div>
							
								<div class="btn grid_3 grid_5 wow fadeInRight animated" data-wow-delay=".5s">
									<h2 class="submit_btn">
										<input style="width:200px;margin-top:20px;" type="submit" name="chng_pass" id="submit" class="btn_succ" value="Submit"/>
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