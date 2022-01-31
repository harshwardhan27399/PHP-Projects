<?php

if(!$_POST) exit;

// Email address verification, do not edit.

if (!defined("PHP_EOL")) define("PHP_EOL", "\r\n");


$user_name  = $_POST['user_name'];
$password = $_POST['password'];


require_once "conn.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM regi where unm='$user_name' and paswd= '$password' ";
                    if($result = mysqli_query($con, $sql))
					{
                        if(mysqli_num_rows($result) == 1)
						{	
							$userid="";
							$row = mysqli_fetch_array($result);
								$userid=$row[6];
							session_start();
							$_SESSION["uid"] =$userid;
							?>
							<script type=text/javascript> alert('Login Successful...'); 
							window.location ="mygame.php";</script>
							<?php
							exit();
							}
						else
						{
							?>
							<script type=text/javascript>alert('Username or Password is Incorrect');
							window.location ="Login.html";</script>
							<?php
						}
					}
						?>