<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>Login</title>  
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


    <div id="contact" class="section wb">
        <div class="container">
            
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="contact_form">
                        <div id="message"></div>
                        <form id="f2" class="row" action="login.php" name="f2" method="post">
                            <fieldset class="row-fluid">
                                
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                   <h3 class="bars" >UserName </h3>
								   <input type="text" name="user_name" id="user_name" class="form-control" placeholder="Enter full Name">
                                </div>
								
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                   <h3 class="bars" >Password </h3>
								   <input type="text" name="password" id="password" class="form-control" placeholder="Enter Password">
                                </div>
								 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                    <button type="submit" value="SEND" id="submit1" class="btn btn-light btn-radius btn-brd grd1 btn-block">Submit</button>
                                </div>
								
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
								<br />
								<br />
								<br />
                                   <h3 class="bars" ><a href="newuser.html">New User? SignUp here...</a></h3>  
                                </div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<br />
                                   <h3 class="bars"><a href="fpass.html">Forgot Password?</a></h3>  
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
		</div><!-- end container -->
    </div><!-- end section -->

   
    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
    <script src="js/portfolio.js"></script>
    <script src="js/hoverdir.js"></script>    

</body>
</html>