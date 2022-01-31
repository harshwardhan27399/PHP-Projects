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
if(isset($_POST['show_blends'])){
    $start_date = $_POST['d1'];
    $end_date = $_POST['d2'];
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

    <!-- Data Tables -->
      <link rel="stylesheet" href="https://cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css">
      <link rel="stylesheet" href="https://cdn.datatables.net/responsive/1.0.7/css/responsive.dataTables.min.css">
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css">

      <!-- Modal CSS -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>

         <link rel="stylesheet" type="text/css" href="css/download_finished.css">
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
            	 <span class="login100-form-title">
                      Blend Sheets
                    </span>
	<div class="table-width" style="width: 950px;padding: 20px 90px" >
	<table id="example" class="table table-bordered display nowrap"  style="width:100%">
                    <thead>
                        <tr>
                            <th>Date</th>
                             <th>Batch with Rate</th>
                              <th>Batch without Rate</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                try {
                    require('connection.php');
                   
                    $query ="select distinct(batch_name) as batch,DATE_FORMAT(date,'%d/%m/%Y') as niceDate from show_data where DATE>='$start_date' and DATE<='$end_date' order by date ";
                    $result = mysqli_query($conn,$query);
                    $num = mysqli_num_rows($result);
                    if($result->num_rows>0){
                        while($row = $result->fetch_assoc()){
                            ?>
                            <tr>
                                <td><?php echo $row['niceDate'] ?></td>
                               <td>
                                        <form class="login100-form validate-form" action="Corporate-Invoice-Template-Easy/blend_sheet_invoice.php" method="post" target="_blank" onsubmit="confirmPage()">
                                            <input type="hidden" name="batch_name" value="<?php echo"".$row['batch'] ?>">
                                                <div class="container-login100-form-btn">
                                                        <button class="login100-form-btn" name="blend_sheet_rate" type="submit" >
                                                               <?php echo"".$row['batch'] ?>
                                                        </button>
                                                    </div>
                                                </form>
                                  
                                </td>
                                 <td>
                                     <form class="login100-form validate-form" action="Corporate-Invoice-Template-Easy/blend_sheets_sec_without_rate.php" method="post" target="_blank" onsubmit="confirmPage()">
                                            <input type="hidden" name="batch_name" value="<?php echo"".$row['batch'] ?>">
                                                <div class="container-login100-form-btn">
                                                        <button class="login100-form-btn" name="blend_sheet_wout_rate" type="submit" >
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
                    
                    </tbody>

                </table>
                
                <table id="description-table">
                                    <tr>
                                           
                                       
                                        <td>
                                            <div class="container-login100-form-btn">
                                                <a style="text-decoration: none;background-color: #333945;" class="login100-form-btn" href="homepage.php">Home</a>
                                            </div>
                                        </td>
                                         <td>
                                            <div class="container-login100-form-btn">
                                                <a style="text-decoration: none;background-color: #333945;" class="login100-form-btn" href="del_blend_list.php">Delete</a>
                                            </div>
                                            </div>
                                        </td>
                                    </tr>
                                   
                                </table>
                
            </div>
        </div>
    </div>
</div>

               
		<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
		<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
		<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.flash.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
		<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
		<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js"></script>
         <script src="http://cdn.datatables.net/plug-ins/1.10.21/sorting/date-uk.js"></script>
    
    <script type="text/javascript">
       
        $(document).ready(function() {
    $('#example').DataTable( {
       columnDefs: [
       { type: 'date-uk', targets: 0 }
     ] 
    } );
} );
    </script>
</body>
</html>
<?php } ?>