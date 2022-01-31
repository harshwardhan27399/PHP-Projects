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
			$petbreed= mysqli_real_escape_string($dbc,trim(@$_POST['petbreed']));
			$petcolour= mysqli_real_escape_string($dbc,trim(@$_POST['petcolour']));
			$cmnd_respnd= mysqli_real_escape_string($dbc,trim(@$_POST['cmnd_respnd']));
			$id_mrk= mysqli_real_escape_string($dbc,trim(@$_POST['id_mrk']));
			$clr_clr= mysqli_real_escape_string($dbc,trim(@$_POST['clr_clr']));
			$prz_amnt= mysqli_real_escape_string($dbc,trim(@$_POST['prz_amnt']));
			$age= mysqli_real_escape_string($dbc,trim(@$_POST['age']));
			$sex= mysqli_real_escape_string($dbc,trim(@$_POST['sex']));
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
				if(!empty($petname) && !empty($petbreed) && !empty($petcolour) && !empty($age) && !empty($sex))	{
					if(true)	{
						if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
							mysqli_query($dbc,"INSERT INTO lost (name,breed,age,sex,image,colour,command_resp,collar_clr,id_mrks,prize) 
							VALUES('$petname','$petbreed','$age','$sex','$newimage_upld','$petcolour','$cmnd_respnd','$clr_clr','$id_mrk','$prz_amnt')") or die("dsdv");
							
						    $msg = "Lost Pet's details added successfully.";
							
							$petname= "";
							$petbreed= "";
							$petcolour= "";
							$cmnd_respnd= "";
							$id_mrk= "";
							$clr_clr= "";
							$prz_amnt= "";
							$age= "";
							$sex="select";
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
						<center><h2><br/><br/><br/></h2></center>
						<center><p><h3>Service by Real Care Small Animal Clinic:
									<br/>1.	Promotion on Facebook For 1 Month
									<br/>2.	Profile feature on the website in lost pets till the pet is found
									<br/>3.	Animal lovers GRP mag on WhatsApp of two to three times
								<br/><br/></h3></p></center>
					</div>
					<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">		   
						<h3 class="bars">Lost Pet Form</h3>
						
						<div class="input-group">
							<h5 class="input-group-addon" id="basic-addon1">Pet Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
							<input type="text" name="petname" class="clr_plc form-control" onkeypress="valChar(event)" value="<?php if(!empty($petname)) echo$petname; ?>" aria-describedby="basic-addon1" required="required"> 
						</div>
						<div class="input-group">
							<h5 class="input-group-addon" id="basic-addon1">Pet Breed:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
							<input type="text" name="petbreed" class="clr_plc form-control" onkeypress="valChar(event)" value="<?php if(!empty($petbreed)) echo$petbreed; ?>" required="" aria-describedby="basic-addon1">
						</div>
						
						<div class="input-group">
							<h5 class="input-group-addon" id="basic-addon1">Approx.age:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
							<input type="text" name="age" class="clr_plc form-control" onkeypress="valNum(event);" value="<?php if(!empty($age)) echo$age;?>" required="" aria-describedby="basic-addon1">
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
							<h5 class="input-group-addon" id="basic-addon1">Pet Image:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
							<input type="file" name="image" class="clr_plc form-control"   aria-describedby="basic-addon1" required="required">
						</div>
						<div class="input-group">
							<h5 class="input-group-addon" id="basic-addon1">Pet Colour:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
							<input type="text" name="petcolour" class="clr_plc form-control" onkeypress="valChar(event)" value="<?php if(!empty($petcolour)) echo$petcolour; ?>" required="" aria-describedby="basic-addon1">
						</div>
						<div class="input-group">
							<h5 class="input-group-addon" id="basic-addon1">Respond to which words/commands:</h5>
							<input type="text" name="cmnd_respnd" class="clr_plc form-control" onkeypress="valChar(event)" value="<?php if(!empty($cmnd_respnd)) echo$cmnd_respnd; ?>" required="" aria-describedby="basic-addon1">
						</div>
						<div class="input-group">
							<h5 class="input-group-addon" id="basic-addon1">Colour of Collar:&nbsp;</h5>
							<input type="text" name="clr_clr" class="clr_plc form-control" onkeypress="valChar(event)" value="<?php if(!empty($clr_clr)) echo$clr_clr; ?>" required="" aria-describedby="basic-addon1">
						</div>
						
						<div class="input-group">
							<h5 class="input-group-addon" id="basic-addon1">Any other identification marks or accessories:</h5>
							<input type="text" name="id_mrk" class="clr_plc form-control" onkeypress="valChar(event)" value="<?php if(!empty($id_mrk)) echo$id_mrk; ?>" required="" aria-describedby="basic-addon1">
						</div>
						<div class="input-group">
							<h5 class="input-group-addon" id="basic-addon1">Prize amount:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
							<input type="text" name="prz_amnt" class="clr_plc form-control" onkeypress="valNum(event);" value="<?php if(!empty($prz_amnt)) echo$prz_amnt; ?>" required="" aria-describedby="basic-addon1">
						</div>
						<div class="input-group">
							<h5 class="input-group-addon" id="basic-addon1"></h5>
							
							<textarea readonly class="terms_cls clr_plc form-control">
								<?php
									echo 'I, accept the following mentioned terms and conditions: 1.The above mentioned pet is mine and I have complete ownership of the same. 2.I will be completely responsible for any type of ownership related issues arising later. 3.The pet was lost and was not abandoned by me. 4.Real Care Small Animal Clinic or any person related will not be responsible if I do not get my pet back under any circumstances. 5.I assure that the above mentioned details are completely true to my knowledge and any deviation from the same will be my responsibility. 6.I understand that any kind of decision from Real Care Small Animal Clinic is final and cannot be challenged anywhere and under any circumstances. 7.Real Care Small Animal Clinic will charge 25% of the prize money (minimum prize money should be Rs. 1000). So while advertising Real Care Small Animal Clinic will show 25% less amount as promised by me as a prize money.';
								?>
							</textarea>
						</div>
						<div class="sign-in">
							<input type="checkbox" name="checkbox" onchange="document.getElementById('submit').disabled = !this.checked;"/>I,Read and accept Terms and Conditions
						</div><br/><br/>
						<center>
							<div class="btn grid_3 grid_5 wow fadeInRight animated" data-wow-delay=".5s">
								<h2 class="t-button">
									<a href="#"><span class="labelapp label label-success"><input type="button" name="submit" class="btn_succ" value="Submit" id="submit" disabled/></span></a>
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