
     
<?php

include "header.php";
include "menu.php";
 	$link=mysqli_connect("localhost","root","");
	 mysqli_select_db($link,"shopopet");

?>
   <div class="grid_10">
            <div class="box round first">
                <h2>
                   Add Product</h2>
                <div class="block">
						<form method="post" action="" enctype="multipart/form-data">		   
						<h3 class="bars">Nearby Veterinarian Form</h3>
						<div class="input-group">
							<h5 class="input-group-addon" id="basic-addon1">Shop Name:&nbsp;&nbsp;&nbsp;</h5>
							<input type="text" name="vetname" class="clr_plc form-control" onkeypress="valChar(event)" value="<?php if(!empty($petname)) echo$petname; ?>" aria-describedby="basic-addon1" required="required"> 
						</div>
						<div class="input-group">
							<h5 class="input-group-addon" id="basic-addon1">Phone No.:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
							<input type="text" name="phoneno" class="clr_plc form-control" onkeypress="valNum(event)" value="<?php if(!empty($petbreed)) echo$petbreed; ?>" required="" aria-describedby="basic-addon1">
						</div>
						<div class="input-group">
							<h5 class="input-group-addon" id="basic-addon1">Time:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
							<input type="text" name="time" class="clr_plc form-control" value="<?php if(!empty($petcolour)) echo$petcolour; ?>" required="" aria-describedby="basic-addon1">
						</div>
						<div class="input-group">
							<h5 class="input-group-addon" id="basic-addon1">Address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
							<input type="text" name="addr" class="clr_plc form-control" value="<?php if(!empty($age)) echo$age;?>" required="" aria-describedby="basic-addon1">
						</div>
						<div class="input-group">
							<h5 class="input-group-addon" id="basic-addon1">Destination:&nbsp;&nbsp;&nbsp;&nbsp;</h5>
							<input type="text" name="dest" class="clr_plc form-control" onkeypress="valChar(event);" value="<?php if(!empty($age)) echo$age;?>" required="" aria-describedby="basic-addon1">
						</div>
						<div class="input-group">
							<h5 class="input-group-addon" id="basic-addon1">User Name:&nbsp;&nbsp;&nbsp;&nbsp;</h5>
							<input type="text" id="username" name="username" placeholder="" class="input-xlarge">
			      
							</div>
						<div class="input-group">
							<h5 class="input-group-addon" id="basic-addon1">Email:&nbsp;&nbsp;&nbsp;&nbsp;</h5>
								<input type="text" id="password" name="password" placeholder="" class="input-xlarge">
			     
							</div>
						<div class="input-group">
							<h5 class="input-group-addon" id="basic-addon1">Password:&nbsp;&nbsp;&nbsp;&nbsp;</h5>
							 <input type="password" id="password" name="email" placeholder="" class="input-xlarge">
				   
							</div>

			     
				   
				 
			    </div>
  						<br/><br/>
						<center>

							<div class="btn grid_3 grid_5 wow fadeInRight animated" data-wow-delay=".5s">
								<h2 class="t-button">
							<span class="labelapp label label-success"><input type="submit" name="submit1" class="btn_succ" value="Submit" id="submit" /></span></h2>
							</div>
						</center>
	
	<br/>
					
				</div>
			</div>
			        </form>
	
                    

<?php
// php insert

if(isset($_POST['submit1']))
{


    $sql = "INSERT INTO vetnear VALUES ('".$_POST["vetname"]."','".$_POST["phoneno"]."','".$_POST["time"]."','".$_POST["addr"]."','".$_POST["dest"]."')";
	
mysqli_query($link,$sql);
?>



<script type=text/javascript>
alert('1 record add go back to add another !');
</script>
<?php
}
           
if(isset($_POST['submit1']))
{

    $sql = "INSERT INTO veterinarylogin (username,password,email)
   VALUES ('".$_POST["username"]."','".$_POST["email"]."','".$_POST["password"]."')";

mysqli_query($link,$sql);
}
?>					
					
                </div>
            </div>
<?php
include "footer.php";  
  
?>         
     






