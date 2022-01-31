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
	
	$dgid = $_GET['dogid'];
	$foster_det = mysqli_query($dbc, "SELECT * FROM puppyadoption WHERE id = '$dgid'") or die("ERROR");
	
	if(mysqli_num_rows($foster_det)==1)	{
		$foster_det_data = mysqli_fetch_assoc($foster_det);
		$name = $foster_det_data['name'];
		$breed = $foster_det_data['breed'];
		$age = $foster_det_data['age'];
		$sex = $foster_det_data['sex'];
		$height = $foster_det_data['height'];
		$weight = $foster_det_data['weight'];
		$color1 = $foster_det_data['color1'];
		
	}
	if(isset($_POST['submit']))	{
		$image_upld = mysqli_real_escape_string($dbc,trim(@$_FILES['image']['name']));
		$image_type = @$_FILES['image']['type'];
		$name= mysqli_real_escape_string($dbc,trim(@$_POST['name']));
		$breed= mysqli_real_escape_string($dbc,trim(@$_POST['breed']));
		$age=mysqli_real_escape_string($dbc,trim(@$_POST['age']));
		$sex= mysqli_real_escape_string($dbc,trim(@$_POST['sex']));
		$height= mysqli_real_escape_string($dbc,trim(@$_POST['height']));
		$weight= mysqli_real_escape_string($dbc,trim(@$_POST['weight']));
		$color1= mysqli_real_escape_string($dbc,trim(@$_POST['color1']));
		$date_added = date("Y-m-d H:i:s");
		
	
		$image_upld = mysqli_real_escape_string($dbc,trim(@$_FILES['image']['name']));
		$image_type = @$_FILES['image']['type'];
		if(($image_type=='image/gif') || ($image_type=='image/jpeg') ||($image_type=='image/png') || ($image_type=='image/pjpeg') || ($image_type=='image/jpg') && (@$_FILES['imagefile']['size']>0) && (@$_FILES['imagefile']['size']<MAX_SIZE))	{
			$newimage_upld = time().$image_upld;
			if(strlen($newimage_upld)>50)	{ 		//50
				$upld = substr($newimage_upld, 0, 50);	// substr($newimage_upld, 0, 30)
			}
			else {
				$upld=$newimage_upld;
			}
			if($image_type=="image/gif")	{
				$ext="gif";
			}
			if($image_type=="image/jpeg")	{
				$ext="jpg";
			}
			if($image_type=="image/pjpeg")	{
				$ext="pjpeg";
			}
			if($image_type=="image/png")	{
				$ext="png";
			}
			$newimage_upld = time().$upld.'.'.$ext;
			$target = 'userdata/images/'.$newimage_upld;
			$old_upld_nm = $_POST['olg_img'];
			if(move_uploaded_file($_FILES['image']['tmp_name'], $target))	{
				if($old_upld_nm!="noprofilepic.jpg")	{
					@unlink("userdata/images/".$old_upld_nm);
				}
				mysqli_query($dbc,"UPDATE puppyadoption SET hlthrec='".$newimage_upld."' WHERE id= '$dgid'") or die("dsdv");
				}
			else	{
				$msg1="Error in uploading profile picture. Please try again.";
			}
		}
		else	{
			$msg1 = "Please select valid image to upload.";
		}
	
		if(true) {
			if( (!empty($age)) && (!empty($height)) && (!empty($weight)) && (!empty($color1)) )
			{
				$get_user = mysqli_query($dbc, "SELECT id FROM puppyadoption WHERE id = '$dgid'") or die("sdf");
				if(mysqli_num_rows($get_user)==1)
				{
					if($old_upld_nm!="noprofilepic.jpg")	
						{
							@unlink("userdata/images/".$old_upld_nm);
						}
					mysqli_query($dbc,"UPDATE puppyadoption SET age='$age', height='$height' , weight='$weight', color1='$color1'  WHERE id = '$dgid'") or die("dsdv");
					header("Location: petupdate.php");
					
				}
				else	{
					$msg1 = "Error in profile fetching. Please Login again.";
				}
			}
			else  
			{
				$msg1= "All Fields Are Compulsory.";
			}
		}
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
					<!--div class="col-sm-6 col-md-6 col-lg-6 mb-60">
						<div class="pageadoption11">
							<div class="container">
								<h2></h2>
							</div>
						</div>
					</div-->
					<div class="login-right login-right1">
						<center><div class="sign-in">
								<?php 
									$user_id = $_SESSION['user_id'];
									$dgid = $_GET['dogid'];
									$get_downloads = mysqli_query($dbc, "SELECT image FROM puppyadoption WHERE id='$dgid'")or die('sdfs');
									$get_downloads_data = mysqli_fetch_assoc($get_downloads);
									echo '<img style="max-width: 200px;" src="userdata/images/'.$get_downloads_data['image'].'"/>';
									echo '<input type="hidden" name="olg_img" value="'.$get_downloads_data['image'].'">';
									
								?></div>
						</center>
						
						<div class="login-right login-right1">
						<center><h3>Update <?php echo$name; ?></h3></center>
						<form method="post" action="<?php $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">		   
            				<!--div class="sign-in">
								<h4><b>Name:</b></h4>
								<input type="text" name="name" readonly onkeypress="valChar(event)" value="<?php if(!empty($name)) echo$name; ?>" required="">
							</div>
							<div class="sign-in">
								<h5><b>Breed:</b></h5>
								<input type="text" name="breed" readonly required="" value="<?php if(!empty($breed)) echo$breed; ?>" >
							</div-->
							<div class="sign-in">
								<h5><b>Age:</b></h5>
								<input type="text" name="age" onBlur="valNum(this);" onKeyPress="valNum(event);" maxlength="10" value="<?php if(!empty($age)) echo$age;?>" required="">
							</div>
							
							<!--div class="sign-in">
								<h5><b>Sex</b></h5>
								<input type="text" name="sex" id="sex" readonly value="<?php if(!empty($sex)) echo$sex;?>">
							</div-->
							<div class="sign-in">
								<h5><b>Height</b></h5>
								<input type="text" name="height" id="height" value="<?php if(!empty($height)) echo$height; ?>" required="">
							</div>
							<div class="sign-in">
								<h5><b>Weight:</b></h5>
								<input type="text" name="weight" id="weight" value="<?php if(!empty($weight)) echo$weight; ?>" required="">
							</div>
							<div class="sign-in">
								<h5><b>Color:</b></h5>
								<input type="text" name="color1" id="color1" value="<?php if(!empty($color1)) echo$color1; ?>" required="">
							</div>
							
							<div class="sign-in">
								
								<h5><b>Upload latest helth record:</b></h5>
								<input type="file" name="image" class="clr_plc form-control"  required="" aria-describedby="basic-addon1">
							</div>
							</br>
							<center>
								<div class="btn grid_3 grid_5 wow fadeInRight animated" data-wow-delay=".5s">
									<h2 class="submit_btn">
										<input style="width:200px;margin-top:20px;" type="submit" name="submit" id="submit" class="btn_succ" value="Update Details"/>
									</h2>
								</div>
							</center>
						</form>
						</div>
					
						
						</div>
					</div>		
					
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

