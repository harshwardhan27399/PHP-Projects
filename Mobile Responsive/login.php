<?php
session_start();
ob_start();
include('connection.php');

if(isset($_POST['submit']))
{
    $email=$_POST['email'];
    $pass=$_POST['pass'];

    
    if(!$email || !$pass)
    {
        echo "Please fill username and password";
    }
    else {
       
        
            $sql="select count(*) as count from users where email='".$email."' and password='".$pass."'";
            $res=mysqli_query($conn,$sql);
            $num=mysqli_num_rows($res);
            if($num==0)
            {
                echo "No user found";
            }
            else {
                $row=mysqli_fetch_assoc($res);

                if($row['count'] > 0){
                    echo "match found";
                    $_SESSION["email"] = $email;
                    //echo $_SESSION["email"];
                    header("Location:homepage.php");
                    ob_end_flush();
                }
            }
        }
    }
