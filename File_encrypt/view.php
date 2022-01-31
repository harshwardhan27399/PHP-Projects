<?php
include_once 'database.php';
if(isset($_POST['view'])) {   
    $enc_key = $_POST["key"];
    $file_name = $_POST["file_name"];
   // echo $enc_key;
   // echo $file_name;

    
    $handle = fopen($file_name, "r");
    $contents = fread($handle, filesize($file_name));
    //echo $contents;
    $decryptedData = decryptData($contents, $enc_key);
    echo $decryptedData . "<br>"; 
}

function decryptData($data, $key) {
    $encryption_key = base64_decode($key);
    list($encrypted_data, $iv) = explode('::', base64_decode($data), 2);
    return openssl_decrypt($encrypted_data, 'aes-256-cbc', $encryption_key, 0, $iv);
}



?>

<a href="home.php">upload new files...</a>
<a href="retrieve.php">View Existing files...</a>