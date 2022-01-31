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
ob_start();
include('connection.php');
 
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Create New Brand</title>
         <!--===============================================================================================-->	
         <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
         <!--===============================================================================================-->
             
         <!--===============================================================================================-->
             <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
         <!--===============================================================================================-->
             
         <!--===============================================================================================-->
             <link rel="stylesheet" type="text/css" href="css/util.css">
             <link rel="stylesheet" type="text/css" href="css/create_brand.css">
              <script>
                            function not_null(){
                          var ch = document.f1.brand.value;
                           if(ch==null){
                               return false;
                           }
                            }
                            </script>
    </head>
    <body>
    <div class="limiter">
            <div class="container-login100">
                        <div class="wrap-login100">
                                <span class="login100-form-title">
                                        Create Brand
                                     </span>
                                    
                            <form action="" method="post" name="f1" >
                                <div class="table-div">
                            <table style="margin-left: 120px">
                                <tr>
                                    <td><div class="wrap-input100">
                                       Enter Brand Name
                                    </div></td>
                                    <td> <div class="wrap-input100 validate-input" >
                                            <input class="input100" type="text" name="brand" id="brand" placeholder="Brand">
                                            <span class="focus-input100"></span>
                                            
                                        </div></td>
                                </tr>
                                
                                <tr>
                                        <td><div class="wrap-input100">
                                          Preview  List
                                            </div>
                                        </td>
                                        <td>
                                              <div class="wrap-input100 validate-input" >
                                                   <select class="input100" name="li_brand" id="li_brand">
                                                       <option value="">Select</option>
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
                                                                </table>
                                                                    <table>
                                        <tr>
                                                <td>
                                                        <div class="container-login100-form-btn">
                                                            <a style="text-decoration: none;background-color: #333945;" class="login100-form-btn" href="homepage.php">Home</a>
                                                        </div>
                                                    </td>
                                                <td>
                                                    <div class="container-login100-form-btn">
                                                        <button class="login100-form-btn" name="create_brand" type="submit"  onclick="return not_null()" >
                                                            Submit
                                                        </button>
                                                    </div>
                                                </td>
                                                <td>
                                                        <div class="container-login100-form-btn">
                                                            <button style="background-color: #333945;" name="delete_brand" type="submit" class="login100-form-btn" >
                                                                Delete
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

if(isset($_POST['create_brand']))
{

    $brand = $_POST['brand'];
    
    $query = "insert into brand_list (brand) values ('$brand') ";
    $data  = mysqli_query($conn,$query);
    if($data)
        {
            header('Location:create_brand.php');
            ob_end_flush();
        }
        else{
            echo "not inserted successfully";
            header('Location:create_brand.php');
             ob_end_flush();
        }

}

else if(isset($_POST['delete_brand'])){
    
    $brand = $_POST['li_brand'];
    
    $query = "delete from brand_list where brand='$brand' ";
    $data = mysqli_query($conn,$query);
    if($data){
        header('Location:create_brand.php');
    }

}

}

?>