<?php
	include('inc/connect.inc.php');
	$pg_name = basename(__FILE__);
?>
<?php
	define('MAX_SIZE', '62914560');
	$msg="";
	$msg1="";
	$flag=0;				
	
	if(isset($_POST['submit']))	{
			$adopter_name= mysqli_real_escape_string($dbc,trim(@$_POST['name']));
			$address= mysqli_real_escape_string($dbc,trim(@$_POST['address']));
			$email_id= mysqli_real_escape_string($dbc,trim(@$_POST['email_id']));
			$mobile=mysqli_real_escape_string($dbc,trim(@$_POST['mobile']));
			$Preference= mysqli_real_escape_string($dbc,trim(@$_POST['Preference']));
			$date_added = date("Y-m-d H:i:s");
			$pet_id = $_POST['pet_id'];
				if((!empty($adopter_name)) && (!empty($address)) && (!empty($email_id)) && (!empty($mobile)) && (!empty($Preference))){
					if(is_numeric($mobile) && (strlen($mobile)==10))	{
						mysqli_query($dbc,"INSERT INTO potential_adopter(name,address,email_id,mobile,Preference,date,status) VALUES('$adopter_name','$address','$email_id','$mobile','$Preference','$date_added', '0')") or die("dsdv");
						$msg = "Success! Its Submitted";
						$adopter_name="";
						$address="";
						$aadhar_number="";
						$email_id="";
						$mobile="";	
						$Preference="";	
					}
					else {
						$msg1="Please Enter Valid Number";
					}
				}
				else  {
					$msg1= "All Fields Are Compulsory.";
					
				}
	}
?>
<!DOCTYPE html>
	<html>
		<head>
			<title>Potential Adopter Registration: Real Care Small Animal Clinic</title>
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
						<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
							<ul id="myTab" class="nav nav-tabs" role="tablist">
							<?php
								include('inc/adopter.header.inc.php');
							?>
								<?php
								//	include('inc/adopter.header.inc.php');

								//?>
								<!--li role="presentation" class="dropdown">
									<a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown" aria-controls="myTabDrop1-contents">Dropdown <span class="caret"></span></a>
									<ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
										<li><a href="#dropdown1" tabindex="-1" role="tab" id="dropdown1-tab" data-toggle="tab" aria-controls="dropdown1">@fat</a></li>
										<li><a href="#dropdown2" tabindex="-1" role="tab" id="dropdown2-tab" data-toggle="tab" aria-controls="dropdown2">@mdo</a></li>
									</ul>
								</li-->
							</ul>
							<!--div id="myTabContent" class="tab-content">
								<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
								
								</div>
								<div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
									<p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
								</div>
								<div role="tabpanel" class="tab-pane fade" id="dropdown1" aria-labelledby="dropdown1-tab">
									<p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
								</div>
								<div role="tabpanel" class="tab-pane fade" id="dropdown2" aria-labelledby="dropdown2-tab">
									<p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p>
								</div>
							</div-->
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
								<h2></h2>
							</div>
						</div>
					</div>
					<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">		   
						<h3 class="bars">Potential Adopter Registration Form</h3>
						<div class="input-group">
							<h5 class="input-group-addon" id="basic-addon1">Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
							<input type="text" name="name" required="" class="clr_plc form-control" value="<?php if(!empty($adopter_name)) echo$adopter_name; ?>" required="" aria-describedby="basic-addon1">
						</div>
						<div class="input-group">
							<h5 class="input-group-addon" id="basic-addon1">Contact number:</h5>
							<input type="text" name="mobile" required="" class="clr_plc form-control" value="<?php if(!empty($mobile)) echo$mobile;?>" required="" aria-describedby="basic-addon1">
						</div>
						<div class="input-group">
							<h5 class="input-group-addon" id="basic-addon1">Email id:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
							<input type="text" name="email_id" required="" class="clr_plc form-control" value="<?php if(!empty($email_id)) echo$email_id; ?>" required="" aria-describedby="basic-addon1">
						</div>
						<div class="input-group">
							<h5 class="input-group-addon" id="basic-addon1">Address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
							<input type="text" name="address" required="" class="clr_plc form-control" value="<?php if(!empty($address)) echo$address; ?>" required="" aria-describedby="basic-addon1">
						</div>
						<div class="input-group">
							<h5 class="input-group-addon" id="basic-addon1">Details of Pet:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
							<textarea name="Preference" id="subject" required="" class="clr_plc form-control"  required="" aria-describedby="basic-addon1"><?php if(!empty($Preference)) echo$Preference;?></textarea>  
						</div>
						<center>
							<div class="btn grid_3 grid_5 wow fadeInRight animated" data-wow-delay=".5s">
								<h2 class="t-button">
									<input type="hidden" value="<?php echo $id;?>" name="pet_id"/>
									<a href="#"><span class="labelapp label label-success"><input type="submit" name="submit" class="btn_succ" value="Submit" id="submit"/></span></a>
								</h2>
							</div>
						</center>
					</form><br/><br/><br/><br/>
					<hr/><br/>
					<div class="grid_3 grid_4 wow fadeInLeft animated" data-wow-delay=".5s">
						<div class="bs-example">
							<div class="mb-60">
								<h5 class="info"></h5>
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