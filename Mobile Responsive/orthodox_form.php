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
       
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Orthodox Entry</title>
         <!--===============================================================================================-->	
        <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <!--===============================================================================================-->
        
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
        
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="css/util.css">
        <link rel="stylesheet" type="text/css" href="css/main_insert.css">
    <!--===============================================================================================-->
        <script>
            function validations(){
                var x = document.shakeit.invoice.value;
                var y = document.shakeit.date.value;
                var z = document.shakeit.garden.value;
                var a = document.shakeit.g.value;
                var b = document.shakeit.rate.value;
                var c = document.shakeit.kg_bag.value;
                var d = document.shakeit.inp_bag.value;

                if(x==""){
                    alert("Enter invoice");
                    return false;
                    
                    
                }
                
                    if(z=="")
                    {
                        alert("Enter Garden");
                    return false;
                    }
                    if(a=="")
                    {
                        alert("Enter Grade Type");
                    return false;
                    }
                    if(b=="")
                    {
                        alert("Enter Rate");
                    return false;
                    }
                    if(c=="")
                    {
                        alert("Enter Kg per Bags");
                    return false;
                    }
                    if(d=="")
                    {
                        alert("Enter Input Bags");
                    return false;
                    }

            }

        function call_Shortage(){
            var no1 = parseInt(document.getElementById("no_bag_1").value);
            var short = 0;
            var total =0;
            short = parseFloat(document.getElementById("shortage").value);
            var kg_bag = parseInt(document.getElementById("kg_bag").value);
           
                total = (no1 * kg_bag) - short;
                f_no_bag = total/kg_bag;
           
           

            
            document.getElementById("total").value = total.toFixed();
            document.getElementById("no_bag").value = f_no_bag;
            
        }
        </script>
   
    </head>
    <body>
         
        <div class="limiter">
                    <div class="container-login100">
                        <div class="wrap-login100">
                          
            
                            <form class="login100-form validate-form" name="shakeit" method="post" action="insert_orthodox.php" >
                              
                                <span class="login100-form-title">
                                   Orthodox Inventory 
                                </span>
                                <div class="table-div">
                                <table >
                                      
                                    <tr>
                                        <td>Invoice</td>
                                        <td>
                                            <div class="wrap-input100 validate-input" >
                                                <input class="input100" type="text" name="invoice" placeholder="Invoice" required="required">
                                                    <span class="focus-input100"></span>
                                                    
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Date</td>
                                            <td>
                                                <div class="wrap-input100 validate-input" >
                                                        <input class="input100" type="date" name="date" placeholder="Date" required="required">
                                                        <span class="focus-input100"></span>
                                                        
                                                    </div>
                                        </td>
                                        </tr>
                                            
                                    
                                    <tr>
                                        <td>Garden</td>
                                        <td>
                                                <div class="wrap-input100 validate-input" >
                                                        <input class="input100" type="text" name="garden" placeholder="Garden" required="required">
                                                        <span class="focus-input100"></span>
                                                        
                                                    </div>
                                        </td>
                                    </tr>
                                    <tr>
                                       <td>Choose Grade Type</td>
                                       <td>
                                       
                                            <select id="id1"  class="select_grade" name="g" onchange="openGrade()" required="required">
                                                <option value="">None</option>  
                                               
                                                <option value="Dust">Dust</option>
                                                 <option value="Whole Leaf">Whole Leaf</option>
                                                  <option value="Broken Leaf">Broken Leaf</option>
                                                   <option value="Fannings">Fannings</option>                     
                                            
                                                        </select>
                                                <span class="focus-input100"></span>
                                                
                                            
                                       </td>
                                       <script>
                                       function openGrade(){
                                        var x = document.getElementById("id1").value;
                                            if (x == "Dust") 
                                                {
                                               document.getElementById("grade_list").style.display = "block";
                                                 document.getElementById("dust_grade").style.display = "block";
                                                 document.getElementById("broken_leaf_grade").style.display = "none";
                                                 document.getElementById("fannings_grade").style.display = "none";
                                                 document.getElementById("whole_leaf_grade").style.display = "none";
                                                  document.getElementById("broken_leaf_grade").value = "";
                                                 document.getElementById("fannings_grade").value = "";
                                                 document.getElementById("whole_leaf_grade").value = "";
                                             }
                                             else if(x=="Broken Leaf"){
                                                document.getElementById("grade_list").style.display = "block";
                                                 document.getElementById("broken_leaf_grade").style.display = "block";
                                                 document.getElementById("dust_grade").style.display = "none";
                                                 document.getElementById("fannings_grade").style.display = "none";
                                                 document.getElementById("whole_leaf_grade").style.display = "none";
                                                  document.getElementById("dust_grade").value = "";
                                                
                                                 document.getElementById("fannings_grade").value = "";
                                                 document.getElementById("whole_leaf_grade").value = "";
                                             }
                                            else if(x == "Fannings"){
                                                document.getElementById("grade_list").style.display = "block";
                                                 document.getElementById("fannings_grade").style.display = "block";
                                                 document.getElementById("dust_grade").style.display = "none";
                                                 document.getElementById("broken_leaf_grade").style.display = "none";
                                                 document.getElementById("whole_leaf_grade").style.display = "none";
                                                  document.getElementById("dust_grade").value = "";
                                                 document.getElementById("broken_leaf_grade").value = "";
                                                 
                                                 document.getElementById("whole_leaf_grade").value = "";
                                            }
                                            else if(x == "Whole Leaf"){
                                                document.getElementById("whole_leaf_grade").style.display = "block";
                                                document.getElementById("grade_list").style.display = "block";
                                                 document.getElementById("fannings_grade").style.display = "none";
                                                 document.getElementById("dust_grade").style.display = "none";
                                                 document.getElementById("broken_leaf_grade").style.display = "none";
                                                  document.getElementById("dust_grade").value = "";
                                                 document.getElementById("broken_leaf_grade").value = "";
                                                 document.getElementById("fannings_grade").value = "";
                                                
                                            }
                                       }
                                       </script>

                                        <td style="display:none" id="grade_list">Grade</td>
                                        <td>
                                            <select style="display:none" class="select_grade" name="grade[]" id="fannings_grade">
                                                    <option value="">None</option>  
                                              
                                                <option value="GOF">GOF</option>
                                                 <option value="GOF1">GOF1</option>
                                                <option value="FOF">FOF</option>
                                                <option value="FOF1">FOF1</option>
                                                <option value="BOPF">BOPF</option>
                                                <option value="BOPF1">BOPF1</option>
                                                
                                                    
                                            </select>
                                         <!--  // Broken broken
                                            // FP 
                                            // BPS
                                            // PEKOE
                                            // BOPL
                                            // BOP
                                            // BOP1
                                            // BOPSM
                                            // BOPSM1
                                            // BPSM
                                             BPSM1
                                             --> 
                                            <select style="display:none" class="select_grade" name="grade[]" id="broken_leaf_grade">
                                                    <option value="">None</option>  
                                                    <option value="BOP">BOP</option>
                                                <option value="BOP1">BOP1</option>
                                                <option value="GFBOP">GFBOP</option>
                                                <option value="GFBOP1">GFBOP1</option>
                                                <option value="BPS">BPS</option>
                                                 <option value="BPS1">BPS1</option>
                                                <option value="GBOP">GBOP</option>
                                                <option value="GBOP1">GBOP1</option>
                                                <option value="FBOP">FBOP</option>
                                                <option value="FBOP1">FBOP1</option>
                                                <option value="BOPSM">BOPSM</option>
                                                
                                              




                                            </select>
                                             
                                             <!-- Whole Leaf 
                                             
                                             
                                             -->
                                             <select style="display:none" class="select_grade" name="grade[]" id="whole_leaf_grade">
                                                 <option value="">None</option>
                                                  <option value="OP">OP</option>
                                                 <option value="OP1">OP1</option>
                                                 <option value="FP">FP</option>
                                                 <option value="FP1">FP</option>
                                                  <option value="FOP">FOP</option>
                                                  <option value="FOP1">FOP1</option>
                                                   <option value="GFOP">GFOP</option>
                                                 <option value="GFOP1">GFOP1</option>
                                                 <option value="TGFOP">TGFOP</option>
                                                 <option value="TGFOP1">TGFOP1</option>
                                                 <option value="FTGFOP">FTGFOP</option>
                                                 
                                                
                                                
                                                


                                             </select>
                                             
                                             
                                            <!-- 
                                            1. Dust
                                            2.D1
                                            3.PD
                                            4.PD1
                                            5.CD
                                            6.CD1
                                            7.GD
                                            8.SRD
                                            9.FD
                                            10.SFD    
                                            -->
                                                
                                                    <select style="display:none" id="dust_grade"  class="select_grade"  name="grade[]" >
                                                            <option value="" >None</option>
                                                             <option value="OD">OD</option>
                                                              <option value="FD">FD</option>
                                                              <option value="FD1">FD1</option>
                                                                <option value="OPD">OPD</option>
                                                                <option value="OPD1">OPD1</option>
                                                                   <option value="OCD">OCD</option>
                                                                   <option value="OCD1">OCD1</option>
                                                                    <option value="BOPD">BOPD</option>
                                                                     <option value="BOPD1">BOPD1</option>
                                                                        <option value="BOPFD">BOPFD</option>
                                                                        <option value="BOPFD1">BOPFD1</option>
                                                                      
                                                                            <option value="D_A">D-A</option>
                                                                            <option value="SPL_DUST">SPL DUST</option>
                                                                            <option value="G_DUST">G-DUST</option>
                                                                           

                                                                            

                                                                                
                                                    
                                                                </select>
                                                        <span class="focus-input100"></span>
                                                   
                                        </td>
                                    </tr>
                                     <tr>
                                        <td>BTT Purchase</td>
                                        <td><input type="radio" name="purchase" id="btt" value="btt" required="required" onclick="cal_final_rate()"></td>
                                        
                                         <td>GTC Purchase</td>
                                        <td><input type="radio" name="purchase" id="gtc" value="gtc" required="required" onclick="cal_final_rate()"></td>
                                       
                                            
                                    </tr>  
                                    
                                    
                                    <tr>
                                       <td>Rate</td>
                                        <td>
                                                <div class="wrap-input100 validate-input" >
                                                    <input class="input100" type="number" id="enterRate"  name="input_rate" oninput="cal_final_rate()" placeholder="Enter Rate" min="0" required="required" >
                                                        <span class="focus-input100"></span>
                                                        
                                                    </div>
                                        </td>
                                    </tr>

                                    <script>
                                        function cal_final_rate(){
                                            var enteredRate = parseInt(document.getElementById("enterRate").value);
                                           if(document.getElementById("btt").checked){
                                              var finalRate = enteredRate + 20
                                            document.getElementById("finalRate").value = finalRate;
                                           }
                                           else if(document.getElementById("gtc").checked) {
                                           
                                            document.getElementById("finalRate").value = enteredRate;
                                           }

                                        }
                                    </script>    
                                     <tr>
                                       <td>Final Rate</td>
                                        <td>
                                                <div class="wrap-input100 validate-input" >
                                                    <input class="input100" type="number" id="finalRate" value="0"  name="rate" placeholder="Final Rate" min="0" required="required" readonly>
                                                        <span class="focus-input100"></span>
                                                        
                                                    </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Bag Size (in Kgs)</td>
                                        <td>
                                                <div class="wrap-input100 validate-input" >
                                                    <input class="input100" type="number" step="0.01" id="kg_bag" name="kg_bag" placeholder="kg/bag" min="0" oninput="call_Shortage()" required="required">
                                                        <span class="focus-input100"></span>
                                                        
                                                    </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="color:blue">Input No of Bags </td>
                                        <td>
                                            <div class="wrap-input100 validate-input" >
                                                <input class="input100" type="number" step="0.01" id="no_bag_1" name="inp_bag" placeholder="No of Bags" min="0" oninput="call_Shortage()" required="required">
                                                <span class="focus-input100"></span> 
                                            </div>
                                        </td>
                                        </tr>
                                       
                                    <tr>
                                            <tr>
                                                    <td>Shortage</td>
                                                    <td>
                                                        <div class="wrap-input100 validate-input" >
                                                            <input class="input100" type="number"  id="shortage" value="0" name="shortage" min="0" placeholder="Shortage" oninput="call_Shortage()">
                                                            <span class="focus-input100"></span>
                                                            
                                                        </div>
                                                    </td>
                                                    </tr>
                                                   
                                                <tr>
                                    <tr>
                                       <td>No of bags</td>
                                        <td>
                                            <div class="wrap-input100 validate-input" >
                                                <input class="input100"  type="number" step="0.01" id="no_bag" name="no_bag" placeholder="No of Bags" readonly>
                                                <span class="focus-input100"></span>
                                                
                                            </div>
                                        </td>
                                        </tr>
                                        <tr>
                                            <td>Total</td>
                                            <td>
                                                <div class="wrap-input100 validate-input" >
                                                    <input class="input100" type="number" step="0.01" id="total" name="total" placeholder="Total" readonly="">
                                                    <span class="focus-input100"></span>
                                                    
                                                </div>
                                            </td>
                                            </tr>
                                </table>
                                     <table width="700px">
            <tr>
                <th colspan="2">Dry Leaf</th>
                <th colspan="2">Infusion</th>
                <th colspan="2">Liquor</th>
            </tr>
            <tr style="margin-top: 20px">
                <td ><input type="checkbox" name="dry_leaf[]" value="Twisted"></td>
                <td >Twisted</td>
                 <td ><input type="checkbox" name="infusion[]" value="Bright"></td>
                <td >Bright</td>
                <td><input type="checkbox" name="liquor[]" value="Body/Gutty"></td>
                <td>Body/Gutty</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="dry_leaf[]" value="Stalky"></td>
                <td>Stalky</td>
                <td><input type="checkbox" name="infusion[]" value="Coppery"></td>
                <td>Coppery</td>
                <td><input type="checkbox" name="liquor[]" value="Creamy"></td>
                <td>Creamy</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="dry_leaf[]" value="Long"></td>
                <td>Long</td>
                 <td><input type="checkbox" name="infusion[]" value="Fair"></td>
                <td>Fair</td>
                <td><input type="checkbox" name="liquor[]" value="Flat"></td>
                <td>Flat</td>
            </tr>
             <tr>
                <td><input type="checkbox" name="dry_leaf[]" value="Stylish"></td>
                <td>Stylish</td>
                <td><input type="checkbox" name="infusion[]" value="Dull"></td>
                <td>Dull</td>
                <td><input type="checkbox" name="liquor[]" value="Fruity"></td>
                <td>Fruity</td>
            </tr>
             <tr>
                <td><input type="checkbox" name="dry_leaf[]" value="Neat"></td>
                <td>Neat</td>
                <td><input type="checkbox" name="infusion[]" value="Black spots"></td>
                <td>Black spots</td>
                <td><input type="checkbox" name="liquor[]" value="High fired"></td>
                <td>High fired</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="checkbox" name="infusion[]" value="Red"></td>
                <td>Red</td>
                <td><input type="checkbox" name="liquor[]" value="Harsh"></td>
                <td>Harsh</td>
            </tr>
             <tr>
                <td></td>
                <td></td>
                <td><input type="checkbox" name="infusion[]" value="Green"></td>
                <td>Green</td>
                <td><input type="checkbox" name="liquor[]" value="Coarse"></td>
                <td>Coarse</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                 <td><input type="checkbox" name="infusion[]" value="Wild"></td>
                <td>Wild</td>
                <td><input type="checkbox" name="liquor[]" value="Pungent"></td>
                <td>Pungent</td>
            </tr>
            <tr>
               <td></td>
                <td></td>
                 <td><input type="checkbox" name="infusion[]" value="Mixed"></td>
                <td>Mixed</td>
                <td></td>
                <td></td>
            </tr>
           
            
            
           
            
        </table>
                                    <table>
                                       
                                    <tr>
                                            
                                        <td>
                                            <div class="container-login100-form-btn">
                                                <a style="text-decoration: none;background-color: #333945;" class="login100-form-btn" href="homepage.php">Home</a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="container-login100-form-btn">
                                                <button class="login100-form-btn" type="submit" name="orthodox_form"  >
                                                    Submit
                                                </button>
                                            </div>
                                        </td>
                                        
                                    </tr>
                                   
                                </table>
                            </div>
                            </form>s
                         
                        </div>
                    </div>
                </div>
                
                
            
                
            <!--===============================================================================================-->	
                <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
            <!--===============================================================================================-->
                <script src="vendor/bootstrap/js/popper.js"></script>
                <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
            <!--===============================================================================================-->
                <script src="vendor/select2/select2.min.js"></script>
            <!--===============================================================================================-->
                <script src="vendor/tilt/tilt.jquery.min.js"></script>
                <script >
                    $('.js-tilt').tilt({
                        scale: 1.1
                    })
                </script>
            <!--===============================================================================================-->
                <script src="js/main.js"></script>
   
    </body>
</html>
                <?php } ?>
