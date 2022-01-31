<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

 #customers th {
  border: 1px solid #ddd;
   padding: 8px;
}
#customers td {
  border: 1px solid #ddd;
   padding: 5px;
}
#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `star_rating` WHERE CONCAT(`name`, `feedaback`,`rating`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    $fosterid = "row['foster_id']";
}
 else {
    $query = "SELECT * FROM `star_rating`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "shopopet");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>
    <?php
include "header.php";
include "menu.php";
$link = mysqli_connect("localhost", "root", "");
mysqli_select_db($link, "shopopet");
?>

<div class="grid_10">
    <div class="box round first">
        <h2>
           View rating Information</h2>

		   
        <div class="block">

		     <form action="" method="post">
      <!--      <input type="text" name="valueToSearch" placeholder="name To Search"><br><br>
            <input type="submit" name="search" value="Filter"><br><br>
			-->
               <table id="customers">
                <tr>
                  
                    <th>name</th>
                    <th> feedback</th>
                    <th>rating</th>
                    
					
                 </tr>

		
		   <?php while($row = mysqli_fetch_array($search_result)):
		   echo "<tr>";
                ?>
			        <td><?php echo $row['name'];?></td>
					<td><?php echo $row['feedback'];?></td>
					<td><?php echo $row['rating'];?></td>
					
			
                </tr>
                <?php endwhile;?>
            </table>
        
     </form>   
        </div>
    </div>
	 </body>
	 </html>