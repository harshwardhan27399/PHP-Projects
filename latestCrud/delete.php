<?php  
 include('conn.php');  
 ?>  
 <!DOCTYPE html>  
 <html lang="en">  
 <head>  
      <meta charset="UTF-8">  
      <title>CRUD using PHP &amp; MYSQL</title>  
      <style>  
           #wrapper{  
                width:960px;  
                margin:0 auto;  
                background-color: #e3e3e3;  
                text-align: center;  
           }  
           #search{  
                background-color: orange;  
                height: 40px;  
           }  
           #search input[type="text"]{  
                height: 25px;  
                width:400px;  
                margin-top: 5px;  
                outline: none;  
           }  
           #search input[type="submit"]{  
                background-color: #333;  
                color:#fff;  
                height: 32px;  
                width:100px;  
                margin-top: 5px;  
           }  
           table{  
                text-align: center;  
           }  
           table th{  
                background-color: #900;  
                color: #fff;  
                padding:0px 54px;  
                height: 30px;  
           }  
           table tr{  
                text-align: center;  
           }  
      </style>  
 </head>  
 <body>  
      <div id="wrapper">  
           <h1>CRUD using PHP &amp; MYSQL</h1>  
           <?php  
                $del_id=$_GET['del'];       
                $query="delete from students where id='$del_id'";  
                if(mysqli_query($con,$query)){  
                     header('LOCATION:index.php');  
                }  
           ?>  
           <form action="edit.php?edit_form=<?php echo $id;?>" method="POST">  
                <p><label for="name">Please enter your name:</label></p>  
                <p><input type="text" name="name" value=<?php echo $name;?>></p>  
                <p><label for="address">Please enter your Address:</label></p>  
                <p><input type="text" name="address" value=<?php echo $address;?>></p>  
                <p><label for="email">Please enter your email</label></p>  
                <p><input type="email" name="email" value=<?php echo $email;?>></p>  
                <p><input type="submit" name="update" value="Update Record"></p>  
           </form>  
      </div>  
 </body>  
 </html>  
 </html>  