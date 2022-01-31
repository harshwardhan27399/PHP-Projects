    <?php
 	$link=mysqli_connect("localhost","root","");
	 mysqli_select_db($link,"shopopet");
?>
      
     
<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row">
		<div class="span12">
			<form class="form-horizontal" action="" method="POST">
			  <fieldset>    
			    <div id="legend">
			      <legend class=""> Veterinary Signup</legend>
			    </div>
			    <div class="control-group">
			      <!-- Username -->
			      <label class="control-label"  for="username">Username</label>
			      <div class="controls">
			        <input type="text" id="username" name="username" placeholder="" class="input-xlarge">
			      </div>
                </div>
                <div class="control-group">
			      <!-- Password-->
			      <label class="control-label" for="password">Email</label>
			      <div class="controls">
			        <input type="text" id="password" name="password" placeholder="" class="input-xlarge">
			      </div>
			    </div>
			 
			    <div class="control-group">
			      <!-- Password-->
			      <label class="control-label" for="password">Password</label>
			      <div class="controls">
			        <input type="password" id="password" name="email" placeholder="" class="input-xlarge">
			      </div>
			    </div>
             
             
                <div class="control-group">
			      <!-- Button -->
			      <div class="controls">
			        <input type="submit" class="btn btn-success" value="login" name="submit1">
                     <h6>CLick here to </h6><a href="veterinarysignup.php">Veterinary signup </a> 
            
                </div>
			    </div>
			  </fieldset>
            </form>
                 
		</div>
	</div>
</div>

<?php
if(isset($_POST['submit1']))
{

    $sql = "INSERT INTO veterinarylogin (username,password,email)
   VALUES ('".$_POST["username"]."','".$_POST["email"]."','".$_POST["password"]."')";

mysqli_query($link,$sql);
?>


<script type=text/javascript>
alert(' You  have successfully Signup ...');
window.location ="veterinary.php";
</script>
<?php
}
?>