<?php									// admin login credentials below...
	include('inc/connect.inc.php');   // username : petclinic12 
									  // password  : password
?>
<?php
	  @$url = "edit_homepage.php";
	  $err1 = "";
	@session_start();
	if(isset($_SESSION['user_id1']))	{
		header("Location:".$url);
	}
	$log = @$_POST['log'];
	$reg = @$_POST['reg'];
	
	if($log)	{
		if(isset($_POST["user_login"]) && isset($_POST["pass_login"]))	{
			$user_login = mysqli_real_escape_string($dbc, trim($_POST['user_login']));
			$pass_login = mysqli_real_escape_string($dbc, trim($_POST['pass_login']));
			$pass_login_md5=md5($pass_login);
			$query = mysqli_query($dbc, "SELECT user_id,username FROM user WHERE username='$user_login' AND password='$pass_login_md5' LIMIT 1") or die('error');
			$user_count = mysqli_num_rows($query);
			if($user_count == 1)	{
				while($row = mysqli_fetch_array($query))	{
					
					$user_id = $row['user_id'];
					$username = $row['username'];
				}
				@session_start();
				$_SESSION['user_id1'] = $user_id;
				$_SESSION['user_login1'] = $username;
				mysqli_close($dbc);
				header("Location:".$url);
				exit();
			}
			else	{
				$err1 =  "Please enter valid Username and Password.";
				
			}
		}
	}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Real Care Pet: Admin Login</title>

<link href="css/style1.css" rel="stylesheet" type="text/css" media="all"/>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="" />

</head>
<body>
<!--login form start here-->	
<h1>Admin Panel</h1>
<div class="login">
	<?php
		echo $err1;
	?>
	<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
	<input type="text" name="user_login" value="Username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'User Name';}"/>
	<input type="password" name="pass_login" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'User Name';}"/><br/><br/>
	<label  class="hvr-sweep-to-bottom">
	<input type="submit" value="Login" name="log"/>
	
	</label>
	</form>
	
	<p>username : petclinic12</p>
	<p>pass : password</p>
</div>
<div class="copyright">
	<p><a href="#" target="_blank"> RealCarePet </a></p>
</div>	
<!--login form end here-->
</body>
</html>