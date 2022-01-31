<?php
session_start();
if(!isset($_SESSION['email']))
{
    echo "You are not logged in";
}
else{
include('connection.php');

if(isset($_POST['delete_blend']))
{
    $batch_name = $_POST['batch_name'];
    //echo $batch_name;
    
    $sql = "delete from show_data where batch_name='$batch_name' ";
    $result = mysqli_query($conn,$sql);
    if($result){
        ?>
        <script>
            alert("Successfully deleted <?php echo $batch_name ?> ");
            window.location.href = "del_blend_list.php"
        </script>
        <?php
    }
}
}


?>