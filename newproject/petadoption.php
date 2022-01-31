<?php
	include('inc/connect.inc.php');
	@session_start();
	if(!isset($_SESSION["user_login"]))	{
		header("Location:"."login.php");
		
	}
	$pg_name = basename(__FILE__);
?>
<?php
	define('MAX_SIZE', '62914560');
	$msg="";
	$msg1="";
	$flag=0;
	if(isset($_POST['submit']))	{
			$image_upld = mysqli_real_escape_string($dbc,trim(@$_FILES['image']['name']));
			$image_type = @$_FILES['image']['type'];
			$petname= mysqli_real_escape_string($dbc,trim(@$_POST['petname']));
			$petbreed= mysqli_real_escape_string($dbc,trim(@$_POST['petbreed']));
			$age= mysqli_real_escape_string($dbc,trim(@$_POST['age']));
			$sex= mysqli_real_escape_string($dbc,trim(@$_POST['sex']));
			$transaction_id= mysqli_real_escape_string($dbc,trim(@$_POST['transaction_id']));
			$user_id=$_SESSION["user_id"];
			if(($image_type=='image/gif') || ($image_type=='image/jpeg') ||($image_type=='image/jpg') || ($image_type=='image/pjpeg') || ($image_type=='image/png') && (@$_FILES['imagefile']['size']>0) && (@$_FILES['imagefile']['size']<MAX_SIZE))	{
				$newimage_upld = time().$image_upld;
				if(strlen($newimage_upld)>50)	{
					$upld = substr($newimage_upld, 0, 30);
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
				$date_added = date("Y-m-d H:i:s");
				if(!empty($petname) && !empty($petbreed) && !empty($age) && !empty($sex) && !empty($transaction_id))	{
					if(true)	{
						if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
							mysqli_query($dbc,"INSERT INTO puppyadoption (name,breed,age,foster_id,sex,transaction_id,image,upldtime) VALUES('$petname','$petbreed','$age','$user_id','$sex','$transaction_id','$newimage_upld','$date_added')") or die("dsdv");
							 
							$msg = "Pet details added successfully.";
							$petname="";
							$petbreed="";
							$age="";
							$mobile="";
							$sex="select";
							$fostername="";	
						}
						else {
							echo'image is not successfully uploaded';
							
						}
					}
					else {
						$msg1="please enter valid number";
						
					}
		
		
				}
				else  {
					$msg1= "All Fields Are Compulsory.";
					
				}
		
			}
			else {
				$msg1="file type is not supported choose another one";
				
			
			}
		
	}
?>
<!DOCTYPE html>
	<html>
		<head>
			<title>Pet Rehoming : Real Care Small Animal Clinic</title>
			<!-- for-mobile-apps -->
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
			function hideURLbar(){ window.scrollTo(0,1); } </script>
			<!-- //for-mobile-apps -->
			<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
			<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
			<!-- js -->
			<script src ="include/validation.js"></script>
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
						<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
							<?php
							include('inc/adopter.header.inc.php');

						?>
						</div>
					</div>
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
					<div class="col-sm-6 col-md-6 col-lg-6 mb-60">
						<div class="pageadoption11">
							<div class="container">
								
							</div>
							
						</div>
						<center><h2>Scan this QR Code for Payment</h2></center>
						<center><p>Please Paytm Rs. 50 on 9766072987 or scan the above code for every pet profile as a request amount. Do not forget to mention the Transaction Id in  the space provided, which will help us to verify and without which profile of pet will not be displayed.</p></center>
					</div>
					<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">		   
						<h3 class="bars">Pet Rehoming Form</h3>
						<div class="input-group">
							<h5 class="input-group-addon" id="basic-addon1">Pet Image:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
							<input type="file" name="image" class="clr_plc form-control"  required="" aria-describedby="basic-addon1">
						</div>
						<div class="input-group">
							<h5 class="input-group-addon" id="basic-addon1">Pet Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
							<input type="text" name="petname" class="clr_plc form-control"  onkeypress="valChar(event)" value="<?php if(!empty($petname)) echo$petname; ?>" required="" aria-describedby="basic-addon1">
						</div>
						<div class="input-group">
							<h5 class="input-group-addon" id="basic-addon1">Pet Breed:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
							<input type="text" name="petbreed" class="clr_plc form-control"  onkeypress="valChar(event)" value="<?php if(!empty($petbreed)) echo$petbreed; ?>" required="" aria-describedby="basic-addon1">
						</div>
						<div class="input-group">
							<h5 class="input-group-addon" id="basic-addon1">Approx.age:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
							<input type="text" name="age" class="clr_plc form-control" maxlength="3" onkeypress="valNum(event);" value="<?php if(!empty($age)) echo$age;?>" required="" aria-describedby="basic-addon1">
						</div>
						<div class="input-group">
							<h5 class="input-group-addon" id="basic-addon1">Sex:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
							<select class="clr_plc form-control" value="<?php if(!empty($sex)) echo$sex;?>" name="sex" required="" >
								<option value="select">Select</option>
								<option <?php if(!empty($sex) && $sex=="male"){ echo 'selected="selected"'; }   ?> value="Male">Male</option>
								<option <?php if(!empty($sex) && $sex=="female"){ echo 'selected="selected"'; }   ?> value="female">Female</option>
							</select>
						</div>
						<div class="input-group">
							<h5 class="input-group-addon" id="basic-addon1">Transaction Id:&nbsp;&nbsp;&nbsp;</h5>
							<input type="text" name="transaction_id" class="clr_plc form-control" value="<?php if(!empty($fostername)) echo$fostername; ?>" required="" aria-describedby="basic-addon1">
						</div>
						<!--div class="input-group">
							<h5 class="input-group-addon" id="basic-addon1"></h5>
							
							<textarea readonly class="terms_cls clr_plc form-control">
								<?php
									include('inc/terms1.php');
								?>
							</textarea>
						</div>
						<div class="sign-in">
							<input type="checkbox" name="checkbox" onchange="document.getElementById('submit').disabled = !this.checked;"/>I,Read and accept Terms and Conditions
						</div><br/><br/-->
						<center>
							<div class="btn grid_3 grid_5 wow fadeInRight animated" data-wow-delay=".5s">
								<h2 class="t-button">
									<a href="#"><span class="labelapp label label-success"><input type="submit" name="submit" class="btn_succ" value="Submit" id="submit"/></span></a>
								</h2>
							</div>
						</center>
					<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
					
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