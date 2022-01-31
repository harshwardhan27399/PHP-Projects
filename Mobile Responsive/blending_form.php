<?php 
include('connection.php');
$brand = "";
$inv = "";
if(isset($_POST['blend_form']))
{
     $brand = $_POST['brand'];
     $inv = $_POST['cd'];
}


?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Blending Form</title>

        <link rel="stylesheet" type="text/css" href="css/util.css">
        <link rel="stylesheet" type="text/css" href="css/blend.css">
        <style>
table, td, th {  
  border: 1px solid #ddd;
  text-align: left;
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
                               <?php echo "$brand"; ?>
                            </span>
                                <form action="Corporate-Invoice-Template-Easy/blend_sheet_wout_rate.php" target="_blank"   name="form1" method="post" onsubmit="return confirmPage()" >
                                    <table style="margin:20px 5px">
                                            <tr>
                                                <td>Choose type</td>
                                                <td><select name="table_insert" style="font-size:25px;" required="required">
                                                    <option value="">Select</option>
                                                    <option value="finish_goods">Finish Goods</option>
                                                    <option value="inventory">Inventory</option>
                                                </select></td>
                                            </tr>
                                            <tr>
                                                <td>Date : </td>
                                                <td><input style="font-size:20px; width: 200px;  padding-right: 0px;" type="date" name="in_date" id="inv_date" onchange="create_batch()" required="required"></td>
                                            </tr>
                                          
                                           
                                              <input type="hidden" name="month" id="batch" size="8">
                                            
                                            
                                        </table>
                                        
                                    
                                    <input type="hidden" name="blend_brand" id="brand" value="<?php echo "$brand"; ?>">
                                <table id="blend_table" style="font-size:16px" style="width:750px" >
                                        <tr>
                                                <th style="color:blue"><b> Invoice</b></th>
                                                 <th style="color:blue"><b> Quantity</b></th>
                                               <th><b> Garden </b></th>
                                                  <th style="font-size: 20px;font-style: italic;"><b>Grade</b></th>
                                               
                                               <th ><b> Rate </b></th>
                                               <th><b> kg/bag </b></th>
                                               <th><b>  No of bags </b></th>
                                              
                                               <th><b>Add Bags</b></th>  
                                                  <th><b>Total</b></th> 
                                           </tr>
                                           <?php 

                                           //target="_blank"
                                          foreach($inv as $i){
                                             // echo $i;
                                              try {
                                                  $query = "select * from inventory where srno='$i'" ;
                                                  $res = mysqli_query($conn,$query);
                                                  $num = mysqli_num_rows($res);
                                                  if($num == 0){
                                                    echo"NO such data";
                                                  }
                                                  else {
                                                      $row = mysqli_fetch_assoc($res);

                                                      ?>

                                                      <tr>
                                                          <td><?php echo "".$row['invoice'] ?></td>
                                                           <td><?php echo "".$row['total'] ?></td>
                                                            <td><?php echo "".$row['Garden'] ?></td>
                                                             <td><?php echo "".$row['grade'] ?></td>
                                                              <td><?php echo "".$row['rate'] ?></td>
                                                               <td><?php echo "".$row['kg_bag'] ?></td>
                                                                <td><?php echo "".$row['no_bag'] ?></td>
                                                                <td><input style="font-size:20px;"  type="number" step="0.01" name="ch[]" id="no_bag_change[]"  oninput="calculate_wac()" size="9" max="<?php echo "".$row['no_bag'] ?>" min="0" required="required"></td>
                                                                <td><input type="text" size="9" style="font-size:20px;" name="total_after_input[]"  readonly></td>
                                                                
                                                            </tr>
                                                             <input type="hidden"  name="srno[]" value="<?php echo "".$row['srno'] ?>">
                                                        <input type="hidden" name="invoice[]"  value="<?php echo "".$row['invoice'] ?>">
                                                         <input type="hidden" name="garden[]"  value="<?php echo "".$row['Garden'] ?>">
                                                          <input type="hidden" name="grade[]"  value="<?php echo "".$row['grade'] ?>">
                                                         <input type="hidden"  name="rate[]"  value="<?php echo "".$row['rate'] ?>">
                                                          <input type="hidden"  name="kg_bag[]"  value="<?php echo "".$row['kg_bag'] ?>">
                                                          <input type="hidden" name="no_bag[]"  value="<?php echo "".$row['no_bag'] ?>">
                                                          <input type="hidden" name="total[]"  value="<?php echo "".$row['total'] ?>">
                                                     
                                                       
                                                       
                                                      <?php
                                                  }
                                              } catch (\Throwable $th) {
                                                  //throw $th;
                                              }
                                          }
                                           ?>
                            </table>
                               
                  
                       
                                <table style="margin:0px 5px">
                                    <tr>
                                        <td>Net Average Rate</td>
                                        <td><input style="font-size:20px;" type="text" value="0" name="wac" id="wac" size="8" readonly></td>
                                    </tr>
                                    <tr>
                                        <td>Total kg</td>
                                        <td><input style="font-size:20px;" type="text" value="0" name="total_kg" id="total_kg" size="8" readonly></td>
                                    </tr>
                                </table>

                                <table id="table_buttons">
                                    <tr>
                                        <td><div class="container-login100-form-btn">
                                        <button class="login100-form-btn"   name="back" onclick="history.back()">
                                            Back
                                        </button>
                                    </div></td>
                                    <td>
                                        <div class="container-login100-form-btn">
                                        <button class="login100-form-btn"  type="submit"  name="blend_sheet_without_rate">
                                            Submit
                                        </button>
                                    </div>
                                    </td>
                                    </tr>
                                </table>
                                

                                
                            </form>

                              
                            <script>
                                function create_batch(){
                            var month = new Array();
                            month[0] = "Jan";
                            month[1] = "Feb";
                            month[2] = "Mar";
                            month[3] = "Apr";
                            month[4] = "May";
                            month[5] = "Jun";
                            month[6] = "Jul";
                            month[7] = "Aug";
                            month[8] = "Sep";
                            month[9] = "Oct";
                            month[10] = "Nov";
                            month[11] = "Dec";
                            var date =  document.getElementById("inv_date").value;
                            var dateobj = new Date(date);
                            var month_name = month[dateobj.getMonth()];

                            var brand = document.getElementById("brand").value;
                                     document.getElementById("batch").value = month_name;
                                 
                                        }
                            function confirmPage(){
                                var r = confirm("Confirm");
                                    if (r == false) {
                                     return false;
                                          }
                                          history.go(-3);
                                    
                            }
                             function calculate_wac(){
                                    var mul_kg = [];
                                    var rate = [];
                                    var tnum = 0;
                                    var tdeno = 0; // also used for total_kg;
                                    var wac = 0;
                                    var i = 0;
                                    var n = document.getElementsByName("ch[]");
                                    var r = document.getElementsByName("rate[]");
                                    var k =document.getElementsByName("kg_bag[]");
                                    var total_kg = 0;
                                   
                                    for(i = 0;i<n.length;i++){

                                      
                                            
                                      mul_kg[i] =  n[i].value*k[i].value;  
                                    
                                    document.getElementsByName("total_after_input[]")[i].value = mul_kg[i];
                                         
                                      rate[i] = r[i].value*n[i].value*k[i].value;
                                       //
                                      tnum = tnum + rate[i];
                                      tdeno = tdeno + mul_kg[i];
                                      wac = (tnum/tdeno);
                                      
                                      //total_kg
                                      
                                      
                                      document.getElementById("total_kg").value = Math.floor(tdeno);
                                        document.getElementById("wac").value = Math.floor(wac);
                                    }
                                    
                                
                                   
                                }
                            </script>
                        </div>
                    </div>
            </div>
       
    </body>
</html>

