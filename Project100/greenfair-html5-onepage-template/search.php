    
<!DOCTYPE html>
<html lang="en">

    <head>
	<script  src="markj.js"></script>
        <script  src="mark.js"></script>
       
        <script>
            $(function () {

                // the input field
                var $input = $("input[type='search']"),
                        // clear button
                        $clearBtn = $("button[data-search='clear']"),
                        // prev button
                        $prevBtn = $("button[data-search='prev']"),
                        // next button
                        $nextBtn = $("button[data-search='next']"),
                        // the context where to search
                        $content = $(".content"),
                        // jQuery object to save <mark> elements
                        $results,
                        // the class that will be appended to the current
                        // focused element
                        currentClass = "current",
                        // top offset for the jump (the search bar)
                        offsetTop = 50,
                        // the current index of the focused element
                        currentIndex = 0;

                /**
                 * Jumps to the element matching the currentIndex
                 */
                function jumpTo() {
                    if ($results.length) {
                        var position,
                                $current = $results.eq(currentIndex);
                        $results.removeClass(currentClass);
                        if ($current.length) {
                            $current.addClass(currentClass);
                            position = $current.offset().top - offsetTop;
                            window.scrollTo(0, position);
                        }
                    }
                }

                /**
                 * Searches for the entered keyword in the
                 * specified context on input
                 */
                $input.on("input", function () {
                    var searchVal = this.value;
                    $content.unmark({
                        done: function () {
                            $content.mark(searchVal, {
                                separateWordSearch: true,
                                done: function () {
                                    $results = $content.find("mark");
                                    currentIndex = 0;
                                    jumpTo();
                                }
                            });
                        }
                    });
                });

                /**
                 * Clears the search
                 */
                $clearBtn.on("click", function () {
                    $content.unmark();
                    $input.val("").focus();
                });

                /**
                 * Next and previous search jump to
                 */
                $nextBtn.add($prevBtn).on("click", function () {
                    if ($results.length) {
                        currentIndex += $(this).is($prevBtn) ? -1 : 1;
                        if (currentIndex < 0) {
                            currentIndex = $results.length - 1;
                        }
                        if (currentIndex > $results.length - 1) {
                            currentIndex = 0;
                        }
                        jumpTo();
                    }
                });
            });
        </script>


        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <title>Search Fair</title>
	    <!--    Google Fonts-->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

        <!--Fontawesom-->
        <link rel="stylesheet" href="css/font-awesome.min.css">

        <!--Animated CSS-->
        <link rel="stylesheet" type="text/css" href="css/animate.min.css">

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!--Bootstrap Carousel-->
        <link type="text/css" rel="stylesheet" href="css/carousel.css" />

        <link rel="stylesheet" href="css/isotope/style.css">

        <!--Main Stylesheet-->
        <link href="css/style.css" rel="stylesheet">
        <!--Responsive Framework-->
        <link href="css/responsive.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body data-spy="scroll" data-target="#header">

        <!--Start Hedaer Section-->
        <section id="header">
            <div class="header-area">
               
                <div class="header_menu text-center" data-spy="affix" data-offset-top="50" id="nav">
                    <div class="container">
                        <nav class="navbar navbar-default zero_mp ">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <!--a class="navbar-brand custom_navbar-brand" href="#"><img src="img/logo.png" alt=""></a-->
                            </div>
                            <!--End of navbar-header-->

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse zero_mp" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav navbar-right main_menu">
                                    <li ><a href="index.html">Home </a></li>
                                    <li ><a href="index.php">Upload Files </a></li>
                                    <li class="active"><a href="#">Search Files</a></li>
                                    <!--li><a href="#counter">achivment</a></li>
                                    <li><a href="#event">event</a></li>
                                    <li><a href="#testimonial">testimonial</a></li>
                                    <li><a href="#blog">blog</a></li>
                                    <li><a href="#contact">contact us</a></li-->
                                </ul>
                            </div>
                            <!-- /.navbar-collapse -->
                        </nav>
                        <!--End of nav-->
                    </div>
                    <!--End of container-->
                </div>
                <!--End of header menu-->
            </div>
            <!--end of header area-->
        </section>
        <!--End of Hedaer Section-->

	<section id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="purches_title">File Searching Form</h2><br />
						 <p></p>
                    </div>
                </div>
                <div class="row">
					<div class="form-group">
                        <div class="col-md-6">
                            <input type="search" class="form-control" placeholder="Search">
                        </div>
                        <div class="col-md-6">
							<button class="btn" data-search="next">&darr;</button>
							<button class="btn" data-search="prev">&uarr;</button>
							<button class="btn" data-search="clear">✖</button>
						</div>
                    </div>
				</div>
				
				<div class="row">
            <div class="col-md-12 text-center">
                <div style="border: 1px solid black; padding: 25px 25px 25px 25px;background-color: lightskyblue;min-height: 100px; width: 100%; margin-top: 50px">
                <?php
					
				
               $file = $_SESSION["file"];
                //$file = "uploads/retrivefile.txt";
					
                $fn = fopen($file,"r");
  
                while(! feof($fn))  {
                	$result = fgets($fn);
                     echo $result;
                     echo "<br>";
                 }

                fclose($fn);
                ?>

                </div>
            </div>
        </div>

				
				<!--End of row-->
            </div>
            <!--End of container-->
        </section>
        <!--end of welcome section-->
		
		
		
