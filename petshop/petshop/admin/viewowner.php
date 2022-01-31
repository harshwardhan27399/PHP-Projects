<style>
table {

 border:1px;	
  width: 50%;
}

th, td {
	text-align:center;
	height:30;
  text-align: center;
  padding: 8px;
}

tr:nth-child(even) {background-color: #f2f2f2;}
</style>
<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `foster_registration` WHERE CONCAT(`id`, `name`, `address`, `address`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `foster_registration`";
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
           View Owners Information</h2>

		   
        <div class="block">

		     <form action="" method="post">
            <input type="text" name="valueToSearch" placeholder="name To Search"><br><br>
            <input type="submit" name="search" value="Filter"><br><br>
               <table>
                <tr>
                  
                    <th> Name</th>
                    <th>Address</th>
                    <th>Mobile</th>
                    <th>Aadhar</th>
                 </tr>
			<?php while($row = mysqli_fetch_array	($search_result)):?>
                <tr>
                    
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['address'];?></td>
                    <td><?php echo $row['mobile'];?></td>
                    <td><?php echo $row['aadhar'];?></td>
						
                </tr>
                <?php endwhile;?>
            </table>
        
     </form>   
        </div>
    </div>
    <?php
    include "footer.php";
    ?>
	 </body>
	 </html>