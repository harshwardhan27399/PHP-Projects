<?php
	include('inc/connect.inc.php');
	$pg_name = basename(__FILE__);
?>
<?php
  @$url = "profile.php";
	  $msg1 = "";
	@session_start();
	if(isset($_SESSION['user_id']))	{
		
		header("Location:".$url);
	}
	$log = @$_POST['log'];
	$reg = @$_POST['reg'];
	
	if($log)	{
		if(isset($_POST["user_login"]) && isset($_POST["pass_login"]))	{
			$user_login = mysqli_real_escape_string($dbc, trim($_POST['user_login']));
			$pass_login = mysqli_real_escape_string($dbc, trim($_POST['pass_login']));
			$pass_login_md5=md5($pass_login);
			$query = mysqli_query($dbc, "SELECT id,username FROM foster_registration WHERE username='$user_login' AND password='$pass_login_md5' LIMIT 1") or die('error');
			$user_count = mysqli_num_rows($query);
			if($user_count == 1)	{
				while($row = mysqli_fetch_array($query))	{
					$user_id = $row['id'];
					$username = $row['username'];
				}
				@session_start();
				$_SESSION['user_id'] = $user_id;
				$_SESSION['user_login'] = $username;
				mysqli_close($dbc);
				header("Location:".$url);
				exit();
			}
			else	{
				$msg1 =  "Please enter valid Username and Password.";
				
			}
		}
	}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>LogIn : Real Care Small Animal Clinic</title>
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
				<h3>LogIn</h3>
			</div>
		</div>
			<div class="typrography">
				<div class="container">
				
					<?php
						if($msg1!="")	{
							echo '<div class="alert alert-danger alert-dismissable">
							<button aria-hidden="true" data-dismiss="alert" class="close" type="button"> × </button>'.$msg1.'</div>';
						}
					?>
					<div class="login-right">
						<h3>Sign in with your account</h3>
						<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
							<div class="sign-in">
								<h4>Username :</h4>
								<input type="text" value="" name="user_login" onfocus="this.value = '';" placeholder="Enter Username"  required="">	
							</div>
							<div class="sign-in">
								<h4>Password :</h4>
								<input type="password" value="Password" name="pass_login" onfocus="this.value = '';" placeholder="Enter Password" required="">
								<a href="#">Forgot password?</a>
							</div>
							<div class="single-bottom">
								<input type="checkbox"  id="brand" value="">
								<label for="brand"><span></span>Remember Me.</label>
							</div>
							<div class="submit_btn">
								<input type="submit" value="SIGN IN" name="log"/>
							</div>
							<center><br/><br/><p>Don't Have an Account?<a href="foster_registration.php"> Signup</p></center>
				
							<!--div class="submit_btn1">
								<a href="foster_registration.php"><input type="submit" name ="submit" value="SIGN UP"></a>
							</div-->		
						</form>
					</div>	
					
					<div class="clearfix"></div>
				</div>
			</div>
			
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
