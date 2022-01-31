<?php
	include('inc/connect.inc.php');
	$pg_name = basename(__FILE__);
	@$url = "petadoption.php";
	if(isset($_SESSION['user_id']))	{
		header("Location:".$url);
	}
?>
<?php
	define('MAX_SIZE', '62914560');
	$msg="";
	$msg1="";
	$flag=0;
	if(isset($_POST['submit']))	{
		$image_upld = mysqli_real_escape_string($dbc,trim(@$_FILES['image']['name']));
		$image_type = @$_FILES['image']['type'];
		$username= mysqli_real_escape_string($dbc,trim(@$_POST['username']));
		$password1= mysqli_real_escape_string($dbc,trim(@$_POST['password1']));
		$password2= mysqli_real_escape_string($dbc,trim(@$_POST['password2']));
		$name= mysqli_real_escape_string($dbc,trim(@$_POST['name']));
		$dob= mysqli_real_escape_string($dbc,trim(@$_POST['dateofbirth']));
		$type= mysqli_real_escape_string($dbc,trim(@$_POST['type']));
		$sex= mysqli_real_escape_string($dbc,trim(@$_POST['sex']));
		$address= mysqli_real_escape_string($dbc,trim(@$_POST['address']));
		$mobile=mysqli_real_escape_string($dbc,trim(@$_POST['mobile']));
		$aadhar_number= mysqli_real_escape_string($dbc,trim(@$_POST['aadhar_number']));
		$education_quali= mysqli_real_escape_string($dbc,trim(@$_POST['education_quali']));
		$Profession= mysqli_real_escape_string($dbc,trim(@$_POST['Profession']));
		$maritual_status= mysqli_real_escape_string($dbc,trim(@$_POST['maritual_status']));
		$select_type= mysqli_real_escape_string($dbc,trim(@$_POST['select_type']));
		$date_added = date("Y-m-d H:i:s");
		if(($image_type=='image/gif') || ($image_type=='image/jpeg') ||($image_type=='image/jpg') || ($image_type=='image/pjpeg') || ($image_type=='image/png') && (@$_FILES['imagefile']['size']>0) && (@$_FILES['imagefile']['size']<MAX_SIZE))	
		{
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
			if( ($type=="Individual" && (!empty($username)) && (!empty($password1)) && (!empty($password2)) && (!empty($name)) && (!empty($dob)) && (!empty($type)) && (!empty($sex))   && (!empty($education_quali)) && (!empty($maritual_status)) && (!empty($Profession)) && $_POST['type'] !="select" && $_POST['sex'] !="select"  &&  $_POST['maritual_status']!="select") || ($type=="NGO" && (!empty($username)) && (!empty($password1)) && (!empty($password2)) && (!empty($name)) && (!empty($type)) && (!empty($select_type)) && $_POST['select_type'] !="select" && $_POST['type'] !="select") ){
				$get_user = mysqli_query($dbc, "SELECT id FROM foster_registration WHERE username = '$username'") or die("sdf");
				if(mysqli_num_rows($get_user)==0)	{
					if(is_numeric($mobile) && (strlen($mobile)==10))	{
						if($password1==$password2)	{
							if(move_uploaded_file($_FILES['image']['tmp_name'], $target))	{
								$password1 = md5($password1);
								if($type=="Individual")	{
									mysqli_query($dbc,"INSERT INTO foster_registration(username, password, name,dob,ngo,sex,address,mobile,aadhar,education,Profession,Maritalstatus,type,photo,date_added) VALUES('$username', '$password1', '$name','$dob','$type','$sex','$address','$mobile','$aadhar_number' ,'$education_quali','$Profession','$maritual_status','$select_type','$newimage_upld','$date_added')") or die("dsdv");
									 header("Location:login.php");
								}
								else if($type=="NGO")	{
									mysqli_query($dbc,"INSERT INTO foster_registration(username, password, name,ngo,address,mobile,type,photo,date_added) VALUES('$username', '$password1', '$name','$type','$address','$mobile','$select_type','$newimage_upld','$date_added')") or die("dsdv");		
								}
								$msg = "Foster registered successfully. Now login to your account to add pet details.";
								$name="";
								$dob="";
								$type="";
								$sex="";
								$address="";
								$mobile="";	
								$aadhar_number="";	
								$education_quali="";	
								$Profession="";	
								$maritual_status="";	
								$select_type="";
							}
							else	{
								$msg1="Error in uploading profile picture. Please try again.";
							}
						}
						else	{
							$msg1="please retype the same password.";
						}							
					}
					else {
						$msg1="please enter valid number";
					}
				}
				else	{
					$msg1 = "Username already used. Please select different Username.";
				}
			}
			else  {
				$msg1= "All Fields Are Compulsory.";
				
			}
		}
		else {
			if( ($type=="Individual" && (!empty($username)) && (!empty($password1)) && (!empty($password2)) && (!empty($name)) && (!empty($dob)) && (!empty($type)) && (!empty($sex))   && (!empty($education_quali)) && (!empty($maritual_status)) && (!empty($Profession)) && $_POST['type'] !="select" && $_POST['sex'] !="select"  &&  $_POST['maritual_status']!="select") || ($type=="NGO" && (!empty($username)) && (!empty($password1)) && (!empty($password2)) && (!empty($name)) && (!empty($type)) && (!empty($select_type)) && $_POST['select_type'] !="select" && $_POST['type'] !="select") ){
				$get_user = mysqli_query($dbc, "SELECT id FROM foster_registration WHERE username = '$username'") or die("sdf");
				if(mysqli_num_rows($get_user)==0)	{
					if(is_numeric($mobile) && (strlen($mobile)==10))	{
						if($password1==$password2)	{
							$password1 = md5($password1);
							if($type=="Individual")	{
								mysqli_query($dbc,"INSERT INTO foster_registration(username, password, name,dob,ngo,sex,address,mobile,aadhar,education,Profession,Maritalstatus,type,photo,date_added) VALUES('$username', '$password1', '$name','$dob','$type','$sex','$address','$mobile','$aadhar_number' ,'$education_quali','$Profession','$maritual_status','$select_type','noprofilepic.jpg','$date_added')") or die("dsdv");
								 header("Location:login.php");
							}
							else if($type=="NGO")	{
								mysqli_query($dbc,"INSERT INTO foster_registration(username, password, name,ngo,address,mobile,type,photo,date_added) VALUES('$username', '$password1', '$name','$type','$address','$mobile','$select_type','noprofilepic.jpg','$date_added')") or die("dsdv");		
							}
							$msg = "Foster registered successfully. Now login to your account to add pet details.";
							$name="";
							$dob="";
							$type="";
							$sex="";
							$address="";
							$mobile="";	
							$aadhar_number="";	
							$education_quali="";	
							$Profession="";	
							$maritual_status="";	
							$select_type="";
						}
						else	{
							$msg1="please retype the same password.";
						}							
					}
					else {
						$msg1="please enter valid number";
					}
				}
				else	{
					$msg1 = "Username already used. Please select different Username.";
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
			<title>Pet Owner Registration: Real Care Small Animal Clinic</title>
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
						<h3 >Pet Owner Registration Form</h3>
						
						<form method="post" action="<?php $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">		   
            				<div class="sign-in">
								<h4>Username :</h4>
								<input type="text"  required="" name="username"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">	
							</div>
							<div class="sign-in">
								<h4>Password :</h4>
								<input type="text" name="password1" value="Password" required="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
							</div>
							<div class="sign-in">
								<h4>Re-Type Password :</h4>
								<input type="text" name="password2" value="Password"  required="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
							</div>
							<div class="sign-in">
								<h4>Name:</h4>
								<input type="text" name="name" onkeypress="valChar(event)" value="<?php if(!empty($name)) echo$name; ?>" required="">
							</div>
							<div class="sign-in">
								
								<h4>NGO/Individual:</h4>
									<select class="clr_plc form-control" value="<?php if(!empty($type)) echo$type;?>" name="type" id="type" required="" aria-describedby="basic-addon1" >
										<option value="select">Select</option>
										<option <?php if(!empty($type) && $type=="NGO"){ echo 'selected="selected"'; }   ?> value="NGO">NGO</option>
										<option <?php if(!empty($type) && $type=="Individual"){ echo 'selected="selected"'; }   ?> value="Individual">Individual</option>
									</select>
							</div>
							<div class="sign-in" >
									<h4>Date of Birth:</h4>
										<input type="date" name="dateofbirth" id="dateofbirth" class="clr_plc form-control" value="<?php if(!empty($dob)) echo$dob;?>" required=""/>
								
							</div>
							<div class="sign-in">
								<h4>Sex:</h4>
								<select class="clr_plc form-control" value="<?php if(!empty($sex)) echo$sex;?>" name="sex" id="sex" required="" >
									<option value="select">Select</option>
									<option <?php if(!empty($sex) && $sex=="Male"){ echo 'selected="selected"'; }   ?> value="Male">Male</option>
									<option <?php if(!empty($sex) && $sex=="Female"){ echo 'selected="selected"'; }   ?> value="Female">Female</option>
								</select>
							</div>
							<div class="sign-in">
								<h5>Address in Detail:</h5>
								<input type="text" name="address" required="" value="<?php if(!empty($address)) echo$address; ?>" >
							</div>
							<div class="sign-in">
								<h5>Contact No:</h5>
								<input type="text" name="mobile" onBlur="" onKeyPress="valNum(event);" maxlength="10" value="<?php if(!empty($mobile)) echo$mobile;?>" required="">
							</div>
							<div class="sign-in">
								<h5>Adhaar Card No: (Optional)</h5>
								<input type="text" name="aadhar_number" id="aadhar_number"  maxlength="12" onblur="valAadhar(this)" onKeyPress="valNum(event);" value="<?php if(!empty($aadhar_number)) echo$aadhar_number;?>">
							</div>
							<div class="sign-in">
								<h5>Educational Qualification:</h5>
								<input type="text" name="education_quali" id="education_quali" onkeypress="valChar(event)" value="<?php if(!empty($education_quali)) echo$education_quali; ?>" required="">
							</div>
							
							
							<div class="sign-in">
								<h5>Profession:</h5>
								<input type="text" name="Profession" id="Profession" onkeypress="valChar(event)" value="<?php if(!empty($Profession)) echo$Profession; ?>" required="">
							</div>
							<div class="sign-in">
								<h4>Marital status:</h4>
								<select class="clr_plc form-control" value="<?php if(!empty($maritual_status)) echo$maritual_status;?>" name="maritual_status" id="maritual_status" required="" >
									<option value="select">Select</option>
									<option <?php if(!empty($maritual_status) && $maritual_status=="Married"){ echo 'selected="selected"'; }   ?> value="Married">Married</option>
									<option <?php if(!empty($maritual_status) && $maritual_status=="UnMarried"){ echo 'selected="selected"'; }   ?> value="UnMarried">UnMarried</option>
								</select>
							</div>
							<!--div class="sign-in">
								<h5>Select Type:</h5>
								<select class="clr_plc form-control" value="<?php if(!empty($select_type)) echo$select_type;?>" name="select_type" required="" >
									<option value="select">Select</option>
									<option <?php if(!empty($select_type) && $select_type=="Type1 Foster"){ echo 'selected="selected"'; }   ?> value="Type1 Foster">Type1 Foster</option>
									<option <?php if(!empty($select_type) && $select_type=="Type2 Foster"){ echo 'selected="selected"'; }   ?> value="Type2 Foster">Type2 Foster</option>
								</select>
							</div-->
							<div class="sign-in">
								<h5>Profile Image: (Optional)</h5>
								<input type="file" name="image" class="clr_plc form-control" aria-describedby="basic-addon1">
							</div>
							<div class="sign-in">
							<textarea readonly class="clr_plc form-control">
								<?php
									include('inc/terms.php');
								
								?>
							</textarea>
							</div>
							<div class="sign-in">
							<input type="checkbox" name="checkbox" onchange="document.getElementById('submit').disabled = !this.checked;"/>I, Read and accept Terms and Conditions<a href="gen_terms.php" target="_blank">, Click here for General Terms and Condition</a>
							</div>
							</br>
							<center>
								<div class="btn grid_3 grid_5 wow fadeInRight animated" data-wow-delay=".5s">
									<h2 class="submit_btn">
										<input style="width:200px;margin-top:20px;" type="submit" name="submit" id="submit" class="btn_succ" value="Submit" disabled/>
									</h2>
								</div>
							</center>
						</form>
						</div>
						</div>		
						<script type="text/javascript">
							document.getElementById("type").onchange = function()	
							{
								if(this.value == 'NGO')	
								{
									document.getElementById("dateofbirth").disabled = true;
									document.getElementById("sex").disabled = true;
									document.getElementById("aadhar_number").disabled = true;
									document.getElementById("education_quali").disabled = true;
									document.getElementById("Profession").disabled = true;
									document.getElementById("maritual_status").disabled = true;
								}
								else	
								{
									document.getElementById("dateofbirth").disabled = false;
									document.getElementById("sex").disabled = false;
									document.getElementById("aadhar_number").disabled = false;
									document.getElementById("education_quali").disabled = false;
									document.getElementById("Profession").disabled = false;
									document.getElementById("maritual_status").disabled = false;
								}
								
							}
						</script>
					<div class="clearfix"></div>
					<div class="grid_3 grid_4 wow fadeInLeft animated" data-wow-delay=".5s">
						<div class="bs-example">
							<div style="padding-left:100px" class="mb-60">
								<!--h5  *class="info">*Type1 foster:</h5><h5 class="info"> Refer to those fosters who will take care of the dog completely till it gets adopted with reference to space, medications, vaccinations, feeding etc. </h5><br />
								<h5  *class="info">*Type2 foster:</h5><h5 class="info">Refer to those fosters who have space and time constrains but would genuinely like to help the homeless. We request such fosters to personally get in touch with us as we will be personalising the things for you and arranging for the resources. </h5-->
								<?php
									//echo'<h5 class="info">';
									//$get_content= mysqli_query($dbc, "SELECT * FROM clinic_content WHERE pos='about_adoption'") or die("dsfdsf");
									//$get_content_info= mysqli_fetch_assoc($get_content);
									//echo $get_content_info['info'].'</h5>';
								?>
							</div>
						</div>
					</div>
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