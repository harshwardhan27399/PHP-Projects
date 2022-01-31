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
	$foster_det = mysqli_query($dbc, "SELECT * FROM foster_registration WHERE id = '$user_id'") or die("ERROR");
	$name = "";
	$type = "";
	$address = "";
	$mobile = "";
	$aadhar_number = "";
	$education_quali = "";
	$Profession = "";
	$maritual_status = "";
	$select_type="";
	if(mysqli_num_rows($foster_det)==1)	{
		$foster_det_data = mysqli_fetch_assoc($foster_det);
		$name = $foster_det_data['name'];
		$type = $foster_det_data['ngo'];
		$address = $foster_det_data['address'];
		$mobile = $foster_det_data['mobile'];
		$aadhar_number = $foster_det_data['aadhar'];
		$education_quali = $foster_det_data['education'];
		$Profession = $foster_det_data['Profession'];
		$maritual_status = $foster_det_data['Maritalstatus'];
		$select_type = $foster_det_data['type'];
	}
	if(isset($_POST['submit']))	{
		$image_upld = mysqli_real_escape_string($dbc,trim(@$_FILES['image']['name']));
		$image_type = @$_FILES['image']['type'];
		$name= mysqli_real_escape_string($dbc,trim(@$_POST['name']));
		$address= mysqli_real_escape_string($dbc,trim(@$_POST['address']));
		$mobile=mysqli_real_escape_string($dbc,trim(@$_POST['mobile']));
		$aadhar_number= mysqli_real_escape_string($dbc,trim(@$_POST['aadhar_number']));
		$education_quali= mysqli_real_escape_string($dbc,trim(@$_POST['education_quali']));
		$Profession= mysqli_real_escape_string($dbc,trim(@$_POST['Profession']));
		$maritual_status= mysqli_real_escape_string($dbc,trim(@$_POST['maritual_status']));
		$date_added = date("Y-m-d H:i:s");
		if(true) {
			if(($type=="Individual" && (!empty($name)) && (!empty($education_quali)) && (!empty($maritual_status)) && (!empty($Profession))  &&  $_POST['maritual_status']!="select") || ($type=="NGO" && (!empty($name)))){
				$get_user = mysqli_query($dbc, "SELECT id FROM foster_registration WHERE id = '$user_id'") or die("sdf");
				if(mysqli_num_rows($get_user)==1)	{
					if(is_numeric($mobile) && (strlen($mobile)==10))	{
						if(true)	{
							if($type=="Individual")	{
								mysqli_query($dbc,"UPDATE foster_registration SET name='$name', address='$address', mobile='$mobile', aadhar='$aadhar_number', education='$education_quali', Profession='$Profession', Maritalstatus='$maritual_status' WHERE id = '$user_id'") or die("dsdv");
							}
							else if($type=="NGO")	{
								mysqli_query($dbc,"UPDATE foster_registration SET name='$name', address='$address', mobile='$mobile' WHERE id = '$user_id'") or die("dsdv");
							}
							$msg = "Profie Details Updated Successfully.";
						}
						else	{
						}							
					}
					else {
						$msg1="Please enter valid mobile number.";
					}
				}
				else	{
					$msg1 = "Error in profile fetching. Please Login again.";
				}
			}
			else  {
				$msg1= "All Fields Are Compulsory.";
			}
		}
	}
?>
<!DOCTYPE html>
	<html>
		<head>
			<title>Edit Foster Details: Real Care Small Animal Clinic</title>
			<!-- for-mobile-apps -->
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
			function hideURLbar(){ window.scrollTo(0,1); } </script>
			<!-- //for-mobile-apps -->
			<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
			<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
			<!-- js -->
			<script src= "include/validation.js"></script>
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
						<center><h3>Foster Details</h3></center>
						<form method="post" action="<?php $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">		   
            				<div class="sign-in">
								<h4><b>Name:</b></h4>
								<input type="text" name="name" onkeypress="valChar(event)" value="<?php if(!empty($name)) echo$name; ?>" required="">
							</div>
							<div class="sign-in">
								
								<h4><b>NGO/Individual:</b></h4>
									<select disabled class="clr_plc form-control" value="<?php if(!empty($type)) echo$type;?>" name="type" id="type" required="" aria-describedby="basic-addon1" >
										<option value="select">Select</option>
										<option <?php if(!empty($type) && $type=="NGO"){ echo 'selected="selected"'; }   ?> value="NGO">NGO</option>
										<option <?php if(!empty($type) && $type=="Individual"){ echo 'selected="selected"'; }   ?> value="Individual">Individual</option>
									</select>
							</div>
							<div class="sign-in">
								<h5><b>Address in Detail:</b></h5>
								<input type="text" name="address" required="" value="<?php if(!empty($address)) echo$address; ?>" >
							</div>
							<div class="sign-in">
								<h5><b>Contact No:</b></h5>
								<input type="text" name="mobile" onBlur="valMobile(this);" onKeyPress="valNum(event);" maxlength="10" value="<?php if(!empty($mobile)) echo$mobile;?>" required="">
							</div>
							<?php
								if($type=="Individual")	{
							?>
							<div class="sign-in">
								<h5><b>Adhaar Card No: (Optional)</b></h5>
								<input type="text" name="aadhar_number" id="aadhar_number"  value="<?php if(!empty($aadhar_number)) echo$aadhar_number;?>">
							</div>
							<div class="sign-in">
								<h5><b>Educational Qualification:</b></h5>
								<input type="text" name="education_quali" id="education_quali" value="<?php if(!empty($education_quali)) echo$education_quali; ?>" required="">
							</div>
							<div class="sign-in">
								<h5><b>Profession:</b></h5>
								<input type="text" name="Profession" id="Profession" value="<?php if(!empty($Profession)) echo$Profession; ?>" required="">
							</div>
							<div class="sign-in">
								<h4><b>Marital status:</b></h4>
								<select class="clr_plc form-control" value="<?php if(!empty($maritual_status)) echo$maritual_status;?>" name="maritual_status" id="maritual_status" required="" >
									<option value="select">Select</option>
									<option <?php if(!empty($maritual_status) && $maritual_status=="Married"){ echo 'selected="selected"'; }   ?> value="Married">Married</option>
									<option <?php if(!empty($maritual_status) && $maritual_status=="UnMarried"){ echo 'selected="selected"'; }   ?> value="UnMarried">UnMarried</option>
								</select>
							</div>
							<?php
								}
							?>
							<div class="sign-in">
								<h5><b>Select Type:</b></h5>
								<select disabled class="clr_plc form-control" value="<?php if(!empty($select_type)) echo$select_type;?>" name="select_type" required="" >
									<option value="select">Select</option>
									<option <?php if(!empty($select_type) && $select_type=="Type1 Foster"){ echo 'selected="selected"'; }   ?> value="Type1 Foster">Type1 Foster</option>
									<option <?php if(!empty($select_type) && $select_type=="Type2 Foster"){ echo 'selected="selected"'; }   ?> value="Type2 Foster">Type2 Foster</option>
								</select>
							</div>
							</br>
							<center>
								<div class="btn grid_3 grid_5 wow fadeInRight animated" data-wow-delay=".5s">
									<h2 class="submit_btn">
										<input style="width:200px;margin-top:20px;" type="submit" name="submit" id="submit" class="btn_succ" value="Update Details"/>
									</h2>
								</div>
							</center>
						</form>
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