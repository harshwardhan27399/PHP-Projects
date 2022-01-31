$username= "";
$email="";
$errors=array();

$db=mysqli_connect('localhost','root','','registration');
if(isset($POST["register"]))
{
$username=mysqli_real_escape_string($_POST["username"]);
$email=mysqli_real_escape_string($_POST["email"]);
$password_1=mysqli_real_escape_string($_POST["password_1"]);
$password_2=mysqli_real_escape_string($_POST["password_2"]);

if(empty($username))
{
array_push($errors,"username is required");
}
if(empty($email))
{
array_push($errors,"email is required");
}
if(empty($password_1))
{
array_push($errors,"password is required");
}
if($password_1!=$password_2)
{
array_push($error,"password doesnt match");
}
if(count($errors)==0)
{
	$password=md5($password_1);
	$sql="INSERT INTO users(username,email,password)
	VALUES('$username','$email','$password')";
	mysqli_query($db,$sql);
}
}