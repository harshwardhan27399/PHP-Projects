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
    ?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
         <!--===============================================================================================-->	
     <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
     <!--===============================================================================================-->
         
     <!--===============================================================================================-->
         <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
     <!--===============================================================================================-->
         
     <!--===============================================================================================-->
         <link rel="stylesheet" type="text/css" href="css/util.css">
         <link rel="stylesheet" type="text/css" href="css/main_insert.css">
     <!--===============================================================================================-->
    </head>
    <body>
       
        <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
    
    
                <form class="login100-form validate-form" action="show_other_blends.php" method="post">
    
                    <span class="login100-form-title">
                        Select Date
                    </span>
                    <div class="table-div">
                        <table>
                            <tr>
                                <td>Start Date</td>
                                <td>
                                    <div class="wrap-input100 validate-input">
                                        <input class="input100" type="date" name="d1" placeholder="Date">
                                        <span class="focus-input100"></span>
    
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>End Date</td>
                                <td>
                                    <div class="wrap-input100 validate-input">
                                        <input class="input100" type="date" name="d2" placeholder="Date">
                                        <span class="focus-input100"></span>
    
                                    </div>
                                </td>
                            </tr>
    
                            <tr>
                                <td>
                                    <div class="container-login100-form-btn">
                                        <a style="text-decoration: none;background-color: #333945;" class="login100-form-btn" href="homepage.php">Home</a>
                                    </div>
                                </td>
                                <td>
                                    <div class="container-login100-form-btn">
                                        <button class="login100-form-btn" name="show_other_blends" type="submit">
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
<?php } ?>