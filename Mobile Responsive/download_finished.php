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
$start_date = $_GET['d1'];
$end_date = $_GET['d2'];
if(isset($_POST['show_finished'])){
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

</head>
<body>
	<div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
            	 <span class="login100-form-title">
                        Inventory
                    </span>
	<div class="table-width" style="width: 950px;padding: 20px 90px" >
	<table id="example" class="table table-bordered display nowrap"  style="width:100%">
                    <thead>
                        <tr>
                            <th><b> Batch Name </b></th>
                            <th><b> Date </b></th>
                            <th><b> Brand</b></th>
                            <th><b>Total Quantity</b></th>
                            <th><b> Average Rate </b></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                try {
                    require('connection.php');
                   
                    $query ="select batch_name,DATE_FORMAT(f_date,'%d/%m/%Y') AS niceDate,brand,total_kg,net_rate from finish_goods where F_DATE>='$start_date' and F_DATE<='$end_date' order by f_date";
                    $result = mysqli_query($conn,$query);
                    $num = mysqli_num_rows($result);
                    if($result->num_rows>0){
                        while($row = $result->fetch_assoc()){
                            ?>
                            <tr>
                                <td><?php  echo "".$row['batch_name'] ?></td>
                                <td><?php  echo "".$row['niceDate'] ?></td>
                                <td><?php  echo "".$row['brand'] ?></td>
                                <td><?php  echo "".$row['total_kg'] ?></td>
                                <td><?php  echo "".$row['net_rate'] ?></td>
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
        dom: 'Bfrtip',
        buttons: [
           {
                extend: 'excelHtml5',
                title: 'GTC Finish Stock'
            },
            {
                extend: 'pdfHtml5',
                title: 'GTC Finish Stock',
                customize: function(doc) {
                    doc.defaultStyle.fontSize = 16; //<-- set fontsize to 16 instead of 10 
                    }  
            }
            
        ],
        columnDefs: [
       { type: 'date-uk', targets: 0 }
     ] 
    } );
} );
    </script>
</body>
</html>
<?php } ?>