<?php

if(!$_POST) exit;

// Email address verification, do not edit.

if (!defined("PHP_EOL")) define("PHP_EOL", "\r\n");


$birthdate   = $_POST['birthdate'];
$user_name  = $_POST['user_name'];
$password = $_POST['password'];
$cpassword   = $_POST['cpassword'];



require_once "conn.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM regi where unm='$user_name' and bdate='$birthdate' ";
                    if($result = mysqli_query($con, $sql))
					{
                        if(mysqli_num_rows($result) == 1){
							
							$sql = "update `regi` set `paswd`='$password' where unm='$user_name' ";

							mysqli_query($con,$sql);
					
							?>
							<script type=text/javascript> alert('Passowrd updated Successfully ...'); 
							window.location ="Login.html";</script>
							<?php
							exit();
							}
						
						else
						{
							?>
							<script type=text/javascript>alert('Account not found');
							window.location ="newuser.html";</script>
							
							<?php
						}
					}
						?>