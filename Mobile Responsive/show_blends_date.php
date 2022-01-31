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
    
    
                <form class="col-sm-12 container-login100-form-btn" action="show_blends.php" method="post">	
  <div class="form-group row ">
    <label for="d1" class="col-sm-4 col-form-label">Start Date</label>
    <div class="col-sm-8">
      <input type="date" class="input100" id="d1" name="d1" placeholder="date">
    </div>
  </div>
  <div class="form-group row">
    <label for="d2" class="col-sm-4 col-form-label">End Date</label>
    <div class="col-sm-8">
      <input type="date" class="input100" id="d2" name="d2" placeholder="date">
    </div>
  </div>
<div class="form-group row">
    <a style="text-decoration: none;background-color: #333945;" class="login100-form-btn" href="homepage.php">Home</a>
      <button class="login100-form-btn" name="show_blends" type="submit"> Submit </button> 
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
<?php } ?>
