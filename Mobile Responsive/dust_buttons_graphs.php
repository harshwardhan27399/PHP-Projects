<?php 
include('connection.php');
session_start();
 //echo "Logged in :  ".$_SESSION["email"];
   
   if($_SESSION["email"] == "" || $_SESSION["email"] == null){
       ?>
                <script>
                window.location.href="index.html";
                </script>
                <?php
   }
   else{
?>

<!DOCTYPE html>
<html>
    <head>
          <link rel="stylesheet" type="text/css" href="css/util.css">
             <link rel="stylesheet" type="text/css" href="css/create_brand.css">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Blends List</title>
         <script>
        function  confirmPage() {
            history.go(0);
        }

    </script>
    <style>
table, td, th {  
  border: 1px solid #ddd;
  text-align: center;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 15px;
}
</style>
    </head>
    <body>
       <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100">
                   
                        <span class="login100-form-title" style="color:rgb(79, 0, 158)">
                               CTC Grades Graph
                            </span>
                              
                            <span class="login100-form-title" style="font-size: 25px;">
                               Dust
                            </span>
                               <?php 
                                
                                try {
                                    $query="select distinct(grade) as grade from inventory where grade_type='ctc' and grade_size = 'dust'";
                                    $res = mysqli_query($conn,$query);
                                    $num = mysqli_num_rows($res);
                                    if($res->num_rows>0){
                                        while($row = $res->fetch_assoc()){
                                            ?>
                                           
                                <div class="resp-button">
                                        <form class="login100-form validate-form" action="bar_graph.php" method="post"  onsubmit="confirmPage()">
                                            <input type="hidden" name="grade" value="<?php echo"".$row['grade'] ?>">
                                            <input type="hidden" name="grade_type" value="ctc">
                                                <div class="container-login100-form-btn">
                                                        <button class="login100-form-btn" name="grade_graph" type="submit" >
                                                               <?php echo"".$row['grade'] ?>
                                                        </button>
                                                    </div>
                                                </form>
                                                </div>
                                  
                                
                            
                             <?php
                                        }
                                    }
                                } catch (\Throwable $th) {
                                    //throw $th;
                                }
                                
                                ?>

                            <span class="login100-form-title" style="margin: 30px;font-size: 25px;">
                               Broken Leaf
                            </span>
                               <?php 
                                
                                try {
                                    $query="select distinct(grade) as grade from inventory where grade_type='ctc' and grade_size = 'broken leaf'";
                                    $res = mysqli_query($conn,$query);
                                    $num = mysqli_num_rows($res);
                                    if($res->num_rows>0){
                                        while($row = $res->fetch_assoc()){
                                            ?>
                                           
                                <div class="resp-button">
                                        <form class="login100-form validate-form" action="bar_graph.php" method="post"  onsubmit="confirmPage()">
                                            <input type="hidden" name="grade" value="<?php echo"".$row['grade'] ?>">
                                            <input type="hidden" name="grade_type" value="ctc">
                                                <div class="container-login100-form-btn">
                                                        <button class="login100-form-btn" name="grade_graph" type="submit" >
                                                               <?php echo"".$row['grade'] ?>
                                                        </button>
                                                    </div>
                                                </form>
                                                </div>
                                  
                                
                            
                             <?php
                                        }
                                    }
                                } catch (\Throwable $th) {
                                    //throw $th;
                                }
                                
                                ?>

                                <span class="login100-form-title" style="margin: 30px;font-size: 25px;">
                               Fannings
                            </span>
                               <?php 
                                
                                try {
                                    $query="select distinct(grade) as grade from inventory where grade_type='ctc' and grade_size = 'fannings'";
                                    $res = mysqli_query($conn,$query);
                                    $num = mysqli_num_rows($res);
                                    if($res->num_rows>0){
                                        while($row = $res->fetch_assoc()){
                                            ?>
                                           
                                <div class="resp-button">
                                        <form class="login100-form validate-form" action="bar_graph.php" method="post"  onsubmit="confirmPage()">
                                            <input type="hidden" name="grade" value="<?php echo"".$row['grade'] ?>">
                                            <input type="hidden" name="grade_type" value="ctc">
                                                <div class="container-login100-form-btn">
                                                        <button class="login100-form-btn" name="grade_graph" type="submit" >
                                                               <?php echo"".$row['grade'] ?>
                                                        </button>
                                                    </div>
                                                </form>
                                                </div>
                                  
                                
                            
                             <?php
                                        }
                                    }
                                } catch (\Throwable $th) {
                                    //throw $th;
                                }
                                
                                ?>

                                    <hr style="border:10px solid green;width:100%">
                                 <span class="login100-form-title" style="margin: 30px;color:rgb(79, 0, 158)" >
                               Orthodox
                            </span>
                            <span class="login100-form-title" style="margin: 30px;font-size: 25px;">
                               Dust
                            </span>
                               <?php 
                                
                                try {
                                    $query="select distinct(grade) as grade from inventory where grade_type='orthodox' and grade_size = 'dust'";
                                    $res = mysqli_query($conn,$query);
                                    $num = mysqli_num_rows($res);
                                    if($res->num_rows>0){
                                        while($row = $res->fetch_assoc()){
                                            ?>
                                           
                                <div class="resp-button">
                                        <form class="login100-form validate-form" action="bar_graph.php" method="post"  onsubmit="confirmPage()">
                                            <input type="hidden" name="grade" value="<?php echo"".$row['grade'] ?>">
                                            <input type="hidden" name="grade_type" value="orthodox">
                                                <div class="container-login100-form-btn">
                                                        <button class="login100-form-btn" name="grade_graph" type="submit" >
                                                               <?php echo"".$row['grade'] ?>
                                                        </button>
                                                    </div>
                                                </form>
                                                </div>
                                  
                                
                            
                             <?php
                                        }
                                    }
                                } catch (\Throwable $th) {
                                    //throw $th;
                                }
                                
                                ?>

                                <span class="login100-form-title" style="margin: 30px;font-size: 25px;">
                               Whole Leaf
                            </span>
                               <?php 
                                
                                try {
                                    $query="select distinct(grade) as grade from inventory where grade_type='orthodox' and grade_size = 'whole leaf'";
                                    $res = mysqli_query($conn,$query);
                                    $num = mysqli_num_rows($res);
                                    if($res->num_rows>0){
                                        while($row = $res->fetch_assoc()){
                                            ?>
                                           
                                <div class="resp-button">
                                        <form class="login100-form validate-form" action="bar_graph.php" method="post"  onsubmit="confirmPage()">
                                            <input type="hidden" name="grade" value="<?php echo"".$row['grade'] ?>">
                                            <input type="hidden" name="grade_type" value="orthodox">
                                                <div class="container-login100-form-btn">
                                                        <button class="login100-form-btn" name="grade_graph" type="submit" >
                                                               <?php echo"".$row['grade'] ?>
                                                        </button>
                                                    </div>
                                                </form>
                                                </div>
                                  
                                
                            
                             <?php
                                        }
                                    }
                                } catch (\Throwable $th) {
                                    //throw $th;
                                }
                                
                                ?>

                                 <span class="login100-form-title" style="margin: 30px;font-size: 25px;">
                               Broken Leaf
                            </span>
                               <?php 
                                
                                try {
                                    $query="select distinct(grade) as grade from inventory where grade_type='orthodox' and grade_size = 'broken leaf'";
                                    $res = mysqli_query($conn,$query);
                                    $num = mysqli_num_rows($res);
                                    if($res->num_rows>0){
                                        while($row = $res->fetch_assoc()){
                                            ?>
                                           
                                <div class="resp-button">
                                        <form class="login100-form validate-form" action="bar_graph.php" method="post"  onsubmit="confirmPage()">
                                            <input type="hidden" name="grade" value="<?php echo"".$row['grade'] ?>">
                                            <input type="hidden" name="grade_type" value="orthodox">
                                                <div class="container-login100-form-btn">
                                                        <button class="login100-form-btn" name="grade_graph" type="submit" >
                                                               <?php echo"".$row['grade'] ?>
                                                        </button>
                                                    </div>
                                                </form>
                                                </div>
                                  
                                
                            
                             <?php
                                        }
                                    }
                                } catch (\Throwable $th) {
                                    //throw $th;
                                }
                                
                                ?>

                                <span class="login100-form-title" style="margin: 30px;font-size: 25px;">
                               Fannings
                            </span>
                               <?php 
                                
                                try {
                                    $query="select distinct(grade) as grade from inventory where grade_type='orthodox' and grade_size = 'fannings'";
                                    $res = mysqli_query($conn,$query);
                                    $num = mysqli_num_rows($res);
                                    if($res->num_rows>0){
                                        while($row = $res->fetch_assoc()){
                                            ?>
                                           
                                <div class="resp-button">
                                        <form class="login100-form validate-form" action="bar_graph.php" method="post"  onsubmit="confirmPage()">
                                            <input type="hidden" name="grade" value="<?php echo"".$row['grade'] ?>">
                                            <input type="hidden" name="grade_type" value="orthodox">
                                                <div class="container-login100-form-btn">
                                                        <button class="login100-form-btn" name="grade_graph" type="submit" >
                                                               <?php echo"".$row['grade'] ?>
                                                        </button>
                                                    </div>
                                                </form>
                                                </div>
                                  
                                
                            
                             <?php
                                        }
                                    }
                                } catch (\Throwable $th) {
                                    //throw $th;
                                }
                                
                                ?>
                                
                              
                      
                               
                                    <div class="container-login100-form-btn">
                                        <a style="text-decoration: none;background-color: #333945;" class="login100-form-btn" href="homepage.php">Home</a>
                                    </div>
                            
                              
                    
                </div>
            </div>
        </div>
    </body>
</html>
                            <?php } ?>
