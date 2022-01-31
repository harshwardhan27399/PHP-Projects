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
	?>
	
<!DOCTYPE html>
<html>
<head>
<title>Profile : Pal Of Pets</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Smart Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- pignose css -->
<link href="css/pignose.layerslider.css" rel="stylesheet" type="text/css" media="all" />

<link rel="stylesheet" type="text/css" media="screen" href="http://cdnjs.cloudflare.com/ajax/libs/fancybox/1.3.4/jquery.fancybox-1.3.4.css" />
<style type="text/css">
    a.fancybox img {
        border: none;
        box-shadow: 0 1px 7px rgba(0,0,0,0.6);
        -o-transform: scale(1,1); -ms-transform: scale(1,1); -moz-transform: scale(1,1); -webkit-transform: scale(1,1); transform: scale(1,1); -o-transition: all 0.2s ease-in-out; -ms-transition: all 0.2s ease-in-out; -moz-transition: all 0.2s ease-in-out; -webkit-transition: all 0.2s ease-in-out; transition: all 0.2s ease-in-out;
    } 
    a.fancybox:hover img {
        position: relative; z-index: 999; -o-transform: scale(1.03,1.03); -ms-transform: scale(1.03,1.03); -moz-transform: scale(1.03,1.03); -webkit-transform: scale(1.03,1.03); transform: scale(1.03,1.03);
    }
</style>

<!-- //pignose css -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- cart -->
	<script src="js/simpleCart.min.js"></script>
<!-- cart -->
<!-- for bootstrap working -->
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
<script src="js/jquery.easing.min.js"></script>
</head>
<body>
<!-- header -->
	<?php
		include('inc/header.inc.php');
	?>
	<div class="page-head">
	<div class="container">
		<h3></h3>
	</div>
</div>
	
<!-- //header -->
<!-- header-bot -->
<!-- //header-bot -->
<!-- banner -->
<!-- //banner-top -->
<!-- banner -->
<!-- //banner -->
<!-- content -->
<!-- //content -->

<!-- content-bottom -->
<!-- //content-bottom -->
<!-- product-nav -->

<div class="">
<div class="typrography11">
				<div class="container">	
					<div class="grid_3 grid_5 wow fadeInLeft animated" data-wow-delay=".5s">
						<h3 class="bars"></h3>
						<?php
							include('inc/adopter.header.inc.php');
						
						?>
					
			
	<div class="container">
		
		<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
		<script type="text/javascript">
							$(document).ready(function () {
								$('#horizontalTab').easyResponsiveTabs({
									type: 'default', //Types: default, vertical, accordion           
									width: 'auto', //auto or any width like 600px
									fit: true   // 100% fit in a container
								});
							});
							
		</script>
		<br><br><br><br>
		<div class="adoption_pg sap_tabs">
			<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
				<ul class="resp-tabs-list">
					<li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Click UPDATE for update details</span></li> 
						</ul>	
					<br />
				<div class="resp-tabs-container">
					<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
						<?php
						
							$id =  $_SESSION['user_id'];
							
							$get_content= mysqli_query($dbc, "SELECT * FROM puppyadoption where status=$id") or die("");
							if(mysqli_num_rows($get_content)==0)	{
								echo '<div class="alert alert-warning alert-dismissable">
								<button aria-hidden="true" data-dismiss="alert" class="close" type="button"> × </button>No any pets are available.</div>';
							}
							while($get_content_info= mysqli_fetch_assoc($get_content)){
							echo '<div class="col-md-3 product-men"> ';
							$dog_id = $get_content_info['id'];
							@session_start();
							$_SESSION['dog_id'] = $dog_id;
							echo '<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img class="fancybox" src="userdata/images/'.$get_content_info['image'].'" alt="" class="pro-image-front" width="600px" height="250px"/>
								</div>
								
								<div class="item-info-product">
									<h4><a href="#.html">Name:&nbsp;&nbsp;'.$get_content_info['name'].'</a></h4>
									
									<div class="info-product-price">
										<h4 style="color: brown">&nbsp;&nbspBreed:&nbsp;&nbsp;'.$get_content_info['breed'].'</h4>
										<!--del>$69.71</del-->
									</div><div class="info-product-price">
										<h4 style="color: brown">&nbsp;&nbspAge:&nbsp;&nbsp;'.$get_content_info['age'].' Years</h4>
										<!--del>$69.71</del-->
									</div>
									<div class="info-product-price">
										<h4 style="color: brown">&nbsp;&nbspSex:&nbsp;&nbsp;'.$get_content_info['sex'].'</h4>
										<!--del>$69.71</del-->
									</div>
									';
									echo '<center><a href="singlepetupdate.php?dogid='.$get_content_info['id'].'"  class="item_add single-item hvr-outline-out button2">update Me</a><center>';
									
									
								echo '</div></div></div>';
							}
							?>
						
						<div class="clearfix"></div>
						<br/><br/><br/>
					</div>
				</div>
			</div>
		</div>
		<br/>
	</div>
</div>

<!-- //product-nav -->
<!-- footer -->
<div class="footer">
	<div class="container">
			<?php

	include('inc/footer.inc.php');

?>		
	</div>
</div>
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
			<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
			<script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
			<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/fancybox/1.3.4/jquery.fancybox-1.3.4.pack.min.js"></script>
			<script type="text/javascript">
				$(function($){
					var addToAll = false;
					var gallery = true;
					var titlePosition = 'inside';
					$(addToAll ? 'img' : 'img.fancybox').each(function(){
						var $this = $(this);
						var title = $this.attr('title');
						var src = $this.attr('data-big') || $this.attr('src');
						var a = $('<a href="#" class="fancybox"></a>').attr('href', src).attr('title', title);
						$this.wrap(a);
					});
					if (gallery)
						$('a.fancybox').attr('rel', 'fancyboxgallery');
					$('a.fancybox').fancybox({
						titlePosition: titlePosition
					});
				});
				$.noConflict();
			</script>
<!-- //login -->
</body>
</html>

