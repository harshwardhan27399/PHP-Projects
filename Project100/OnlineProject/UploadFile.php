
<?php
session_start(); 
$message = ".";
$fnm=basename( $_FILES["fileToUpload"]["name"]);
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$_SESSION["file"] = $target_file;
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        $message = "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        $message = "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    $message = "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    $message = "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "txt") {
    $message = "Sorry, only TXT files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    $message1 = $message."Sorry, your file was not uploaded.";
	echo "<script type='text/javascript'>alert('$message1');</script>";
	echo "<script type='text/javascript'>window.location.href = 'index.php';</script>";
		//header("Refresh: 1; url=index.php");
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
         include_once 'database.php';
		$sql = "INSERT INTO uploadsfile (fname,filenm) VALUES ('$target_file','$fnm')";
			if (mysqli_query($conn, $sql)) 
			{
				$message = "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
				echo "<script type='text/javascript'>alert('$message');</script>";
			} 
			else 
			{
				$message = "File not uploaded.";;
				echo "<script type='text/javascript'>alert('$message');</script>";
			}
			mysqli_close($conn);
		echo "<script type='text/javascript'>window.location.href = 'index.php';</script>";
	
        //header("Refresh: 3; url=index.php");
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}


?>
