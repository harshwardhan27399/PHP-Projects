<?php
	echo'<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
		<ul id="myTab" class="nav nav-tabs" role="tablist">							
			<li '.(($pg_name=="profile.php")? 'class="active"' : '').'>
				<a href="profile.php">Pet Profile</a>
			</li>';
			
			if(isset($_SESSION['user_id']) && $pg_name=="profile.php")	{
				echo '<li><a href="petadoption.php">Upload Pet</a></li>';
				echo '<li role="presentation" class="dropdown">
						<a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown" aria-controls="myTabDrop1-contents">My Account <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
						  <li><a href="change_pic.php" tabindex="-1" id="dropdown1-tab">Change Profile Picture</a></li>
						  <li><a href="change_pass.php" tabindex="-1" id="dropdown2-tab">Change Password</a></li>
						  <li><a href="edit_foster.php" tabindex="-1" id="dropdown2-tab">Edit Profile</a></li>
						</ul>
					  </li>';
				echo '<li><a href="inc/logout.php">Logout</a></li>';
			}
			else if(isset($_SESSION['user_id']) && $pg_name=="petadoption.php")	{
				echo '<li class="active"><a href="petadoption.php">Upload Pet</a></li>';
				echo '<li role="presentation" class="dropdown">
						<a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown" aria-controls="myTabDrop1-contents">My Account <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
						  <li><a href="change_pic.php" tabindex="-1" id="dropdown1-tab">Change Profile Picture</a></li>
						  <li><a href="change_pass.php" tabindex="-1" id="dropdown2-tab">Change Password</a></li>
						  <li><a href="edit_foster.php" tabindex="-1" id="dropdown2-tab">Edit Profile</a></li>
						</ul>
					  </li>';
				echo '<li><a href="inc/logout.php">Logout</a></li>';
			}
			else if(isset($_SESSION['user_id']) && ($pg_name=="change_pic.php" || $pg_name=="change_pass.php" || $pg_name=="edit_foster.php"))	{
				echo '<li><a href="petadoption.php">Upload Pet</a></li>';
				echo '<li class="active" role="presentation" class="dropdown">
						<a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown" aria-controls="myTabDrop1-contents">My Account <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
						  <li><a href="change_pic.php" tabindex="-1" id="dropdown1-tab">Change Profile Picture</a></li>
						  <li><a href="change_pass.php" tabindex="-1" id="dropdown2-tab">Change Password</a></li>
						  <li><a href="edit_foster.php" tabindex="-1" id="dropdown2-tab">Edit Profile</a></li>
						</ul>
					  </li>';
				echo '<li><a href="inc/logout.php">Logout</a></li>';
			}
			else if (!isset($_SESSION['user_id']) && ($pg_name=="profile.php"))	{
				echo '<li>
					<a href="login.php">Pet Owner Login</a>
					</li>';
					echo '<li>
					<!--a href="potential_adopter.php">Potential Adopter Registration</a-->
					</li>';
			}
			
			else if (($pg_name=="foster_registration.php" || $pg_name=="login.php"))	{
				echo '<li class="active">
					<a href="login.php">Pet Owner Login</a>
					</li>';
					echo '<li>
					<!--a href="potential_adopter.php">Potential Adopter Registration</a-->
					</li>';
			}
			else if (!isset($_SESSION['user_id']) && ($pg_name=="adopter_registration.php"))	{
				echo '<li>
					<a href="login.php">Pet Owner Login</a>
					</li>';
					echo '<li>
					<!--a href="potential_adopter.php">Potential Adopter Registration</a-->
					</li>';
			}
			else if (!isset($_SESSION['user_id']) && ($pg_name=="potential_adopter.php"))	{
				echo '<li>
					<a href="login.php">Pet Owner Login</a>
					</li>';
					echo '<li class="active">
					<!--a href="potential_adopter.php">Potential Adopter Registration</a-->
					</li>';
			}
			echo '<!--li>
				<a href="adopter_registration.php">Adopter Registration</a>
			</li-->
			<!--li>
				<a href="foster_registration.php">Pet Owner Registration</a>
			</li-->
			<!--li class="active">
				<a href="petadoption.php" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Profile</a>
			</li-->
		</ul>
	</div>';
?>