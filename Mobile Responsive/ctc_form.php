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
        <title>CTC Form</title>
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
             

        function call_Shortage(){
            var no1 = parseFloat(document.getElementById("no_bag_1").value);
            var short = 0;
            var total =0;
            short = parseFloat(document.getElementById("shortage").value);
            var kg_bag = parseFloat(document.getElementById("kg_bag").value);
           
                total = (no1 * kg_bag) - short;
                f_no_bag = total/kg_bag;
                    
           

            
            document.getElementById("total").value = total.toFixed(2);
            document.getElementById("no_bag").value = f_no_bag;
            
        }
        </script>
    </head>
    <body>
        
    
        
         <div class="limiter">
                    <div class="container-login100">
					<div class="wrap-login100">
                          <div class="row mt-5 justify-content-center" data-aos="fade-up">
					<div class="col-lg-10">
                        
            
                            <form class="login100-form validate-form" name="shakeit" method="POST" action="insert_ctc.php">
                              
                                <span class="login100-form-title">
                                 Ctc Inventory 
                                </span>
                                <div class="table-div">
                                <table>
                                      
                                    <tr>
                                        <td>Invoice</td>
                                        <td>
                                            <div class="wrap-input100 validate-input" >
                                                    <input class="input100" type="text" name="invoice" placeholder="Invoice" required="required" >
                                                    <span class="focus-input100"></span>
                                                    
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Date</td>
                                            <td>
                                                <div class="wrap-input100 validate-input" >
                                                        <input class="input100" type="date" name="date" placeholder="Date" required="required" >
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
                                       <td >Choose Grade Type</td>
                                       <td style="margin-left: 20px;" >
                                       
                                            <select id="id1"  class="select_grade" name="g"  onchange="openGrade()" required="required" >
                                                <option value="">None</option>  
                                                <option value="Dust">Dust</option>
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
                                                 document.getElementById("broken_leaf_grade").value = "";
                                                 document.getElementById("fannings_grade").value = "";
                                             }
                                             else if(x=="Broken Leaf"){
                                                document.getElementById("grade_list").style.display = "block";
                                                 document.getElementById("broken_leaf_grade").style.display = "block";
                                                 document.getElementById("dust_grade").style.display = "none";
                                                 document.getElementById("fannings_grade").style.display = "none";
                                                 document.getElementById("dust_grade").value = "";
                                                 document.getElementById("fannings_grade").value = "";
                                             }
                                            else if(x == "Fannings"){
                                                document.getElementById("grade_list").style.display = "block";
                                                 document.getElementById("fannings_grade").style.display = "block";
                                                 document.getElementById("dust_grade").style.display = "none";
                                                 document.getElementById("broken_leaf_grade").style.display = "none";
                                                 document.getElementById("dust_grade").value= "";
                                                 document.getElementById("broken_leaf_grade").value = "";
                                            }
                                       }
                                       </script>

                                        <td style="display:none; margin-left: 10px;" id="grade_list">Grade</td>
                                        <td>
                                            <select style="display:none;margin-left: 10px;" class="select_grade" name="grade[]" id="fannings_grade">
                                                <option value="">None</option>  
                                                <option value="OF">OF</option>
                                                 <option value="OF1">OF1</option>
                                                <option value="PF">PF</option>
                                                <option value="PF1">PF1</option>
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
                                            <select style="display:none" class="select_grade" name="grade[]" id="broken_leaf_grade" >
                                                <option value="">None</option>  
                                                <option value="FP">FP</option>
                                                <option value="BP">BP</option>
                                                <option value="BP1">BP1</option>
                                                <option value="BPS">BPS</option>
                                                <option value="PEKOE">PEKOE</option>
                                                <option value="BOPL">BOPL</option>
                                                <option value="BOPL1">BOPL1</option>
                                                <option value="BOP">BOP</option>
                                                <option value="BOP1">BOP1</option>
                                                <option value="BOPSM">BOPSM</option>
                                                <option value="BOPSM1">BOPSM1</option>
                                                <option value="BPSM">BPSM</option>
                                                <option value="BPSM1">BPSM1</option>




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
                                                
                                                    <select style="display:none"  class="select_grade"  name="grade[]"  id="dust_grade" >
                                                            <option value="" >None</option>
                                                                <option value="CD">CD</option>
                                                                   <option value="CD1">CD1</option>
                                                                    <option value="D">D</option>
                                                                        <option value="D1">D1</option>
                                                                        <option value="PD">PD</option>
                                                                            <option value="PD1">PD1</option>
                                                                            <option value="GD">GD</option>
                                                                            <option value="SRD">SRD</option>
                                                                            <option value="SRD1">SRD1</option>
                                                                            <option value="FD">FD</option>
                                                                            <option value="SFD">SFD</option>

                                                                            

                                                                                
                                                    
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
                                                    <input class="input100" type="number" step="0.01" id="kg_bag" name="kg_bag" placeholder="kg/bag" min="0" oninput="call_Shortage()" required="required" >
                                                        <span class="focus-input100"></span>
                                                        
                                                    </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="color:blue">Input No of Bags </td>
                                        <td>
                                            <div class="wrap-input100 validate-input" >
                                                <input class="input100" type="text"  id="no_bag_1" name="inp_bag" placeholder="No of Bags" min="0" oninput="call_Shortage()"  required="required">
                                                <span class="focus-input100"></span> 
                                            </div>
                                        </td>
                                        </tr>
                                       
                                    <tr>
                                            <tr>
                                                    <td>Shortage</td>
                                                    <td>
                                                        <div class="wrap-input100 validate-input" >
                                                            <input class="input100" type="number"  id="shortage" value="0" step="0.01" name="shortage" placeholder="Shortage" min="0" oninput="call_Shortage()">
                                                            <span class="focus-input100"></span>
                                                            
                                                        </div>
                                                    </td>
                                                    </tr>
                                                   
                                                <tr>
                                    <tr>
                                       <td>No bag</td>
                                        <td>
                                            <div class="wrap-input100 validate-input" >
                                                <input class="input100"  type="number" step="0.5" id="no_bag" name="no_bag" placeholder="No of Bags" readonly>
                                                <span class="focus-input100"></span>
                                                
                                            </div>
                                        </td>
                                        </tr>
                                        <tr>
                                            <td>Total</td>
                                            <td>
                                                <div class="wrap-input100 validate-input" >
                                                    <input class="input100" type="number" step="0.01" id="total" name="total" placeholder="Total" readonly>
                                                    <span class="focus-input100"></span>
                                                    
                                                </div>
                                            </td>
                                            </tr>
                                </table>
                                    <table  width="700px">
            <tr>
                <th colspan="2">Dry Leaf</th>
                <th colspan="2">Infusion</th>
                <th colspan="2">Liquor</th>
            </tr>
            <tr style="margin-top: 20px">
                <td ><input type="checkbox" name="dry_leaf[]" value="Black"></td>
                <td >Black</td>
                 <td ><input type="checkbox" name="infusion[]" value="Bright"></td>
                <td >Bright</td>
                <td><input type="checkbox" name="liquor[]" value="Reddish"></td>
                <td>Reddish</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="dry_leaf[]" value="Brown"></td>
                <td>Brown</td>
                <td><input type="checkbox" name="infusion[]" value="Coppery"></td>
                <td>Coppery</td>
                <td><input type="checkbox" name="liquor[]" value="Thick"></td>
                <td>Thick</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="dry_leaf[]" value="Blackish Brown"></td>
                <td>Blackish Brown</td>
                 <td><input type="checkbox" name="infusion[]" value="Fair"></td>
                <td>Fair</td>
                <td><input type="checkbox" name="liquor[]" value="Thin"></td>
                <td>Thin</td>
            </tr>
             <tr>
                <td><input type="checkbox" name="dry_leaf[]" value="Grey"></td>
                <td>Grey</td>
                <td><input type="checkbox" name="infusion[]" value="Dull"></td>
                <td>Dull</td>
                <td><input type="checkbox" name="liquor[]" value="Smokey"></td>
                <td>Smokey</td>
            </tr>
             <tr>
                <td><input type="checkbox" name="dry_leaf[]" value="Large"></td>
                <td>Large</td>
                <td><input type="checkbox" name="infusion[]" value="Black spots"></td>
                <td>Black spots</td>
                <td><input type="checkbox" name="liquor[]" value="High fired"></td>
                <td>High fired</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="dry_leaf[]" value="Medium Size"></td>
                <td>Medium Size</td>
                <td><input type="checkbox" name="infusion[]" value="Red"></td>
                <td>Red</td>
                <td><input type="checkbox" name="liquor[]" value="Strong"></td>
                <td>Strong</td>
            </tr>
             <tr>
                <td><input type="checkbox" name="dry_leaf[]" value="Small Size"></td>
                <td>Small Size</td>
                <td><input type="checkbox" name="infusion[]" value="Green"></td>
                <td>Green</td>
                <td><input type="checkbox" name="liquor[]" value="Mellow"></td>
                <td>Mellow</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="dry_leaf[]" value="Powdery"></td>
                <td>Powdery</td>
                 <td><input type="checkbox" name="infusion[]" value="Wild"></td>
                <td>Wild</td>
                <td><input type="checkbox" name="liquor[]" value="Bitter"></td>
                <td>Bitter</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="dry_leaf[]" value="Clean"></td>
                <td>Clean</td>
                 <td><input type="checkbox" name="infusion[]" value="Mixed"></td>
                <td>Mixed</td>
                <td><input type="checkbox" name="liquor[]" value="Wild"></td>
                <td>Wild</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="dry_leaf[]" value="Fairly Clean"></td>
                <td>Fairly Clean</td>
                 <td></td>
                <td></td>
                 <td><input type="checkbox" name="liquor[]" value="Yellow"></td>
                <td>Yellow</td>
            </tr>
             <tr>
                <td><input type="checkbox" name="dry_leaf[]" value="Flaky"></td>
                <td>Flaky</td>
                 <td></td>
                <td></td>
                 <td><input type="checkbox" name="liquor[]" value="Y + R"></td>
                <td>Y + R</td>
            </tr>
             <tr>
                 <td></td>
                <td></td>
                 <td></td>
                <td></td>
                 <td><input type="checkbox" name="liquor[]" value="Bright"></td>
                <td>Bright</td>
            </tr>
            
            
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
                                                <button class="login100-form-btn" type="submit" name="ctc_form" value="ctc"   >
                                                    Submit
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                   
                                </table>
                            </div>
                            </form>
                         
                        </div>
                    </div>
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
    