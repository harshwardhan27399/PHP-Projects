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
$upd_srn = 0;
if(isset($_POST['edit_entry'])){
     $start_date = $_POST['d1'];
    $end_date = $_POST['d2'];
   
   $upd_srn = $_POST['upd_srn'];
   
    
    $srno = $upd_srn;
    $invoice = "";
    $inv_Date = "";
    $garden = "";
    $grade_type="";
    $grade_size ="";
    $grade = "";
    $rate = 0;
    $kg_bag = 0;
    $no_bag = 0;
    $shortage = 0;
    $total = 0;
    $dry_leaf_desc = "";
    $infusion_desc = "";
    $liquor_desc = "";
    $purchaseType= '';

    try {
        $query = "select invoice,srno,date,Garden,grade_size,grade_type,grade,puchaseType,rate,no_bag,shortage,kg_bag,total,dry_leaf,infusion,liquor from inventory where srno='$srno'  ";
        $result = mysqli_query($conn,$query);
        $num = mysqli_num_rows($result);
        if($num == 0){
            echo "No rows found";
        }
        else {
            $row = mysqli_fetch_assoc($result);
            $invoice = $row['invoice'];
             $inv_Date = $row['date'];
              $garden = $row['Garden'];
               $grade_type = $row['grade_type'];
                $grade_size = $row['grade_size'];
                echo $grade_size;
                 $grade = $row['grade'];
                  $editRate = $row['rate'];
                   $kg_bag = $row['kg_bag'];
                    $no_bag = $row['no_bag'];
                    $purchaseType = $row['puchaseType'];
                   
                     $shortage = $row['shortage'];
                      $total = $row['total'];
                       $dry_leaf_desc = $row['dry_leaf'];
                        $infusion_desc = $row['infusion'];
                         $liquor_desc = $row['liquor'];
                         
                         if($purchaseType == "btt"){
                             $rate = $editRate - 20 ;
                         }
                         else{
                             $rate = $editRate;
                         }
        }
    } catch (\Throwable $th) {
        //throw $th;
    }
    }
    ?>
   
   <!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/util.css">
        <link rel="stylesheet" type="text/css" href="css/main_insert.css">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Edit Entry</title>
        
        <script>
        function call() {
            
           var purchaseType = document.getElementById("purchaseType").value;
          // alert(purchaseType);
           var enteredRate = parseInt(document.getElementById("enterRate").value);
           
           if(purchaseType == 'btt'){
               document.getElementById("btt").checked = true; 
               document.getElementById("gtc").checked = false;
               var finalRate = enteredRate + 20;
                document.getElementById("finalRate").value = finalRate;
           }
           else if(purchaseType == 'gtc')
           {
                document.getElementById("gtc").checked = true;
                 document.getElementById("btt").checked = false; 
                document.getElementById("finalRate").value = enteredRate;
           }
         
            

            var grade_type = document.getElementById("grade_type").value;
            document.getElementById("select_grade_type").value = grade_type;
            
            var grade = document.getElementById("grade").value;
            
            if(document.getElementById("select_grade_type").value === ("ctc")){
                var grade_size = document.getElementById("grade_size").value;
                document.getElementById("id1").value = grade_size;
                document.getElementById("id1").style.display = "block";
                document.getElementById("id2").value = "";
                document.getElementById("id2").style.display = "none";
                document.getElementById("id3").value = "";
                document.getElementById("id3").style.display = "none";
                
                if(document.getElementById("id1").value === ("Dust")){
                
                document.getElementById("grade_list").style.display = "block";
                document.getElementById("ctc_dust_grade").style.display = "block";
                document.getElementById("ctc_dust_grade").value = grade;
                
                document.getElementById("ctc_broken_leaf_grade").style.display = "none";
                document.getElementById("ctc_fannings_grade").style.display = "none";
            }
            else if(document.getElementById("id1").value === ("Broken Leaf")){
                 document.getElementById("grade_list").style.display = "block";
                 document.getElementById("ctc_broken_leaf_grade").style.display = "block";
                 document.getElementById("ctc_broken_leaf_grade").value = grade;
                 document.getElementById("ctc_dust_grade").style.display = "none";
                 document.getElementById("ctc_fannings_grade").style.display = "none";
            }
            else if(document.getElementById("id1").value === ("Fannings"))
            {
                 document.getElementById("grade_list").style.display = "block";
                 document.getElementById("ctc_fannings_grade").style.display = "block";
                 document.getElementById("ctc_fannings_grade").value = grade;
                 document.getElementById("ctc_dust_grade").style.display = "none";
                 document.getElementById("ctc_broken_leaf_grade").style.display = "none";
            }
            }
            else if(document.getElementById("select_grade_type").value === ("orthodox"))
            {
                 var grade_size = document.getElementById("grade_size").value;
                document.getElementById("id2").value = grade_size;
                document.getElementById("id2").style.display = "block";
                document.getElementById("id1").value = "";
                document.getElementById("id1").style.display = "none";
                document.getElementById("id3").value = "";
                document.getElementById("id3").style.display = "none";
                
                if(document.getElementById("id2").value === ("Dust")){
                
                document.getElementById("grade_list").style.display = "block";
                document.getElementById("ortho_dust_grade").style.display = "block";
                document.getElementById("ortho_dust_grade").value = grade;
                
                document.getElementById("ortho_broken_leaf_grade").style.display = "none";
                document.getElementById("ortho_fannings_grade").style.display = "none";
            }
            else if(document.getElementById("id2").value === ("Broken Leaf")){
                 document.getElementById("grade_list").style.display = "block";
                 document.getElementById("ortho_broken_leaf_grade").style.display = "block";
                 document.getElementById("ortho_broken_leaf_grade").value = grade;
                 document.getElementById("ortho_dust_grade").style.display = "none";
                 document.getElementById("ortho_fannings_grade").style.display = "none";
            }
            else if(document.getElementById("id2").value === ("Fannings"))
            {
                 document.getElementById("grade_list").style.display = "block";
                 document.getElementById("ortho_fannings_grade").style.display = "block";
                 document.getElementById("ortho_fannings_grade").value = grade;
                 document.getElementById("ortho_dust_grade").style.display = "none";
                 document.getElementById("ortho_broken_leaf_grade").style.display = "none";
            }
            }
            else if (document.getElementById("select_grade_type").value === ("others"))
           {
            var grade_size = document.getElementById("grade_size").value;
                document.getElementById("id1").value = "";
                document.getElementById("id1").style.display = "none";
                document.getElementById("id2").value = "";
                document.getElementById("id2").style.display = "none";
                document.getElementById("id3").value = grade_size;
                document.getElementById("id3").style.display = "block";

                document.getElementById("ortho_whole_leaf_grade").style.display = "none";
                document.getElementById("ortho_whole_leaf_grade").value = "";
                document.getElementById("ortho_dust_grade").style.display = "none";
                document.getElementById("ortho_dust_grade").value = "";
                document.getElementById("ortho_fannings_grade").style.display = "none";
                document.getElementById("ortho_fannings_grade").value = "";
                document.getElementById("ortho_broken_leaf_grade").style.display = "none";
                document.getElementById("ortho_broken_leaf_grade").value = "";
                document.getElementById("ctc_dust_grade").value = "";
                document.getElementById("ctc_broken_leaf_grade").value = "";
                document.getElementById("ctc_fannings_grade").value = "";
                document.getElementById("ctc_fannings_grade").style.display = "none";
                document.getElementById("ctc_broken_leaf_grade").style.display = "none";
                document.getElementById("ctc_dust_grade").style.display = "none"; 

                 document.getElementById("grade_list").style.display = "block";
                 document.getElementById("others_grade").style.display = "block";
                 document.getElementById("others_grade").value = grade;              
           }
            
            
        }
        
           function call_Shortage(){
            // formual for others 
           
            // input no_bag 
            var input_bag = parseFloat(document.getElementById("input_no_bag").value);
            var short = 0;
            var total =0;
           
             // if shortage 
            short = parseFloat(document.getElementById("shortage").value);
               // input kg_bag 
            var kg_bag = parseFloat(document.getElementById("kg_bag").value);
            var grade = document.getElementById("grade").value;
                if(grade === 'others'){
                    total =  document.getElementById("total").value;
                    input_bag = total/kg_bag;
                    document.getElementById("input_no_bag").value = input_bag.toFixed(2);
                    f_no_bag = input_bag - short;
                    document.getElementById("no_bag").value = f_no_bag.toFixed(2);
                }
                else{
                    total = (input_bag * kg_bag) - short;
                f_no_bag = total/kg_bag;
                document.getElementById("total").value = total;
            document.getElementById("no_bag").value = f_no_bag.toFixed(2);
                }
              
           
            
        }
        </script>
    </head>
    <body onload="call()">
         <div class="limiter">
                    <div class="container-login100">
                        <div class="wrap-login100">
                        <form class="login100-form validate-form" name="shakeit" method="post" action="inventory_update.php" > 

   
 <input type="hidden" id="grade_type" value="<?php echo"".$grade_type ?>">
    <input type="hidden" id="grade_size" value="<?php echo"".$grade_size ?>">
    <input type="hidden" id="grade" value="<?php echo"".$grade ?>">
    <input type="hidden" id="srno" name="srno" value="<?php echo"".$srno; ?>">
      <input type="hidden" name="d1" value="<?php echo"".$start_date ?>">
      <input type="hidden" name="d2" value="<?php echo"".$end_date ?>">
      
      <input type="hidden" id="purchaseType" value ="<?php echo $purchaseType ?>" >
        
        
      <span class="login100-form-title">
                                 Edit Entry 
                                </span>
                                <div class="table-div">
                                <table>
                                      
                                    <tr>
                                        <td>Invoice</td>
                                        <td>
                                            <div class="wrap-input100 validate-input" >
                                                <input class="input100" type="text" name="invoice" value="<?php echo"".$invoice ?>" required="required">
                                                    <span class="focus-input100"></span>
                                                    
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Date</td>
                                            <td>
                                                <div class="wrap-input100 validate-input" >
                                                        <input class="input100" type="date" name="date" value="<?php echo"".$inv_Date ?>" required="required">
                                                        <span class="focus-input100"></span>
                                                        
                                                    </div>
                                        </td>
                                        </tr>
                                            
                                    
                                    <tr>
                                        <td>Garden</td>
                                        <td>
                                                <div class="wrap-input100 validate-input" >
                                                        <input class="input100" type="text" name="garden" value="<?php echo"".$garden ?>" required="required">
                                                        <span class="focus-input100"></span>
                                                        
                                                    </div>
                                        </td>
                                    </tr>
                                    <tr>
                                    <td>Choose Grade Type</td>
                                    <td><select id="select_grade_type" class="select_grade" name="grade_type" onchange="openGrade()" required="required" >
                                        
                                        <option value="ctc">ctc</option>
                                        <option value="orthodox">orthodox</option>
                                        <option value="others">others</option>
                                    </select></td>

                                    </tr>
                                    <tr>
                                       <td> Grade Type</td>
                                       <td>
                                       
                                           <select style="display: none" id="id1"  class="select_grade" name="grade_size[]" onchange="openGrade()" >
                                                <option value="">None</option>  
                                                <option value="Dust">Dust</option>
                                                  <option value="Broken Leaf">Broken Leaf</option>
                                                   <option value="Fannings">Fannings</option>                     
                                            
                                                        </select>
                                           <select style="display: none" id="id2"  class="select_grade" name="grade_size[]" onchange="openGrade()" >
                                                <option value="">None</option>  
                                                <option value="Dust">Dust</option>
                                                  <option value="Broken Leaf">Broken Leaf</option>
                                                  <option value="Whole Leaf">Whole Leaf</option>
                                                   <option value="Fannings">Fannings</option>                     
                                            
                                                        </select>
                                                         <select style="display: none" id="id3"  class="select_grade" name="grade_size[]" onchange="openGrade()" >
                                                            <option value="">None</option>  
                                                            <option value="others">others</option>            
                                                        </select>
                                                <span class="focus-input100"></span>
                                                
                                                
                                                
                                            
                                       </td>
                                       <script>
                                       function openGrade(){
                                        if(document.getElementById("select_grade_type").value === ("ctc")){

                                            document.getElementById("id1").style.display = "block";
                                          
                                          
                                           
                                             var x = document.getElementById("id1").value;
                                             
                                             // all fields of orthodox grade sizes and grades making null 
                                                document.getElementById("id2").value = "";
                                                document.getElementById("id2").style.display = "none";
                                                document.getElementById("ortho_whole_leaf_grade").style.display = "none";
                                                document.getElementById("ortho_whole_leaf_grade").value = "";
                                                document.getElementById("ortho_dust_grade").style.display = "none";
                                                 document.getElementById("ortho_dust_grade").value = "";
                                                 document.getElementById("ortho_fannings_grade").style.display = "none";
                                                 document.getElementById("ortho_fannings_grade").value = "";
                                                 document.getElementById("ortho_broken_leaf_grade").style.display = "none";
                                                 document.getElementById("ortho_broken_leaf_grade").value = "";
                                                 document.getElementById("id3").value = "";
                                                 document.getElementById("id3").style.display = "none";
                                                 document.getElementById("others_grade").style.display = "none";
                                                 document.getElementById("others_grade").value = "";
                                             
                                             
                                            if (x == "Dust") 
                                                {
                                               document.getElementById("grade_list").style.display = "block";
                                                 document.getElementById("ctc_dust_grade").style.display = "block";
                                                 document.getElementById("ctc_broken_leaf_grade").style.display = "none";
                                                 document.getElementById("ctc_broken_leaf_grade").value = "";
                                                 document.getElementById("ctc_fannings_grade").style.display = "none";
                                                 document.getElementById("ctc_fannings_grade").value = "";
                                             }
                                             else if(x=="Broken Leaf"){
                                                document.getElementById("grade_list").style.display = "block";
                                                 document.getElementById("ctc_broken_leaf_grade").style.display = "block";
                                                 document.getElementById("ctc_dust_grade").style.display = "none";
                                                 document.getElementById("ctc_dust_grade").value = "";
                                                 document.getElementById("ctc_fannings_grade").style.display = "none";
                                                 document.getElementById("ctc_fannings_grade").value = "";
                                             }
                                            else if(x == "Fannings"){
                                                document.getElementById("grade_list").style.display = "block";
                                                 document.getElementById("ctc_fannings_grade").style.display = "block";
                                                 document.getElementById("ctc_dust_grade").style.display = "none";
                                                 document.getElementById("ctc_dust_grade").value = "";
                                                 document.getElementById("ctc_broken_leaf_grade").style.display = "none";
                                                 document.getElementById("ctc_broken_leaf_grade").value = "";
                                            }
                                       }
                                       else if (document.getElementById("select_grade_type").value === ("orthodox"))
                                       {
                                           document.getElementById("id1").style.display = "none";
                                            document.getElementById("id2").style.display = "block";
                                            var x = document.getElementById("id2").value;
                                            
                                            // all fields of ctc grade sizes and grades making null 
                                            document.getElementById("id1").value = "";
                                            document.getElementById("ctc_dust_grade").value = "";
                                            document.getElementById("ctc_broken_leaf_grade").value = "";
                                            document.getElementById("ctc_fannings_grade").value = "";
                                            document.getElementById("ctc_fannings_grade").style.display = "none";
                                            document.getElementById("ctc_broken_leaf_grade").style.display = "none";
                                            document.getElementById("ctc_dust_grade").style.display = "none";
                                            document.getElementById("id3").value = "";
                                            document.getElementById("id3").style.display = "none";
                                            document.getElementById("others_grade").style.display = "none";
                                            document.getElementById("others_grade").value = "";
                                                
                                            if (x == "Dust") 
                                                {
                                               document.getElementById("grade_list").style.display = "block";
                                                 document.getElementById("ortho_dust_grade").style.display = "block";
                                                 document.getElementById("ortho_broken_leaf_grade").style.display = "none";
                                                 document.getElementById("ortho_broken_leaf_grade").value = "";
                                                 document.getElementById("ortho_fannings_grade").style.display = "none";
                                                 document.getElementById("ortho_fannings_grade").value = "";
                                                 document.getElementById("ortho_whole_leaf_grade").style.display = "none";
                                                 document.getElementById("ortho_whole_leaf_grade").value = "";
                                             }
                                             else if(x=="Broken Leaf"){
                                                document.getElementById("grade_list").style.display = "block";
                                                 document.getElementById("ortho_broken_leaf_grade").style.display = "block";
                                                 document.getElementById("ortho_dust_grade").style.display = "none";
                                                 document.getElementById("ortho_dust_grade").value = "";
                                                 document.getElementById("ortho_fannings_grade").style.display = "none";
                                                 document.getElementById("ortho_fannings_grade").value = "";
                                                 document.getElementById("ortho_whole_leaf_grade").style.display = "none";
                                                 document.getElementById("ortho_whole_leaf_grade").value = "";
                                             }
                                            else if(x == "Fannings"){
                                                document.getElementById("grade_list").style.display = "block";
                                                 document.getElementById("ortho_fannings_grade").style.display = "block";
                                                 document.getElementById("ortho_dust_grade").style.display = "none";
                                                 document.getElementById("ortho_dust_grade").value = "";
                                                 document.getElementById("ortho_broken_leaf_grade").style.display = "none";
                                                  document.getElementById("ortho_broken_leaf_grade").value = "";
                                                 document.getElementById("ortho_whole_leaf_grade").style.display = "none";
                                                 document.getElementById("ortho_whole_leaf_grade").value = "";
                                            }
                                            else if(x == "Whole Leaf"){
                                                 document.getElementById("grade_list").style.display = "block";
                                                document.getElementById("ortho_whole_leaf_grade").style.display = "block";
                                               
                                                 document.getElementById("ortho_fannings_grade").style.display = "none";
                                                 document.getElementById("ortho_fannings_grade").value = "";
                                                 document.getElementById("ortho_dust_grade").style.display = "none";
                                                 document.getElementById("ortho_dust_grade").value = "";
                                                 document.getElementById("ortho_broken_leaf_grade").style.display = "none";
                                                  document.getElementById("ortho_broken_leaf_grade").value = "";
                                            }
                                       }
                                       else if (document.getElementById("select_grade_type").value === ("others"))
           {
            var grade_size = document.getElementById("grade_size").value;
                document.getElementById("id1").value = "";
                document.getElementById("id1").style.display = "none";
                document.getElementById("id2").value = "";
                document.getElementById("id2").style.display = "none";
                document.getElementById("id3").value = grade_size;
                document.getElementById("id3").style.display = "block";

                document.getElementById("ortho_whole_leaf_grade").style.display = "none";
                document.getElementById("ortho_whole_leaf_grade").value = "";
                document.getElementById("ortho_dust_grade").style.display = "none";
                document.getElementById("ortho_dust_grade").value = "";
                document.getElementById("ortho_fannings_grade").style.display = "none";
                document.getElementById("ortho_fannings_grade").value = "";
                document.getElementById("ortho_broken_leaf_grade").style.display = "none";
                document.getElementById("ortho_broken_leaf_grade").value = "";
                document.getElementById("ctc_dust_grade").value = "";
                document.getElementById("ctc_broken_leaf_grade").value = "";
                document.getElementById("ctc_fannings_grade").value = "";
                document.getElementById("ctc_fannings_grade").style.display = "none";
                document.getElementById("ctc_broken_leaf_grade").style.display = "none";
                document.getElementById("ctc_dust_grade").style.display = "none"; 

                 document.getElementById("grade_list").style.display = "block";
                 document.getElementById("others_grade").style.display = "block";
                 document.getElementById("others_grade").value = grade;              
           }
                                       
                                      
                                   }
                                       </script>

                                        <td style="display:none" id="grade_list">Grade</td>
                                        <td>
                                             <select style="display:none" class="select_grade" name="grade[]" id="others_grade">
                                                     <option value="">None</option>  
                                                <option value="others">others</option>            
                                                    
                                            </select>
                                            <select style="display:none" class="select_grade" name="grade[]" id="ctc_fannings_grade">
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
                                            <select style="display:none" class="select_grade" name="grade[]" id="ctc_broken_leaf_grade">
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
                                                
                                                    <select style="display:none"  class="select_grade"  name="grade[]"  id="ctc_dust_grade" >
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
                                            
                                             <select style="display:none" class="select_grade" name="grade[]" id="ortho_fannings_grade">
                                                    <option value="">None</option>  
                                              
                                                <option value="GOF">GOF</option>
                                                 <option value="GOF1">GOF1</option>
                                                <option value="FOF">FOF</option>
                                                <option value="FOF1">FOF1</option>
                                                <option value="BOPF">BOPF</option>
                                                <option value="BOPF1">BOPF1</option>
                                                
                                                    
                                            </select>
                                             <select style="display:none" class="select_grade" name="grade[]" id="ortho_broken_leaf_grade">
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
                                             <select style="display:none" class="select_grade" name="grade[]" id="ortho_whole_leaf_grade">
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
                                                
                                                    <select style="display:none" id="ortho_dust_grade"  class="select_grade"  name="grade[]" >
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
                                    </tr> <tr>
                                        <td>BTT Purchase</td>
                                        <td><input type="radio" name="purchase" id="btt" value="btt"  required="required" oninput="cal_final_rate()" ></td>
                                        
                                         <td>GTC Purchase</td>
                                        <td><input type="radio" name="purchase" id="gtc"  value="gtc" required="required" oninput="cal_final_rate()" ></td>
                                       
                                            
                                    </tr>  
                                    
                                    
                                    <tr>
                                       <td style="color:Blue">Input Rate</td>
                                        <td>
                                                <div class="wrap-input100 validate-input" >
                                                    <input class="input100" type="number" id="enterRate"  name="input_rate" oninput="cal_final_rate()" value="<?php echo"".$rate ?>" placeholder="Enter Rate" min="0" required="required" >
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
                                                    <input class="input100" type="number" id="finalRate" value=""  name="rate" placeholder="Final Rate" min="0" required="required" readonly>
                                                        <span class="focus-input100"></span>
                                                        
                                                    </div>
                                        </td>
                                    </tr>
                                   
                                    <tr>
                                        <td>Kg per Bag</td>
                                        <td>
                                                <div class="wrap-input100 validate-input" >
                                                    <input class="input100" type="number" id="kg_bag" name="kg_bag" value="<?php echo"".$kg_bag ?>" placeholder="kg/bag" oninput="call_Shortage()" required="required">
                                                        <span class="focus-input100"></span>
                                                        
                                                    </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="color:Blue">Input No of Bags </td>
                                        <td>
                                            <div class="wrap-input100 validate-input" >
                                                <input class="input100" type="text" id="input_no_bag"  name="inp_bag" value="<?php echo"".$no_bag ?>" placeholder="No of Bags" oninput="call_Shortage()" >
                                                <span class="focus-input100"></span> 
                                            </div>
                                        </td>
                                        </tr>
                                       
                                    <tr>
                                            <tr>
                                                    <td>Shortage</td>
                                                    <td>
                                                        <div class="wrap-input100 validate-input" >
                                                            <input class="input100" type="number" step="0.1" id="shortage" value="<?php echo"".$shortage ?>" name="shortage" placeholder="Shortage" oninput="call_Shortage()">
                                                            <span class="focus-input100"></span>
                                                            
                                                        </div>
                                                    </td>
                                                    </tr>
                                                   
                                                <tr>
                                    <tr>
                                       <td>No bag</td>
                                        <td>
                                            <div class="wrap-input100 validate-input" >
                                                <input class="input100"  type="number" step="0.1" id="no_bag" name="no_bag" placeholder="No of Bags" value="<?php echo"".$no_bag ?>" readonly>
                                                <span class="focus-input100"></span>
                                                
                                            </div>
                                        </td>
                                        </tr>
                                        <tr>
                                            <td>Total</td>
                                            <td>
                                                <div class="wrap-input100 validate-input" >
                                                    <input class="input100" type="number" step="0.1" id="total" name="total" value="<?php echo"".$total ?>"  placeholder="Total" readonly>
                                                    <span class="focus-input100"></span>
                                                    
                                                </div>
                                            </td>
                                            </tr>
                                           
                                        <tr>
                                             </table>
                                    <table>
                                        <tr>
                                            <td>Dry Leaf</td>
                                             <td>
                                            <div class="wrap-input100 validate-input" >
                                                <input class="input10"  type="text" name="dry_leaf_desc" placeholder="Dry Leaf Description" value="<?php echo"".$dry_leaf_desc ?>">
                                                <span class="focus-input100"></span>
                                                
                                            </div>
                                        </td>
                                        </tr>
                                         <tr>
                                            <td>Liquor</td>
                                             <td>
                                            <div class="wrap-input100 validate-input" >
                                                <input class="input10"  type="text" name="liquor_desc" placeholder="Liquor Description" value="<?php echo"".$liquor_desc ?>">
                                                <span class="focus-input100"></span>
                                                
                                            </div>
                                        </td>
                                        </tr>
                                        <tr>
                                            <td>Infusion</td>
                                             <td>
                                            <div class="wrap-input100 validate-input" >
                                                <input class="input10"  type="text" name="infusion_desc" placeholder="Infusion Description" value="<?php echo"".$infusion_desc ?>">
                                                <span class="focus-input100"></span>
                                                
                                            </div>
                                        </td>
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
                                                <button class="login100-form-btn" type="submit"  name="inventory_update" >
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
                
    </body>
</html>
<?php } ?>
