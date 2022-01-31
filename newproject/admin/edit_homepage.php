<?php
	include('inc/connect.inc.php');
?>
<?php
	$pg_name = basename(__FILE__);
	if(isset($_POST['sub']))	{
		$text_noti = "";
		if(isset($_POST['text_noti']) && !empty($_POST['text_noti']))	{
			$text_noti = $_POST['text_noti'];
			$date_added = date("Y-m-d");
			$text_noti = strtoupper($text_noti);
			$res_cat = mysqli_query($dbc, "SELECT * FROM product_cat WHERE name = '".$text_noti."'") or die("EEE");
			if(mysqli_num_rows($res_cat)==0)	{
				mysqli_query($dbc, "INSERT INTO product_cat (name, date) VALUES('$text_noti', '$date_added')") or die("dssdv");
				$msg = "Product category added successfully.";
			}
			else	{
				$msg = "Product category with same name already exist.";
			}
		}
		else	{
			$msg = "Please enter valid product category.";
		}
	}
	
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Welcome to Admin Panel</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

<link href="css/style.css" rel='stylesheet' type='text/css' />

<link href="css/font-awesome.css" rel="stylesheet"> 

<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>

<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>

<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">

</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
		
		<?php
			include('inc/left_sidebar.inc.php');
		?>
		
		<!-- header-starts -->
		<?php
			include('inc/header.inc.php');
		?>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<?php
				if(!empty($msg))	{
					echo '<script>
							alert("'.$msg.'");
						</script>';
				}
			?>
			<div class="main-page">
				<div class="forms">
					<center><h3 class="title1">Welcome to Admin Panel</h3></center>
					
					
				</div>
			</div>
		</div>
		<!--footer-->
		<?php
			include('inc/footer.inc.php');
		?>
        <!--//footer-->
	</div>
	
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			
			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	
   <script src="js/bootstrap.js"> </script>
</body>
</html>