<!--
create table rating (
name varchar(50),
feedback varchar(200),
rating INT);
-->
<!DOCTYPE html>
<html lang="en">

    <!-- Bootstrap CSS -->
       <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">  
    <!-- Custom CSS -->
   
  
<style>
			
div.stars {
  width: 270px;
  display: inline-block;
}

input.star { display: none; }

label.star {
  float: right;
  padding: 10px;
  font-size: 36px;
  color: #444;
  transition: all .2s;
}

input.star:checked ~ label.star:before {
  content: '\f005';
  color: #FD4;
  transition: all .25s;
}

input.star-5:checked ~ label.star:before {
  color: #FE7;
  text-shadow: 0 0 20px #952;
}

input.star-1:checked ~ label.star:before { color: #F62; }

label.star:hover { transform: rotate(-15deg) scale(1.3); }

label.star:before {
  content: '\f006';
  font-family: FontAwesome;
}
			</style>
			
</head>
<body>


   	<div class="page-head">
				<div class="container">
					<h3></h3>
				</div>
			</div>
			<div class="typrography11">
				<div class="container">	
					<div class="grid_3 grid_5 wow fadeInLeft animated" data-wow-delay=".5s">
				
        <div class="stars" style="margin-left:35%;">
 <form action="" method="POST">
	<!--h3 class="bars">Feedback</h3-->
	<h3 class="bars" >Name</h3>
      <textarea rows="1" cols="50" id="name1" name="name1"></textarea>
	<h3 class="bars" >Feedback</h3>
      <textarea rows="5" cols="50" id="feedback" name="feedback"></textarea>
	<br />
	<br />
	<h3 class="bars" >Rate us</h3>
    <input class="star star-5" id="star-5" type="radio" name="star" value="5"/>
    <label class="star star-5" for="star-5"></label>
    <input class="star star-4" id="star-4" type="radio" name="star" value="4"/>
    <label class="star star-4" for="star-4"></label>
    <input class="star star-3" id="star-3" type="radio" name="star" value="3"/>
    <label class="star star-3" for="star-3"></label>
    <input class="star star-2" id="star-2" type="radio" name="star" value="2"/>
    <label class="star star-2" for="star-2"></label>
    <input class="star star-1" id="star-1" type="radio" name="star" value="1"/>
    <label class="star star-1" for="star-1"></label>
	<br />
	<br />
	<br />
	<br />
	 <div class="control-group">
		<div class="controls" style="margin-left:50%;">
			<input type="submit" class="btn btn-success" value="Submit" name="submit1">
		</div>
		</div>
  </form>
</div>


<?php
if(isset($_POST['submit1']))
{
	include_once('conn.php');

    $sql = "INSERT INTO rating (name,feedback,rating)
   VALUES ('".$_POST["name1"]."','".$_POST["feedback"]."','".$_POST["star"]."')";

mysqli_query($con,$sql);
?>
<script type=text/javascript>
alert('Thank you for your valuable Feedback ...');
window.location ="index.html";
</script>
<?php

exit();

}?>

					
					</div>		
					<div class="clearfix"></div>
				</div>
			</div>
			

</body>
</html>
