<?php

if(!$_POST) exit;

// Email address verification, do not edit.

if (!defined("PHP_EOL")) define("PHP_EOL", "\r\n");

$first_name     = $_POST['first_name'];
$last_name     = $_POST['last_name'];
$email    = $_POST['email'];
$birthdate   = $_POST['birthdate'];
$user_name  = $_POST['user_name'];
$password = $_POST['password'];
$cpassword   = $_POST['cpassword'];

if(trim($first_name) == '') {
	echo '<div class="error_message">Attention! You must enter your name.</div>';
	exit();
}  else if(trim($email) == '') {
	echo '<div class="error_message">Attention! Please enter a valid email address.</div>';
	exit();
} 

require_once "conn.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM regi where unm='$user_name'";
                    if($result = mysqli_query($con, $sql))
					{
                        if(mysqli_num_rows($result) < 1){
							
							$sql = "INSERT INTO `regi`(`fname`, `lname`, `emailid`, `bdate`, `unm`, `paswd`) values ('$first_name','$last_name','$email','$birthdate','$user_name','$password')";

							mysqli_query($con,$sql);
					
							?>
							<script type=text/javascript> alert('User Registered Successfully ...'); 
							window.location ="Login.html";</script>
							<?php
							exit();
							}
						
						else
						{
							?>
							<script type=text/javascript>alert('Choose different Username');
							window.location ="newuser.html";</script>
							
							<?php
						}
					}
						?>