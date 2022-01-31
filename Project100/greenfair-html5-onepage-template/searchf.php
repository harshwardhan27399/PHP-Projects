<?php echo $_POST["name"]?>

<?php

 include_once 'database.php';
		
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
  
$sql = "SELECT fname FROM uploadsfile WHERE filenm='$_POST["name"]'"; 
if($res = mysqli_query($conn, $sql)){ 
    if(mysqli_num_rows($res) > 0){ 
        while($row = mysqli_fetch_array($res)){ 
		$row['Firstname']
            
        } 
      
        mysqli_free_result($res); 
    } else{ 
        echo "No Matching records are found."; 
    } 
} else{ 
    echo "ERROR: Could not able to execute $sql. ". mysqli_error($conn); 
} 
  
mysqli_close($conn); 
?> 
