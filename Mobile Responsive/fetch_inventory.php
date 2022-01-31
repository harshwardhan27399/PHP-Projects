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
if(isset($_POST['inventory_date'])){
    $start_date = $_POST['d1'];
    $end_date = $_POST['d2']; 
}

//echo "start : ".$start_date;
//echo $end_date;
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

         <link rel="stylesheet" type="text/css" href="css/select.css">

         <script>
    function showOmkar() {
        //alert("Hello");
        var myTab = document.getElementById("example");
          var rows = myTab.rows.length;
        for (i = 1; i < myTab.rows.length; i++) {

            // GET THE CELLS COLLECTION OF THE CURRENT ROW.
            var objCells = myTab.rows.item(i).cells;
            // LOOP THROUGH EACH CELL OF THE CURENT ROW TO READ CELL VALUES.
            for (var j = 0; j < objCells.length; j++) { 
                if(objCells.item(j).innerHTML == 0){
                   myTab.rows[i].style.color = "Red";
                }
            } 
        }   
    }
        </script>

</head>
<body onload="showOmkar()">
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form class="login100-form validate-form" name="shakeit" method="POST">
    
                    <span class="login100-form-title" style="margin:20px 200px">
                        Inventory
                    </span>
                    <input type="hidden" name="d1" value="<?php echo"".$start_date ?>">
                    <input type="hidden" name="d2" value="<?php echo"".$end_date ?>">
                
    <div class="table-width" style="width: 950px; padding: 20px 20px" >
    <table id="example" class="table table-bordered display nowrap" style="width:800px">
                    <thead>
                        <tr>
                            <th>Delete</th>
                            <th>Invoice</th>   
                            <th>Date</th> 
                            <th>Garden</th>
                            <th>Type</th>
                            <th>Grade</th>
                            <th>Pur Type</th>
                            <th>Rate</th>
                            <th>No of Bags</th>
                            <th>Bag Size</th>
                            <th>Total</th>
                            <th>Edit</th>
                        </tr>

                    </thead>
                    <tbody>
             <?php 

             
             $query="select invoice,srno,DATE_FORMAT(date,'%d/%m/%Y') as niceDate,Garden,grade_type,grade,puchaseType,rate,no_bag,kg_bag,total from inventory where DATE>='$start_date' and DATE<='$end_date' order by date desc,total asc  ";
           $result = mysqli_query($conn,$query);
            $num = mysqli_num_rows($result);
         if(mysqli_num_rows($result) > 0)
         {
        while($row = mysqli_fetch_assoc($result))    
        {    

       ?>
        <tr>
             <td><input type="checkbox" name="delete[]" id="myCheck" value="<?php echo "".$row['srno'] ?>"></td>
             <td><?php echo"".$row['invoice'] ?></td>
             <td><?php echo"".$row['niceDate'] ?></td>
              <td style="font-weight: bold;"><?php echo"".$row['Garden'] ?></td>
              <td><?php echo"".$row['grade_type'] ?></td>
              <td><?php echo"".$row['grade'] ?></td>
              
              <td><?php echo"".$row['puchaseType'] ?></td>
              <td><?php echo"".$row['rate'] ?></td>
              <td><?php echo"".$row['no_bag'] ?></td>
               <td><?php echo"".$row['kg_bag'] ?></td>
               <td><?php echo"".$row['total'] ?></td>
                <td><input type="radio" name="upd_srn" value="<?php echo "".$row['srno'] ?>"></td>
        </tr>                                   
                                                     
                                                    
                          <?php
                               
                    }
                }
                else
                    {
                        echo "no result";
                    }
                           ?>

            </tbody> 

                </table>
            </div>

                <table style="margin:20px 200px 10px 200px;">
     <tr>
         <td>
            <div class="container-login100-form-btn">
                <button class="login100-form-btn" name="delete_entries"  onclick="return Deletefunction()"  formaction="delete_entries.php">
                   Delete
                </button>
            </div>
         </td>

         <script>
         function Deletefunction(){

             var r = confirm("Confirm to Delete Entries");
        if(r == false )
        {
                     return false;
        }

         }
         </script>
         <td>
             
         </td>
          
                                <td>
                                    <div class="container-login100-form-btn">
                                        <a style="text-decoration: none;background-color: #333945;" class="login100-form-btn" href="homepage.php">Home</a>
                                    </div>
                                </td>
         <td>
            <div class="container-login100-form-btn">
                <button style="background-color: #333945;" class="login100-form-btn" formaction="inventory_date.php">
                    Back
                </button>
            </div>
         </td>
         <td>
            <div class="container-login100-form-btn">
                <button class="login100-form-btn" name="edit_entry" type="submit" formaction="edit_entry.php">
                    Edit
                </button>
            </div>
         </td>
     </tr>
 </table>
            
                </form>            
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
                title: 'GTC Inventory Stock',
                customize: function(doc) {
                    doc.defaultStyle.fontSize = 12; //<-- set fontsize to 16 instead of 10 
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