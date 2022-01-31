<?php

$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"shopopet");



if(isset($_POST['submit1']))
{

//print_r(submit1);	
	
	$v1=rand(1111,9999);
   $v2=rand(1111,9999);
   
   $v3=$v1.$v2;
   
   $v3=md5($v3);
 
   
   $fnm=$_FILES["image"]["name"];
   $dst="./petimages/".$v3.$fnm;
   $dst1="petimages/".$v3.$fnm;
   move_uploaded_file($_FILES["image"]["tmp_name"],$dst);



    $sql = "INSERT INTO lost (image,name,breed,colour,age,sex,command_resp,collar_clr,id_mrks,prize,checkbox)
   VALUES ('$dst1','".$_POST["petname"]."','".$_POST["petbreed"]."','".$_POST["petcolour"]."','".$_POST["age"]."','".$_POST["sex"]."','".$_POST["cmnd_respnd"]."','".$_POST["clr_clr"]."','".$_POST["id_mrk"]."','".$_POST["prz_amnt"]."','".$_POST["checkbox"]."')";

mysqli_query($con,$sql);
?>


<script type=text/javascript>
/*alert('1 record add go back to add another product!');
window.location ="lost.php";

*/</script>
<?php
	
	
}


?>


<!DOCTYPE html>
	<html>
		<head>
			<title>Lost &amp; Found : Pal Of Pets</title>
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
	
/*	echo'<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
									<ul id="myTab" class="nav nav-tabs" role="tablist">							
										<li '.(($pg_name=="lost.php")? 'class="active"' : '').'>
											<a href="lost.php">Add Lost Pet</a>
										</li>
										<li '.(($pg_name=="found.php")? 'class="active"' : '').'>
											<a href="found.php">Add Found Pet</a>
										</li>
									</ul>
								</div>';
*/	
	?>
						</div>
					</div>
					<?php
	
	?>
					<div class="col-sm-6 col-md-6 col-lg-6 mb-60">
						<div class="pageadoption1">
							<div class="container">
								
							</div>
							
						</div>
						<center><h2><br/><br/><br/></h2></center>
						<center><p><h3>Service by Pal Of Pets:
									<br>1.	Promotion on Facebook For 1 Month
									<br>2.	Profile feature on the website in lost pets till the pet is found
									<br>3.	Animal lovers GRP mag on WhatsApp of two to three times
								<br/><br/></h3></p></center>
					</div>
					<form method="post" action="" enctype="multipart/form-data">		   
						<h3 class="bars">Near by</h3>
						<div class="input-group">
							<h5 class="input-group-addon" id="basic-addon1">First Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
							<input type="text" name="fname" class="clr_plc form-control"   aria-describedby="basic-addon1" required="required">
						</div>
						<div class="input-group">
							<h5 class="input-group-addon" id="basic-addon1">Last Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
							<input type="text" name="lname" class="clr_plc form-control" onkeypress="valChar(event)" value="<?php if(!empty($petname)) echo$petname; ?>" aria-describedby="basic-addon1" required="required"> 
						</div>
						<div class="input-group">
							<h5 class="input-group-addon" id="basic-addon1">Mob No:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
							<input type="number" name="mob" class="clr_plc form-control" onkeypress="valChar(event)" value="<?php if(!empty($petbreed)) echo$petbreed; ?>" required="" aria-describedby="basic-addon1">
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
							<h5 class="input-group-addon" id="basic-addon1">Address:</h5>
							<input type="text" name="add" class="clr_plc form-control" onkeypress="valChar(event)" value="<?php if(!empty($id_mrk)) echo$id_mrk; ?>" required="" aria-describedby="basic-addon1">
						</div>
						<div class="input-group">
							<h5 class="input-group-addon" id="basic-addon1">Destination:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
							<input type="text" name="dest" class="clr_plc form-control" onkeypress="valNum(event);" value="<?php if(!empty($prz_amnt)) echo$prz_amnt; ?>" required="" aria-describedby="basic-addon1">
						</div>
						<div class="input-group">
							<h5 class="input-group-addon" id="basic-addon1"></h5>
							
							<textarea readonly class="terms_cls clr_plc form-control">
								<?php
									echo 'I, accept the following mentioned terms and conditions: 1.The above mentioned pet is mine and I have complete ownership of the same. 2.I will be completely responsible for any type of ownership related issues arising later. 3.The pet was lost and was not abandoned by me. 4.Pal Of Pets or any person related will not be responsible if I do not get my pet back under any circumstances. 5.I assure that the above mentioned details are completely true to my knowledge and any deviation from the same will be my responsibility. 6.I understand that any kind of decision from Pal Of Pets is final and cannot be challenged anywhere and under any circumstances. 7.Pal Of Pets will charge 25% of the prize money (minimum prize money should be Rs. 1000). So while advertising Pal Of Pets will show 25% less amount as promised by me as a prize money.';
								?>
							</textarea>
						</div>
						<div class="sign-in">
							<input type="checkbox" name="checkbox" onchange=""/>I,Read and accept Terms and Conditions
						</div><br/><br/>
						<center>

							<div class="btn grid_3 grid_5 wow fadeInRight animated" data-wow-delay=".5s">
								<h2 class="t-button">
							<span class="labelapp label label-success"><input type="submit" name="submit1" class="btn_succ" value="Submit" id="submit" /></span></h2>
							</div>
						</center>
	
	<br/>
					
				</div>
			</div>
			        </form>	
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