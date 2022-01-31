<?php
// Include config file
// Define variables and initialize with empty values
$name = $address = $salary = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate name
   $cc = trim($_POST["cc"]);
   $os2 = trim($_POST["os2"]);
   $oomd = trim($_POST["oomd"]);
   $dbe = trim($_POST["dbe"]);
   $ee = trim($_POST["ee"]);
   $oomdlab = trim($_POST["oomdlab"]);
   $dbelab = trim($_POST["dbelab"]);
   $aplab = trim($_POST["aplab"]);
   $mp = trim($_POST["mp"]);
   
	if ($cc < 100  && $cc > 89 )
	{
		$cc=10;
	}
	else if ($cc < 90  && $cc > 79 )
	{
		$cc=9;
	}
	else if ($cc < 80  && $cc > 69 )
	{
		$cc=8;
	}
	else if ($cc < 70  && $cc > 59 )
	{
		$cc=7;
	}
	else if ($cc < 60  && $cc > 49 )
	{
		$cc=6;
	}
	else if ($cc < 50  && $cc > 44 )
	{
		$cc=5;
	}
	else if ($cc < 45  && $cc > 39 )
	{
		$cc=4;
	}
	else
	{
		$cc=0;
	}
	
	if ($os2 < 100  && $os2 > 89 )
	{
		$os2=10;
	}
	else if ($os2 < 90  && $os2 > 79 )
	{
		$os2=9;
	}
	else if ($os2 < 80  && $os2 > 69 )
	{
		$os2=8;
	}
	else if ($os2 < 70  && $os2 > 59 )
	{
		$os2=7;
	}
	else if ($os2 < 60  && $os2 > 49 )
	{
		$os2=6;
	}
	else if ($os2 < 50  && $os2 > 44 )
	{
		$os2=5;
	}
	else if ($os2 < 45  && $os2 > 39 )
	{
		$os2=4;
	}
	else
	{
		$os2=0;
	}
	
	if ($oomd < 100  && $oomd > 89 )
	{
		$oomd=10;
	}
	else if ($oomd < 90  && $oomd > 79 )
	{
		$oomd=9;
	}
	else if ($oomd < 80  && $oomd > 69 )
	{
		$oomd=8;
	}
	else if ($oomd < 70  && $oomd > 59 )
	{
		$oomd=7;
	}
	else if ($oomd < 60  && $oomd > 49 )
	{
		$oomd=6;
	}
	else if ($oomd < 50  && $oomd > 44 )
	{
		$oomd=5;
	}
	else if ($oomd < 45  && $oomd > 39 )
	{
		$oomd=4;
	}
	else
	{
		$oomd=0;
	}
	
	if ($dbe < 100  && $dbe > 89 )
	{
		$dbe=10;
	}
	else if ($dbe < 90  && $dbe > 79 )
	{
		$dbe=9;
	}
	else if ($dbe < 80  && $dbe > 69 )
	{
		$dbe=8;
	}
	else if ($dbe < 70  && $dbe > 59 )
	{
		$dbe=7;
	}
	else if ($dbe < 60  && $dbe > 49 )
	{
		$dbe=6;
	}
	else if ($dbe < 50  && $dbe > 44 )
	{
		$dbe=5;
	}
	else if ($dbe < 45  && $dbe > 39 )
	{
		$dbe=4;
	}
	else
	{
		$dbe=0;
	}
	
	if ($ee < 100  && $ee > 89 )
	{
		$ee=10;
	}
	else if ($ee < 90  && $ee > 79 )
	{
		$ee=9;
	}
	else if ($ee < 80  && $ee > 69 )
	{
		$ee=8;
	}
	else if ($ee < 70  && $ee > 59 )
	{
		$ee=7;
	}
	else if ($ee < 60  && $ee > 49 )
	{
		$ee=6;
	}
	else if ($ee < 50  && $ee > 44 )
	{
		$ee=5;
	}
	else if ($ee < 45  && $ee > 39 )
	{
		$ee=4;
	}
	else
	{
		$ee=0;
	}
	
	if ($oomdlab < 100  && $oomdlab > 89 )
	{
		$oomdlab=10;
	}
	else if ($oomdlab < 90  && $oomdlab > 79 )
	{
		$oomdlab=9;
	}
	else if ($oomdlab < 80  && $oomdlab > 69 )
	{
		$oomdlab=8;
	}
	else if ($oomdlab < 70  && $oomdlab > 59 )
	{
		$oomdlab=7;
	}
	else if ($oomdlab < 60  && $oomdlab > 49 )
	{
		$oomdlab=6;
	}
	else if ($oomdlab < 50  && $oomdlab > 44 )
	{
		$oomdlab=5;
	}
	else if ($oomdlab < 45  && $oomdlab > 39 )
	{
		$oomdlab=4;
	}
	else
	{
		$oomdlab=0;
	}
	
	if ($dbelab < 100  && $dbelab > 89 )
	{
		$dbelab=10;
	}
	else if ($dbelab < 90  && $dbelab > 79 )
	{
		$dbelab=9;
	}
	else if ($dbelab < 80  && $dbelab > 69 )
	{
		$dbelab=8;
	}
	else if ($dbelab < 70  && $dbelab > 59 )
	{
		$dbelab=7;
	}
	else if ($dbelab < 60  && $dbelab > 49 )
	{
		$dbelab=6;
	}
	else if ($dbelab < 50  && $dbelab > 44 )
	{
		$dbelab=5;
	}
	else if ($dbelab < 45  && $dbelab > 39 )
	{
		$dbelab=4;
	}
	else
	{
		$dbelab=0;
	}
	
	if ($aplab < 100  && $aplab > 89 )
	{
		$aplab=10;
	}
	else if ($aplab < 90  && $aplab > 79 )
	{
		$aplab=9;
	}
	else if ($aplab < 80  && $aplab > 69 )
	{
		$aplab=8;
	}
	else if ($aplab < 70  && $aplab > 59 )
	{
		$aplab=7;
	}
	else if ($aplab < 60  && $aplab > 49 )
	{
		$aplab=6;
	}
	else if ($aplab < 50  && $aplab > 44 )
	{
		$aplab=5;
	}
	else if ($aplab < 45  && $aplab > 39 )
	{
		$aplab=4;
	}
	else
	{
		$aplab=0;
	}
	
	if ($mp < 100  && $mp > 89 )
	{
		$mp=10;
	}
	else if ($mp < 90  && $mp > 79 )
	{
		$mp=9;
	}
	else if ($mp < 80  && $mp > 69 )
	{
		$mp=8;
	}
	else if ($mp < 70  && $mp > 59 )
	{
		$mp=7;
	}
	else if ($mp < 60  && $mp > 49 )
	{
		$mp=6;
	}
	else if ($mp < 50  && $mp > 44 )
	{
		$mp=5;
	}
	else if ($mp < 45  && $mp > 39 )
	{
		$mp=4;
	}
	else
	{
		$mp=0;
	}
	
	$total = $cc * 4 + $os2 * 4 + $oomd * 4 + $dbe * 4 + $ee * 3 + $oomdlab + $dbelab + $aplab * 3 + $mp ;
	$ptr=$total/25;
	$preview= "Pointer : " . $ptr . "!";
	$totalp= "Total Credits : " . $total . "!";
	echo " <script type='text/javascript'>alert(\"$totalp $preview\");</script>";
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Check Your Pointer Here</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Pointer Calculater</h2>
                    </div>
                    <p>Please fill this form to check the pointer.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
						
						<div class="form-group  ">
                            <label>Compiler Construction</label>
                            <input type="number" name="cc" required class="form-control" >
                            <span class="help-block"> </span>
                        </div>
						<div class="form-group  ">
                            <label>Operating System II</label>
                            <input type="number" name="os2" required class="form-control" >
                            <span class="help-block"> </span>
                        </div>

						<div class="form-group  ">
                            <label>Object Oriented Modelling and Design</label>
                            <input type="number" name="oomd" required class="form-control" >
                            <span class="help-block"> </span>
                        </div>
						
						<div class="form-group  ">
                            <label>Database Engineering</label>
                            <input type="number" name="dbe" required class="form-control" >
                            <span class="help-block"> </span>
                        </div>

						<div class="form-group  ">
                            <label>Engineering  Economics</label>
                            <input type="number" name="ee" required class="form-control" >
                            <span class="help-block"> </span>
                        </div>

						<div class="form-group  ">
                            <label>OOMD LAB</label>
                            <input type="number" name="oomdlab" required class="form-control" >
                            <span class="help-block"> </span>
                        </div>

						<div class="form-group  ">
                            <label>DBE LAB</label>
                            <input type="number" name="dbelab" required class="form-control" >
                            <span class="help-block"> </span>
                        </div>
						
						<div class="form-group  ">
                            <label>AP LAB</label>
                            <input type="number" name="aplab" required class="form-control" >
                            <span class="help-block"> </span>
                        </div>
						
						<div class="form-group  ">
                            <label>Mini Project</label>
                            <input type="number" name="mp" required class="form-control" >
                            <span class="help-block"> </span>
                        </div>


                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>