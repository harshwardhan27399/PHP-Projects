<?php
	include('inc/connect.inc.php');
	$pg_name = basename(__FILE__);
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
	<div class="container">
		<br/><div class="grid_3 grid_5 wow fadeInLeft animated" data-wow-delay=".5s">
				<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					<?php
						include('inc/adopter.header.inc.php');

					?>
				</div>
			</div>
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
		<div class="adoption_pg sap_tabs">
			<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
				<ul class="resp-tabs-list">
					<li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span></span></li> 
					<!--li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Special Offers</span></li> 
					<li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>Collections</span></li--> 
				</ul>				  	 
				<div class="resp-tabs-container">
					<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
						<?php
							$get_content= mysqli_query($dbc, "SELECT * FROM puppyadoption WHERE status!='0'") or die("");
							if(mysqli_num_rows($get_content)==0)	{
								echo '<div class="alert alert-warning alert-dismissable">
								<button aria-hidden="true" data-dismiss="alert" class="close" type="button"> ?? </button>No any pets are available.</div>';
							}
							while($get_content_info= mysqli_fetch_assoc($get_content)){
						
							echo '<div class="col-md-3 product-men" ';
							
							if($get_content_info['status']==1)	{
								echo 'style="border-radius: 3px; border:2px solid blue; padding:0 0; margin:5px 5px;">';
							}
							else if($get_content_info['status']==2)	{
								echo 'style="border-radius: 3px; border:2px solid yellow; padding:0 0; margin:5px 5px;">';
							}
							else if($get_content_info['status']==3)	{
								echo 'style="border-radius: 3px; border:2px solid green; padding:0 0; margin:5px 5px;">';
							}
							else	{
								echo 'style="border-radius: 3px; border:2px solid black; padding:0 0; margin:5px 5px;">';
							}
							echo '<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img class="fancybox" src="userdata/images/'.$get_content_info['image'].'" alt="" class="pro-image-front" width="600px" height="250px"/>
										<!--div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.html" class="link-product-add-cart">Quick View</a>
											</div>
										</div-->
										<!--span class="product-new-top">New</span-->
										
								</div>
								<div class="item-info-product ">
									<h4><a href="#.html">'.$get_content_info['name'].'</a></h4>
									<div class="info-product-price">
										<h4 style="color: brown">'.$get_content_info['breed'].'</h4>
										<!--del>$69.71</del-->
									</div><div class="info-product-price">
										<h4 style="color: brown">'.$get_content_info['age'].' Years</h4>
										<!--del>$69.71</del-->
									</div>
									<div class="info-product-price">
										<h4 style="color: brown">'.$get_content_info['sex'].'</h4>
										<!--del>$69.71</del-->
									</div>';
									
									if($get_content_info['status']==1)	{
										echo '<a href="adopter_registration.php?id='.$get_content_info['id'].'" class="item_add single-item hvr-outline-out button2">Adopt Me</a>';
									}
									else if($get_content_info['status']==2)	{
										echo '<a href="#" style="color: blue">Adoption for this pet is in Progress...</a>';
									}
									else if($get_content_info['status']==3)	{
										echo '<a href="#" style="color: green">Pet Rehomed Successfully</a>';
									}
								echo '</div>
							</div>
						</div> ';
							}
							?>
						
						<div class="clearfix"></div>
						<br/><br/><br/>
					</div>
				</div>
			</div>
		</div>
		<hr/>	
		<div class="grid_3 grid_4 wow fadeInLeft animated" data-wow-delay=".5s">
			<div class="bs-example">
				<div class="mb-60">
					<?php
						/*echo'<h5 class="info">';
						$get_content= mysqli_query($dbc, "SELECT * FROM clinic_content WHERE pos='about_adoption'") or die("dsfdsf");
						$get_content_info= mysqli_fetch_assoc($get_content);
						echo $get_content_info['info'].'</h5>';*/
						echo '<h5 class="info">
								Today, the way of living and the population dynamics of Nagpur is changing rapidly, we find a lot of people who are old and cannot take care of the pet at home as there children who had bought the pet are working or studying in other city or abroad, or there is some medical reason in the family due to which it becomes difficult to take care of the dog, Sometimes sudden financial emergencies makes it impossible for the family to take care of their beloved pet. Many other reasons like sudden death or shifting due to job etc make it inevitable for pet parents to leave their pets. Also the local shelters charge too high and it is not possible for all to pay the same. It is very difficult to find the proper home for such pets and most of them are found in a very bad state on road and such dogs finally end up in some local shelter or meet with unfortunate death due to road accidents, disease, hunger etc. 
So Pet Rehoming service from Pal Of Pets, Nagpur is first of its kind revolutionary service which will bridge the gap between the people who cannot keep pets and the ones who want to have pets and will take good care of them. 
Pet rehoming is done only after proper counselling session with the new owner. Also the new owner has to sign the terms and conditions which are laid down for the wellbeing of the rehomed pet. There is a nominal adoption or rehoming fee that has to be paid by the new pet owner. 
The pet owner who has to give away the pet has to personally visit Pal Of Pets after an appointment is scheduled. Also the person who takes the charge or becomes the new pet parent will be scrutinised thoroughly before handing over the pet.
Appointment can be booked online on www.realcarepet.com> pet clinic> fill and submit the appointment form or on whatsapp 9766072987
							</h5>';
					?>
				</div>
			</div>
		</div><br/>
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

