<!DOCTYPE html>
<html>
<head>
<title>File Upload</title>
</head>
<body>
<form action="upload.php" method="post" enctype="multipart/form-data">
<input type="file" name="file" /><br/>
Encryption Key :<input type="text" name="key" />

<button type="submit" name="upload">upload</button>
</form>
</body>
</html>

<a href="home.php">upload new files...</a>
<a href="retrieve.php">View Existing files...</a>
