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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <!--===============================================================================================-->
        
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
        
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="css/util.css">
        <link rel="stylesheet" type="text/css" href="css/main_home.css">
    <title>Homepage</title>
</head>
<body>
   
 <div class="limiter">
                    <div class="container-login100">
                            
                        <div class="wrap-login100">
                    <span class="login100-form-title" style="margin-left: 50px; font-size: 35px;" >
                                    Gadre Tea Company
                                    <span ><form>
                                            <button class="logoutbtn button5" style="font-size: 20px;" formaction="logout.php">Logout</button></form> </span>
                                     
                                </span>
                            
                           
                                <div class="table-div">
                            
                                <div class="resp-button">
                                <form class="login100-form validate-form" action="ctc_form.php">
                                    <div class="container-login100-form-btn">
                                        <button style="background-color: #993333" class="login100-form-btn" id="ortho-btn" >
                                             CTC Entry
                                        </button>
                                         </div>
                                    </form>
                                </div>
                                           
                                    <div class="resp-button">
                                            <form class="login100-form validate-form" action="show_blends_date.php">
                                                <div class="container-login100-form-btn">
                                                        <button class="login100-form-btn" >
                                                          Blend Sheets
                                                        </button>
                                                    </div>
                                                </form>
                                         </div>        
                                 <div class="resp-button">
                                          <form class="login100-form validate-form" action="create_brand.php">
                                            <div class="container-login100-form-btn">
                                                    <button class="login100-form-btn" >
                                                        Create / Delete Brand 
                                                    </button>
                                                </div>
                                            </form>
                                            
                                           
                                          
                                          
                                   </div>        
                                 <div class="resp-button">
                                                    <form class="login100-form validate-form" action="orthodox_form.php">
                                                            <div class="container-login100-form-btn">
                                                                    <button style="background-color: #993333" class="login100-form-btn" id="ortho-btn" >
                                                                        Orthodox Entry
                                                                    </button>
                                                                </div>
                                                            </form>
                                            </div>        
                                 <div class="resp-button">
                                                <form class="login100-form validate-form" action="show_other_date.php">
                                                        <div class="container-login100-form-btn">
                                                                <button class="login100-form-btn" >
                                                                   Other Blends 
                                                                </button>
                                                            </div>
                                                        </form>
                                          </div>        
                                 <div class="resp-button">
                                                <form class="login100-form validate-form" action="Blending.php">
                                                        <div class="container-login100-form-btn">
                                                                <button style="background-color: #993333" class="login100-form-btn" id="blending-btn" >
                                                                    Blending
                                                                </button>
                                                            </div>
                                                        </form>
                                      
                                                 </div>        
                                 <div class="resp-button">    
                                     <form class="login100-form validate-form" action="inventory_date.php">
                                                            <div class="container-login100-form-btn">
                                                                    <button class="login100-form-btn" >
                                                                    Inventory
                                                                    </button>
                                                                </div>
                                                            </form>
                                            </div>        
                                 <div class="resp-button">
                                            <form class="login100-form validate-form" action="show_finished_date.php">
                                                <div class="container-login100-form-btn">
                                                        <button class="login100-form-btn" >
                                                            Finished Stock
                                                        </button>
                                                    </div>
                                                </form>
                                         </div>        
                                 <div class="resp-button">
                                            <form class="login100-form validate-form" action="change_password_form.php">
                                                <div class="container-login100-form-btn">
                                                        <button class="login100-form-btn" >
                                                            Change Password
                                                        </button>
                                                    </div>
                                                </form>
                                     </div>
                                     <div class="resp-button">
                                            <form class="login100-form validate-form" action="dust_buttons_graphs.php">
                                                <div class="container-login100-form-btn">
                                                        <button class="login100-form-btn" name="bar_graph" >
                                                            Purchase Assistance
                                                        </button>
                                                    </div>
                                                </form>
                                     </div>
                                     
                                         
                            </div>  
            
                        </div>
                    </div>
                </div>
                
                
            
                
            <!--===============================================================================================-->	
                <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
            <!--===============================================================================================-->
                <script src="vendor/bootstrap/js/popper.js"></script>
                <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
            <!--===============================================================================================-->
                <script src="vendor/select2/select2.min.js"></script>
            <!--===============================================================================================-->
                <script src="vendor/tilt/tilt.jquery.min.js"></script>
                <script >
                    $('.js-tilt').tilt({
                        scale: 1.1
                    })
                </script>
            <!--===============================================================================================-->
                <script src="js/main.js"></script>
</body>
</html>
                <?php } ?>