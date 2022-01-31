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
                $edit_id=$_GET['edit'];       
                $query="select * from students where id='$edit_id'";  
                $run=mysqli_query($con,$query);  
                while ($row=mysqli_fetch_assoc($run)) {  
                     $id=$row['ID'];  
                     $name=$row['st_name'];  
                     $address=$row['address'];  
                     $email=$row['email'];  
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
           <?php }?>  
      </div>  
 </body>  
 </html>  
 <?php  
      if(isset($_POST['update'])){  
           $update_id=$_GET['edit_form'];  
                $name=$_POST['name'];  
                 $address=$_POST['address'];  
                 $email=$_POST['email'];  
                $query="update students set st_name='$name',address='$address',email='$email' where id='$update_id'";  
                $row=mysqli_query($con,$query);  
                if($row){  
                     echo '<script>alert("Updated successfully")</script>';  
                     header('Location:index.php');  
                }  
           }  
 ?>  