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
                padding:0px 94px;  
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
           <div id="records">  
                <h2>Records in the database table</h2>  
                <table>  
                     <tr>  
                          <th>ID</th>  
                          <th>NAME</th>  
                          <th>ADDRESS</th>  
                          <th>EMAIL</th>  
                          </tr>  
                     <?php  
                if(isset($_GET['search'])){  
                     $search_name=$_GET['search'];  
                $query="select * from students where st_name LIKE '$search_name%'";  
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
 <?php  }}?>  
                     </tr>  
                     <tr><td colspan="4"><a href="index.php"> Home </a></td></tr>  
                </table>  
           </div>  
      </div>  
 </body>  
 </html>  