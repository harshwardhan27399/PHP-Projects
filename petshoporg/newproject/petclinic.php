<?php
	include('inc/connect.inc.php');
?>
<?php
	$msg="";
	$msg1="";
	$flag=0;
	if(isset($_POST['submit']))	{
		$name= mysqli_real_escape_string($dbc,trim(@$_POST['fullname']));
		$mobile= mysqli_real_escape_string($dbc,trim(@$_POST['mobileno']));
		$userdate= mysqli_real_escape_string($dbc,trim(@$_POST['date_c']));
		$time= mysqli_real_escape_string($dbc,trim(@$_POST['time_c']));
		$des=mysqli_real_escape_string($dbc,trim(@$_POST['subject']));
		$currentdate=date("y-m-d");
		$currentdateyear=substr($currentdate,0,2);
		$currentdatemonth=substr($currentdate,3,2);
		$currentdatedate=substr($currentdate,6,2);
		$userdateyear=substr($userdate,2,2);
		$userdatemonth=substr($userdate,5,2);
		$userdatedate=substr($userdate,8,2);
		
		if(!empty($name) && !empty($mobile) && !empty($userdate) && !empty($time))	{
			if(is_numeric($mobile) && (strlen($mobile)==10))	{
				if(preg_match('/[a-zA-Z]+/',$name))  {
					if($currentdateyear<$userdateyear) {
						$flag=1;
					}
					else if($currentdateyear==$userdateyear) {
						if($currentdatemonth<$userdatemonth) {
							$flag=1;
						}
						else if($currentdatemonth==$userdatemonth) {
							if($currentdatedate<=$userdatedate)  {
								$flag=1;
							}	
						}	
					}
					if($flag==1) {
						mysqli_query($dbc,"INSERT INTO visiter (Full_name,mob_no,con_date,con_time,visit_des) VALUES('$name','$mobile','$userdate','$time','$des')") or die("dsdv");
						$msg = "Your Appointment Successfully Booked.";
						$name="";
						$mobile="";
						$userdate="";
						$time="select";
						$des="";
					}
					else if($flag==0) {
						$msg1="Please select another date";
					}
				}
				else {
					$msg1="Please enter valid name";
				}
		    }                                       
			else	{
				$msg1 = "Please enter valid 10 digit mobile number.";
			}
		}
		else	{
			$msg1 = "All Fields Are Compulsory.";
		}
	}
	
?>
<!DOCTYPE html>
<html>
<head>
<title>PetClinic : Pal Of Pets</title>
<!-- for-mobile-apps -->
<form action="" method="POST" style="">
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
<script src= "include/validation.js"</script>
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- cart -->
	<script src="js/simpleCart.min.js"></script>
<!-- cart -->
<!-- for bootstrap working -->
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<!--link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'-->
<script src="js/jquery.easing.min.js"></script>
</head>
<body>
<!-- header -->
<?php
	include('inc/header.inc.php');
?>
<!--header-->
<div class="page-head">
	<div class="container">
		<h3></h3>
	</div>
