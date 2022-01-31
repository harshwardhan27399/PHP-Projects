<!DOCTYPE html>
<html lang="en">
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Blends Date</title>
         <!--===============================================================================================-->	
     <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
     <!--===============================================================================================-->
          <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

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
                <span class="login100-form-title">
                     Create User
                    </span>

                <form class="col-sm-12 login100-form validate-form" name="user_data" method="POST" action="<?php $_SERVER['PHP_SELF']?>" >
                <div class="wrap-input100 validate-input row"  >
                                     <label for="d2" class="col-sm-6 col-form-label">Owner Password</label>
                                     <div class="col-sm-6">
                                     <input class="input100" type="password" name="owner_password" placeholder="Owner Password" >
                                        <span class="focus-input100"></span>
                                      </div>
                                  </div>

                                  <div class="wrap-input100 validate-input row"  >
                                     <label for="d2" class="col-sm-6 col-form-label">Name</label>
                                     <div class="col-sm-6">
                                     <input class="input100" type="text" name="name" placeholder="Name" >
                                        <span class="focus-input100"></span>
                                        
                                      </div>
                                  </div>
                                  <div class="wrap-input100 validate-input row"  >
                                     <label for="d2" class="col-sm-6 col-form-label">Email</label>
                                     <div class="col-sm-6">
                                     <input class="input100" type="email" name="email" placeholder="Email" >
                                        <span class="focus-input100"></span>
                                        
                                      </div>
                                  </div>


                                  <div class="wrap-input100 validate-input row"  >
                                     <label for="d2" class="col-sm-6 col-form-label">Mobile</label>
                                     <div class="col-sm-6">
                                     <input class="input100" type="number" name="mobile" placeholder="Mobile" >
                                                <span class="focus-input100"></span>  
                                      </div>
                                  </div>
                                  <div class="wrap-input100 validate-input row"  >
                                     <label for="d2" class="col-sm-6 col-form-label">Password</label>
                                     <div class="col-sm-6">
                                     <input class="input100" type="password" name="password" placeholder="Password" required="required">
                                                    <span class="focus-input100"></span>
                                      </div>
                                  </div>

                                  <div class="wrap-input100 validate-input row"  >
                                     <label for="d2" class="col-sm-6 col-form-label">Access</label>
                                     <div class="col-sm-6">
                                     <select name="access" class="input100" style="width:100px;"  >
                                                           <option value="yes">Yes</option>
                                                           <option value="no">No</option>
                                                       </select>
                                                        <span class="focus-input100"></span>
                                      </div>
                                  </div>
                   
                                  <div class="container-login100-form-btn row">
   
                                         <div class="col-md-6">
                                         <a style="text-decoration: none;background-color: #333945;" class="login100-form-btn" href="index.html">Home</a>
                   
                                         </div>
                                        
    
                                              <div class=" col-md-6">
                                              <button class="login100-form-btn " name="" type="submit"> Submit </button> 
                                         </div>
                                         </div>
                                    
                                    
                            </form>
                         
                        </div>
                    </div>
                </div>
                                       
                

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>    
</body>
</html>
<?php 
include('connection.php');
if(isset($_POST['insert_user'])){
    //echo "Add user";
    $name = $_POST['name'];
     $email = $_POST['email'];
      $mobile = $_POST['mobile'];
       $password = $_POST['password'];
        $access = $_POST['access']; 


        $owner_pass = $_POST['owner_password'];
        $owner_access = "";

        $query = "select * from users where password='$owner_pass'";
        $result = mysqli_query($conn,$query);
        $num = mysqli_num_rows($result);
        if($num == 0){
            echo "You cannot create user";
        }
        else {
            $row = mysqli_fetch_assoc($result);
            $owner_access = $row['access'];

        }

        if($owner_access == "yes"){
            $sql = "insert into users values ('$name','$email','$mobile','$pass_hash','$access')";
            $data = mysqli_query($conn,$sql);
            if($data){
                echo "inserted";
               // header('Location:insert_users.php');
            }
            else{
                echo "not";
            }
        }



}
?>