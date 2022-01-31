<style>
.dropbtn {
  background-color: rgb(152,198,224);
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.menu__item:hover {display: block;}

#bs-example-navbar-collapse-1 li:hover {background-color: #ddd;}

</style>
<?php
	echo'<div class="header">
			<div class="container">
				<ul>
					<!--li><span></span></li-->
					<!--li><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></li>
					<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></li-->
				</ul>
			</div>
		</div>
<!-- //header -->
<!-- header-bot -->
<div class="header-bot">
	<div class="container">
		<div class="col-md-2 header-left">
			<h1><a href="index.php"><img src="images/pet2.jpg"></a></h1>
		</div>
		<div class="col-md-6" style="margin-top:10px;margin-left:5%">
				
				<a href="index.php"><center><h1 style="font-size:70px">PAL OF PETS</h1></center></a>
		</div>
		<div class="col-md-3 header-right footer-bottom">
			<ul>
				<li><a class="fb" href="https://m.facebook.com/Pal-Of-Pets-443988816406780/" target="blank"></a></li>
				<li><a class="insta" href="https://www.instagram.com/dr_makarand_dixit_vet/" target="blank"></a></li>
			</ul>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //header-bot -->
<!-- banner -->
<div class="ban-top">
	<div class="container">
		<div class="top_nav_left">
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
				<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav menu__list">
					<li class="menu__item menu__item--current"><a style="color:white" href="index.php">Home <span class="sr-only"></span></a></li>
					<li class="dropdown menu__item">
						<a style="color:white" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Features<span class="caret"></span></a>
							
										<ul class="dropdown-content" style="list-style-type:none">
											<li><a href="petinfo.php">pet information</a></li>
											<li><a href="ngoinfo.html">ngo infromation</a></li>
											<li><a href="nearbypetshop.html">nearby petshop</a></li>
											<li><a href="nearbyvet.php">nearby veterinary</a></li>
										</ul>
								
					</li>
					<li class="menu__item--current menu__item"><a style="color:white" href="../petshop/user/shop.php">products<spanclass="sr-only"></span></a></li>
					
					<li class="menu__item--current menu__item"><a style="color:white" href="petclinic.php">Pet Clinic <span class="sr-only"></span></a></li>
					<!--li class="menu__item--current menu__item"><a style="color:white" href="profile.php">Pet Adoption<span class="sr-only"></span></a></li-->
					<li class="menu__item--current menu__item"><a style="color:white" href="lost.php">Lost & Found<span class="sr-only"></span></a></li>
					<li class="dropdown menu__item">
						<a style="color:white" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Login<span class="caret"></span></a>
							
										<ul class="dropdown-content" style="list-style-type:none">
											<li><a href="../petshop/admin/admin_login.php">Admin Login</a></li>
											<li><a href="veterinary.php">veterinary Login</a></li>
											<li><a href="login.php">Pet owner Login</a></li>

										</ul>
								
					</li>
					<li class="menu__item--current menu__item"><a style="color:white" href="foster_registration.php">Registration<spanclass="sr-only"></span></a></li>
					<li class="menu__item--current menu__item"><a style="color:white" href="newaboutus.php">AboutUs<spanclass="sr-only"></span></a></li>
					<li class="menu__item--current menu__item"><a style="color:white" href="feedback.php">Feedback<spanclass="sr-only"></span></a></li>

					
					
					
					<!--li class="menu__item--current menu__item"><a class="menu__link" href="under_construction.php">pet shop<span class="sr-only"></span></a></li-->
					<!--li class="dropdown menu__item">
						<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pet Services <span class="caret"></span></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="row">
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="#">Pet Taxi</a></li>
											<li><a href="#">Pet Lodging Fooding &amp; Daycarying</a></li>
											<li><a href="#">Pet Matrimony</a></li>
										</ul>
									</div>
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="#">Jewellery</a></li>
											<li><a href="#">Sunglasses</a></li>
											<li><a href="#">Perfumes</a></li>
											<li><a href="#">Beauty</a></li>
											<li><a href="#">Shirts</a></li>
											<li><a href="#">Sunglasses</a></li>
											<li><a href="#">Swimwear</a></li>
										</ul>
									</div>
									<div class="col-sm-6 multi-gd-img multi-gd-text ">
										<a href="#"><img src="images/woo.jpg" alt=" "/></a>
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
					</li-->
					<!--li class="menu__item"><a class="menu__link" href="#">Pet Services <span class="sr-only"></span></a></li>
					<li class="menu__item"><a class="menu__link" href="#">Animal Prosthetic <span class="sr-only"></span></a></li>
					<li class="menu__item"><a class="menu__link" href="#">Pet Shop <span class="sr-only"></span></a></li-->
					<!--li class="dropdown menu__item">
						<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pet Shop<span class="caret"></span></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="row">
									<!--div class="col-sm-6 multi-gd-img1 multi-gd-text ">
										<a href="#"><img src="images/woo1.jpg" alt=" "/></a>
									</div>
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="#">Clothing</a></li>
											<li><a href="#">Wallets</a></li>
											<li><a href="#">Footwear</a></li>
											<li><a href="#">Watches</a></li>
											<li><a href="#">Accessories</a></li>
											<li><a href="#">Bags</a></li>
											<li><a href="#">Caps & Hats</a></li>
										</ul>
									</div>
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="#">Jewellery</a></li>
											<li><a href="#">Sunglasses</a></li>
											<li><a href="#">Perfumes</a></li>
											<li><a href="#">Beauty</a></li>
											<li><a href="#">Shirts</a></li>
											<li><a href="#">Sunglasses</a></li>
											<li><a href="#">Swimwear</a></li>
										</ul>
									</div-->
									<div class="clearfix"></div>
								</div>
							</ul>
					</li-->
					
				</ul>
				</div>
			  </div>
			</nav>	
		</div>
		<div class="clearfix"></div>
	</div>
</div>';
?>