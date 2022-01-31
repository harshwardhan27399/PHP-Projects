<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>Jigsaw Puzzle</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Modernizer for Portfolio -->
    <script src="js/modernizer.js"></script>

</head>
<body>

    <!-- LOADER -->
    <div id="preloader">
        <div class="loader">
			<div class="loader__bar"></div>
			<div class="loader__bar"></div>
			<div class="loader__bar"></div>
			<div class="loader__bar"></div>
			<div class="loader__bar"></div>
			<div class="loader__ball"></div>
		</div>
    </div><!-- end loader -->
    <!-- END LOADER -->
    
    <header class="header header_style_01">
        <nav class="megamenu navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="images/logos/logo.png" alt="image"></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="active" href="index.php">Home</a></li>
                        <li><a href="about-us.html">About us</a></li>
                        <li><a href="services.html">How to Play</a></li>
						<li><a href="contact.html">Contact</a></li>
                        <li><a href="feedback.php">Feedback</a></li>
									<?php
session_start();
if (!isset($_SESSION['uid'])) {
  echo '<li><a href="Login.html">Login</a></li>';
} else {
  echo '<li><a href="Logout.php">Logout -> '.$_SESSION["uid"].'</a></li>';

}
?>
					    <!--li><a href="testimonials.html">Testimonials</a></li>
                        <li><a href="pricing.html">Pricing</a></li-->
						
                    </ul>
                </div>
            </div>
        </nav>
    </header>
	
    <div id="services" class="parallax section lb" style=" background: lightblue url('uploads/portfolio_08.jpg');background-repeat: no-repeat;  background-size: cover;">
        <div class="container">
            <div class="section-title text-center">
                <h3 style="color:Orange">Welcome to Jigsaw Puzzle Game</h3>
                <h2 class="lead" style="text-align:left;color:purple; font: italic bold 30px Georgia, serif;">
1.Select type and level of puzzle.
<br>
2.Start the game.
<br>
3.Set target in less time.
<br>
4.End game.
</h2>
            </div><!-- end title -->
            <div class="text-center">
			<?php
if (!isset($_SESSION['uid'])) {
  echo '<a data-scroll href="Login.html" class="btn btn-light btn-radius btn-brd">Start Game</a>';
} else {
  echo '<a data-scroll href="mygame.php" class="btn btn-light btn-radius btn-brd">Start Game</a>';

}
?> </div>
        </div><!-- end container -->
    </div><!-- end section -->


                
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
    <script src="js/portfolio.js"></script>
    <script src="js/hoverdir.js"></script>    

</body>
</html>