<!--Start of footer-->
        <section id="footer">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-6">
                        <div class="copyright">
                            <p>@ 2019 - Design By SearchFair</a></span></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="designer">
                            <p>A Design By <a href="#">UltimateSearchStudio</a></p>
                        </div>
                    </div>
                </div>
                <!--End of row-->
            </div>
            <!--End of container-->
        </section>
		
        <!--Scroll to top-->
        <a href="#" id="back-to-top" title="Back to top">&uarr;</a>
        <!--End of Scroll to top-->


        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <!-- <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>-->
        <script src="js/jquery-1.12.3.min.js"></script>

        <!--Counter UP Waypoint-->
        <script src="js/waypoints.min.js"></script>
        <!--Counter UP-->
        <script src="js/jquery.counterup.min.js"></script>

        <script>
            //for counter up
            $('.counter').counterUp({
                delay: 10,
                time: 1000
            });
        </script>

        <!--Gmaps-->
        <script src="js/gmaps.min.js"></script>
        <script type="text/javascript">
            var map;
            $(document).ready(function () {
                map = new GMaps({
                    el: '#map',
                    lat: 23.6911078,
                    lng: 90.5112799,
                    zoomControl: true,
                    zoomControlOpt: {
                        style: 'SMALL',
                        position: 'LEFT_BOTTOM'
                    },
                    panControl: false,
                    streetViewControl: false,
                    mapTypeControl: false,
                    overviewMapControl: false,
                    scrollwheel: false,
                });


                map.addMarker({
                    lat: 23.6911078,
                    lng: 90.5112799,
                    title: 'Office',
                    details: {
                        database_id: 42,
                        author: 'Foysal'
                    },
                    click: function (e) {
                        if (console.log)
                            console.log(e);
                        alert('You clicked in this marker');
                    },
                    mouseover: function (e) {
                        if (console.log)
                            console.log(e);
                    }
                });
            });
        </script>
        <!--Google Maps API-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBjxvF9oTfcziZWw--3phPVx1ztAsyhXL4"></script>


        <!--Isotope-->
        <script src="js/isotope/min/scripts-min.js"></script>
        <script src="js/isotope/cells-by-row.js"></script>
        <script src="js/isotope/isotope.pkgd.min.js"></script>
        <script src="js/isotope/packery-mode.pkgd.min.js"></script>
        <script src="js/isotope/scripts.js"></script>


        <!--Back To Top-->
        <script src="js/backtotop.js"></script>


        <!--JQuery Click to Scroll down with Menu-->
        <script src="js/jquery.localScroll.min.js"></script>
        <script src="js/jquery.scrollTo.min.js"></script>
        <!--WOW With Animation-->
        <script src="js/wow.min.js"></script>
        <!--WOW Activated-->
        <script>
            new WOW().init();
        </script>


        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Custom JavaScript-->
        <script src="js/main.js"></script>
    </body>

</html>
