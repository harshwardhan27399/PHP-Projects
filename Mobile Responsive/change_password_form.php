<?php 
session_start();

if(!isset($_SESSION['email']))
{
     ?>
        <script>
            alert("Please Login");
            window.location.href='index.html';
        </script>
        <?php
}
   else{
       include('connection.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
          <link rel="stylesheet" type="text/css" href="css/util.css">
             <link rel="stylesheet" type="text/css" href="css/change_password.css">
             <script>
                function  password_check(){
                    var new_pass = document.getElementById("new_password").value;
                    var confirm_pass = document.getElementById("con_new_password").value;
                    
                    if(new_pass != confirm_pass){
                        alert("Passwords not match");
                        return false;
                    }
                    else {
                        return true;
                    }
                   
                }
                 
             </script>
    </head>
    <body>

<div class="limiter">
                    <div class="container-login100">
                        <div class="wrap-login100">
                                <span class="login100-form-title">
                                        Change Password
                                     </span>
                                    
                            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" onsubmit="return password_check()" >
                                <input type="hidden" name="email" value="<%=email %>">
                                <div class="table-div">
                                    <table style="margin-left: 120px;">
                                <tr>
                                    <td><div class="wrap-input100">
                                       Enter Old Password
                                    </div></td>
                                    <td> <div class="wrap-input100 validate-input" >
                                            <input class="input100" type="password" name="old_password" id="old_password" placeholder="Old Password" required="required">
                                            <span class="focus-input100"></span>
                                            
                                        </div></td>
                                </tr>
                                
                                <tr>
                                    <td><div class="wrap-input100">
                                       Enter New Password
                                    </div></td>
                                    <td> <div class="wrap-input100 validate-input" >
                                            <input class="input100" type="password" name="new_password" id="new_password" placeholder="New Password" required="required">
                                            <span class="focus-input100"></span>
                                            
                                        </div></td>
                                </tr>
                                <tr>
                                    <td><div class="wrap-input100">
                                       Confirm New Password
                                    </div></td>
                                    <td> <div class="wrap-input100 validate-input" >
                                            <input class="input100" type="password" name="con_new_password" id="con_new_password" placeholder="Confirm Password" required="required">
                                            <span class="focus-input100"></span>
                                            
                                        </div></td>
                                </tr>
                                        <tr>
                                                <td>
                                                        <div class="container-login100-form-btn">
                                                            <a style="text-decoration: none;background-color: #333945;" class="login100-form-btn" href="homepage.php">Home</a>
                                                        </div>
                                                    </td>
                                                <td>
                                                    <div class="container-login100-form-btn">
                                                        <button class="login100-form-btn" name="change_pass" type="submit"  >
                                                            Submit
                                                        </button>
                                                    </div>
                                                </td>
                                         
                                               
                                            </tr>
                              
                            </table>
                        </div>
 </form>

                            </div>
                            </div>
                            </div>



           
    </body>
    </html>
            


<?php 
if(isset($_POST['change_pass'])){

    
    $old_pass = $_POST['old_password'];
    $new_pass = $_POST['new_password'];
    $email = $_SESSION["email"];

    $sql = "select * from users where password='$old_pass' && email = '$email' ";
    $res=mysqli_query($conn,$sql);
            $num=mysqli_num_rows($res);
            if($num==0)
            {
               ?>
                <script>
                alert("Password Not Changed");
                window.location.href="change_password_form.php";
                </script>
                <?php
            }
            else {

                $query = "update users set password = '$new_pass' where password='$old_pass' && email = '$email'";
                $data = mysqli_query($conn,$query);
                if($data){
                    ?>
                <script>
                alert("Password Changed");
                window.location.href="homepage.php";
                </script>
                <?php
                }
                else {
                    ?>
                <script>
                alert("Password Not Changed");
                window.location.href="change_password_form.php";
                </script>
                <?php
                }


            }
}

}
?>