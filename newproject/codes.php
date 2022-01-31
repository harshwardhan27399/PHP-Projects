<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="keywords" content="Smart Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>

<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>

	<script src="js/simpleCart.min.js"></script>
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
<script src="js/jquery.easing.min.js"></script>
</head>
<body>
<?php
	$msg="";
	$name = "";
	$email = "";
	$pswd = "";
	$mob = "";
	if(isset($_POST['sub_reg']))	{
		if(isset($_POST['name']) && !empty($_POST['name']))	{
			$name = mysqli_real_escape_string($dbc, trim($_POST['name']));
			if(isset($_POST['email']) && !empty($_POST['email']))	{
				$email = mysqli_real_escape_string($dbc, trim($_POST['email']));
				$get_email = mysqli_query($dbc, "SELECT email FROM users WHERE email = '$email'") or die("ss");
				if(mysqli_num_rows($get_email)==0)	{
					if(isset($_POST['pswd1']) && isset($_POST['pswd2']) && !empty($_POST['pswd1']) && !empty($_POST['pswd2']) && ($_POST['pswd1']==$_POST['pswd2']))	{
						$pswd = mysqli_real_escape_string($dbc, trim($_POST['pswd1']));
						if(isset($_POST['mob_no']) && is_numeric($_POST['mob_no']))	{
							$mob = $_POST['mob_code'].mysqli_real_escape_string($dbc, trim($_POST['mob_no']));
							$pswd_md5 = md5($pswd);
							mysqli_query($dbc, "INSERT INTO users (name, email, pswd, mob) VALUES ('$name', '$email', '$pswd_md5', '$mob')") or die("ww");
							$msg = "Registration is successfully completed. Now login to your account.";
						}
						else	{
							$msg = "Please enter valid mobile number.";
						}
					}
					else	{
						$msg = "Please enter valid password.";
					}
				}
				else	{
					$msg = "Email id you entered is associated with another account.";
				}
			}
			else	{
				$msg = "Please enter your email.";
			}
		}
		else	{
			$msg = "Please enter your name.";
		}
	}
	if(isset($_POST['sub_login']))	{
		if(isset($_POST["user_login"]) && isset($_POST["pass_login"]))	{
			$user_login = mysqli_real_escape_string($dbc, trim($_POST['user_login']));
			$pass_login = mysqli_real_escape_string($dbc, trim($_POST['pass_login']));
			$pass_login_md5 = md5($pass_login);
			$query = mysqli_query($dbc, "SELECT id, email FROM users WHERE email='$user_login' AND pswd='$pass_login_md5' LIMIT 1") or die("ERROR");
			$user_count = mysqli_num_rows($query);
			if($user_count == 1)	{
				while($row = mysqli_fetch_array($query))	{
					$id = $row['id'];
					$username = $row['email'];
				}
				@session_start();
				$_SESSION['user_id1'] = $id;
				$_SESSION['user_login1'] = $username;
				mysqli_close($dbc);
				header("Location:".$url);
				exit();
			}
			else	{
				$msg =  "Please enter valid Username and Password.";
				
			}
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
<title>Production a Industrial Category Flat Bootstrap Responsive Website Template | Short Codes :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Production Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
</head>
	
<body>
<!-- header -->
	<?php
		include('inc/header.inc.php');
	?>
<!-- //header -->
<!-- portfolio-bg -->
	<!--<div class="portfolio-bg">
		<div class="container">
			<h2>Short Codes</h2>
		</div>
	</div>-->
<!-- //portfolio-bg -->
<!--typography-page -->
	<?php
		if(!empty($msg))	{
			echo '<script>
					alert("'.$msg.'");
				</script>';
		}
	?>
	<div class="typo1">
		<div class="container">
			<div class="grid_3 grid_5">
				<h3 class="bars"></h3>
				<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					<ul id="myTab" class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#all_prdct" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Login</a></li>
						<li role="presentation"><a href="#register" id="profile-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Register</a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="all_prdct" aria-labelledby="home-tab">
							<div class="bs-docs-example">
								<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
									<div class="input-group input-group-lg ctr">
										<span class="input-group-addon" id="sizing-addon1"></span>
										<input type="text" class="form-control" placeholder="Email" aria-describedby="sizing-addon1" name="user_login">
									</div>
									<div class="input-group input-group-lg ctr">
										<span class="input-group-addon" id="sizing-addon1"></span>
										<input type="password" class="form-control" placeholder="Password" aria-describedby="sizing-addon1" name="pass_login">
									</div>
									<div class="input-group input-group-lg ctr">
										<center><h1><input type="submit" class="eee" name="sub_login" value="Login"/></h1></center>
									</div>
								</form>
							</div>
							
						</div>
						<div role="tabpanel" class="tab-pane fade" id="register" aria-labelledby="profile-tab">
							<div class="bs-docs-example">
								<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
									<div class="input-group input-group-lg ctr">
										<span class="input-group-addon" id="sizing-addon1"></span>
										<input type="text" class="form-control" placeholder="Your Name" aria-describedby="sizing-addon1" name="name" value="<?php echo $name; ?>">
									</div>
									<div class="input-group input-group-lg ctr">
										<span class="input-group-addon" id="sizing-addon1"></span>
										<input type="email" class="form-control" placeholder="Email" aria-describedby="sizing-addon1" name="email" value="<?php echo $email; ?>">
									</div>
									<div class="input-group input-group-lg ctr">
										<span class="input-group-addon" id="sizing-addon1"></span>
										<input type="password" class="form-control" placeholder="Password" aria-describedby="sizing-addon1" name="pswd1">
									</div>
									<div class="input-group input-group-lg ctr">
										<span class="input-group-addon" id="sizing-addon1"></span>
										<input type="password" class="form-control" placeholder="Retype Password" aria-describedby="sizing-addon1" name="pswd2">
									</div>
									<div class="input-group input-group-lg ctr">
										<div class="input-group-btn">
											<select class="btn btn-default dropdown-toggle qwe" name="mob_code">
												<option value="+91">India (+91)</option>
											</select>
										</div>
										<input type="text" class="form-control" aria-label="..." name="mob_no" value="<?php echo $mob; ?>">
									</div>
									
									<div class="input-group input-group-lg ctr">
										<center><h1><input type="submit" class="eee" name="sub_reg" value="Register"/></h1></center>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>			   
		</div>
	</div>
<!-- //typography-page -->
<!-- footer -->
	<?php
		include('inc/footer.inc.php');
	?>
<!-- //footer -->	
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
</body>
</html> 