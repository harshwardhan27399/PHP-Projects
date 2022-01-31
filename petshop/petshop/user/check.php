


<html>

<body>

 

 

<?php

$con = mysqli_connect("localhost","root","root");

if (!$con)

  {

  die('Could not connect: ' . mysqli_error());

  }

 

mysqli_select_db($con ,"petshop" );

 

$sql="INSERT INTO checkout (firstname,lastname,email,address1,city,pincode,contactno)

VALUES

('$_POST[nm]','$_POST[lnm]','$_POST[email]','$_POST[address]','$_POST[city]','$_POST[pin]','$_POST[co]')";

 

if (!mysqli_query($con,$sql))

  {

  die('Error: ');

  }

echo "1 record added";

 

mysqli_close($con)

?>

</body>

</html>