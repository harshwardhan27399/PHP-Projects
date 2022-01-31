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
           <form action="index.php" method="POST">  
                <p><label for="name">Please enter your name:</label></p>  
                <p><input type="text" name="name"></p>  
                <p><label for="address">Please enter your Address:</label></p>  
                <p><input type="text" name="address"></p>  
                <p><label for="email">Please enter your email</label></p>  
                <p><input type="email" name="email"></p>  
                <p><input type="submit" name="insert" value="Save Record"></p>  
           </form>  
 <?php  
      if(isset($_POST['insert'])){  
           $name=$_POST['name'];  
           $address=$_POST['address'];  
           $email=$_POST['email'];  
           $query="insert into students (st_name,address,email) values ('$name','$address','$email')";  
           $row=mysqli_query($con,$query);  
           if($row)
			{  
                echo'<script>alert("Record inserted successfully")</script>';  
			}  
      }  
 ?>  
           <div id="search">  
                <form action="search.php" method="GET">  
           <input type="text" name="search" placeholder=" search...">  
           <input type="submit" value="search">  
           </form>  
           </div>  
           <div id="records">  
                <h2>Records in the database table</h2>  
                <table>  
                     <tr>  
                          <th>ID</th>  
                          <th>NAME</th>  
                          <th>ADDRESS</th>  
                          <th>EMAIL</th>  
                          <th>EDIT</th>  
                          <th>DELETE</th>  
                     </tr>  
                     <?php  
                     $query="select * from students";  
                     $result=mysqli_query($con,$query);  
                     while ($row=mysqli_fetch_assoc($result)) {  
                               $id=$row['ID'];  
                               $name=$row['st_name'];  
                               $address=$row['address'];  
                               $email=$row['email'];  
                     ?>  
                     <tr>  
                               <td><?php echo $id;?></td>  
                               <td><?php echo $name;?></td>  
                               <td><?php echo $address;?></td>  
                               <td><?php echo $email;?></td>  
                               <td><a href="edit.php?edit=<?php echo $id ;?>">Edit</a></td>  
                               <td><a href="delete.php?del=<?php echo $id ;?>">Delete</a></td>  
                     </tr>  
 <?php  }?>  
                </table>  
           </div>  
      </div>  
 </body>  
 </html>