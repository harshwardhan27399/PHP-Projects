<?php
include_once 'database.php';
if(isset($_POST['upload'])) {   
    $enc_key = $_POST["key"];
    $file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
    $folder="upload/"; 
    
    $handle = fopen($file_loc, "r");
    $contents = fread($handle, filesize($file_loc));
        
    $EncryptedData=encryptData($enc_key,$contents);

    /* make file name in lower case */
    $new_file_name = strtolower($file);
    /* make file name in lower case */
    
    $final_file=str_replace(' ','-',$new_file_name);
    
    if(move_uploaded_file($file_loc,$folder.$final_file))
    {
        file_put_contents($folder.$final_file, $EncryptedData);
        $sql="INSERT INTO file_saver(file_name) VALUES('$final_file')";
        mysqli_query($conn,$sql);
        echo "File sucessfully upload";  
    }
    else
    {
        echo "Error.Please try again";
    }
}


function encryptData( $key,$data) {
    $encryption_key = base64_decode($key);
    $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc'));
    $encrypted = openssl_encrypt($data, 'aes-256-cbc', $encryption_key, 0, $iv);
    return base64_encode($encrypted . '::' . $iv);
}


?>

<a href="home.php">upload new files...</a>
<a href="retrieve.php">View Existing files...</a>