</div>
<!-- //banner -->
<!-- typography -->
<div class="typrography">
	 <div class="container">
			
		
		
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
			<div class="page-head1">
				<div class="container">
					<h2></h2>
				</div>
			</div>
			
			
			
			
            <!--h4 class="text-blue title-border mb-30 bars">Alert Boxes</h4>
            <div class="alert alert-success alert-dismissable">
              <button aria-hidden="true" data-dismiss="alert" class="close" type="button"> × </button>
              Success! Well done its submitted. </div>
            <div class="alert alert-info alert-dismissable">
              <button aria-hidden="true" data-dismiss="alert" class="close" type="button"> × </button>
              Info! take this info. </div>
            <div class="alert alert-warning alert-dismissable">
              <button aria-hidden="true" data-dismiss="alert" class="close" type="button"> × </button>
              Warning ! Dont submit this. </div>
            <div class="alert alert-danger alert-dismissable">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button"> × </button>
                Error ! Change few things. </div-->
           </div>
		<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">		   
		<h3 class="bars">Appointment Form</h3>
		<div class="input-group">
			<h5 class="input-group-addon" id="basic-addon1">Full Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
			<input type="text" name="fullname" class="clr_plc form-control" onkeypress="valChar(event)" value="<?php if(!empty($name)) echo$name; ?>" required="" aria-describedby="basic-addon1">
		</div>
		<div class="input-group">
			<h5 class="input-group-addon" id="basic-addon1">Mobile No:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
			<input type="text" name="mobileno" pattern="[7-9]{1}[0-9]{9}" " maxlength="10" value="<?php if(!empty($mobile)) echo$mobile;?>" required="" aria-describedby="basic-addon1">
		</div>
		<div class="input-group">
			<h5 class="input-group-addon" id="basic-addon1">Convenient Date:&nbsp;</h5>
			<input type="date" name="date_c" class="clr_plc form-control" value="<?php if(!empty($userdate)) echo$userdate;?>" required="" aria-describedby="basic-addon1">
		</div>
		<div class="input-group">
			<h5 class="input-group-addon" id="basic-addon1">Convenient Time:&nbsp;</h5>
			<select class="clr_plc form-control" value="<?php if(!empty($time)) echo$time;?>" name="time_c" required="">
				<option value="select">Select Convenient Time</option>
				<option <?php if(!empty($time) && $time=="8AM-9AM"){ echo 'selected="selected"'; }   ?> value="8AM-9AM">8 AM-9 AM</option>
				<option <?php if(!empty($time) && $time=="9AM-10AM"){ echo 'selected="selected"'; }   ?> value="9AM-10AM">9 AM-10 AM</option>
				<option <?php if(!empty($time) && $time=="6PM-7PM"){ echo 'selected="selected"'; }   ?> value="6PM-7PM">6 PM-7 PM</option>
				<option <?php if(!empty($time) && $time=="7PM-8PM"){ echo 'selected="selected"'; }   ?> value="7PM-8PM">7 PM-8 PM</option>
				<option <?php if(!empty($time) && $time=="8PM-9PM"){ echo 'selected="selected"'; }   ?> value="8PM-9PM">8 PM-9 PM</option>
			</select>
		</div>
		<div class="input-group">
			<h5 class="input-group-addon" id="basic-addon1">Reason For visit:&nbsp;</h5>
			<textarea name="subject" id="subject" class="clr_plc form-control"  required="" aria-describedby="basic-addon1"><?php if(!empty($des)) echo$des;?></textarea>  
		</div>
		<center><div class="btn grid_3 grid_5 wow fadeInRight animated" data-wow-delay=".5s">
			  <h2 class="t-button">
				<a href="#"><span class="labelapp label label-success"><input type="submit" name="submit" class="btn_succ" value="Submit"/></span></a>

			   </h2>
	   </div></center>
	</form>			

<!-- //typography -->
<!-- //product-nav -->
<!--div class="coupons">
	<div class="container">
		<div class="coupons-grids text-center">
			<div class="col-md-3 coupons-gd">
				<h3>Buy your product in a simple way</h3>
			</div>
			<div class="col-md-3 coupons-gd">
				<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
				<h4>LOGIN TO YOUR ACCOUNT</h4>
				<p>Neque porro quisquam est, qui dolorem ipsum quia dolor
			sit amet, consectetur.</p>
			</div>
			<div class="col-md-3 coupons-gd">
				<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
				<h4>SELECT YOUR ITEM</h4>
				<p>Neque porro quisquam est, qui dolorem ipsum quia dolor
			sit amet, consectetur.</p>
			</div>
			<div class="col-md-3 coupons-gd">
				<span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span>
				<h4>MAKE PAYMENT</h4>
				<p>Neque porro quisquam est, qui dolorem ipsum quia dolor
			sit amet, consectetur.</p>
			</div>
			<div class="clearfix"> </div>
		</div-->
		<br/><hr/><br/>
		<div class="grid_3 grid_4 wow fadeInLeft animated" data-wow-delay=".5s">
		    <div class="bs-example">
				<div class="mb-60">
					
						<?php
							echo'<h5 class="info">';
							$get_content= mysqli_query($dbc, "SELECT * FROM clinic_content WHERE pos='about_head'") or die("");
							$get_content_info= mysqli_fetch_assoc($get_content);
							echo $get_content_info['info'].'</h5>';
						?>
				</div>
			</div>
	    </div>
	</div>
</div>
<!-- footer -->
<?php

	include('inc/footer.inc.php');

?>
<!-- //footer -->
<!-- login -->
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
<!-- //login -->
</form>
</body>
</html>

