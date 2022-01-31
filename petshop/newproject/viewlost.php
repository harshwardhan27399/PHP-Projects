<style>
table {

 border:1px;	
  width: 100%;
}

th, td {
	text-align:center;
	height:100;
  text-align: center;
  padding: 8px;
}

tr:nth-child(even) {background-color: #f2f2f2;}
</style>
<?php
//	include('inc/connect.inc.php');
	@session_start();
	$pg_name = basename(__FILE__);
?>
<!DOCTYPE html>

	<html lang="en">
	
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
								echo'<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
									<ul id="myTab" class="nav nav-tabs" role="tablist">							
										<li '.(($pg_name=="lost.php")? 'class="active"' : '').'>
											<a href="lost.php">Add Lost Pet</a>
										</li>
										<li '.(($pg_name=="found.php")? 'class="active"' : '').'>
											<a href="found.php">Add Found Pet</a>
										</li>
										<li '.(($pg_name=="viewfound.php")? 'class="active"' : '').'>
											<a href="viewfound.php">View Found Pet</a>
										</li>
										<li '.(($pg_name=="viewlost.php")? 'class="active"' : '').'>
											<a href="viewlost.php">View Lost Pet</a>
										</li>
									</ul>
								</div>';
							?>
						</div>
					</div>
<?php

$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"shopopet");
if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM lost";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	echo "<table border=1px;><tr ><th>Image</th><th>Pet Name</th><th>Breed</th><th>colour
	</th><th>age</th><th>sex</th><th>cmd_respond</th><th>collar_clr</th><th>idmrks</th><th>prize</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>"; ?> <img src="<?php  echo $row["image"];?>" width="150" height="150" > <?php echo "</td>";
       
		echo "<td>". $row["name"]. "</td>";
		echo "<td>". $row["breed"]. "</td>";
		echo "<td>". $row["colour"]. "</td>";
		echo "<td>". $row["age"]. "</td>";
		echo "<td>". $row["sex"]. "</td>";
		echo "<td>". $row["command_resp"]. "</td>";
		echo "<td>". $row["collar_clr"]. "</td>";
		echo "<td>". $row["id_mrks"]. "</td>";
		echo "<td>". $row["prize"]. "</td></tr>";
		
		}
	echo "</table>";
    
} else {
    echo "0 results";
}
?>
					
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