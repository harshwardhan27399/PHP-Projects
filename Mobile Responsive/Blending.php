<?php 
include('connection.php');
session_start();
   //echo "Logged in :  ".$_SESSION["email"];
   
   if($_SESSION["email"] == "" || $_SESSION["email"] == null){
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
        <title>Blend</title>
        
         <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
         <!--===============================================================================================-->
             
         <!--===============================================================================================-->
             <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
         <!--===============================================================================================-->
             
         <!--===============================================================================================-->
             <link rel="stylesheet" type="text/css" href="css/util.css">
            <link rel="stylesheet" type="text/css" href="css/create_brand.css">
    </head>
    <body>
    
     <div class="limiter">
                    <div class="container-login100">
                        <div class="wrap-login100">
                          
            
                            <form class="login100-form validate-form" action="blending_regconfirm.php" method="post" >
                              
                                <span class="login100-form-title">
                                    Blend
                                </span>
                                <table style="margin-left: 120px;">
                                    <tr>
                                        <td><div class="wrap-input100">
                                            Enter Brand
                                            </div>
                                        </td>
                                        <td>
                                              <div class="wrap-input100 validate-input" >
                                                   <select class="input100" name="brand" >
                                                       <option value="">Select</option>
                                                       <!-- Write here Php fetch code for brands-->
                                                         <?php
                                                            $result = mysqli_query($conn,"select * from brand_list");
                                                            

                                                         $num = mysqli_num_rows($result);
                                                         if($result->num_rows>0)
	                                                        {
		                                                    while($row = $result->fetch_assoc())
	                                                	{
                                                           

                                                         ?>
                                                          <option value=<?php echo"".$row['brand']."" ?> ><?php echo"".$row['brand']."" ?>  </option> 
                                                          <?php
                                                            }
                                                                }
                                                                else
                                                                {
                                                                echo "no result";
                                                                    }
                                                                    ?>
                                                        </select> 
                                                    
                                                </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><div class="wrap-input100">
                                            Password
                                            </div></td>
                                            <td>
                                                <div class="wrap-input100 validate-input" >
                                                   <input class="input100" type="password" name="password" placeholder="Password">
                                                            <span class="focus-input100"></span>
                                                </div>
                                            </td>
                                    </tr>
                                  
                                    <tr>
                                         <td>
                                                <div  class="container-login100-form-btn">
                                                        <button style="background-color: #333945;" class="login100-form-btn" formaction="homepage.php" >
                                                        Home
                                                        </button>
                                                    </div>
                                        </td>
                                        <td>
                                                <div class="container-login100-form-btn">
                                                        <button class="login100-form-btn" name="blending" type="submit" >
                                                            Submit
                                                        </button>
                                                    </div>
                                        </td>
                                       
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
            </div>
            
    </body>
    </html>
<?php } ?>