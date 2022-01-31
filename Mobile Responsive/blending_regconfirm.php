<?php 
include('connection.php');
session_start();
if(isset($_POST['blending'])){
    $email = $_SESSION["email"] ;
    $password = $_POST['password'];
    $brand = $_POST['brand'];
   // echo "$password";
    //echo "$brand";

    $access = "";

    $query = "select access from users where password='$password' and email='$email' ";
     $res=mysqli_query($conn,$query);
            $num=mysqli_num_rows($res);
            if($num==0)
            {
                echo "No user found";
            }
            else {
                  $row=mysqli_fetch_assoc($res);
                $access = $row['access'];
            }

        }

          if($access != "yes"){
            header('Location:homepage.php');
          }
          else {
		  
		  header("Location:blending_section.php?brand=".$brand."");
		  
		  }
		  
		  ?>