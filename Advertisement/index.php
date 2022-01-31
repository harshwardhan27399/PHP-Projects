<?php
require_once "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- CHARACTER SET -->
	<meta charset="utf-8">

	<!-- VIEWPORT SIZING FOR ALL DEVICES -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="refresh" content = "30" />
	
	<!-- AUTHOR -->
	<meta name="author" content="Ninad">
	
	<!-- DESCRIPTION -->
	<meta name="description" content="Advertisement.">
	
	<!-- TITLE -->
	<title>Prayer Schedule</title>

	<!-- SHORTCUT ICON -->
	<link rel="shortcut icon" href="img/favicon.ico">

	<!-- CUSTOM EXTERNAL STYLESHEET -->
	<link rel="stylesheet" href="css/swiper.min.css">
	<link rel="stylesheet" href="css/main136.css">
	<link rel="stylesheet" href="css/noticec222.css">
<script src="js/swiper.min.js"></script>
<script src="jquery.min.js"></script>

</head>

<body>

	<div class="maintime">
		<!-- DAY OF THE WEEK -->
		<!--	<div class="days">
		
			<div class="day">
				<p class="sunday">sunday</p>
			</div>

			<div class="day">
				<p class="monday">monday</p>
			</div>

			<div class="day">
				<p class="tuesday">tuesday</p>
			</div>

			<div class="day">
				<p class="wednesday">wednesday</p>
			</div>

			<div class="day">
				<p class="thursday">thursday</p>
			</div>

			<div class="day">
				<p class="friday">friday</p>
			</div>

			<div class="day">
				<p class="saturday">saturday</p>
			</div>

		</div>-->
		<!-- CLOCK -->
		<div class="clock">
			<!-- HOUR -->
			<div class="numbers">
				<p class="hours"></p>
				 
			</div>



			<!-- MINUTE -->
			<div class="numbers">
				<p class="minutes"></p>
				 
			</div>



			<!-- SECOND -->
			<div class="numbers">
				<p class="seconds"></p>
				
			</div>
			
			<!-- AM / PM -->
			

				<!-- AM -->
				<div id="amorpm" class="numbers" style="font-size: 50px;" >
					
				</div>
				
			

		</div><!-- END CLOCK -->
    </div>
    
	<div>
	    <img src="adimg.png" style="display: block;margin-left: auto;margin-right: auto;padding-top:10px;
	    padding-bottom:0px;padding-left:0px;padding-right:0px;height:55px;">
	</div>
	
	<div class="maindate">
		<div id="cdate">
		</div>
	</div>
    
    <br>
	<div class="swiper-container">
		<div class="swiper-wrapper">
		<div id="slideimg1" class="swiper-slide">
			<?php
			$cdate=date("d-m-Y").".png";
			$sql = "SELECT `filename`,`filetime` FROM `filesupload` WHERE filename='$cdate' order by filetime DESC";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			  // output data of each row
			  if($row = $result->fetch_assoc()) {
				echo '<img src="PNG/uploads/' . $row["filetime"].$row["filename"] . '" width="100%" alt="error">'; 
			  }
			} else {
			  echo "0 results";
			}
			?>
		</div>
		<div id="slideimg2" class="swiper-slide">
			<?php
			$cdate=date("d-m-Y")."2.png";
			$sql = "SELECT `filename`,`filetime` FROM `filesupload` WHERE filename='$cdate' order by filetime DESC";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			  // output data of each row
			  if($row = $result->fetch_assoc()) {
				echo '<img src="PNG/uploads/' . $row["filetime"].$row["filename"] . '" width="100%" alt="error">'; 
			  }
			} else {
			  echo "0 results";
			}
			?>
		</div>
		<div id="slideimg3" class="swiper-slide">
			<?php
			$cdate=date("d-m-Y")."3.png";
			$sql = "SELECT `filename`,`filetime` FROM `filesupload` WHERE filename='$cdate' order by filetime DESC";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			  // output data of each row
			  if($row = $result->fetch_assoc()) {
				echo '<img src="PNG/uploads/' . $row["filetime"].$row["filename"] . '" width="100%" alt="error">'; 
			  }
			} else {
			  echo "0 results";
			}
			?>
		</div>
	  </div>
		<!-- Add Pagination -->
	</div>
	  <br>
	  
<div id="breaking">Notice:</div>
<div id="newsTicker"><p><span class='story'>
<?php
                    

$sql = "SELECT * FROM `ntext` where id=1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo $row["scrolltext"];
  }
} else {
  echo "0 results";
}
?>
    
</span></p></div>
	  <!--
<div id="dhours">
		</div> -->
	<!-- CUSTOM JAVASCRIPT STYLESHEET -->
	<script src="javascript/main9696n.js"></script>

</body>

</html>