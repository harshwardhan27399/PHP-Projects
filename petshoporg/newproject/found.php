<?php
	include('inc/connect.inc.php');
	@session_start();
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
			$email= mysqli_real_escape_string($dbc,trim(@$_POST['email']));
			$mobile= mysqli_real_escape_string($dbc,trim(@$_POST['mobile']));
			$city_res= mysqli_real_escape_string($dbc,trim(@$_POST['city_res']));
			$ar_photo= mysqli_real_escape_string($dbc,trim(@$_POST['ar_photo']));
			$lndmrk= mysqli_real_escape_string($dbc,trim(@$_POST['lndmrk']));
			$photo_dt= mysqli_real_escape_string($dbc,trim(@$_POST['photo_dt']));
			
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
				
				if(!empty($petname) && !empty($email) && !empty($mobile) && !empty($city_res) && !empty($ar_photo) && !empty($lndmrk) && !empty($photo_dt))	{
					if(true)	{
						if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
							mysqli_query($dbc,"INSERT INTO found (name,email,mobile,city_res,ar_photo,lndmrk,photo_dt,image,upldtime) VALUES('$petname','$email','$mobile','$city_res','$ar_photo','$lndmrk','$photo_dt','$newimage_upld','$date_added')") or die("dsdv");
							echo 'image';
							$msg = "Found Pet's details added successfully.";
							$petname= "";
							$email= "";
							$mobile= "";
							$city_res= "";
							$ar_photo= "";
							$lndmrk= "";
							$photo_dt= "";
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
			<title>Lost &amp; Found : Real Care Small Animal Clinic</title>
			<!-- for-mobile-apps -->
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
			function hideURLbar(){ window.scrollTo(0,1); } </script>
			<!-- //for-mobile-apps -->
			<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
			<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
			<!-- js -->
			<script src= "include/validation.js"</script>
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
								echo'<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
									<ul id="myTab" class="nav nav-tabs" role="tablist">							
										<li '.(($pg_name=="lost.php")? 'class="active"' : '').'>
											<a href="lost.php">Add Lost Pet</a>
										</li>
										<li '.(($pg_name=="found.php")? 'class="active"' : '').'>
											<a href="found.php">Add Found Pet</a>
										</li>
									</ul>
								</div>';
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
						<div class="pageadoption1">
							<div class="container">
								
							</div>
							
						</div>
						<center><h2><br/><br/></h2></center>
						<center><p><h3>This will be an open portal and anyone who finds a pet on the road with visible signs of ownership and/or of a good breed can upload it for free.
								<br/><br/><br/></h3></p></center>
					</div>
					<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">		   
						<h3 class="bars">Found Pet Form</h3>
						<div class="input-group">
							<h5 class="input-group-addon" id="basic-addon1">Pet Image:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
							<input type="file" name="image" class="clr_plc form-control"  required="" aria-describedby="basic-addon1">
						</div>
						<div class="input-group">
							<h5 class="input-group-addon" id="basic-addon1">Person Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
							<input type="text" name="petname" class="clr_plc form-control" onkeypress="valChar(event)" value="<?php if(!empty($petname)) echo$petname; ?>" required="" aria-describedby="basic-addon1">
						</div>
						<div class="input-group">
							<h5 class="input-group-addon" id="basic-addon1">Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
							<input type="text" name="email" class="clr_plc form-control" onblur="validateEmail(this);" value="<?php if(!empty($email)) echo$email; ?>" required="" aria-describedby="basic-addon1">
						</div>
						<div class="input-group">
							<h5 class="input-group-addon" id="basic-addon1">Mobile No.:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
							<input type="text" name="mobile" class="clr_plc form-control" onkeypress="valMobile(this)"  onKeyPress="valNum(event);" maxlength="10" value="<?php if(!empty($mobile)) echo$mobile; ?>" required="" aria-describedby="basic-addon1">
						</div>
						<div class="input-group">
							<h5 class="input-group-addon" id="basic-addon1">City &amp; area of residence:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
							<input type="text" name="city_res" class="clr_plc form-control" onkeypress="valChar(event)" value="<?php if(!empty($city_res)) echo$city_res;?>" required="" aria-describedby="basic-addon1">
						</div>
						<div class="input-group">
							<h5 class="input-group-addon" id="basic-addon1">Area of the photograph:</h5>
							<input type="text" name="ar_photo" class="clr_plc form-control" onkeypress="valChar(event)" value="<?php if(!empty($ar_photo)) echo$ar_photo; ?>" required="" aria-describedby="basic-addon1">
						</div>
						<div class="input-group">
							<h5 class="input-group-addon" id="basic-addon1">Landmark:&nbsp;&nbsp;&nbsp;&nbsp;</h5>
							<input type="text" name="lndmrk" class="clr_plc form-control" value="<?php if(!empty($lndmrk)) echo$lndmrk; ?>" required="" aria-describedby="basic-addon1">
						</div>
						
						<div class="input-group">
							<h5 class="input-group-addon" id="basic-addon1">Date of photo capture:</h5>
							<input type="date" name="photo_dt" class="clr_plc form-control" value="<?php if(!empty($photo_dt)) echo$photo_dt; ?>" required="" aria-describedby="basic-addon1">
						</div>
						<div class="input-group">
							<h5 class="input-group-addon" id="basic-addon1"></h5>	
							<textarea readonly class="terms_cls clr_plc form-control">
								<?php
									echo '1.The pet reported above is not my pet. 2.I can be contacted on the given mobile number for help related for the rescue and relocation. 3.The decision and actions of members from Real Care Small Animal Clinic is accepted by me.';
								?>
							</textarea>
						</div>
						<div class="sign-in">
							<input type="checkbox" name="checkbox" onchange="document.getElementById('submit').disabled = !this.checked;" required="required"/>I,Read and accept Terms and Conditions
						</div><br/><br/>
						<center>
							<div class="btn grid_3 grid_5 wow fadeInRight animated" data-wow-delay=".5s">
								<h2 class="t-button">
									<a href="#"><span class="labelapp label label-success"><input type="submit" name="submit" class="btn_succ" value="Submit" id="submit" disabled/></span></a>
								</h2>
							</div>
						</center>
					<br/>
					
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