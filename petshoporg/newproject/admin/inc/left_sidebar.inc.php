
<?php 
	include('inc/connect.inc.php'); 
	@session_start();
	if(!isset($_SESSION["user_login1"]))	{
		header("Location:"."login.php");
	}
	
?>

<div class=" sidebar" role="navigation">
	<div class="navbar-collapse">
		<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
			<ul class="nav dd" id="side-menu">
				<li>
					<a href="edit_homepage.php" <?php if($pg_name=="edit_homepage.php"){echo 'class="active"';}?>><i class="fa fa-home nav_icon"></i>Homepage</a>
				</li>
				<li>
					<a href="edit_about.php" <?php if($pg_name=="edit_about.php"){echo 'class="active"';}?>><i class="fa fa-home nav_icon"></i>About Us</a>
				</li>
				<li>
					<a href="edit_adoption.php" <?php if($pg_name=="edit_adoption.php"){echo 'class="active"';}?>><i class="fa fa-home nav_icon"></i>About Adoption</a>
				</li>
				<li>
					<a href="edit_petservice.php" <?php if($pg_name=="edit_petservice.php"){echo 'class="active"';}?>><i class="fa fa-home nav_icon"></i>Pet Service</a>
				</li>
				<li>
					<a href="puppy_adoption.php" <?php if($pg_name=="puppy_adoption.php"){echo 'class="active"';}?>><i class="fa fa-home nav_icon"></i>Pet Rehoming</a>
				</li>
				<li>
					<a href="Adopter.php" <?php if($pg_name=="Adopter.php"){echo 'class="active"';}?>><i class="fa fa-home nav_icon"></i>Adopter</a>
				</li>
				<li>
					<a href="Foster.php" <?php if($pg_name=="Foster.php"){echo 'class="active"';}?>><i class="fa fa-home nav_icon"></i>Pet Owner</a>
				</li>
				<li>
					<a href="potential_adopter.php" <?php if($pg_name=="potential_adopter.php"){echo 'class="active"';}?>><i class="fa fa-home nav_icon"></i>Potential Adopter Request</a>
				</li>
				<li>
					<a href="#"><i class="fa fa-cogs nav_icon"></i>Appointment<span class="nav-badge"></span> <span class="fa arrow"></span></a>
					<ul class="nav nav-second-level collapse">
						<li>
							<a href="appointment.php" <?php if($pg_name=="appointment.php"){echo 'class="active"';}?>>Show Appointment</a>
						</li>
					</ul>
					
				</li>
				<li>
					<a href="#"><i class="fa fa-cogs nav_icon"></i>Lost &amp; Found<span class="nav-badge"></span> <span class="fa arrow"></span></a>
					<ul class="nav nav-second-level collapse">
						<li>
							<a href="admin_lost.php" <?php if($pg_name=="admin_lost.php"){echo 'class="active"';}?>>Lost Pet Reports</a>
						</li>
						<li>
							<a href="admin_found.php" <?php if($pg_name=="admin_found.php"){echo 'class="active"';}?>>Found Pet Reports</a>
						</li>
					</ul>
					
				</li>
				<li>
					<a href="password.php" <?php if($pg_name=="password.php"){echo 'class="active"';}?>><i class="fa fa-home nav_icon"></i>Change Password</a>
				</li>
			</ul>
			
		</nav>
	</div>
</div>