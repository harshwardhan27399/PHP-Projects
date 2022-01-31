 <?php
 	$link=mysqli_connect("localhost","root","");
	 mysqli_select_db($link,"shopopet");
?>
     
<!DOCTYPE html>
	<html>
		<head>
			<title>Feedback: Real Care Small Animal Clinic</title>
			<!-- for-mobile-apps -->
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
			function hideURLbar(){ window.scrollTo(0,1); } </script>
			<!-- //for-mobile-apps -->
			 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

			<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
			<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
			<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
			<!-- js -->
			<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
			<!-- //js -->
			<!-- cart -->
			<script src="js/simpleCart.min.js"></script>
			<!-- cart -->
			<!-- for bootstrap working -->
			<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
			
			<script src="js/jquery.easing.min.js"></script>
			<style>
			
div.stars {
  width: 270px;
  display: inline-block;
}

input.star { display: none; }

label.star {
  float: right;
  padding: 10px;
  font-size: 36px;
  color: #444;
  transition: all .2s;
}

input.star:checked ~ label.star:before {
  content: '\f005';
  color: #FD4;
  transition: all .25s;
}

input.star-5:checked ~ label.star:before {
  color: #FE7;
  text-shadow: 0 0 20px #952;
}

input.star-1:checked ~ label.star:before { color: #F62; }

label.star:hover { transform: rotate(-15deg) scale(1.3); }

label.star:before {
  content: '\f006';
  font-family: FontAwesome;
}
			</style>
			
			
			
			
		</head>
		<body>
			<?php
				include('inc\header.inc.php');
			?>
			<div class="page-head">
				<div class="container">
					<h3></h3>
				</div>
			</div>
			<div class="typrography11">
				<div class="container">	
					<div class="grid_3 grid_5 wow fadeInLeft animated" data-wow-delay=".5s">
				
        <div class="stars" style="margin-left:35%;">
 <form action="" method="POST">
	<!--h3 class="bars">Feedback</h3-->
	<h3 class="bars" >Name</h3>
      <textarea rows="1" cols="50" id="name1" name="name1"></textarea>
	<h3 class="bars" >Feedback</h3>
      <textarea rows="5" cols="50" id="feedback" name="feedback"></textarea>
	<br />
	<br />
	<h3 class="bars" >Rate us</h3>
    <input class="star star-5" id="star-5" type="radio" name="star" value="5"/>
    <label class="star star-5" for="star-5"></label>
    <input class="star star-4" id="star-4" type="radio" name="star" value="4"/>
    <label class="star star-4" for="star-4"></label>
    <input class="star star-3" id="star-3" type="radio" name="star" value="3"/>
    <label class="star star-3" for="star-3"></label>
    <input class="star star-2" id="star-2" type="radio" name="star" value="2"/>
    <label class="star star-2" for="star-2"></label>
    <input class="star star-1" id="star-1" type="radio" name="star" value="1"/>
    <label class="star star-1" for="star-1"></label>
	<br />
	<br />
	<br />
	<br />
	 <div class="control-group">
		<div class="controls" style="margin-left:50%;">
			<input type="submit" class="btn btn-success" value="Submit" name="submit1">
		</div>
		</div>
  </form>
</div>

<?php
if(isset($_POST['submit1']))
{

    $sql = "INSERT INTO star_rating (name,feedback,rating)
   VALUES ('".$_POST["name1"]."','".$_POST["feedback"]."','".$_POST["star"]."')";

mysqli_query($link,$sql);
?>


<script type=text/javascript>
alert('Thank you for your valuable Feedback ...');
window.location ="index.php";
</script>
<?php
}
?>

					
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