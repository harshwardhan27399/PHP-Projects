<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {
  box-sizing: border-box;
}

.fa {
  font-size: 25px;
}

.checked {
  color: orange;
}
</style>
</head>
<body>

<?php


$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"shopopet");
if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT count(id) cid,AVG(rating) avgrate FROM `star_rating`";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	 while($row = $result->fetch_assoc()) {
		$cid = $row['cid'];
		$avgrate = $row['avgrate'];
		} 
}




	echo'<div class="footer">
	<div class="container">
		<div class="col-md-3 footer-left">
			<h2><a href="index.html"><img src="images/pet2.jpg" alt=" " /></a></h2>
			<p></p>
		</div>
		<div class="col-md-9 footer-right">
			<!--div class="col-sm-6 newsleft">
				<h3>SIGN UP FOR NEWSLETTER !</h3>
			</div>
			<div class="col-sm-6 newsright">
				<form>
					<input type="text" value="Email" onfocus="this.value = \'\';" onblur="if (this.value == \'\') {this.value = \'Email\';}" required="">
					<input type="submit" value="Submit">
				</form>
			</div-->
			<div class="clearfix"></div>
			<div class="sign-grds">
				<div class="col-md-4 sign-gd">
					<h4>Information</h4>
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="petclinic.php">Pet Clinic</a></li>
						<!--li><a href="#">Pet Services</a></li>
						<li><a href="#">Animal Prosthetics</a></li>
						<li><a href="#">Pet Shop</a></li>
						<li><a href="#">Puppy Sale and Adoption</a></li-->
					</ul>
				</div>
				
				<div class="col-md-4 sign-gd-two">
					<h4>Store Information</h4>
					<ul>
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i><span>Kolhapur, Maharashtra</span></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><span>palofpets@gmail.com</span></a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i><span>+91 776 8824 165</span></li>
						
					</ul>
				</div>
				<div class="col-md-4 sign-gd flickr-post">
					<h4>Pet Shop Posts</h4>
					<ul>
						<li><a href="#"><img src="images/b15.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="#"><img src="images/b16.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="#"><img src="images/b17.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="#"><img src="images/b18.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="#"><img src="images/b15.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="#"><img src="images/b16.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="#"><img src="images/b17.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="#"><img src="images/b18.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="#"><img src="images/b15.jpg" alt=" " class="img-responsive" /></a></li>
						
					</ul>
					<p><span class="heading">User Rating   </span>';
					for ($x = 1; $x <= round($avgrate); $x++) {
					echo '  ';	
					echo '<span class="fa fa-star checked"> </span>';
					}
					for ($x = round($avgrate); $x <5 ; $x++) {
						echo '  ';	
					echo '<span class="fa fa-star"></span>';
					}
					echo '</p><p>';
				 echo round($avgrate, 2); ?> average based on <?php echo $cid; ?> 
						<?php echo 'reviews.</p>
</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="clearfix"></div>
		<p class="copy-right">"></a></p>
	</div>
</div>';

?>
</body>
</html>