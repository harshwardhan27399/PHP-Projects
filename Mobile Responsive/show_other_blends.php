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
include('connection.php');

$start_date = "";
$end_date  = "";
if(isset($_POST['show_other_blends'])){
    $start_date = $_POST['d1'];
    $end_date = $_POST['d2'];
   
}

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
                    <table>
                        <tr>
                            <th>Other Blends with Rate</th>
                              <th>Other Blends without Rate</th>
                        </tr>
                            <tr>
                                <?php 
                                
                                try {
                                    $query="select distinct(batch_name) as batch from other_blends where DATE>='$start_date' and DATE<='$end_date' ";
                                    $res = mysqli_query($conn,$query);
                                    $num = mysqli_num_rows($res);
                                    if($res->num_rows>0){
                                        while($row = $res->fetch_assoc()){
                                            ?>
                                           
                                
 <td>
	<form class="login100-form validate-form" action="Corporate-Invoice-Template-Easy/inventory_blend_sheet.php"
		method="post" target="_blank" onsubmit="confirmPage()">
		<input type="hidden" name="batch_name" value="<?php echo"".$row['batch'] ?>">
		<div class="container-login100-form-btn">
			<button class="login100-form-btn" name="inventory_blend_sheet_inv" type="submit">
				<?php echo"".$row['batch'] ?>
			</button>
		</div>
	</form>

</td>
                                  
                                
                                <td>
                                     <form class="login100-form validate-form" action="Corporate-Invoice-Template-Easy/inventory_blend_sheet_wout_rate.php" method="post" target="_blank" onsubmit="confirmPage()">
                                            <input type="hidden" name="batch_name" value="<?php echo"".$row['batch'] ?>">
                                                <div class="container-login100-form-btn">
                                                        <button class="login100-form-btn" name="inventory_blend_sheet_inv" type="submit" >
                                                               <?php echo"".$row['batch'] ?>
                                                        </button>
                                                    </div>
                                                </form>
                                </td>
                            </tr>
                             <?php
                                        }
                                    }
                                } catch (\Throwable $th) {
                                    //throw $th;
                                }
                                
                                ?>
                                <td>
                                    <div class="container-login100-form-btn">
                                        <a style="text-decoration: none;background-color: #333945;" class="login100-form-btn" href="homepage.php">Home</a>
                                    </div>
                                </td>
                              </table>
                    
                </div>
            </div>
        </div>
    </body>
</html>


<?php } ?>
