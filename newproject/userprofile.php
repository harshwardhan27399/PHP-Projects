<?php
$msg1="";
$msg="";

?>
<!DOCTYPE html>
<html>
	<head>
		<title>: Real Care Small Animal Clinic</title>
		<!-- for-mobile-apps -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Smart Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
		Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
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
		<!-- //for bootstrap working -->
		<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
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
			<div class="typrography">
				<div class="container">
				<?php
				include('inc/adopter.header.inc.php');
				?>
				
					<!--div class="login-right">
						<h3>Sign in with your account</h3>
						<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
							<div class="sign-in">
								<h4>Username :</h4>
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
							<div class="submit_btn">
								<input type="submit" value="SIGN IN">
							</div>
							
							<!--div class="submit_btn1">
								<a href="foster_registration.php"><input type="submit" name ="submit" value="SIGN UP"></a>
							</div-->		
						<!--/form>
					</div>	
					<div class="clearfix"></div>
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
				</div>
				<div class="log_privecy">
				<p>By logging in you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p>
				<p style="margin-top:8px;margin-left:150px">Have an Account ?<a href="foster_registration.php"> Signup</p>
				</div-->
			<!--/div-->
			
			<div class="footer">
				<?php
					include('inc\footer.inc.php');
				?>
			</div>
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
									<div>
									<p>By logging in you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
	</body>
</html>