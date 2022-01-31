<?php 
include('connection.php');
$brand = $_GET['brand'];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Choose Gardens</title>
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/util.css">
        <link rel="stylesheet" type="text/css" href="css/update_jsp.css">
    </head>
    <body>

 <div class="limiter">
                    <div class="container-login100">
                        <div class="wrap-login100">
                          
                                <form class="login100-form validate-form" action="blending_form.php" method="post">
                            
                                <span class="login100-form-title">
                                    <?php echo"".$brand ?>
                                        
                                </span>

                                <input type="hidden" name="brand" value="<?php echo"".$brand ?>">

                 <!-- Biggest code of my Life-->     
                 
                    <!-- CTC Grades-->
                           <center>
                                <input type="button" id="showCTC" value="CTC GRADES+" onclick="viewCtc()"/></center>
                    
                            <div id="ctc_grades"  style="display: none">     
       
    <center>
        <input type="button" id="showDust" value="DUST GRADES+" onclick="viewDust()"/></center>

        <div id="dust_grades"  style="display: none">
            <!-- CD button-->
            <?php 
            $grade = "cd";
            $msg = "";
            try {
              $sql = "select count(*) as count from inventory where grade='$grade' and grade_type='ctc' ";
              $res = mysqli_query($conn,$sql);
                $num=mysqli_num_rows($res);  
                 if($num==0)
            {
                
            }
            else {
                $row=mysqli_fetch_assoc($res);
                $msg = $row['count'];
               
            }

            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
   
          
           <center>
            <input type="button" id="show" value="CD -><?php echo"".$msg  ?>" onclick="view()"></center>
 <div id="cd"  style="display: none">
           <table align="center" cellpadding="5" cellspacing="2" border="1">
                <tr>
                    <th><b> Check Box</b></th>
                    <th><b>Invoice</b></th>
                    <th><b> Total</b></th>
                    
                    <th><b> Date</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b>Garden</b></th>
                       <th style="font-size: 20px;font-style: italic;"><b>Grade</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Rate</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Bag Size</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b> No of Bag</b></th>
                </tr>
            <?php 
            try {
                 $sql = "select srno,invoice,total,DATE_FORMAT(date,'%d/%m/%Y') as niceDate,Garden,grade,rate,kg_bag,no_bag,dry_leaf,liquor,infusion from inventory where grade='$grade' and grade_type='ctc' order by rate ";
              $result = mysqli_query($conn,$sql);
                 $num = mysqli_num_rows($result);
            if($result->num_rows>0)
	        {
		     while($row = $result->fetch_assoc())
	        {
              ?>
              <tr>
                  <td><input id="check" class="largerCheckbox" type="checkbox" name="cd[]" value="<?php echo"".$row['srno'] ?>"></td>
                  <td><?php echo"".$row['invoice'] ?></td>
                   <td><?php echo"".$row['total'] ?></td>
                  <td><?php echo"".$row['niceDate'] ?></td>
                 
                  <td style="font-weight: bold;"><?php echo"".$row['Garden'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['grade'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['rate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['kg_bag'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['no_bag'] ?></td>
              </tr>
                <tr>
                <th style="backgound-color:#A4B0BD;">Dry Leaf</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['dry_leaf'] ?></td>
               
                <th style="backgound-color:#A4B0BD;">Liquor</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['liquor'] ?></td>
                 <th style="backgound-color:#A4B0BD;">Infusion</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['infusion'] ?></td>
            </tr>
              <?php
            }
        }
            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
               </table>
        </div>  

 <!-- CD1 button-->
            <?php 
            $grade = "cd1";
            $msg = "";
            try {
              $sql = "select count(*) as count from inventory where grade='$grade' and grade_type='ctc' ";
              $res = mysqli_query($conn,$sql);
                $num=mysqli_num_rows($res);  
                 if($num==0)
            {
                
            }
            else {
                $row=mysqli_fetch_assoc($res);
                $msg = $row['count'];
               
            }

            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
   
          
           <center>
            <input type="button" id="show1" value="CD1 -><?php echo"".$msg  ?>" onclick="view1()"></center>
 <div id="cd1"  style="display: none">
           <table align="center" cellpadding="5" cellspacing="2" border="1">
                <tr>
                    <th><b> Check Box</b></th>
                    <th><b>Invoice</b></th>
                    <th><b> Total</b></th>
                    
                    <th><b> Date</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b>Garden</b></th>
                       <th style="font-size: 20px;font-style: italic;"><b>Grade</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Rate</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Bag Size</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b> No of Bag</b></th>
                </tr>
            <?php 
            try {
                 $sql = "select srno,invoice,total,DATE_FORMAT(date,'%d/%m/%Y') as niceDate,Garden,grade,rate,kg_bag,no_bag,dry_leaf,liquor,infusion from inventory where grade='$grade' and grade_type='ctc' order by rate ";
              $result = mysqli_query($conn,$sql);
                 $num = mysqli_num_rows($result);
            if($result->num_rows>0)
	        {
		     while($row = $result->fetch_assoc())
	        {
              ?>
              <tr>
                  <td><input id="check" class="largerCheckbox" type="checkbox" name="cd[]" value="<?php echo"".$row['srno'] ?>"></td>
                  <td><?php echo"".$row['invoice'] ?></td>
                  
                  <td><?php echo"".$row['total'] ?></td>
                  <td><?php echo"".$row['niceDate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['Garden'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['grade'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['rate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['kg_bag'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['no_bag'] ?></td>
              </tr>
                <tr>
                <th style="backgound-color:#A4B0BD;">Dry Leaf</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['dry_leaf'] ?></td>
               
                <th style="backgound-color:#A4B0BD;">Liquor</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['liquor'] ?></td>
                 <th style="backgound-color:#A4B0BD;">Infusion</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['infusion'] ?></td>
            </tr>
              <?php
            }
        }
            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
               </table>
        </div>  


 <!-- D button-->
            <?php 
            $grade = "d";
            $msg = "";
            try {
              $sql = "select count(*) as count from inventory where grade='$grade' and grade_type='ctc' ";
              $res = mysqli_query($conn,$sql);
                $num=mysqli_num_rows($res);  
                 if($num==0)
            {
                
            }
            else {
                $row=mysqli_fetch_assoc($res);
                $msg = $row['count'];
               
            }

            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
   
          
           <center>
            <input type="button" id="show2" value="D -><?php echo"".$msg  ?>" onclick="view2()"></center>
 <div id="d"  style="display: none">
           <table align="center" cellpadding="5" cellspacing="2" border="1">
                <tr>
                    <th><b> Check Box</b></th>
                    <th><b>Invoice</b></th>
                    <th><b> Total</b></th>
                    
                    <th><b> Date</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b>Garden</b></th>
                       <th style="font-size: 20px;font-style: italic;"><b>Grade</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Rate</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Bag Size</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b> No of Bag</b></th>
                </tr>
            <?php 
            try {
                 $sql = "select srno,invoice,total,DATE_FORMAT(date,'%d/%m/%Y') as niceDate,Garden,grade,rate,kg_bag,no_bag,dry_leaf,liquor,infusion from inventory where grade='$grade' and grade_type='ctc' order by rate ";
              $result = mysqli_query($conn,$sql);
                 $num = mysqli_num_rows($result);
            if($result->num_rows>0)
	        {
		     while($row = $result->fetch_assoc())
	        {
              ?>
              <tr>
                  <td><input id="check" class="largerCheckbox" type="checkbox" name="cd[]" value="<?php echo"".$row['srno'] ?>"></td>
                  <td><?php echo"".$row['invoice'] ?></td>
                   <td><?php echo"".$row['total'] ?></td>
                  <td><?php echo"".$row['niceDate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['Garden'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['grade'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['rate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['kg_bag'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['no_bag'] ?></td>
              </tr>
                <tr>
                <th style="backgound-color:#A4B0BD;">Dry Leaf</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['dry_leaf'] ?></td>
               
                <th style="backgound-color:#A4B0BD;">Liquor</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['liquor'] ?></td>
                 <th style="backgound-color:#A4B0BD;">Infusion</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['infusion'] ?></td>
            </tr>
              <?php
            }
        }
            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
               </table>
        </div>  


 <!-- D1 button-->
            <?php 
            $grade = "d1";
            $msg = "";
            try {
              $sql = "select count(*) as count from inventory where grade='$grade' and grade_type='ctc' ";
              $res = mysqli_query($conn,$sql);
                $num=mysqli_num_rows($res);  
                 if($num==0)
            {
                
            }
            else {
                $row=mysqli_fetch_assoc($res);
                $msg = $row['count'];
               
            }

            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
   
          
           <center>
            <input type="button" id="show3" value="D1 -><?php echo"".$msg  ?>" onclick="view3()"></center>
 <div id="d1"  style="display: none">
           <table align="center" cellpadding="5" cellspacing="2" border="1">
                <tr>
                    <th><b> Check Box</b></th>
                    <th><b>Invoice</b></th>
                    <th><b> Total</b></th>
                    
                    <th><b> Date</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b>Garden</b></th>
                       <th style="font-size: 20px;font-style: italic;"><b>Grade</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Rate</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Bag Size</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b> No of Bag</b></th>
                </tr>
            <?php 
            try {
                 $sql = "select srno,invoice,total,DATE_FORMAT(date,'%d/%m/%Y') as niceDate,Garden,grade,rate,kg_bag,no_bag,dry_leaf,liquor,infusion from inventory where grade='$grade' and grade_type='ctc' order by rate ";
              $result = mysqli_query($conn,$sql);
                 $num = mysqli_num_rows($result);
            if($result->num_rows>0)
	        {
		     while($row = $result->fetch_assoc())
	        {
              ?>
              <tr>
                  <td><input id="check" class="largerCheckbox" type="checkbox" name="cd[]" value="<?php echo"".$row['srno'] ?>"></td>
                  <td><?php echo"".$row['invoice'] ?></td>
                   <td><?php echo"".$row['total'] ?></td>
                  <td><?php echo"".$row['niceDate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['Garden'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['grade'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['rate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['kg_bag'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['no_bag'] ?></td>
              </tr>
                <tr>
                <th style="backgound-color:#A4B0BD;">Dry Leaf</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['dry_leaf'] ?></td>
               
                <th style="backgound-color:#A4B0BD;">Liquor</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['liquor'] ?></td>
                 <th style="backgound-color:#A4B0BD;">Infusion</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['infusion'] ?></td>
            </tr>
              <?php
            }
        }
            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
               </table>
        </div>  


 <!-- PD button-->
            <?php 
            $grade = "pd";
            $msg = "";
            try {
              $sql = "select count(*) as count from inventory where grade='$grade' and grade_type='ctc' ";
              $res = mysqli_query($conn,$sql);
                $num=mysqli_num_rows($res);  
                 if($num==0)
            {
                
            }
            else {
                $row=mysqli_fetch_assoc($res);
                $msg = $row['count'];
               
            }

            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
   
          
           <center>
            <input type="button" id="show4" value="PD -><?php echo"".$msg  ?>" onclick="view4()"></center>
 <div id="pd"  style="display: none">
           <table align="center" cellpadding="5" cellspacing="2" border="1">
                <tr>
                    <th><b> Check Box</b></th>
                    <th><b>Invoice</b></th>
                    <th><b> Total</b></th>
                    
                    <th><b> Date</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b>Garden</b></th>
                       <th style="font-size: 20px;font-style: italic;"><b>Grade</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Rate</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Bag Size</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b> No of Bag</b></th>
                </tr>
            <?php 
            try {
                 $sql = "select srno,invoice,total,DATE_FORMAT(date,'%d/%m/%Y') as niceDate,Garden,grade,rate,kg_bag,no_bag,dry_leaf,liquor,infusion from inventory where grade='$grade' and grade_type='ctc' order by rate ";
              $result = mysqli_query($conn,$sql);
                 $num = mysqli_num_rows($result);
            if($result->num_rows>0)
	        {
		     while($row = $result->fetch_assoc())
	        {
              ?>
              <tr>
                  <td><input id="check" class="largerCheckbox" type="checkbox" name="cd[]" value="<?php echo"".$row['srno'] ?>"></td>
                  <td><?php echo"".$row['invoice'] ?></td>
                   <td><?php echo"".$row['total'] ?></td>
                  <td><?php echo"".$row['niceDate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['Garden'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['grade'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['rate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['kg_bag'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['no_bag'] ?></td>
              </tr>
                <tr>
                <th style="backgound-color:#A4B0BD;">Dry Leaf</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['dry_leaf'] ?></td>
               
                <th style="backgound-color:#A4B0BD;">Liquor</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['liquor'] ?></td>
                 <th style="backgound-color:#A4B0BD;">Infusion</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['infusion'] ?></td>
            </tr>
              <?php
            }
        }
            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
               </table>
        </div>  



 <!-- PD1 button-->
            <?php 
            $grade = "pd1";
            $msg = "";
            try {
              $sql = "select count(*) as count from inventory where grade='$grade' and grade_type='ctc' ";
              $res = mysqli_query($conn,$sql);
                $num=mysqli_num_rows($res);  
                 if($num==0)
            {
                
            }
            else {
                $row=mysqli_fetch_assoc($res);
                $msg = $row['count'];
               
            }

            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
   
          
           <center>
            <input type="button" id="show5" value="PD1 -><?php echo"".$msg  ?>" onclick="view5()"></center>
 <div id="pd1"  style="display: none">
           <table align="center" cellpadding="5" cellspacing="2" border="1">
                <tr>
                    <th><b> Check Box</b></th>
                    <th><b>Invoice</b></th>
                    <th><b> Total</b></th>
                    
                    <th><b> Date</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b>Garden</b></th>
                       <th style="font-size: 20px;font-style: italic;"><b>Grade</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Rate</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Bag Size</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b> No of Bag</b></th>
                </tr>
            <?php 
            try {
                 $sql = "select srno,invoice,total,DATE_FORMAT(date,'%d/%m/%Y') as niceDate,Garden,grade,rate,kg_bag,no_bag,dry_leaf,liquor,infusion from inventory where grade='$grade' and grade_type='ctc' order by rate ";
              $result = mysqli_query($conn,$sql);
                 $num = mysqli_num_rows($result);
            if($result->num_rows>0)
	        {
		     while($row = $result->fetch_assoc())
	        {
              ?>
              <tr>
                  <td><input id="check" class="largerCheckbox" type="checkbox" name="cd[]" value="<?php echo"".$row['srno'] ?>"></td>
                  <td><?php echo"".$row['invoice'] ?></td>
                  <td><?php echo"".$row['total'] ?></td>
                  <td><?php echo"".$row['niceDate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['Garden'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['grade'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['rate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['kg_bag'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['no_bag'] ?></td>
              </tr>
                <tr>
                <th style="backgound-color:#A4B0BD;">Dry Leaf</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['dry_leaf'] ?></td>
               
                <th style="backgound-color:#A4B0BD;">Liquor</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['liquor'] ?></td>
                 <th style="backgound-color:#A4B0BD;">Infusion</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['infusion'] ?></td>
            </tr>
              <?php
            }
        }
            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
               </table>
        </div>  



 <!-- GD button-->
            <?php 
            $grade = "gd";
            $msg = "";
            try {
              $sql = "select count(*) as count from inventory where grade='$grade' and grade_type='ctc' ";
              $res = mysqli_query($conn,$sql);
                $num=mysqli_num_rows($res);  
                 if($num==0)
            {
                
            }
            else {
                $row=mysqli_fetch_assoc($res);
                $msg = $row['count'];
               
            }

            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
   
          
           <center>
            <input type="button" id="show7" value="GD -><?php echo"".$msg  ?>" onclick="view7()"></center>
 <div id="gd"  style="display: none">
           <table align="center" cellpadding="5" cellspacing="2" border="1">
                <tr>
                    <th><b> Check Box</b></th>
                    <th><b>Invoice</b></th>
                    <th><b> Total</b></th>
                    
                    <th><b> Date</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b>Garden</b></th>
                       <th style="font-size: 20px;font-style: italic;"><b>Grade</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Rate</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Bag Size</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b> No of Bag</b></th>
                </tr>
            <?php 
            try {
                 $sql = "select srno,invoice,total,DATE_FORMAT(date,'%d/%m/%Y') as niceDate,Garden,grade,rate,kg_bag,no_bag,dry_leaf,liquor,infusion from inventory where grade='$grade' and grade_type='ctc' order by rate ";
              $result = mysqli_query($conn,$sql);
                 $num = mysqli_num_rows($result);
            if($result->num_rows>0)
	        {
		     while($row = $result->fetch_assoc())
	        {
              ?>
              <tr>
                  <td><input id="check" class="largerCheckbox" type="checkbox" name="cd[]" value="<?php echo"".$row['srno'] ?>"></td>
                  <td><?php echo"".$row['invoice'] ?></td>
                   <td><?php echo"".$row['total'] ?></td>
                  <td><?php echo"".$row['niceDate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['Garden'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['grade'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['rate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['kg_bag'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['no_bag'] ?></td>
              </tr>
                <tr>
                <th style="backgound-color:#A4B0BD;">Dry Leaf</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['dry_leaf'] ?></td>
               
                <th style="backgound-color:#A4B0BD;">Liquor</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['liquor'] ?></td>
                 <th style="backgound-color:#A4B0BD;">Infusion</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['infusion'] ?></td>
            </tr>
              <?php
            }
        }
            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
               </table>
        </div>  


 <!-- SRD button-->
            <?php 
            $grade = "srd";
            $msg = "";
            try {
              $sql = "select count(*) as count from inventory where grade='$grade' and grade_type='ctc' ";
              $res = mysqli_query($conn,$sql);
                $num=mysqli_num_rows($res);  
                 if($num==0)
            {
                
            }
            else {
                $row=mysqli_fetch_assoc($res);
                $msg = $row['count'];
               
            }

            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
   
          
           <center>
            <input type="button" id="show8" value="SRD -><?php echo"".$msg  ?>" onclick="view8()"></center>
 <div id="srd"  style="display: none">
           <table align="center" cellpadding="5" cellspacing="2" border="1">
                <tr>
                    <th><b> Check Box</b></th>
                    <th><b>Invoice</b></th>
                    <th><b> Total</b></th>
                    
                    <th><b> Date</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b>Garden</b></th>
                       <th style="font-size: 20px;font-style: italic;"><b>Grade</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Rate</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Bag Size</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b> No of Bag</b></th>
                </tr>
            <?php 
            try {
                 $sql = "select srno,invoice,total,DATE_FORMAT(date,'%d/%m/%Y') as niceDate,Garden,grade,rate,kg_bag,no_bag,dry_leaf,liquor,infusion from inventory where grade='$grade' and grade_type='ctc' order by rate ";
              $result = mysqli_query($conn,$sql);
                 $num = mysqli_num_rows($result);
            if($result->num_rows>0)
	        {
		     while($row = $result->fetch_assoc())
	        {
              ?>
              <tr>
                  <td><input id="check" class="largerCheckbox" type="checkbox" name="cd[]" value="<?php echo"".$row['srno'] ?>"></td>
                  <td><?php echo"".$row['invoice'] ?></td>
                   <td><?php echo"".$row['total'] ?></td>
                  <td><?php echo"".$row['niceDate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['Garden'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['grade'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['rate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['kg_bag'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['no_bag'] ?></td>
              </tr>
                <tr>
                <th style="backgound-color:#A4B0BD;">Dry Leaf</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['dry_leaf'] ?></td>
               
                <th style="backgound-color:#A4B0BD;">Liquor</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['liquor'] ?></td>
                 <th style="backgound-color:#A4B0BD;">Infusion</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['infusion'] ?></td>
            </tr>
              <?php
            }
        }
            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
               </table>
        </div>  


 <!-- SRD1 button-->
            <?php 
            $grade = "srd1";
            $msg = "";
            try {
              $sql = "select count(*) as count from inventory where grade='$grade' and grade_type='ctc' ";
              $res = mysqli_query($conn,$sql);
                $num=mysqli_num_rows($res);  
                 if($num==0)
            {
                
            }
            else {
                $row=mysqli_fetch_assoc($res);
                $msg = $row['count'];
               
            }

            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
   
          
           <center>
            <input type="button" id="show51" value="SRD1 -><?php echo"".$msg  ?>" onclick="view51()"></center>
 <div id="srd1"  style="display: none">
           <table align="center" cellpadding="5" cellspacing="2" border="1">
                <tr>
                    <th><b> Check Box</b></th>
                    <th><b>Invoice</b></th>
                    <th><b> Total</b></th>
                    
                    <th><b> Date</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b>Garden</b></th>
                       <th style="font-size: 20px;font-style: italic;"><b>Grade</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Rate</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Bag Size</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b> No of Bag</b></th>
                </tr>
            <?php 
            try {
                 $sql = "select srno,invoice,total,DATE_FORMAT(date,'%d/%m/%Y') as niceDate,Garden,grade,rate,kg_bag,no_bag,dry_leaf,liquor,infusion from inventory where grade='$grade' and grade_type='ctc' order by rate ";
              $result = mysqli_query($conn,$sql);
                 $num = mysqli_num_rows($result);
            if($result->num_rows>0)
	        {
		     while($row = $result->fetch_assoc())
	        {
              ?>
              <tr>
                  <td><input id="check" class="largerCheckbox" type="checkbox" name="cd[]" value="<?php echo"".$row['srno'] ?>"></td>
                  <td><?php echo"".$row['invoice'] ?></td>
                   <td><?php echo"".$row['total'] ?></td>
                  <td><?php echo"".$row['niceDate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['Garden'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['grade'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['rate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['kg_bag'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['no_bag'] ?></td>
              </tr>
                <tr>
                <th style="backgound-color:#A4B0BD;">Dry Leaf</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['dry_leaf'] ?></td>
               
                <th style="backgound-color:#A4B0BD;">Liquor</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['liquor'] ?></td>
                 <th style="backgound-color:#A4B0BD;">Infusion</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['infusion'] ?></td>
            </tr>
              <?php
            }
        }
            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
               </table>
        </div>  


 <!-- FD button-->
            <?php 
            $grade = "fd";
            $msg = "";
            try {
              $sql = "select count(*) as count from inventory where grade='$grade' and grade_type='ctc' ";
              $res = mysqli_query($conn,$sql);
                $num=mysqli_num_rows($res);  
                 if($num==0)
            {
                
            }
            else {
                $row=mysqli_fetch_assoc($res);
                $msg = $row['count'];
               
            }

            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
   
          
           <center>
            <input type="button" id="show9" value="FD -><?php echo"".$msg  ?>" onclick="view9()"></center>
 <div id="fd"  style="display: none">
           <table align="center" cellpadding="5" cellspacing="2" border="1">
                <tr>
                    <th><b> Check Box</b></th>
                    <th><b>Invoice</b></th>
                    <th><b> Total</b></th>
                    
                    <th><b> Date</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b>Garden</b></th>
                       <th style="font-size: 20px;font-style: italic;"><b>Grade</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Rate</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Bag Size</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b> No of Bag</b></th>
                </tr>
            <?php 
            try {
                 $sql = "select srno,invoice,total,DATE_FORMAT(date,'%d/%m/%Y') as niceDate,Garden,grade,rate,kg_bag,no_bag,dry_leaf,liquor,infusion from inventory where grade='$grade' and grade_type='ctc' order by rate ";
              $result = mysqli_query($conn,$sql);
                 $num = mysqli_num_rows($result);
            if($result->num_rows>0)
	        {
		     while($row = $result->fetch_assoc())
	        {
              ?>
              <tr>
                  <td><input id="check" class="largerCheckbox" type="checkbox" name="cd[]" value="<?php echo"".$row['srno'] ?>"></td>
                  <td><?php echo"".$row['invoice'] ?></td>
                   <td><?php echo"".$row['total'] ?></td>
                  <td><?php echo"".$row['niceDate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['Garden'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['grade'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['rate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['kg_bag'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['no_bag'] ?></td>
              </tr>
                <tr>
                <th style="backgound-color:#A4B0BD;">Dry Leaf</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['dry_leaf'] ?></td>
               
                <th style="backgound-color:#A4B0BD;">Liquor</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['liquor'] ?></td>
                 <th style="backgound-color:#A4B0BD;">Infusion</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['infusion'] ?></td>
            </tr>
              <?php
            }
        }
            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
               </table>
        </div>  

 <!-- SFD button-->
            <?php 
            $grade = "sfd";
            $msg = "";
            try {
              $sql = "select count(*) as count from inventory where grade='$grade' and grade_type='ctc' ";
              $res = mysqli_query($conn,$sql);
                $num=mysqli_num_rows($res);  
                 if($num==0)
            {
                
            }
            else {
                $row=mysqli_fetch_assoc($res);
                $msg = $row['count'];
               
            }

            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
   
          
           <center>
            <input type="button" id="show10" value="SFD -><?php echo"".$msg  ?>" onclick="view10()"></center>
 <div id="sfd"  style="display: none">
           <table align="center" cellpadding="5" cellspacing="2" border="1">
                <tr>
                    <th><b> Check Box</b></th>
                    <th><b>Invoice</b></th>
                    <th><b> Total</b></th>
                    
                    <th><b> Date</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b>Garden</b></th>
                       <th style="font-size: 20px;font-style: italic;"><b>Grade</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Rate</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Bag Size</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b> No of Bag</b></th>
                </tr>
            <?php 
            try {
                 $sql = "select srno,invoice,total,DATE_FORMAT(date,'%d/%m/%Y') as niceDate,Garden,grade,rate,kg_bag,no_bag,dry_leaf,liquor,infusion from inventory where grade='$grade' and grade_type='ctc' order by rate ";
              $result = mysqli_query($conn,$sql);
                 $num = mysqli_num_rows($result);
            if($result->num_rows>0)
	        {
		     while($row = $result->fetch_assoc())
	        {
              ?>
              <tr>
                  <td><input id="check" class="largerCheckbox" type="checkbox" name="cd[]" value="<?php echo"".$row['srno'] ?>"></td>
                  <td><?php echo"".$row['invoice'] ?></td>
                   <td><?php echo"".$row['total'] ?></td>
                  <td><?php echo"".$row['niceDate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['Garden'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['grade'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['rate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['kg_bag'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['no_bag'] ?></td>
              </tr>
                <tr>
                <th style="backgound-color:#A4B0BD;">Dry Leaf</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['dry_leaf'] ?></td>
               
                <th style="backgound-color:#A4B0BD;">Liquor</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['liquor'] ?></td>
                 <th style="backgound-color:#A4B0BD;">Infusion</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['infusion'] ?></td>
            </tr>
              <?php
            }
        }
            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
               </table>
        </div>  
        </div>
   <!-- Dust grades over here and start of Fannings -->

  <center> <input type="button" id="showFannings" value="FANNINGS+" onclick="viewFannings()" ></center>
   <div id="fannings_leaf_grades"  style="display: none"> 
  

 <!-- OF button-->
            <?php 
            $grade = "of";
            $msg = "";
            try {
              $sql = "select count(*) as count from inventory where grade='$grade' and grade_type='ctc' ";
              $res = mysqli_query($conn,$sql);
                $num=mysqli_num_rows($res);  
                 if($num==0)
            {
                
            }
            else {
                $row=mysqli_fetch_assoc($res);
                $msg = $row['count'];
               
            }

            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
   
          
           <center>
            <input type="button" id="show11" value="OF -><?php echo"".$msg  ?>" onclick="view11()"></center>
 <div id="of"  style="display: none">
           <table align="center" cellpadding="5" cellspacing="2" border="1">
                <tr>
                    <th><b> Check Box</b></th>
                    <th><b>Invoice</b></th>
                    <th><b> Total</b></th>
                    
                    <th><b> Date</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b>Garden</b></th>
                       <th style="font-size: 20px;font-style: italic;"><b>Grade</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Rate</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Bag Size</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b> No of Bag</b></th>
                </tr>
            <?php 
            try {
                 $sql = "select srno,invoice,total,DATE_FORMAT(date,'%d/%m/%Y') as niceDate,Garden,grade,rate,kg_bag,no_bag,dry_leaf,liquor,infusion from inventory where grade='$grade' and grade_type='ctc' order by rate ";
              $result = mysqli_query($conn,$sql);
                 $num = mysqli_num_rows($result);
            if($result->num_rows>0)
	        {
		     while($row = $result->fetch_assoc())
	        {
              ?>
              <tr>
                  <td><input id="check" class="largerCheckbox" type="checkbox" name="cd[]" value="<?php echo"".$row['srno'] ?>"></td>
                  <td><?php echo"".$row['invoice'] ?></td>
                   <td><?php echo"".$row['total'] ?></td>
                  <td><?php echo"".$row['niceDate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['Garden'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['grade'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['rate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['kg_bag'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['no_bag'] ?></td>
              </tr>
                <tr>
                <th style="backgound-color:#A4B0BD;">Dry Leaf</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['dry_leaf'] ?></td>
               
                <th style="backgound-color:#A4B0BD;">Liquor</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['liquor'] ?></td>
                 <th style="backgound-color:#A4B0BD;">Infusion</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['infusion'] ?></td>
            </tr>
              <?php
            }
        }
            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
               </table>
        </div>  


 <!-- OF1 button-->
            <?php 
            $grade = "of1";
            $msg = "";
            try {
              $sql = "select count(*) as count from inventory where grade='$grade' and grade_type='ctc' ";
              $res = mysqli_query($conn,$sql);
                $num=mysqli_num_rows($res);  
                 if($num==0)
            {
                
            }
            else {
                $row=mysqli_fetch_assoc($res);
                $msg = $row['count'];
               
            }

            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
   
          
           <center>
            <input type="button" id="show12" value="OF1 -><?php echo"".$msg  ?>" onclick="view12()"></center>
 <div id="of1"  style="display: none">
           <table align="center" cellpadding="5" cellspacing="2" border="1">
                <tr>
                    <th><b> Check Box</b></th>
                    <th><b>Invoice</b></th>
                    <th><b> Total</b></th>
                    
                    <th><b> Date</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b>Garden</b></th>
                       <th style="font-size: 20px;font-style: italic;"><b>Grade</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Rate</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Bag Size</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b> No of Bag</b></th>
                </tr>
            <?php 
            try {
                 $sql = "select srno,invoice,total,DATE_FORMAT(date,'%d/%m/%Y') as niceDate,Garden,grade,rate,kg_bag,no_bag,dry_leaf,liquor,infusion from inventory where grade='$grade' and grade_type='ctc' order by rate ";
              $result = mysqli_query($conn,$sql);
                 $num = mysqli_num_rows($result);
            if($result->num_rows>0)
	        {
		     while($row = $result->fetch_assoc())
	        {
              ?>
              <tr>
                  <td><input id="check" class="largerCheckbox" type="checkbox" name="cd[]" value="<?php echo"".$row['srno'] ?>"></td>
                  <td><?php echo"".$row['invoice'] ?></td>
                  <td><?php echo"".$row['total'] ?></td>
                  <td><?php echo"".$row['niceDate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['Garden'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['grade'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['rate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['kg_bag'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['no_bag'] ?></td>
              </tr>
                <tr>
                <th style="backgound-color:#A4B0BD;">Dry Leaf</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['dry_leaf'] ?></td>
               
                <th style="backgound-color:#A4B0BD;">Liquor</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['liquor'] ?></td>
                 <th style="backgound-color:#A4B0BD;">Infusion</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['infusion'] ?></td>
            </tr>
              <?php
            }
        }
            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
               </table>
        </div>  


 <!-- PF button-->
            <?php 
            $grade = "pf";
            $msg = "";
            try {
              $sql = "select count(*) as count from inventory where grade='$grade' and grade_type='ctc' ";
              $res = mysqli_query($conn,$sql);
                $num=mysqli_num_rows($res);  
                 if($num==0)
            {
                
            }
            else {
                $row=mysqli_fetch_assoc($res);
                $msg = $row['count'];
               
            }

            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
   
          
           <center>
            <input type="button" id="show13" value="PF -><?php echo"".$msg  ?>" onclick="view13()"></center>
 <div id="pf"  style="display: none">
           <table align="center" cellpadding="5" cellspacing="2" border="1">
                <tr>
                    <th><b> Check Box</b></th>
                    <th><b>Invoice</b></th>
                    <th><b> Total</b></th>
                    
                    <th><b> Date</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b>Garden</b></th>
                       <th style="font-size: 20px;font-style: italic;"><b>Grade</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Rate</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Bag Size</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b> No of Bag</b></th>
                </tr>
            <?php 
            try {
                 $sql = "select srno,invoice,total,DATE_FORMAT(date,'%d/%m/%Y') as niceDate,Garden,grade,rate,kg_bag,no_bag,dry_leaf,liquor,infusion from inventory where grade='$grade' and grade_type='ctc' order by rate ";
              $result = mysqli_query($conn,$sql);
                 $num = mysqli_num_rows($result);
            if($result->num_rows>0)
	        {
		     while($row = $result->fetch_assoc())
	        {
              ?>
              <tr>
                  <td><input id="check" class="largerCheckbox" type="checkbox" name="cd[]" value="<?php echo"".$row['srno'] ?>"></td>
                  <td><?php echo"".$row['invoice'] ?></td>
                   <td><?php echo"".$row['total'] ?></td>
                  <td><?php echo"".$row['niceDate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['Garden'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['grade'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['rate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['kg_bag'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['no_bag'] ?></td>
              </tr>
                <tr>
                <th style="backgound-color:#A4B0BD;">Dry Leaf</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['dry_leaf'] ?></td>
               
                <th style="backgound-color:#A4B0BD;">Liquor</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['liquor'] ?></td>
                 <th style="backgound-color:#A4B0BD;">Infusion</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['infusion'] ?></td>
            </tr>
              <?php
            }
        }
            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
               </table>
        </div>  


 <!-- PF1 button-->
            <?php 
            $grade = "pf1";
            $msg = "";
            try {
              $sql = "select count(*) as count from inventory where grade='$grade' and grade_type='ctc' ";
              $res = mysqli_query($conn,$sql);
                $num=mysqli_num_rows($res);  
                 if($num==0)
            {
                
            }
            else {
                $row=mysqli_fetch_assoc($res);
                $msg = $row['count'];
               
            }

            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
   
          
           <center>
            <input type="button" id="show14" value="PF1 -><?php echo"".$msg  ?>" onclick="view14()"></center>
 <div id="pf1"  style="display: none">
           <table align="center" cellpadding="5" cellspacing="2" border="1">
                <tr>
                    <th><b> Check Box</b></th>
                    <th><b>Invoice</b></th>
                    <th><b> Total</b></th>
                    
                    <th><b> Date</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b>Garden</b></th>
                       <th style="font-size: 20px;font-style: italic;"><b>Grade</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Rate</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Bag Size</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b> No of Bag</b></th>
                </tr>
            <?php 
            try {
                 $sql = "select srno,invoice,total,DATE_FORMAT(date,'%d/%m/%Y') as niceDate,Garden,grade,rate,kg_bag,no_bag,dry_leaf,liquor,infusion from inventory where grade='$grade' and grade_type='ctc' order by rate ";
              $result = mysqli_query($conn,$sql);
                 $num = mysqli_num_rows($result);
            if($result->num_rows>0)
	        {
		     while($row = $result->fetch_assoc())
	        {
              ?>
              <tr>
                  <td><input id="check" class="largerCheckbox" type="checkbox" name="cd[]" value="<?php echo"".$row['srno'] ?>"></td>
                  <td><?php echo"".$row['invoice'] ?></td>
                   <td><?php echo"".$row['total'] ?></td>
                  <td><?php echo"".$row['niceDate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['Garden'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['grade'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['rate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['kg_bag'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['no_bag'] ?></td>
              </tr>
                <tr>
                <th style="backgound-color:#A4B0BD;">Dry Leaf</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['dry_leaf'] ?></td>
               
                <th style="backgound-color:#A4B0BD;">Liquor</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['liquor'] ?></td>
                 <th style="backgound-color:#A4B0BD;">Infusion</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['infusion'] ?></td>
            </tr>
              <?php
            }
        }
            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
               </table>
        </div>  


 <!-- BOPF button-->
            <?php 
            $grade = "bopf";
            $msg = "";
            try {
              $sql = "select count(*) as count from inventory where grade='$grade' and grade_type='ctc' ";
              $res = mysqli_query($conn,$sql);
                $num=mysqli_num_rows($res);  
                 if($num==0)
            {
                
            }
            else {
                $row=mysqli_fetch_assoc($res);
                $msg = $row['count'];
               
            }

            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
   
          
           <center>
            <input type="button" id="show15" value="BOPF -><?php echo"".$msg  ?>" onclick="view15()"></center>
 <div id="bopf"  style="display: none">
           <table align="center" cellpadding="5" cellspacing="2" border="1">
                <tr>
                    <th><b> Check Box</b></th>
                    <th><b>Invoice</b></th>
                    <th><b> Total</b></th>
                    
                    <th><b> Date</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b>Garden</b></th>
                       <th style="font-size: 20px;font-style: italic;"><b>Grade</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Rate</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Bag Size</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b> No of Bag</b></th>
                </tr>
            <?php 
            try {
                 $sql = "select srno,invoice,total,DATE_FORMAT(date,'%d/%m/%Y') as niceDate,Garden,grade,rate,kg_bag,no_bag,dry_leaf,liquor,infusion from inventory where grade='$grade' and grade_type='ctc' order by rate ";
              $result = mysqli_query($conn,$sql);
                 $num = mysqli_num_rows($result);
            if($result->num_rows>0)
	        {
		     while($row = $result->fetch_assoc())
	        {
              ?>
              <tr>
                  <td><input id="check" class="largerCheckbox" type="checkbox" name="cd[]" value="<?php echo"".$row['srno'] ?>"></td>
                  <td><?php echo"".$row['invoice'] ?></td>
                   <td><?php echo"".$row['total'] ?></td>
                  <td><?php echo"".$row['niceDate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['Garden'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['grade'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['rate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['kg_bag'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['no_bag'] ?></td>
              </tr>
                <tr>
                <th style="backgound-color:#A4B0BD;">Dry Leaf</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['dry_leaf'] ?></td>
               
                <th style="backgound-color:#A4B0BD;">Liquor</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['liquor'] ?></td>
                 <th style="backgound-color:#A4B0BD;">Infusion</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['infusion'] ?></td>
            </tr>
              <?php
            }
        }
            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
               </table>
        </div>  


 <!-- BOPF1 button-->
            <?php 
            $grade = "bopf1";
            $msg = "";
            try {
              $sql = "select count(*) as count from inventory where grade='$grade' and grade_type='ctc' ";
              $res = mysqli_query($conn,$sql);
                $num=mysqli_num_rows($res);  
                 if($num==0)
            {
                
            }
            else {
                $row=mysqli_fetch_assoc($res);
                $msg = $row['count'];
               
            }

            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
   
          
           <center>
            <input type="button" id="show16" value="BOPF1 -><?php echo"".$msg  ?>" onclick="view16()"></center>
 <div id="bopf1"  style="display: none">
           <table align="center" cellpadding="5" cellspacing="2" border="1">
                <tr>
                    <th><b> Check Box</b></th>
                    <th><b>Invoice</b></th>
                    <th><b> Total</b></th>
                    
                    <th><b> Date</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b>Garden</b></th>
                       <th style="font-size: 20px;font-style: italic;"><b>Grade</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Rate</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Bag Size</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b> No of Bag</b></th>
                </tr>
            <?php 
            try {
                 $sql = "select srno,invoice,total,DATE_FORMAT(date,'%d/%m/%Y') as niceDate,Garden,grade,rate,kg_bag,no_bag,dry_leaf,liquor,infusion from inventory where grade='$grade' and grade_type='ctc' order by rate ";
              $result = mysqli_query($conn,$sql);
                 $num = mysqli_num_rows($result);
            if($result->num_rows>0)
	        {
		     while($row = $result->fetch_assoc())
	        {
              ?>
              <tr>
                  <td><input id="check" class="largerCheckbox" type="checkbox" name="cd[]" value="<?php echo"".$row['srno'] ?>"></td>
                  <td><?php echo"".$row['invoice'] ?></td>
                  <td><?php echo"".$row['total'] ?></td>
                  <td><?php echo"".$row['niceDate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['Garden'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['grade'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['rate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['kg_bag'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['no_bag'] ?></td>
              </tr>
                <tr>
                <th style="backgound-color:#A4B0BD;">Dry Leaf</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['dry_leaf'] ?></td>
               
                <th style="backgound-color:#A4B0BD;">Liquor</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['liquor'] ?></td>
                 <th style="backgound-color:#A4B0BD;">Infusion</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['infusion'] ?></td>
            </tr>
              <?php
            }
        }
            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
               </table>
        </div>  

   </div>
   
 <!-- Fannings grades over here and start of Broken Leaf-->
  <center> <input type="button" id="showBroken" value="BROKEN LEAF+" onclick="viewBroken()" ></center>
   <div id="broken_leaf_grades"  style="display: none"> 



 <!-- FP button-->
            <?php 
            $grade = "fp";
            $msg = "";
            try {
              $sql = "select count(*) as count from inventory where grade='$grade' and grade_type='ctc' ";
              $res = mysqli_query($conn,$sql);
                $num=mysqli_num_rows($res);  
                 if($num==0)
            {
                
            }
            else {
                $row=mysqli_fetch_assoc($res);
                $msg = $row['count'];
               
            }

            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
   
          
           <center>
            <input type="button" id="show17" value="FP -><?php echo"".$msg  ?>" onclick="view17()"></center>
 <div id="fp"  style="display: none">
           <table align="center" cellpadding="5" cellspacing="2" border="1">
                <tr>
                    <th><b> Check Box</b></th>
                    <th><b>Invoice</b></th>
                    <th><b> Total</b></th>
                    
                    <th><b> Date</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b>Garden</b></th>
                       <th style="font-size: 20px;font-style: italic;"><b>Grade</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Rate</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Bag Size</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b> No of Bag</b></th>
                </tr>
            <?php 
            try {
                 $sql = "select srno,invoice,total,DATE_FORMAT(date,'%d/%m/%Y') as niceDate,Garden,grade,rate,kg_bag,no_bag,dry_leaf,liquor,infusion from inventory where grade='$grade' and grade_type='ctc' order by rate ";
              $result = mysqli_query($conn,$sql);
                 $num = mysqli_num_rows($result);
            if($result->num_rows>0)
	        {
		     while($row = $result->fetch_assoc())
	        {
              ?>
              <tr>
                  <td><input id="check" class="largerCheckbox" type="checkbox" name="cd[]" value="<?php echo"".$row['srno'] ?>"></td>
                  <td><?php echo"".$row['invoice'] ?></td>
                  <td><?php echo"".$row['total'] ?></td>
                  <td><?php echo"".$row['niceDate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['Garden'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['grade'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['rate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['kg_bag'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['no_bag'] ?></td>
              </tr>
                <tr>
                <th style="backgound-color:#A4B0BD;">Dry Leaf</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['dry_leaf'] ?></td>
               
                <th style="backgound-color:#A4B0BD;">Liquor</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['liquor'] ?></td>
                 <th style="backgound-color:#A4B0BD;">Infusion</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['infusion'] ?></td>
            </tr>
              <?php
            }
        }
            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
               </table>
        </div>  


 <!-- BPS button-->
            <?php 
            $grade = "bps";
            $msg = "";
            try {
              $sql = "select count(*) as count from inventory where grade='$grade' and grade_type='ctc' ";
              $res = mysqli_query($conn,$sql);
                $num=mysqli_num_rows($res);  
                 if($num==0)
            {
                
            }
            else {
                $row=mysqli_fetch_assoc($res);
                $msg = $row['count'];
               
            }

            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
   
          
           <center>
            <input type="button" id="show18" value="BPS -><?php echo"".$msg  ?>" onclick="view18()"></center>
 <div id="bps"  style="display: none">
           <table align="center" cellpadding="5" cellspacing="2" border="1">
                <tr>
                    <th><b> Check Box</b></th>
                    <th><b>Invoice</b></th>
                    <th><b> Total</b></th>
                    
                    <th><b> Date</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b>Garden</b></th>
                       <th style="font-size: 20px;font-style: italic;"><b>Grade</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Rate</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Bag Size</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b> No of Bag</b></th>
                </tr>
            <?php 
            try {
                 $sql = "select srno,invoice,total,DATE_FORMAT(date,'%d/%m/%Y') as niceDate,Garden,grade,rate,kg_bag,no_bag,dry_leaf,liquor,infusion from inventory where grade='$grade' and grade_type='ctc' order by rate ";
              $result = mysqli_query($conn,$sql);
                 $num = mysqli_num_rows($result);
            if($result->num_rows>0)
	        {
		     while($row = $result->fetch_assoc())
	        {
              ?>
              <tr>
                  <td><input id="check" class="largerCheckbox" type="checkbox" name="cd[]" value="<?php echo"".$row['srno'] ?>"></td>
                  <td><?php echo"".$row['invoice'] ?></td>
                   <td><?php echo"".$row['total'] ?></td>
                  <td><?php echo"".$row['niceDate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['Garden'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['grade'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['rate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['kg_bag'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['no_bag'] ?></td>
              </tr>
                <tr>
                <th style="backgound-color:#A4B0BD;">Dry Leaf</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['dry_leaf'] ?></td>
               
                <th style="backgound-color:#A4B0BD;">Liquor</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['liquor'] ?></td>
                 <th style="backgound-color:#A4B0BD;">Infusion</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['infusion'] ?></td>
            </tr>
              <?php
            }
        }
            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
               </table>
        </div>  


 <!-- PEKOE button-->
            <?php 
            $grade = "pekoe";
            $msg = "";
            try {
              $sql = "select count(*) as count from inventory where grade='$grade' and grade_type='ctc' ";
              $res = mysqli_query($conn,$sql);
                $num=mysqli_num_rows($res);  
                 if($num==0)
            {
                
            }
            else {
                $row=mysqli_fetch_assoc($res);
                $msg = $row['count'];
               
            }

            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
   
          
           <center>
            <input type="button" id="show19" value="PEKOE -><?php echo"".$msg  ?>" onclick="view19()"></center>
 <div id="pekoe"  style="display: none">
           <table align="center" cellpadding="5" cellspacing="2" border="1">
                <tr>
                    <th><b> Check Box</b></th>
                    <th><b>Invoice</b></th>
                    <th><b> Total</b></th>
                    
                    <th><b> Date</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b>Garden</b></th>
                       <th style="font-size: 20px;font-style: italic;"><b>Grade</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Rate</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Bag Size</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b> No of Bag</b></th>
                </tr>
            <?php 
            try {
                 $sql = "select srno,invoice,total,DATE_FORMAT(date,'%d/%m/%Y') as niceDate,Garden,grade,rate,kg_bag,no_bag,dry_leaf,liquor,infusion from inventory where grade='$grade' and grade_type='ctc' order by rate ";
              $result = mysqli_query($conn,$sql);
                 $num = mysqli_num_rows($result);
            if($result->num_rows>0)
	        {
		     while($row = $result->fetch_assoc())
	        {
              ?>
              <tr>
                  <td><input id="check" class="largerCheckbox" type="checkbox" name="cd[]" value="<?php echo"".$row['srno'] ?>"></td>
                  <td><?php echo"".$row['invoice'] ?></td>
                  <td><?php echo"".$row['total'] ?></td>
                  <td><?php echo"".$row['niceDate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['Garden'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['grade'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['rate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['kg_bag'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['no_bag'] ?></td>
              </tr>
                <tr>
                <th style="backgound-color:#A4B0BD;">Dry Leaf</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['dry_leaf'] ?></td>
               
                <th style="backgound-color:#A4B0BD;">Liquor</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['liquor'] ?></td>
                 <th style="backgound-color:#A4B0BD;">Infusion</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['infusion'] ?></td>
            </tr>
              <?php
            }
        }
            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
               </table>
        </div>  

<!-- BOP button-->
            <?php 
            $grade = "BOP";
            $msg = "";
            try {
              $sql = "select count(*) as count from inventory where grade='$grade' and grade_type='ctc' ";
              $res = mysqli_query($conn,$sql);
                $num=mysqli_num_rows($res);  
                 if($num==0)
            {
                
            }
            else {
                $row=mysqli_fetch_assoc($res);
                $msg = $row['count'];
               
            }

            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
   

   <!-- BOP -->       
           <center>
            <input type="button" id="show21" value="BOP -><?php echo"".$msg  ?>" onclick="view21()"></center>
 <div id="bop"  style="display: none">
           <table align="center" cellpadding="5" cellspacing="2" border="1">
                <tr>
                    <th><b> Check Box</b></th>
                    <th><b>Invoice</b></th>
                    <th><b> Total</b></th>
                    
                    <th><b> Date</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b>Garden</b></th>
                       <th style="font-size: 20px;font-style: italic;"><b>Grade</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Rate</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Bag Size</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b> No of Bag</b></th>
                </tr>
            <?php 
            try {
                 $sql = "select srno,invoice,total,DATE_FORMAT(date,'%d/%m/%Y') as niceDate,Garden,grade,rate,kg_bag,no_bag,dry_leaf,liquor,infusion from inventory where grade='$grade' and grade_type='ctc' order by rate ";
              $result = mysqli_query($conn,$sql);
                 $num = mysqli_num_rows($result);
            if($result->num_rows>0)
	        {
		     while($row = $result->fetch_assoc())
	        {
              ?>
              <tr>
                  <td><input id="check" class="largerCheckbox" type="checkbox" name="cd[]" value="<?php echo"".$row['srno'] ?>"></td>
                  <td><?php echo"".$row['invoice'] ?></td>
                   <td><?php echo"".$row['total'] ?></td>
                  <td><?php echo"".$row['niceDate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['Garden'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['grade'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['rate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['kg_bag'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['no_bag'] ?></td>
              </tr>
                <tr>
                <th style="backgound-color:#A4B0BD;">Dry Leaf</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['dry_leaf'] ?></td>
               
                <th style="backgound-color:#A4B0BD;">Liquor</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['liquor'] ?></td>
                 <th style="backgound-color:#A4B0BD;">Infusion</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['infusion'] ?></td>
            </tr>
              <?php
            }
        }
            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
               </table>
        </div>  

        
 <!-- BOPL button-->
            <?php 
            $grade = "bopl";
            $msg = "";
            try {
              $sql = "select count(*) as count from inventory where grade='$grade' and grade_type='ctc' ";
              $res = mysqli_query($conn,$sql);
                $num=mysqli_num_rows($res);  
                 if($num==0)
            {
                
            }
            else {
                $row=mysqli_fetch_assoc($res);
                $msg = $row['count'];
               
            }

            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
   
          
           <center>
            <input type="button" id="show20" value="BOPL -><?php echo"".$msg  ?>" onclick="view20()"></center>
 <div id="bopl"  style="display: none">
           <table align="center" cellpadding="5" cellspacing="2" border="1">
                <tr>
                    <th><b> Check Box</b></th>
                    <th><b>Invoice</b></th>
                    <th><b> Total</b></th>
                    
                    <th><b> Date</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b>Garden</b></th>
                       <th style="font-size: 20px;font-style: italic;"><b>Grade</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Rate</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Bag Size</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b> No of Bag</b></th>
                </tr>
            <?php 
            try {
                 $sql = "select srno,invoice,total,DATE_FORMAT(date,'%d/%m/%Y') as niceDate,Garden,grade,rate,kg_bag,no_bag,dry_leaf,liquor,infusion from inventory where grade='$grade' and grade_type='ctc' order by rate ";
              $result = mysqli_query($conn,$sql);
                 $num = mysqli_num_rows($result);
            if($result->num_rows>0)
	        {
		     while($row = $result->fetch_assoc())
	        {
              ?>
              <tr>
                  <td><input id="check" class="largerCheckbox" type="checkbox" name="cd[]" value="<?php echo"".$row['srno'] ?>"></td>
                  <td><?php echo"".$row['invoice'] ?></td>
                   <td><?php echo"".$row['total'] ?></td>
                  <td><?php echo"".$row['niceDate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['Garden'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['grade'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['rate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['kg_bag'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['no_bag'] ?></td>
              </tr>
                <tr>
                <th style="backgound-color:#A4B0BD;">Dry Leaf</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['dry_leaf'] ?></td>
               
                <th style="backgound-color:#A4B0BD;">Liquor</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['liquor'] ?></td>
                 <th style="backgound-color:#A4B0BD;">Infusion</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['infusion'] ?></td>
            </tr>
              <?php
            }
        }
            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
               </table>
        </div>  


 <!-- BOPL1 button-->
            <?php 
            $grade = "bopl1";
            $msg = "";
            try {
              $sql = "select count(*) as count from inventory where grade='$grade' and grade_type='ctc' ";
              $res = mysqli_query($conn,$sql);
                $num=mysqli_num_rows($res);  
                 if($num==0)
            {
                
            }
            else {
                $row=mysqli_fetch_assoc($res);
                $msg = $row['count'];
               
            }

            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
   
          
           <center>
            <input type="button" id="show52" value="BOPL1 -><?php echo"".$msg  ?>" onclick="view52()"></center>
 <div id="bopl1"  style="display: none">
           <table align="center" cellpadding="5" cellspacing="2" border="1">
                <tr>
                    <th><b> Check Box</b></th>
                    <th><b>Invoice</b></th>
                    <th><b> Total</b></th>
                    
                    <th><b> Date</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b>Garden</b></th>
                       <th style="font-size: 20px;font-style: italic;"><b>Grade</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Rate</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Bag Size</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b> No of Bag</b></th>
                </tr>
            <?php 
            try {
                 $sql = "select srno,invoice,total,DATE_FORMAT(date,'%d/%m/%Y') as niceDate,Garden,grade,rate,kg_bag,no_bag,dry_leaf,liquor,infusion from inventory where grade='$grade' and grade_type='ctc' order by rate ";
              $result = mysqli_query($conn,$sql);
                 $num = mysqli_num_rows($result);
            if($result->num_rows>0)
	        {
		     while($row = $result->fetch_assoc())
	        {
              ?>
              <tr>
                  <td><input id="check" class="largerCheckbox" type="checkbox" name="cd[]" value="<?php echo"".$row['srno'] ?>"></td>
                  <td><?php echo"".$row['invoice'] ?></td>
                   <td><?php echo"".$row['total'] ?></td>
                  <td><?php echo"".$row['niceDate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['Garden'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['grade'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['rate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['kg_bag'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['no_bag'] ?></td>
              </tr>
                <tr>
                <th style="backgound-color:#A4B0BD;">Dry Leaf</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['dry_leaf'] ?></td>
               
                <th style="backgound-color:#A4B0BD;">Liquor</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['liquor'] ?></td>
                 <th style="backgound-color:#A4B0BD;">Infusion</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['infusion'] ?></td>
            </tr>
              <?php
            }
        }
            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
               </table>
        </div>  


 <!-- BP button-->
            <?php 
            $grade = "bp";
            $msg = "";
            try {
              $sql = "select count(*) as count from inventory where grade='$grade' and grade_type='ctc' ";
              $res = mysqli_query($conn,$sql);
                $num=mysqli_num_rows($res);  
                 if($num==0)
            {
                
            }
            else {
                $row=mysqli_fetch_assoc($res);
                $msg = $row['count'];
               
            }

            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
   
          
           <center>
            <input type="button" id="show53" value="BP -><?php echo"".$msg  ?>" onclick="view53()"></center>
 <div id="bp"  style="display: none">
           <table align="center" cellpadding="5" cellspacing="2" border="1">
                <tr>
                    <th><b> Check Box</b></th>
                    <th><b>Invoice</b></th>
                    <th><b> Total</b></th>
                    
                    <th><b> Date</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b>Garden</b></th>
                       <th style="font-size: 20px;font-style: italic;"><b>Grade</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Rate</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Bag Size</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b> No of Bag</b></th>
                </tr>
            <?php 
            try {
                 $sql = "select srno,invoice,total,DATE_FORMAT(date,'%d/%m/%Y') as niceDate,Garden,grade,rate,kg_bag,no_bag,dry_leaf,liquor,infusion from inventory where grade='$grade' and grade_type='ctc' order by rate ";
              $result = mysqli_query($conn,$sql);
                 $num = mysqli_num_rows($result);
            if($result->num_rows>0)
	        {
		     while($row = $result->fetch_assoc())
	        {
              ?>
              <tr>
                  <td><input id="check" class="largerCheckbox" type="checkbox" name="cd[]" value="<?php echo"".$row['srno'] ?>"></td>
                  <td><?php echo"".$row['invoice'] ?></td>
                   <td><?php echo"".$row['total'] ?></td>
                  <td><?php echo"".$row['niceDate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['Garden'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['grade'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['rate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['kg_bag'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['no_bag'] ?></td>
              </tr>
                <tr>
                <th style="backgound-color:#A4B0BD;">Dry Leaf</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['dry_leaf'] ?></td>
               
                <th style="backgound-color:#A4B0BD;">Liquor</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['liquor'] ?></td>
                 <th style="backgound-color:#A4B0BD;">Infusion</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['infusion'] ?></td>
            </tr>
              <?php
            }
        }
            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
               </table>
        </div>  


 <!-- BP1 button-->
            <?php 
            $grade = "bp1";
            $msg = "";
            try {
              $sql = "select count(*) as count from inventory where grade='$grade' and grade_type='ctc' ";
              $res = mysqli_query($conn,$sql);
                $num=mysqli_num_rows($res);  
                 if($num==0)
            {
                
            }
            else {
                $row=mysqli_fetch_assoc($res);
                $msg = $row['count'];
               
            }

            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
   
          
           <center>
            <input type="button" id="show54" value="BP1 -><?php echo"".$msg  ?>" onclick="view54()"></center>
 <div id="bp1"  style="display: none">
           <table align="center" cellpadding="5" cellspacing="2" border="1">
                <tr>
                    <th><b> Check Box</b></th>
                    <th><b>Invoice</b></th>
                    <th><b> Total</b></th>
                    
                    <th><b> Date</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b>Garden</b></th>
                       <th style="font-size: 20px;font-style: italic;"><b>Grade</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Rate</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Bag Size</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b> No of Bag</b></th>
                </tr>
            <?php 
            try {
                 $sql = "select srno,invoice,total,DATE_FORMAT(date,'%d/%m/%Y') as niceDate,Garden,grade,rate,kg_bag,no_bag,dry_leaf,liquor,infusion from inventory where grade='$grade' and grade_type='ctc' order by rate ";
              $result = mysqli_query($conn,$sql);
                 $num = mysqli_num_rows($result);
            if($result->num_rows>0)
	        {
		     while($row = $result->fetch_assoc())
	        {
              ?>
              <tr>
                  <td><input id="check" class="largerCheckbox" type="checkbox" name="cd[]" value="<?php echo"".$row['srno'] ?>"></td>
                  <td><?php echo"".$row['invoice'] ?></td>
                   <td><?php echo"".$row['total'] ?></td>
                  <td><?php echo"".$row['niceDate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['Garden'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['grade'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['rate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['kg_bag'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['no_bag'] ?></td>
              </tr>
                <tr>
                <th style="backgound-color:#A4B0BD;">Dry Leaf</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['dry_leaf'] ?></td>
               
                <th style="backgound-color:#A4B0BD;">Liquor</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['liquor'] ?></td>
                 <th style="backgound-color:#A4B0BD;">Infusion</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['infusion'] ?></td>
            </tr>
              <?php
            }
        }
            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
               </table>
        </div>  

          
 <!-- BOP1 button-->
            <?php 
            $grade = "bop1";
            $msg = "";
            try {
              $sql = "select count(*) as count from inventory where grade='$grade' and grade_type='ctc' ";
              $res = mysqli_query($conn,$sql);
                $num=mysqli_num_rows($res);  
                 if($num==0)
            {
                
            }
            else {
                $row=mysqli_fetch_assoc($res);
                $msg = $row['count'];
               
            }

            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
   
          
           <center>
            <input type="button" id="show22" value="BOP1 -><?php echo"".$msg  ?>" onclick="view22()"></center>
 <div id="bop1"  style="display: none">
           <table align="center" cellpadding="5" cellspacing="2" border="1">
                <tr>
                    <th><b> Check Box</b></th>
                    <th><b>Invoice</b></th>
                    <th><b> Total</b></th>
                    
                    <th><b> Date</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b>Garden</b></th>
                       <th style="font-size: 20px;font-style: italic;"><b>Grade</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Rate</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Bag Size</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b> No of Bag</b></th>
                </tr>
            <?php 
            try {
                 $sql = "select srno,invoice,total,DATE_FORMAT(date,'%d/%m/%Y') as niceDate,Garden,grade,rate,kg_bag,no_bag,dry_leaf,liquor,infusion from inventory where grade='$grade' and grade_type='ctc' order by rate ";
              $result = mysqli_query($conn,$sql);
                 $num = mysqli_num_rows($result);
            if($result->num_rows>0)
	        {
		     while($row = $result->fetch_assoc())
	        {
              ?>
              <tr>
                  <td><input id="check" class="largerCheckbox" type="checkbox" name="cd[]" value="<?php echo"".$row['srno'] ?>"></td>
                  <td><?php echo"".$row['invoice'] ?></td>
                  <td><?php echo"".$row['total'] ?></td>
                  <td><?php echo"".$row['niceDate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['Garden'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['grade'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['rate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['kg_bag'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['no_bag'] ?></td>
              </tr>
                <tr>
                <th style="backgound-color:#A4B0BD;">Dry Leaf</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['dry_leaf'] ?></td>
               
                <th style="backgound-color:#A4B0BD;">Liquor</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['liquor'] ?></td>
                 <th style="backgound-color:#A4B0BD;">Infusion</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['infusion'] ?></td>
            </tr>
              <?php
            }
        }
            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
               </table>
        </div>  

          
 <!-- BOPSM button-->
            <?php 
            $grade = "bopsm";
            $msg = "";
            try {
              $sql = "select count(*) as count from inventory where grade='$grade' and grade_type='ctc' ";
              $res = mysqli_query($conn,$sql);
                $num=mysqli_num_rows($res);  
                 if($num==0)
            {
                
            }
            else {
                $row=mysqli_fetch_assoc($res);
                $msg = $row['count'];
               
            }

            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
   
          
           <center>
            <input type="button" id="show23" value="BOPSM -><?php echo"".$msg  ?>" onclick="view23()"></center>
 <div id="bopsm"  style="display: none">
           <table align="center" cellpadding="5" cellspacing="2" border="1">
                <tr>
                    <th><b> Check Box</b></th>
                    <th><b>Invoice</b></th>
                    <th><b> Total</b></th>
                    
                    <th><b> Date</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b>Garden</b></th>
                       <th style="font-size: 20px;font-style: italic;"><b>Grade</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Rate</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Bag Size</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b> No of Bag</b></th>
                </tr>
            <?php 
            try {
                 $sql = "select srno,invoice,total,DATE_FORMAT(date,'%d/%m/%Y') as niceDate,Garden,grade,rate,kg_bag,no_bag,dry_leaf,liquor,infusion from inventory where grade='$grade' and grade_type='ctc' order by rate ";
              $result = mysqli_query($conn,$sql);
                 $num = mysqli_num_rows($result);
            if($result->num_rows>0)
	        {
		     while($row = $result->fetch_assoc())
	        {
              ?>
              <tr>
                  <td><input id="check" class="largerCheckbox" type="checkbox" name="cd[]" value="<?php echo"".$row['srno'] ?>"></td>
                  <td><?php echo"".$row['invoice'] ?></td>
                  <td><?php echo"".$row['total'] ?></td>
                  <td><?php echo"".$row['niceDate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['Garden'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['grade'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['rate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['kg_bag'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['no_bag'] ?></td>
              </tr>
                <tr>
                <th style="backgound-color:#A4B0BD;">Dry Leaf</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['dry_leaf'] ?></td>
               
                <th style="backgound-color:#A4B0BD;">Liquor</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['liquor'] ?></td>
                 <th style="backgound-color:#A4B0BD;">Infusion</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['infusion'] ?></td>
            </tr>
              <?php
            }
        }
            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
               </table>
        </div>  

 <!-- BOPSM1 button-->
            <?php 
            $grade = "bopsm1";
            $msg = "";
            try {
              $sql = "select count(*) as count from inventory where grade='$grade' and grade_type='ctc' ";
              $res = mysqli_query($conn,$sql);
                $num=mysqli_num_rows($res);  
                 if($num==0)
            {
                
            }
            else {
                $row=mysqli_fetch_assoc($res);
                $msg = $row['count'];
               
            }

            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
   
          
           <center>
            <input type="button" id="show24" value="BOPSM1 -><?php echo"".$msg  ?>" onclick="view24()"></center>
 <div id="bopsm1"  style="display: none">
           <table align="center" cellpadding="5" cellspacing="2" border="1">
                <tr>
                    <th><b> Check Box</b></th>
                    <th><b>Invoice</b></th>
                    <th><b> Total</b></th>
                    
                    <th><b> Date</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b>Garden</b></th>
                       <th style="font-size: 20px;font-style: italic;"><b>Grade</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Rate</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Bag Size</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b> No of Bag</b></th>
                </tr>
            <?php 
            try {
                 $sql = "select srno,invoice,total,DATE_FORMAT(date,'%d/%m/%Y') as niceDate,Garden,grade,rate,kg_bag,no_bag,dry_leaf,liquor,infusion from inventory where grade='$grade' and grade_type='ctc' order by rate ";
              $result = mysqli_query($conn,$sql);
                 $num = mysqli_num_rows($result);
            if($result->num_rows>0)
	        {
		     while($row = $result->fetch_assoc())
	        {
              ?>
              <tr>
                  <td><input id="check" class="largerCheckbox" type="checkbox" name="cd[]" value="<?php echo"".$row['srno'] ?>"></td>
                  <td><?php echo"".$row['invoice'] ?></td>
                  <td><?php echo"".$row['total'] ?></td>
                  <td><?php echo"".$row['niceDate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['Garden'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['grade'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['rate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['kg_bag'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['no_bag'] ?></td>
              </tr>
                <tr>
                <th style="backgound-color:#A4B0BD;">Dry Leaf</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['dry_leaf'] ?></td>
               
                <th style="backgound-color:#A4B0BD;">Liquor</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['liquor'] ?></td>
                 <th style="backgound-color:#A4B0BD;">Infusion</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['infusion'] ?></td>
            </tr>
              <?php
            }
        }
            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
               </table>
        </div>  


 <!-- BPSM button-->
            <?php 
            $grade = "bpsm";
            $msg = "";
            try {
              $sql = "select count(*) as count from inventory where grade='$grade' and grade_type='ctc' ";
              $res = mysqli_query($conn,$sql);
                $num=mysqli_num_rows($res);  
                 if($num==0)
            {
                
            }
            else {
                $row=mysqli_fetch_assoc($res);
                $msg = $row['count'];
               
            }

            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
   
          
           <center>
            <input type="button" id="show25" value="BPSM -><?php echo"".$msg  ?>" onclick="view25()"></center>
 <div id="bpsm"  style="display: none">
           <table align="center" cellpadding="5" cellspacing="2" border="1">
                <tr>
                    <th><b> Check Box</b></th>
                    <th><b>Invoice</b></th>
                    <th><b> Total</b></th>
                    
                    <th><b> Date</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b>Garden</b></th>
                       <th style="font-size: 20px;font-style: italic;"><b>Grade</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Rate</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Bag Size</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b> No of Bag</b></th>
                </tr>
            <?php 
            try {
                 $sql = "select srno,invoice,total,DATE_FORMAT(date,'%d/%m/%Y') as niceDate,Garden,grade,rate,kg_bag,no_bag,dry_leaf,liquor,infusion from inventory where grade='$grade' and grade_type='ctc' order by rate ";
              $result = mysqli_query($conn,$sql);
                 $num = mysqli_num_rows($result);
            if($result->num_rows>0)
	        {
		     while($row = $result->fetch_assoc())
	        {
              ?>
              <tr>
                  <td><input id="check" class="largerCheckbox" type="checkbox" name="cd[]" value="<?php echo"".$row['srno'] ?>"></td>
                  <td><?php echo"".$row['invoice'] ?></td>
                  <td><?php echo"".$row['total'] ?></td>
                  <td><?php echo"".$row['niceDate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['Garden'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['grade'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['rate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['kg_bag'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['no_bag'] ?></td>
              </tr>
                <tr>
                <th style="backgound-color:#A4B0BD;">Dry Leaf</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['dry_leaf'] ?></td>
               
                <th style="backgound-color:#A4B0BD;">Liquor</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['liquor'] ?></td>
                 <th style="backgound-color:#A4B0BD;">Infusion</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['infusion'] ?></td>
            </tr>
              <?php
            }
        }
            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
               </table>
        </div>  


 <!-- BPSM1 button-->
            <?php 
            $grade = "bpsm1";
            $msg = "";
            try {
              $sql = "select count(*) as count from inventory where grade='$grade' and grade_type='ctc' ";
              $res = mysqli_query($conn,$sql);
                $num=mysqli_num_rows($res);  
                 if($num==0)
            {
                
            }
            else {
                $row=mysqli_fetch_assoc($res);
                $msg = $row['count'];
               
            }

            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
   
          
           <center>
            <input type="button" id="show26" value="BPSM1 -><?php echo"".$msg  ?>" onclick="view26()"></center>
 <div id="bpsm1"  style="display: none">
           <table align="center" cellpadding="5" cellspacing="2" border="1">
                <tr>
                    <th><b> Check Box</b></th>
                    <th><b>Invoice</b></th>
                    <th><b> Total</b></th>
                    
                    <th><b> Date</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b>Garden</b></th>
                       <th style="font-size: 20px;font-style: italic;"><b>Grade</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Rate</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Bag Size</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b> No of Bag</b></th>
                </tr>
            <?php 
            try {
                 $sql = "select srno,invoice,total,DATE_FORMAT(date,'%d/%m/%Y') as niceDate,Garden,grade,rate,kg_bag,no_bag,dry_leaf,liquor,infusion from inventory where grade='$grade' and grade_type='ctc' order by rate ";
              $result = mysqli_query($conn,$sql);
                 $num = mysqli_num_rows($result);
            if($result->num_rows>0)
	        {
		     while($row = $result->fetch_assoc())
	        {
              ?>
              <tr>
                  <td><input id="check" class="largerCheckbox" type="checkbox" name="cd[]" value="<?php echo"".$row['srno'] ?>"></td>
                  <td><?php echo"".$row['invoice'] ?></td>
                   <td><?php echo"".$row['total'] ?></td>
                  <td><?php echo"".$row['niceDate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['Garden'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['grade'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['rate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['kg_bag'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['no_bag'] ?></td>
              </tr>
                <tr>
                <th style="backgound-color:#A4B0BD;">Dry Leaf</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['dry_leaf'] ?></td>
               
                <th style="backgound-color:#A4B0BD;">Liquor</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['liquor'] ?></td>
                 <th style="backgound-color:#A4B0BD;">Infusion</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['infusion'] ?></td>
            </tr>
              <?php
            }
        }
            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
               </table>
        </div>  
</div>
   
</div>


<!-- Orthodox grades-->
<center>
    <input type="button" id="showOrthodox" value="ORTHODOX GRADES+" onclick="viewOrthodox()" ></center>
    <div id="orthodox"  style="display: none">
         
    <center>
        <input type="button" id="show_Ortho_Dust" value="DUST GRADES+" onclick="view_Ortho_Dust()"></input></center>

    <div id="ortho_dust_grades"  style="display: none">

 <!-- OPD button-->
            <?php 
            $grade = "opd";
            $msg = "";
            try {
              $sql = "select count(*) as count from inventory where grade='$grade' and grade_type='orthodox' ";
              $res = mysqli_query($conn,$sql);
                $num=mysqli_num_rows($res);  
                 if($num==0)
            {
                
            }
            else {
                $row=mysqli_fetch_assoc($res);
                $msg = $row['count'];
               
            }

            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
   
          
           <center>
            <input type="button" id="show27" value="OPD -><?php echo"".$msg  ?>" onclick="view27()"></center>
 <div id="opd"  style="display: none">
           <table align="center" cellpadding="5" cellspacing="2" border="1">
                <tr>
                    <th><b> Check Box</b></th>
                    <th><b>Invoice</b></th>
                    <th><b> Total</b></th>
                    
                    <th><b> Date</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b>Garden</b></th>
                       <th style="font-size: 20px;font-style: italic;"><b>Grade</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Rate</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Bag Size</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b> No of Bag</b></th>
                </tr>
            <?php 
            try {
                 $sql = "select srno,invoice,total,DATE_FORMAT(date,'%d/%m/%Y') as niceDate,Garden,grade,rate,kg_bag,no_bag,dry_leaf,liquor,infusion from inventory where grade='$grade' and grade_type='orthodox' order by rate ";
              $result = mysqli_query($conn,$sql);
                 $num = mysqli_num_rows($result);
            if($result->num_rows>0)
	        {
		     while($row = $result->fetch_assoc())
	        {
              ?>
              <tr>
                  <td><input id="check" class="largerCheckbox" type="checkbox" name="cd[]" value="<?php echo"".$row['srno'] ?>"></td>
                  <td><?php echo"".$row['invoice'] ?></td>
                   <td><?php echo"".$row['total'] ?></td>
                  <td><?php echo"".$row['niceDate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['Garden'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['grade'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['rate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['kg_bag'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['no_bag'] ?></td>
              </tr>
                <tr>
                <th style="backgound-color:#A4B0BD;">Dry Leaf</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['dry_leaf'] ?></td>
               
                <th style="backgound-color:#A4B0BD;">Liquor</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['liquor'] ?></td>
                 <th style="backgound-color:#A4B0BD;">Infusion</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['infusion'] ?></td>
            </tr>
              <?php
            }
        }
            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
               </table>
        </div>  


 <!-- OPD1 button-->
            <?php 
            $grade = "opd1";
            $msg = "";
            try {
              $sql = "select count(*) as count from inventory where grade='$grade' and grade_type='orthodox' ";
              $res = mysqli_query($conn,$sql);
                $num=mysqli_num_rows($res);  
                 if($num==0)
            {
                
            }
            else {
                $row=mysqli_fetch_assoc($res);
                $msg = $row['count'];
               
            }

            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
   
          
           <center>
            <input type="button" id="show66" value="OPD1 -><?php echo"".$msg  ?>" onclick="view66()"></center>
 <div id="opd1"  style="display: none">
           <table align="center" cellpadding="5" cellspacing="2" border="1">
                <tr>
                    <th><b> Check Box</b></th>
                    <th><b>Invoice</b></th>
                    <th><b> Total</b></th>
                    
                    <th><b> Date</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b>Garden</b></th>
                       <th style="font-size: 20px;font-style: italic;"><b>Grade</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Rate</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Bag Size</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b> No of Bag</b></th>
                </tr>
            <?php 
            try {
                 $sql = "select srno,invoice,total,DATE_FORMAT(date,'%d/%m/%Y') as niceDate,Garden,grade,rate,kg_bag,no_bag,dry_leaf,liquor,infusion from inventory where grade='$grade' and grade_type='orthodox' order by rate ";
              $result = mysqli_query($conn,$sql);
                 $num = mysqli_num_rows($result);
            if($result->num_rows>0)
	        {
		     while($row = $result->fetch_assoc())
	        {
              ?>
              <tr>
                  <td><input id="check" class="largerCheckbox" type="checkbox" name="cd[]" value="<?php echo"".$row['srno'] ?>"></td>
                  <td><?php echo"".$row['invoice'] ?></td>
                   <td><?php echo"".$row['total'] ?></td>
                  <td><?php echo"".$row['niceDate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['Garden'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['grade'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['rate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['kg_bag'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['no_bag'] ?></td>
              </tr>
                <tr>
                <th style="backgound-color:#A4B0BD;">Dry Leaf</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['dry_leaf'] ?></td>
               
                <th style="backgound-color:#A4B0BD;">Liquor</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['liquor'] ?></td>
                 <th style="backgound-color:#A4B0BD;">Infusion</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['infusion'] ?></td>
            </tr>
              <?php
            }
        }
            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
               </table>
        </div> 


 <!-- OCD button-->
            <?php 
            $grade = "ocd";
            $msg = "";
            try {
              $sql = "select count(*) as count from inventory where grade='$grade' and grade_type='orthodox' ";
              $res = mysqli_query($conn,$sql);
                $num=mysqli_num_rows($res);  
                 if($num==0)
            {
                
            }
            else {
                $row=mysqli_fetch_assoc($res);
                $msg = $row['count'];
               
            }

            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
   
          
           <center>
            <input type="button" id="show28" value="OCD -><?php echo"".$msg  ?>" onclick="view28()"></center>
 <div id="ocd"  style="display: none">
           <table align="center" cellpadding="5" cellspacing="2" border="1">
                <tr>
                    <th><b> Check Box</b></th>
                    <th><b>Invoice</b></th>
                    <th><b> Total</b></th>
                    
                    <th><b> Date</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b>Garden</b></th>
                       <th style="font-size: 20px;font-style: italic;"><b>Grade</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Rate</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Bag Size</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b> No of Bag</b></th>
                </tr>
            <?php 
            try {
                 $sql = "select srno,invoice,total,DATE_FORMAT(date,'%d/%m/%Y') as niceDate,Garden,grade,rate,kg_bag,no_bag,dry_leaf,liquor,infusion from inventory where grade='$grade' and grade_type='orthodox' order by rate ";
              $result = mysqli_query($conn,$sql);
                 $num = mysqli_num_rows($result);
            if($result->num_rows>0)
	        {
		     while($row = $result->fetch_assoc())
	        {
              ?>
              <tr>
                  <td><input id="check" class="largerCheckbox" type="checkbox" name="cd[]" value="<?php echo"".$row['srno'] ?>"></td>
                  <td><?php echo"".$row['invoice'] ?></td>
                 <td><?php echo"".$row['total'] ?></td>
                  <td><?php echo"".$row['niceDate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['Garden'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['grade'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['rate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['kg_bag'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['no_bag'] ?></td>
              </tr>
                <tr>
                <th style="backgound-color:#A4B0BD;">Dry Leaf</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['dry_leaf'] ?></td>
               
                <th style="backgound-color:#A4B0BD;">Liquor</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['liquor'] ?></td>
                 <th style="backgound-color:#A4B0BD;">Infusion</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['infusion'] ?></td>
            </tr>
              <?php
            }
        }
            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
               </table>
        </div> 


 <!-- OCD1 button-->
            <?php 
            $grade = "ocd1";
            $msg = "";
            try {
              $sql = "select count(*) as count from inventory where grade='$grade' and grade_type='orthodox' ";
              $res = mysqli_query($conn,$sql);
                $num=mysqli_num_rows($res);  
                 if($num==0)
            {
                
            }
            else {
                $row=mysqli_fetch_assoc($res);
                $msg = $row['count'];
               
            }

            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
   
          
           <center>
            <input type="button" id="show67" value="OCD1 -><?php echo"".$msg  ?>" onclick="view67()"></center>
 <div id="ocd1"  style="display: none">
           <table align="center" cellpadding="5" cellspacing="2" border="1">
                <tr>
                    <th><b> Check Box</b></th>
                    <th><b>Invoice</b></th>
                    <th><b> Total</b></th>
                    
                    <th><b> Date</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b>Garden</b></th>
                       <th style="font-size: 20px;font-style: italic;"><b>Grade</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Rate</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Bag Size</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b> No of Bag</b></th>
                </tr>
            <?php 
            try {
                 $sql = "select srno,invoice,total,DATE_FORMAT(date,'%d/%m/%Y') as niceDate,Garden,grade,rate,kg_bag,no_bag,dry_leaf,liquor,infusion from inventory where grade='$grade' and grade_type='orthodox' order by rate ";
              $result = mysqli_query($conn,$sql);
                 $num = mysqli_num_rows($result);
            if($result->num_rows>0)
	        {
		     while($row = $result->fetch_assoc())
	        {
              ?>
              <tr>
                  <td><input id="check" class="largerCheckbox" type="checkbox" name="cd[]" value="<?php echo"".$row['srno'] ?>"></td>
                  <td><?php echo"".$row['invoice'] ?></td>
                  <td><?php echo"".$row['total'] ?></td>
                  <td><?php echo"".$row['niceDate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['Garden'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['grade'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['rate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['kg_bag'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['no_bag'] ?></td>
              </tr>
                <tr>
                <th style="backgound-color:#A4B0BD;">Dry Leaf</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['dry_leaf'] ?></td>
               
                <th style="backgound-color:#A4B0BD;">Liquor</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['liquor'] ?></td>
                 <th style="backgound-color:#A4B0BD;">Infusion</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['infusion'] ?></td>
            </tr>
              <?php
            }
        }
            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
               </table>
        </div> 


 <!-- BOPD button-->
            <?php 
            $grade = "bopd";
            $msg = "";
            try {
              $sql = "select count(*) as count from inventory where grade='$grade' and grade_type='orthodox' ";
              $res = mysqli_query($conn,$sql);
                $num=mysqli_num_rows($res);  
                 if($num==0)
            {
                
            }
            else {
                $row=mysqli_fetch_assoc($res);
                $msg = $row['count'];
               
            }

            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
   
          
           <center>
            <input type="button" id="show29" value="BOPD -><?php echo"".$msg  ?>" onclick="view29()"></center>
 <div id="bopd"  style="display: none">
           <table align="center" cellpadding="5" cellspacing="2" border="1">
                <tr>
                    <th><b> Check Box</b></th>
                    <th><b>Invoice</b></th>
                    <th><b> Total</b></th>
                    
                    <th><b> Date</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b>Garden</b></th>
                       <th style="font-size: 20px;font-style: italic;"><b>Grade</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Rate</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Bag Size</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b> No of Bag</b></th>
                </tr>
            <?php 
            try {
                 $sql = "select srno,invoice,total,DATE_FORMAT(date,'%d/%m/%Y') as niceDate,Garden,grade,rate,kg_bag,no_bag,dry_leaf,liquor,infusion from inventory where grade='$grade' and grade_type='orthodox' order by rate ";
              $result = mysqli_query($conn,$sql);
                 $num = mysqli_num_rows($result);
            if($result->num_rows>0)
	        {
		     while($row = $result->fetch_assoc())
	        {
              ?>
              <tr>
                  <td><input id="check" class="largerCheckbox" type="checkbox" name="cd[]" value="<?php echo"".$row['srno'] ?>"></td>
                  <td><?php echo"".$row['invoice'] ?></td>
                  <td><?php echo"".$row['total'] ?></td>
                  <td><?php echo"".$row['niceDate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['Garden'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['grade'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['rate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['kg_bag'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['no_bag'] ?></td>
              </tr>
                <tr>
                <th style="backgound-color:#A4B0BD;">Dry Leaf</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['dry_leaf'] ?></td>
               
                <th style="backgound-color:#A4B0BD;">Liquor</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['liquor'] ?></td>
                 <th style="backgound-color:#A4B0BD;">Infusion</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['infusion'] ?></td>
            </tr>
              <?php
            }
        }
            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
               </table>
        </div> 


 <!-- BOPD1 button-->
            <?php 
            $grade = "bopd1";
            $msg = "";
            try {
              $sql = "select count(*) as count from inventory where grade='$grade' and grade_type='orthodox' ";
              $res = mysqli_query($conn,$sql);
                $num=mysqli_num_rows($res);  
                 if($num==0)
            {
                
            }
            else {
                $row=mysqli_fetch_assoc($res);
                $msg = $row['count'];
               
            }

            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
   
          
           <center>
            <input type="button" id="show68" value="BOPD1 -><?php echo"".$msg  ?>" onclick="view68()"></center>
 <div id="bopd1"  style="display: none">
           <table align="center" cellpadding="5" cellspacing="2" border="1">
                <tr>
                    <th><b> Check Box</b></th>
                    <th><b>Invoice</b></th>
                    <th><b> Total</b></th>
                    
                    <th><b> Date</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b>Garden</b></th>
                       <th style="font-size: 20px;font-style: italic;"><b>Grade</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Rate</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Bag Size</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b> No of Bag</b></th>
                </tr>
            <?php 
            try {
                 $sql = "select srno,invoice,total,DATE_FORMAT(date,'%d/%m/%Y') as niceDate,Garden,grade,rate,kg_bag,no_bag,dry_leaf,liquor,infusion from inventory where grade='$grade' and grade_type='orthodox' order by rate ";
              $result = mysqli_query($conn,$sql);
                 $num = mysqli_num_rows($result);
            if($result->num_rows>0)
	        {
		     while($row = $result->fetch_assoc())
	        {
              ?>
              <tr>
                  <td><input id="check" class="largerCheckbox" type="checkbox" name="cd[]" value="<?php echo"".$row['srno'] ?>"></td>
                  <td><?php echo"".$row['invoice'] ?></td>
                  <td><?php echo"".$row['total'] ?></td>
                  <td><?php echo"".$row['niceDate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['Garden'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['grade'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['rate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['kg_bag'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['no_bag'] ?></td>
              </tr>
                <tr>
                <th style="backgound-color:#A4B0BD;">Dry Leaf</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['dry_leaf'] ?></td>
               
                <th style="backgound-color:#A4B0BD;">Liquor</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['liquor'] ?></td>
                 <th style="backgound-color:#A4B0BD;">Infusion</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['infusion'] ?></td>
            </tr>
              <?php
            }
        }
            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
               </table>
        </div> 


 <!-- BOPFD button-->
            <?php 
            $grade = "BOPFD";
            $msg = "";
            try {
              $sql = "select count(*) as count from inventory where grade='$grade' and grade_type='orthodox' ";
              $res = mysqli_query($conn,$sql);
                $num=mysqli_num_rows($res);  
                 if($num==0)
            {
                
            }
            else {
                $row=mysqli_fetch_assoc($res);
                $msg = $row['count'];
               
            }

            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
   
          
           <center>
            <input type="button" id="show30" value="BOPFD -><?php echo"".$msg  ?>" onclick="view30()"></center>
 <div id="bopfd"  style="display: none">
           <table align="center" cellpadding="5" cellspacing="2" border="1">
                <tr>
                    <th><b> Check Box</b></th>
                    <th><b>Invoice</b></th>
                    <th><b> Total</b></th>
                    
                    <th><b> Date</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b>Garden</b></th>
                       <th style="font-size: 20px;font-style: italic;"><b>Grade</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Rate</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Bag Size</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b> No of Bag</b></th>
                </tr>
            <?php 
            try {
                 $sql = "select srno,invoice,total,DATE_FORMAT(date,'%d/%m/%Y') as niceDate,Garden,grade,rate,kg_bag,no_bag,dry_leaf,liquor,infusion from inventory where grade='$grade' and grade_type='orthodox' order by rate ";
              $result = mysqli_query($conn,$sql);
                 $num = mysqli_num_rows($result);
            if($result->num_rows>0)
	        {
		     while($row = $result->fetch_assoc())
	        {
              ?>
              <tr>
                  <td><input id="check" class="largerCheckbox" type="checkbox" name="cd[]" value="<?php echo"".$row['srno'] ?>"></td>
                  <td><?php echo"".$row['invoice'] ?></td>
                  <td><?php echo"".$row['total'] ?></td>
                  <td><?php echo"".$row['niceDate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['Garden'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['grade'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['rate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['kg_bag'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['no_bag'] ?></td>
              </tr>
                <tr>
                <th style="backgound-color:#A4B0BD;">Dry Leaf</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['dry_leaf'] ?></td>
               
                <th style="backgound-color:#A4B0BD;">Liquor</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['liquor'] ?></td>
                 <th style="backgound-color:#A4B0BD;">Infusion</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['infusion'] ?></td>
            </tr>
              <?php
            }
        }
            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
               </table>
        </div> 


 <!-- BOPFD1 button-->
            <?php 
            $grade = "BOPFD1";
            $msg = "";
            try {
              $sql = "select count(*) as count from inventory where grade='$grade' and grade_type='orthodox' ";
              $res = mysqli_query($conn,$sql);
                $num=mysqli_num_rows($res);  
                 if($num==0)
            {
                
            }
            else {
                $row=mysqli_fetch_assoc($res);
                $msg = $row['count'];
               
            }

            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
   
          
           <center>
            <input type="button" id="show69" value="BOPFD1 -><?php echo"".$msg  ?>" onclick="view69()"></center>
 <div id="bopfd1"  style="display: none">
           <table align="center" cellpadding="5" cellspacing="2" border="1">
                <tr>
                    <th><b> Check Box</b></th>
                    <th><b>Invoice</b></th>
                    <th><b> Total</b></th>
                    
                    <th><b> Date</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b>Garden</b></th>
                       <th style="font-size: 20px;font-style: italic;"><b>Grade</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Rate</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Bag Size</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b> No of Bag</b></th>
                </tr>
            <?php 
            try {
                 $sql = "select srno,invoice,total,DATE_FORMAT(date,'%d/%m/%Y') as niceDate,Garden,grade,rate,kg_bag,no_bag,dry_leaf,liquor,infusion from inventory where grade='$grade' and grade_type='orthodox' order by rate ";
              $result = mysqli_query($conn,$sql);
                 $num = mysqli_num_rows($result);
            if($result->num_rows>0)
	        {
		     while($row = $result->fetch_assoc())
	        {
              ?>
              <tr>
                  <td><input id="check" class="largerCheckbox" type="checkbox" name="cd[]" value="<?php echo"".$row['srno'] ?>"></td>
                  <td><?php echo"".$row['invoice'] ?></td>
                  <td><?php echo"".$row['niceDate'] ?></td>
                  <td><?php echo"".$row['total'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['Garden'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['grade'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['rate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['kg_bag'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['no_bag'] ?></td>
              </tr>
                <tr>
                <th style="backgound-color:#A4B0BD;">Dry Leaf</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['dry_leaf'] ?></td>
               
                <th style="backgound-color:#A4B0BD;">Liquor</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['liquor'] ?></td>
                 <th style="backgound-color:#A4B0BD;">Infusion</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['infusion'] ?></td>
            </tr>
              <?php
            }
        }
            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
               </table>
        </div> 


 <!-- DA button-->
            <?php 
            $grade = "DA";
            $msg = "";
            try {
              $sql = "select count(*) as count from inventory where grade='$grade' and grade_type='orthodox' ";
              $res = mysqli_query($conn,$sql);
                $num=mysqli_num_rows($res);  
                 if($num==0)
            {
                
            }
            else {
                $row=mysqli_fetch_assoc($res);
                $msg = $row['count'];
               
            }

            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
   
          
           <center>
            <input type="button" id="show31" value="DA -><?php echo"".$msg  ?>" onclick="view31()"></center>
 <div id="da"  style="display: none">
           <table align="center" cellpadding="5" cellspacing="2" border="1">
                <tr>
                    <th><b> Check Box</b></th>
                    <th><b>Invoice</b></th>
                    <th><b> Total</b></th>
                    
                    <th><b> Date</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b>Garden</b></th>
                       <th style="font-size: 20px;font-style: italic;"><b>Grade</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Rate</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Bag Size</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b> No of Bag</b></th>
                </tr>
            <?php 
            try {
                 $sql = "select srno,invoice,total,DATE_FORMAT(date,'%d/%m/%Y') as niceDate,Garden,grade,rate,kg_bag,no_bag,dry_leaf,liquor,infusion from inventory where grade='$grade' and grade_type='orthodox' order by rate ";
              $result = mysqli_query($conn,$sql);
                 $num = mysqli_num_rows($result);
            if($result->num_rows>0)
	        {
		     while($row = $result->fetch_assoc())
	        {
              ?>
              <tr>
                  <td><input id="check" class="largerCheckbox" type="checkbox" name="cd[]" value="<?php echo"".$row['srno'] ?>"></td>
                  <td><?php echo"".$row['invoice'] ?></td>
                  <td><?php echo"".$row['total'] ?></td>
                  <td><?php echo"".$row['niceDate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['Garden'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['grade'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['rate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['kg_bag'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['no_bag'] ?></td>
              </tr>
                <tr>
                <th style="backgound-color:#A4B0BD;">Dry Leaf</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['dry_leaf'] ?></td>
               
                <th style="backgound-color:#A4B0BD;">Liquor</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['liquor'] ?></td>
                 <th style="backgound-color:#A4B0BD;">Infusion</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['infusion'] ?></td>
            </tr>
              <?php
            }
        }
            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
               </table>
        </div> 


 <!-- Special Dust button-->
            <?php 
            $grade = "spl_dust";
            $msg = "";
            try {
              $sql = "select count(*) as count from inventory where grade='$grade' and grade_type='orthodox' ";
              $res = mysqli_query($conn,$sql);
                $num=mysqli_num_rows($res);  
                 if($num==0)
            {
                
            }
            else {
                $row=mysqli_fetch_assoc($res);
                $msg = $row['count'];
               
            }

            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
   
          
           <center>
            <input type="button" id="show32" value="Special Dust -><?php echo"".$msg  ?>" onclick="view32()"></center>
 <div id="spl_dust"  style="display: none">
           <table align="center" cellpadding="5" cellspacing="2" border="1">
                <tr>
                    <th><b> Check Box</b></th>
                    <th><b>Invoice</b></th>
                    <th><b> Total</b></th>
                    
                    <th><b> Date</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b>Garden</b></th>
                       <th style="font-size: 20px;font-style: italic;"><b>Grade</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Rate</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Bag Size</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b> No of Bag</b></th>
                </tr>
            <?php 
            try {
                 $sql = "select srno,invoice,total,DATE_FORMAT(date,'%d/%m/%Y') as niceDate,Garden,grade,rate,kg_bag,no_bag,dry_leaf,liquor,infusion from inventory where grade='$grade' and grade_type='orthodox' order by rate ";
              $result = mysqli_query($conn,$sql);
                 $num = mysqli_num_rows($result);
            if($result->num_rows>0)
	        {
		     while($row = $result->fetch_assoc())
	        {
              ?>
              <tr>
                  <td><input id="check" class="largerCheckbox" type="checkbox" name="cd[]" value="<?php echo"".$row['srno'] ?>"></td>
                  <td><?php echo"".$row['invoice'] ?></td>
                   <td><?php echo"".$row['total'] ?></td>
                  <td><?php echo"".$row['niceDate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['Garden'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['grade'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['rate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['kg_bag'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['no_bag'] ?></td>
              </tr>
                <tr>
                <th style="backgound-color:#A4B0BD;">Dry Leaf</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['dry_leaf'] ?></td>
               
                <th style="backgound-color:#A4B0BD;">Liquor</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['liquor'] ?></td>
                 <th style="backgound-color:#A4B0BD;">Infusion</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['infusion'] ?></td>
            </tr>
              <?php
            }
        }
            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
               </table>
        </div> 



 <!-- FD ORTHO button-->
            <?php 
            $grade = "fd";
            $msg = "";
            try {
              $sql = "select count(*) as count from inventory where grade='$grade' and grade_type='orthodox' ";
              $res = mysqli_query($conn,$sql);
                $num=mysqli_num_rows($res);  
                 if($num==0)
            {
                
            }
            else {
                $row=mysqli_fetch_assoc($res);
                $msg = $row['count'];
               
            }

            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
   
          
           <center>
            <input type="button" id="show33" value="FD -><?php echo"".$msg  ?>" onclick="view33()"></center>
 <div id="orth_fd"  style="display: none">
           <table align="center" cellpadding="5" cellspacing="2" border="1">
                <tr>
                    <th><b> Check Box</b></th>
                    <th><b>Invoice</b></th>
                    <th><b> Total</b></th>
                    
                    <th><b> Date</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b>Garden</b></th>
                       <th style="font-size: 20px;font-style: italic;"><b>Grade</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Rate</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Bag Size</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b> No of Bag</b></th>
                </tr>
            <?php 
            try {
                 $sql = "select srno,invoice,total,DATE_FORMAT(date,'%d/%m/%Y') as niceDate,Garden,grade,rate,kg_bag,no_bag,dry_leaf,liquor,infusion from inventory where grade='$grade' and grade_type='orthodox' order by rate ";
              $result = mysqli_query($conn,$sql);
                 $num = mysqli_num_rows($result);
            if($result->num_rows>0)
	        {
		     while($row = $result->fetch_assoc())
	        {
              ?>
              <tr>
                  <td><input id="check" class="largerCheckbox" type="checkbox" name="cd[]" value="<?php echo"".$row['srno'] ?>"></td>
                  <td><?php echo"".$row['invoice'] ?></td>
                  <td><?php echo"".$row['total'] ?></td>
                  <td><?php echo"".$row['niceDate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['Garden'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['grade'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['rate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['kg_bag'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['no_bag'] ?></td>
              </tr>
                <tr>
                <th style="backgound-color:#A4B0BD;">Dry Leaf</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['dry_leaf'] ?></td>
               
                <th style="backgound-color:#A4B0BD;">Liquor</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['liquor'] ?></td>
                 <th style="backgound-color:#A4B0BD;">Infusion</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['infusion'] ?></td>
            </tr>
              <?php
            }
        }
            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
               </table>
        </div>  


 <!-- FD1 ORTHO button-->
            <?php 
            $grade = "fd1";
            $msg = "";
            try {
              $sql = "select count(*) as count from inventory where grade='$grade' and grade_type='orthodox' ";
              $res = mysqli_query($conn,$sql);
                $num=mysqli_num_rows($res);  
                 if($num==0)
            {
                
            }
            else {
                $row=mysqli_fetch_assoc($res);
                $msg = $row['count'];
               
            }

            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
   
          
           <center>
            <input type="button" id="show70" value="FD1 -><?php echo"".$msg  ?>" onclick="view70()"></center>
 <div id="ortho_fd1"  style="display: none">
           <table align="center" cellpadding="5" cellspacing="2" border="1">
                <tr>
                    <th><b> Check Box</b></th>
                    <th><b>Invoice</b></th>
                    <th><b> Total</b></th>
                    
                    <th><b> Date</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b>Garden</b></th>
                       <th style="font-size: 20px;font-style: italic;"><b>Grade</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Rate</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Bag Size</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b> No of Bag</b></th>
                </tr>
            <?php 
            try {
                 $sql = "select srno,invoice,total,DATE_FORMAT(date,'%d/%m/%Y') as niceDate,Garden,grade,rate,kg_bag,no_bag,dry_leaf,liquor,infusion from inventory where grade='$grade' and grade_type='orthodox' order by rate ";
              $result = mysqli_query($conn,$sql);
                 $num = mysqli_num_rows($result);
            if($result->num_rows>0)
	        {
		     while($row = $result->fetch_assoc())
	        {
              ?>
              <tr>
                  <td><input id="check" class="largerCheckbox" type="checkbox" name="cd[]" value="<?php echo"".$row['srno'] ?>"></td>
                  <td><?php echo"".$row['invoice'] ?></td>
                  <td><?php echo"".$row['total'] ?></td>
                  <td><?php echo"".$row['niceDate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['Garden'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['grade'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['rate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['kg_bag'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['no_bag'] ?></td>
              </tr>
                <tr>
                <th style="backgound-color:#A4B0BD;">Dry Leaf</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['dry_leaf'] ?></td>
               
                <th style="backgound-color:#A4B0BD;">Liquor</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['liquor'] ?></td>
                 <th style="backgound-color:#A4B0BD;">Infusion</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['infusion'] ?></td>
            </tr>
              <?php
            }
        }
            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
               </table>
        </div>  


 <!-- G DUST button-->
            <?php 
            $grade = "g_dust";
            $msg = "";
            try {
              $sql = "select count(*) as count from inventory where grade='$grade' and grade_type='orthodox' ";
              $res = mysqli_query($conn,$sql);
                $num=mysqli_num_rows($res);  
                 if($num==0)
            {
                
            }
            else {
                $row=mysqli_fetch_assoc($res);
                $msg = $row['count'];
               
            }

            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
   
          
           <center>
            <input type="button" id="show34" value="G Dust -><?php echo"".$msg  ?>" onclick="view34()"></center>
 <div id="g_dust"  style="display: none">
           <table align="center" cellpadding="5" cellspacing="2" border="1">
                <tr>
                    <th><b> Check Box</b></th>
                    <th><b>Invoice</b></th>
                    <th><b> Total</b></th>
                    
                    <th><b> Date</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b>Garden</b></th>
                       <th style="font-size: 20px;font-style: italic;"><b>Grade</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Rate</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Bag Size</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b> No of Bag</b></th>
                </tr>
            <?php 
            try {
                 $sql = "select srno,invoice,total,DATE_FORMAT(date,'%d/%m/%Y') as niceDate,Garden,grade,rate,kg_bag,no_bag,dry_leaf,liquor,infusion from inventory where grade='$grade' and grade_type='orthodox' order by rate ";
              $result = mysqli_query($conn,$sql);
                 $num = mysqli_num_rows($result);
            if($result->num_rows>0)
	        {
		     while($row = $result->fetch_assoc())
	        {
              ?>
              <tr>
                  <td><input id="check" class="largerCheckbox" type="checkbox" name="cd[]" value="<?php echo"".$row['srno'] ?>"></td>
                  <td><?php echo"".$row['invoice'] ?></td>
                  <td><?php echo"".$row['total'] ?></td>
                  <td><?php echo"".$row['niceDate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['Garden'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['grade'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['rate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['kg_bag'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['no_bag'] ?></td>
              </tr>
                <tr>
                <th style="backgound-color:#A4B0BD;">Dry Leaf</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['dry_leaf'] ?></td>
               
                <th style="backgound-color:#A4B0BD;">Liquor</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['liquor'] ?></td>
                 <th style="backgound-color:#A4B0BD;">Infusion</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['infusion'] ?></td>
            </tr>
              <?php
            }
        }
            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
               </table>
        </div>  


 <!-- OD button-->
            <?php 
            $grade = "od";
            $msg = "";
            try {
              $sql = "select count(*) as count from inventory where grade='$grade' and grade_type='orthodox' ";
              $res = mysqli_query($conn,$sql);
                $num=mysqli_num_rows($res);  
                 if($num==0)
            {
                
            }
            else {
                $row=mysqli_fetch_assoc($res);
                $msg = $row['count'];
               
            }

            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
   
          
           <center>
            <input type="button" id="show35" value="OD -><?php echo"".$msg  ?>" onclick="view35()"></center>
 <div id="od"  style="display: none">
           <table align="center" cellpadding="5" cellspacing="2" border="1">
                <tr>
                    <th><b> Check Box</b></th>
                    <th><b>Invoice</b></th>
                    <th><b> Total</b></th>
                    
                    <th><b> Date</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b>Garden</b></th>
                       <th style="font-size: 20px;font-style: italic;"><b>Grade</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Rate</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Bag Size</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b> No of Bag</b></th>
                </tr>
            <?php 
            try {
                 $sql = "select srno,invoice,total,DATE_FORMAT(date,'%d/%m/%Y') as niceDate,Garden,grade,rate,kg_bag,no_bag,dry_leaf,liquor,infusion from inventory where grade='$grade' and grade_type='orthodox' order by rate ";
              $result = mysqli_query($conn,$sql);
                 $num = mysqli_num_rows($result);
            if($result->num_rows>0)
	        {
		     while($row = $result->fetch_assoc())
	        {
              ?>
              <tr>
                  <td><input id="check" class="largerCheckbox" type="checkbox" name="cd[]" value="<?php echo"".$row['srno'] ?>"></td>
                  <td><?php echo"".$row['invoice'] ?></td>
                  <td><?php echo"".$row['total'] ?></td>
                  <td><?php echo"".$row['niceDate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['Garden'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['grade'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['rate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['kg_bag'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['no_bag'] ?></td>
              </tr>
                <tr>
                <th style="backgound-color:#A4B0BD;">Dry Leaf</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['dry_leaf'] ?></td>
               
                <th style="backgound-color:#A4B0BD;">Liquor</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['liquor'] ?></td>
                 <th style="backgound-color:#A4B0BD;">Infusion</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['infusion'] ?></td>
            </tr>
              <?php
            }
        }
            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
               </table>
        </div>  
 </div>

    <!-- End of Dust Grades-->


  <center> <input type="button" id="show_ortho_Fannings" value="FANNINGS+" onclick="view_ortho_Fannings()" ></center>
  <div id="ortho_fannings_leaf_grades"  style="display: none"> 
      

 <!-- GOF button-->
            <?php 
            $grade = "gof";
            $msg = "";
            try {
              $sql = "select count(*) as count from inventory where grade='$grade' and grade_type='orthodox' ";
              $res = mysqli_query($conn,$sql);
                $num=mysqli_num_rows($res);  
                 if($num==0)
            {
                
            }
            else {
                $row=mysqli_fetch_assoc($res);
                $msg = $row['count'];
               
            }

            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
   
          
           <center>
            <input type="button" id="show36" value="GOF -><?php echo"".$msg  ?>" onclick="view36()"></center>
 <div id="gof"  style="display: none">
           <table align="center" cellpadding="5" cellspacing="2" border="1">
                <tr>
                    <th><b> Check Box</b></th>
                    <th><b>Invoice</b></th>
                    <th><b> Total</b></th>
                    
                    <th><b> Date</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b>Garden</b></th>
                       <th style="font-size: 20px;font-style: italic;"><b>Grade</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Rate</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Bag Size</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b> No of Bag</b></th>
                </tr>
            <?php 
            try {
                 $sql = "select srno,invoice,total,DATE_FORMAT(date,'%d/%m/%Y') as niceDate,Garden,grade,rate,kg_bag,no_bag,dry_leaf,liquor,infusion from inventory where grade='$grade' and grade_type='orthodox' order by rate ";
              $result = mysqli_query($conn,$sql);
                 $num = mysqli_num_rows($result);
            if($result->num_rows>0)
	        {
		     while($row = $result->fetch_assoc())
	        {
              ?>
              <tr>
                  <td><input id="check" class="largerCheckbox" type="checkbox" name="cd[]" value="<?php echo"".$row['srno'] ?>"></td>
                  <td><?php echo"".$row['invoice'] ?></td>
                  <td><?php echo"".$row['total'] ?></td>
                  <td><?php echo"".$row['niceDate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['Garden'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['grade'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['rate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['kg_bag'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['no_bag'] ?></td>
              </tr>
                <tr>
                <th style="backgound-color:#A4B0BD;">Dry Leaf</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['dry_leaf'] ?></td>
               
                <th style="backgound-color:#A4B0BD;">Liquor</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['liquor'] ?></td>
                 <th style="backgound-color:#A4B0BD;">Infusion</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['infusion'] ?></td>
            </tr>
              <?php
            }
        }
            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
               </table>
        </div>  
        
 <!-- GOF1 button-->
            <?php 
            $grade = "gof1";
            $msg = "";
            try {
              $sql = "select count(*) as count from inventory where grade='$grade' and grade_type='orthodox' ";
              $res = mysqli_query($conn,$sql);
                $num=mysqli_num_rows($res);  
                 if($num==0)
            {
                
            }
            else {
                $row=mysqli_fetch_assoc($res);
                $msg = $row['count'];
               
            }

            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
   
          
           <center>
            <input type="button" id="show55" value="GOF1 -><?php echo"".$msg  ?>" onclick="view55()"></center>
 <div id="gof1"  style="display: none">
           <table align="center" cellpadding="5" cellspacing="2" border="1">
                <tr>
                    <th><b> Check Box</b></th>
                    <th><b>Invoice</b></th>
                    <th><b> Total</b></th>
                    
                    <th><b> Date</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b>Garden</b></th>
                       <th style="font-size: 20px;font-style: italic;"><b>Grade</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Rate</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Bag Size</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b> No of Bag</b></th>
                </tr>
            <?php 
            try {
                 $sql = "select srno,invoice,total,DATE_FORMAT(date,'%d/%m/%Y') as niceDate,Garden,grade,rate,kg_bag,no_bag,dry_leaf,liquor,infusion from inventory where grade='$grade' and grade_type='orthodox' order by rate ";
              $result = mysqli_query($conn,$sql);
                 $num = mysqli_num_rows($result);
            if($result->num_rows>0)
	        {
		     while($row = $result->fetch_assoc())
	        {
              ?>
              <tr>
                  <td><input id="check" class="largerCheckbox" type="checkbox" name="cd[]" value="<?php echo"".$row['srno'] ?>"></td>
                  <td><?php echo"".$row['invoice'] ?></td>
                  <td><?php echo"".$row['total'] ?></td>
                  <td><?php echo"".$row['niceDate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['Garden'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['grade'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['rate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['kg_bag'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['no_bag'] ?></td>
              </tr>
                <tr>
                <th style="backgound-color:#A4B0BD;">Dry Leaf</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['dry_leaf'] ?></td>
               
                <th style="backgound-color:#A4B0BD;">Liquor</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['liquor'] ?></td>
                 <th style="backgound-color:#A4B0BD;">Infusion</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['infusion'] ?></td>
            </tr>
              <?php
            }
        }
            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
               </table>
        </div> 


 <!-- FOF button-->
            <?php 
            $grade = "fof";
            $msg = "";
            try {
              $sql = "select count(*) as count from inventory where grade='$grade' and grade_type='orthodox' ";
              $res = mysqli_query($conn,$sql);
                $num=mysqli_num_rows($res);  
                 if($num==0)
            {
                
            }
            else {
                $row=mysqli_fetch_assoc($res);
                $msg = $row['count'];
               
            }

            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
   
          
           <center>
            <input type="button" id="show37" value="FOF -><?php echo"".$msg  ?>" onclick="view37()"></center>
 <div id="fof"  style="display: none">
           <table align="center" cellpadding="5" cellspacing="2" border="1">
                <tr>
                    <th><b> Check Box</b></th>
                    <th><b>Invoice</b></th>
                    <th><b> Total</b></th>
                    
                    <th><b> Date</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b>Garden</b></th>
                       <th style="font-size: 20px;font-style: italic;"><b>Grade</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Rate</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Bag Size</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b> No of Bag</b></th>
                </tr>
            <?php 
            try {
                 $sql = "select srno,invoice,total,DATE_FORMAT(date,'%d/%m/%Y') as niceDate,Garden,grade,rate,kg_bag,no_bag,dry_leaf,liquor,infusion from inventory where grade='$grade' and grade_type='orthodox' order by rate ";
              $result = mysqli_query($conn,$sql);
                 $num = mysqli_num_rows($result);
            if($result->num_rows>0)
	        {
		     while($row = $result->fetch_assoc())
	        {
              ?>
              <tr>
                  <td><input id="check" class="largerCheckbox" type="checkbox" name="cd[]" value="<?php echo"".$row['srno'] ?>"></td>
                  <td><?php echo"".$row['invoice'] ?></td>
                   <td><?php echo"".$row['total'] ?></td>
                  <td><?php echo"".$row['niceDate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['Garden'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['grade'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['rate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['kg_bag'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['no_bag'] ?></td>
              </tr>
                <tr>
                <th style="backgound-color:#A4B0BD;">Dry Leaf</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['dry_leaf'] ?></td>
               
                <th style="backgound-color:#A4B0BD;">Liquor</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['liquor'] ?></td>
                 <th style="backgound-color:#A4B0BD;">Infusion</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['infusion'] ?></td>
            </tr>
              <?php
            }
        }
            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
               </table>
        </div> 


 <!-- FOF1 button-->
            <?php 
            $grade = "fof1";
            $msg = "";
            try {
              $sql = "select count(*) as count from inventory where grade='$grade' and grade_type='orthodox' ";
              $res = mysqli_query($conn,$sql);
                $num=mysqli_num_rows($res);  
                 if($num==0)
            {
                
            }
            else {
                $row=mysqli_fetch_assoc($res);
                $msg = $row['count'];
               
            }

            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
   
          
           <center>
            <input type="button" id="show56" value="FOF1 -><?php echo"".$msg  ?>" onclick="view56()"></center>
 <div id="fof1"  style="display: none">
           <table align="center" cellpadding="5" cellspacing="2" border="1">
                <tr>
                    <th><b> Check Box</b></th>
                    <th><b>Invoice</b></th>
                    <th><b> Total</b></th>
                    
                    <th><b> Date</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b>Garden</b></th>
                       <th style="font-size: 20px;font-style: italic;"><b>Grade</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Rate</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Bag Size</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b> No of Bag</b></th>
                </tr>
            <?php 
            try {
                 $sql = "select srno,invoice,total,DATE_FORMAT(date,'%d/%m/%Y') as niceDate,Garden,grade,rate,kg_bag,no_bag,dry_leaf,liquor,infusion from inventory where grade='$grade' and grade_type='orthodox' order by rate ";
              $result = mysqli_query($conn,$sql);
                 $num = mysqli_num_rows($result);
            if($result->num_rows>0)
	        {
		     while($row = $result->fetch_assoc())
	        {
              ?>
              <tr>
                  <td><input id="check" class="largerCheckbox" type="checkbox" name="cd[]" value="<?php echo"".$row['srno'] ?>"></td>
                  <td><?php echo"".$row['invoice'] ?></td>
                   <td><?php echo"".$row['total'] ?></td>
                  <td><?php echo"".$row['niceDate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['Garden'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['grade'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['rate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['kg_bag'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['no_bag'] ?></td>
              </tr>
                <tr>
                <th style="backgound-color:#A4B0BD;">Dry Leaf</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['dry_leaf'] ?></td>
               
                <th style="backgound-color:#A4B0BD;">Liquor</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['liquor'] ?></td>
                 <th style="backgound-color:#A4B0BD;">Infusion</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['infusion'] ?></td>
            </tr>
              <?php
            }
        }
            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
               </table>
        </div> 


 <!-- BOPF button-->
            <?php 
            $grade = "bopf";
            $msg = "";
            try {
              $sql = "select count(*) as count from inventory where grade='$grade' and grade_type='orthodox' ";
              $res = mysqli_query($conn,$sql);
                $num=mysqli_num_rows($res);  
                 if($num==0)
            {
                
            }
            else {
                $row=mysqli_fetch_assoc($res);
                $msg = $row['count'];
               
            }

            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
   
          
           <center>
            <input type="button" id="show38" value="BOPF -><?php echo"".$msg  ?>" onclick="view38()"></center>
 <div id="ortho_bopf"  style="display: none">
           <table align="center" cellpadding="5" cellspacing="2" border="1">
                <tr>
                    <th><b> Check Box</b></th>
                    <th><b>Invoice</b></th>
                    <th><b> Total</b></th>
                    
                    <th><b> Date</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b>Garden</b></th>
                       <th style="font-size: 20px;font-style: italic;"><b>Grade</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Rate</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Bag Size</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b> No of Bag</b></th>
                </tr>
            <?php 
            try {
                 $sql = "select srno,invoice,total,DATE_FORMAT(date,'%d/%m/%Y') as niceDate,Garden,grade,rate,kg_bag,no_bag,dry_leaf,liquor,infusion from inventory where grade='$grade' and grade_type='orthodox' order by rate ";
              $result = mysqli_query($conn,$sql);
                 $num = mysqli_num_rows($result);
            if($result->num_rows>0)
	        {
		     while($row = $result->fetch_assoc())
	        {
              ?>
              <tr>
                  <td><input id="check" class="largerCheckbox" type="checkbox" name="cd[]" value="<?php echo"".$row['srno'] ?>"></td>
                  <td><?php echo"".$row['invoice'] ?></td>
                  <td><?php echo"".$row['total'] ?></td>
                  <td><?php echo"".$row['niceDate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['Garden'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['grade'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['rate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['kg_bag'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['no_bag'] ?></td>
              </tr>
                <tr>
                <th style="backgound-color:#A4B0BD;">Dry Leaf</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['dry_leaf'] ?></td>
               
                <th style="backgound-color:#A4B0BD;">Liquor</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['liquor'] ?></td>
                 <th style="backgound-color:#A4B0BD;">Infusion</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['infusion'] ?></td>
            </tr>
              <?php
            }
        }
            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
               </table>
        </div>  
</div>
  
    

   <!-- End of Fannings Grades-->
   <center> <input type="button" id="show_ortho_Broken" value="BROKEN LEAF+" onclick="view_ortho_Broken()" ></center>
   <div id="ortho_broken_leaf_grades"  style="display: none"> 

    
 <!-- BOP1 button-->
            <?php 
            $grade = "bop1";
            $msg = "";
            try {
              $sql = "select count(*) as count from inventory where grade='$grade' and grade_type='orthodox' ";
              $res = mysqli_query($conn,$sql);
                $num=mysqli_num_rows($res);  
                 if($num==0)
            {
                
            }
            else {
                $row=mysqli_fetch_assoc($res);
                $msg = $row['count'];
               
            }

            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
   
          
           <center>
            <input type="button" id="show39" value="BOP1 -><?php echo"".$msg  ?>" onclick="view39()"></center>
 <div id="ortho_bop1"  style="display: none">
           <table align="center" cellpadding="5" cellspacing="2" border="1">
                <tr>
                    <th><b> Check Box</b></th>
                    <th><b>Invoice</b></th>
                    <th><b> Total</b></th>
                    
                    <th><b> Date</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b>Garden</b></th>
                       <th style="font-size: 20px;font-style: italic;"><b>Grade</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Rate</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Bag Size</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b> No of Bag</b></th>
                </tr>
            <?php 
            try {
                 $sql = "select srno,invoice,total,DATE_FORMAT(date,'%d/%m/%Y') as niceDate,Garden,grade,rate,kg_bag,no_bag,dry_leaf,liquor,infusion from inventory where grade='$grade' and grade_type='orthodox' order by rate ";
              $result = mysqli_query($conn,$sql);
                 $num = mysqli_num_rows($result);
            if($result->num_rows>0)
	        {
		     while($row = $result->fetch_assoc())
	        {
              ?>
              <tr>
                  <td><input id="check" class="largerCheckbox" type="checkbox" name="cd[]" value="<?php echo"".$row['srno'] ?>"></td>
                  <td><?php echo"".$row['invoice'] ?></td>
                  <td><?php echo"".$row['total'] ?></td>
                  <td><?php echo"".$row['niceDate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['Garden'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['grade'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['rate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['kg_bag'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['no_bag'] ?></td>
              </tr>
                <tr>
                <th style="backgound-color:#A4B0BD;">Dry Leaf</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['dry_leaf'] ?></td>
               
                <th style="backgound-color:#A4B0BD;">Liquor</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['liquor'] ?></td>
                 <th style="backgound-color:#A4B0BD;">Infusion</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['infusion'] ?></td>
            </tr>
              <?php
            }
        }
            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
               </table>
        </div>  


 <!-- GFBOP button-->
            <?php 
            $grade = "gfbop";
            $msg = "";
            try {
              $sql = "select count(*) as count from inventory where grade='$grade' and grade_type='orthodox' ";
              $res = mysqli_query($conn,$sql);
                $num=mysqli_num_rows($res);  
                 if($num==0)
            {
                
            }
            else {
                $row=mysqli_fetch_assoc($res);
                $msg = $row['count'];
               
            }

            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
   
          
           <center>
            <input type="button" id="show40" value="GFBOP -><?php echo"".$msg  ?>" onclick="view40()"></center>
 <div id="gfbop"  style="display: none">
           <table align="center" cellpadding="5" cellspacing="2" border="1">
                <tr>
                    <th><b> Check Box</b></th>
                    <th><b>Invoice</b></th>
                    <th><b> Total</b></th>
                    
                    <th><b> Date</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b>Garden</b></th>
                       <th style="font-size: 20px;font-style: italic;"><b>Grade</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Rate</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Bag Size</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b> No of Bag</b></th>
                </tr>
            <?php 
            try {
                 $sql = "select srno,invoice,total,DATE_FORMAT(date,'%d/%m/%Y') as niceDate,Garden,grade,rate,kg_bag,no_bag,dry_leaf,liquor,infusion from inventory where grade='$grade' and grade_type='orthodox' order by rate ";
              $result = mysqli_query($conn,$sql);
                 $num = mysqli_num_rows($result);
            if($result->num_rows>0)
	        {
		     while($row = $result->fetch_assoc())
	        {
              ?>
              <tr>
                  <td><input id="check" class="largerCheckbox" type="checkbox" name="cd[]" value="<?php echo"".$row['srno'] ?>"></td>
                  <td><?php echo"".$row['invoice'] ?></td>
                   <td><?php echo"".$row['total'] ?></td>
                  <td><?php echo"".$row['niceDate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['Garden'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['grade'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['rate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['kg_bag'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['no_bag'] ?></td>
              </tr>
                <tr>
                <th style="backgound-color:#A4B0BD;">Dry Leaf</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['dry_leaf'] ?></td>
               
                <th style="backgound-color:#A4B0BD;">Liquor</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['liquor'] ?></td>
                 <th style="backgound-color:#A4B0BD;">Infusion</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['infusion'] ?></td>
            </tr>
              <?php
            }
        }
            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
               </table>
        </div>  


 <!-- GFBOP1 button-->
            <?php 
            $grade = "gfbop1";
            $msg = "";
            try {
              $sql = "select count(*) as count from inventory where grade='$grade' and grade_type='orthodox' ";
              $res = mysqli_query($conn,$sql);
                $num=mysqli_num_rows($res);  
                 if($num==0)
            {
                
            }
            else {
                $row=mysqli_fetch_assoc($res);
                $msg = $row['count'];
               
            }

            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
   
          
           <center>
            <input type="button" id="show58" value="GFBOP1 -><?php echo"".$msg  ?>" onclick="view58()"></center>
 <div id="gfbop1"  style="display: none">
           <table align="center" cellpadding="5" cellspacing="2" border="1">
                <tr>
                    <th><b> Check Box</b></th>
                    <th><b>Invoice</b></th>
                    <th><b> Total</b></th>
                    
                    <th><b> Date</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b>Garden</b></th>
                       <th style="font-size: 20px;font-style: italic;"><b>Grade</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Rate</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Bag Size</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b> No of Bag</b></th>
                </tr>
            <?php 
            try {
                 $sql = "select srno,invoice,total,DATE_FORMAT(date,'%d/%m/%Y') as niceDate,Garden,grade,rate,kg_bag,no_bag,dry_leaf,liquor,infusion from inventory where grade='$grade' and grade_type='orthodox' order by rate ";
              $result = mysqli_query($conn,$sql);
                 $num = mysqli_num_rows($result);
            if($result->num_rows>0)
	        {
		     while($row = $result->fetch_assoc())
	        {
              ?>
              <tr>
                  <td><input id="check" class="largerCheckbox" type="checkbox" name="cd[]" value="<?php echo"".$row['srno'] ?>"></td>
                  <td><?php echo"".$row['invoice'] ?></td>
                  <td><?php echo"".$row['total'] ?></td>
                  <td><?php echo"".$row['niceDate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['Garden'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['grade'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['rate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['kg_bag'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['no_bag'] ?></td>
              </tr>
                <tr>
                <th style="backgound-color:#A4B0BD;">Dry Leaf</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['dry_leaf'] ?></td>
               
                <th style="backgound-color:#A4B0BD;">Liquor</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['liquor'] ?></td>
                 <th style="backgound-color:#A4B0BD;">Infusion</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['infusion'] ?></td>
            </tr>
              <?php
            }
        }
            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
               </table>
        </div>  


 <!-- BPS button-->
            <?php 
            $grade = "bps";
            $msg = "";
            try {
              $sql = "select count(*) as count from inventory where grade='$grade' and grade_type='orthodox' ";
              $res = mysqli_query($conn,$sql);
                $num=mysqli_num_rows($res);  
                 if($num==0)
            {
                
            }
            else {
                $row=mysqli_fetch_assoc($res);
                $msg = $row['count'];
               
            }

            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
   
          
           <center>
            <input type="button" id="show41" value="BPS -><?php echo"".$msg  ?>" onclick="view41()"></center>
 <div id="ortho_bps"  style="display: none">
           <table align="center" cellpadding="5" cellspacing="2" border="1">
                <tr>
                    <th><b> Check Box</b></th>
                    <th><b>Invoice</b></th>
                    <th><b> Total</b></th>
                    
                    <th><b> Date</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b>Garden</b></th>
                       <th style="font-size: 20px;font-style: italic;"><b>Grade</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Rate</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Bag Size</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b> No of Bag</b></th>
                </tr>
            <?php 
            try {
                 $sql = "select srno,invoice,total,DATE_FORMAT(date,'%d/%m/%Y') as niceDate,Garden,grade,rate,kg_bag,no_bag,dry_leaf,liquor,infusion from inventory where grade='$grade' and grade_type='orthodox' order by rate ";
              $result = mysqli_query($conn,$sql);
                 $num = mysqli_num_rows($result);
            if($result->num_rows>0)
	        {
		     while($row = $result->fetch_assoc())
	        {
              ?>
              <tr>
                  <td><input id="check" class="largerCheckbox" type="checkbox" name="cd[]" value="<?php echo"".$row['srno'] ?>"></td>
                  <td><?php echo"".$row['invoice'] ?></td>
                  <td><?php echo"".$row['total'] ?></td>
                  <td><?php echo"".$row['niceDate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['Garden'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['grade'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['rate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['kg_bag'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['no_bag'] ?></td>
              </tr>
                <tr>
                <th style="backgound-color:#A4B0BD;">Dry Leaf</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['dry_leaf'] ?></td>
               
                <th style="backgound-color:#A4B0BD;">Liquor</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['liquor'] ?></td>
                 <th style="backgound-color:#A4B0BD;">Infusion</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['infusion'] ?></td>
            </tr>
              <?php
            }
        }
            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
               </table>
        </div>  


 <!-- BPS1 button-->
            <?php 
            $grade = "bps1";
            $msg = "";
            try {
              $sql = "select count(*) as count from inventory where grade='$grade' and grade_type='orthodox' ";
              $res = mysqli_query($conn,$sql);
                $num=mysqli_num_rows($res);  
                 if($num==0)
            {
                
            }
            else {
                $row=mysqli_fetch_assoc($res);
                $msg = $row['count'];
               
            }

            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
   
          
           <center>
            <input type="button" id="show59" value="BPS1 -><?php echo"".$msg  ?>" onclick="view59()"></center>
 <div id="ortho_bps1"  style="display: none">
           <table align="center" cellpadding="5" cellspacing="2" border="1">
                <tr>
                    <th><b> Check Box</b></th>
                    <th><b>Invoice</b></th>
                    <th><b> Total</b></th>
                    
                    <th><b> Date</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b>Garden</b></th>
                       <th style="font-size: 20px;font-style: italic;"><b>Grade</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Rate</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Bag Size</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b> No of Bag</b></th>
                </tr>
            <?php 
            try {
                 $sql = "select srno,invoice,total,DATE_FORMAT(date,'%d/%m/%Y') as niceDate,Garden,grade,rate,kg_bag,no_bag,dry_leaf,liquor,infusion from inventory where grade='$grade' and grade_type='orthodox' order by rate ";
              $result = mysqli_query($conn,$sql);
                 $num = mysqli_num_rows($result);
            if($result->num_rows>0)
	        {
		     while($row = $result->fetch_assoc())
	        {
              ?>
              <tr>
                  <td><input id="check" class="largerCheckbox" type="checkbox" name="cd[]" value="<?php echo"".$row['srno'] ?>"></td>
                  <td><?php echo"".$row['invoice'] ?></td>
                  <td><?php echo"".$row['total'] ?></td>
                  <td><?php echo"".$row['niceDate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['Garden'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['grade'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['rate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['kg_bag'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['no_bag'] ?></td>
              </tr>
                <tr>
                <th style="backgound-color:#A4B0BD;">Dry Leaf</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['dry_leaf'] ?></td>
               
                <th style="backgound-color:#A4B0BD;">Liquor</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['liquor'] ?></td>
                 <th style="backgound-color:#A4B0BD;">Infusion</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['infusion'] ?></td>
            </tr>
              <?php
            }
        }
            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
               </table>
        </div>  


 <!-- GBOP button-->
            <?php 
            $grade = "GBOP";
            $msg = "";
            try {
              $sql = "select count(*) as count from inventory where grade='$grade' and grade_type='orthodox' ";
              $res = mysqli_query($conn,$sql);
                $num=mysqli_num_rows($res);  
                 if($num==0)
            {
                
            }
            else {
                $row=mysqli_fetch_assoc($res);
                $msg = $row['count'];
               
            }

            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
   
          
           <center>
            <input type="button" id="show42" value="GBOP -><?php echo"".$msg  ?>" onclick="view42()"></center>
 <div id="gbop"  style="display: none">
           <table align="center" cellpadding="5" cellspacing="2" border="1">
                <tr>
                    <th><b> Check Box</b></th>
                    <th><b>Invoice</b></th>
                    <th><b> Total</b></th>
                    
                    <th><b> Date</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b>Garden</b></th>
                       <th style="font-size: 20px;font-style: italic;"><b>Grade</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Rate</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Bag Size</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b> No of Bag</b></th>
                </tr>
            <?php 
            try {
                 $sql = "select srno,invoice,total,DATE_FORMAT(date,'%d/%m/%Y') as niceDate,Garden,grade,rate,kg_bag,no_bag,dry_leaf,liquor,infusion from inventory where grade='$grade' and grade_type='orthodox' order by rate ";
              $result = mysqli_query($conn,$sql);
                 $num = mysqli_num_rows($result);
            if($result->num_rows>0)
	        {
		     while($row = $result->fetch_assoc())
	        {
              ?>
              <tr>
                  <td><input id="check" class="largerCheckbox" type="checkbox" name="cd[]" value="<?php echo"".$row['srno'] ?>"></td>
                  <td><?php echo"".$row['invoice'] ?></td>
                  <td><?php echo"".$row['total'] ?></td>
                  <td><?php echo"".$row['niceDate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['Garden'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['grade'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['rate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['kg_bag'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['no_bag'] ?></td>
              </tr>
                <tr>
                <th style="backgound-color:#A4B0BD;">Dry Leaf</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['dry_leaf'] ?></td>
               
                <th style="backgound-color:#A4B0BD;">Liquor</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['liquor'] ?></td>
                 <th style="backgound-color:#A4B0BD;">Infusion</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['infusion'] ?></td>
            </tr>
              <?php
            }
        }
            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
               </table>
        </div>  


 <!-- GBOP1 button-->
            <?php 
            $grade = "GBOP1";
            $msg = "";
            try {
              $sql = "select count(*) as count from inventory where grade='$grade' and grade_type='orthodox' ";
              $res = mysqli_query($conn,$sql);
                $num=mysqli_num_rows($res);  
                 if($num==0)
            {
                
            }
            else {
                $row=mysqli_fetch_assoc($res);
                $msg = $row['count'];
               
            }

            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
   
          
           <center>
            <input type="button" id="show60" value="GBOP1 -><?php echo"".$msg  ?>" onclick="view60()"></center>
 <div id="gbop1"  style="display: none">
           <table align="center" cellpadding="5" cellspacing="2" border="1">
                <tr>
                    <th><b> Check Box</b></th>
                    <th><b>Invoice</b></th>
                    <th><b> Total</b></th>
                    
                    <th><b> Date</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b>Garden</b></th>
                       <th style="font-size: 20px;font-style: italic;"><b>Grade</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Rate</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Bag Size</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b> No of Bag</b></th>
                </tr>
            <?php 
            try {
                 $sql = "select srno,invoice,total,DATE_FORMAT(date,'%d/%m/%Y') as niceDate,Garden,grade,rate,kg_bag,no_bag,dry_leaf,liquor,infusion from inventory where grade='$grade' and grade_type='orthodox' order by rate ";
              $result = mysqli_query($conn,$sql);
                 $num = mysqli_num_rows($result);
            if($result->num_rows>0)
	        {
		     while($row = $result->fetch_assoc())
	        {
              ?>
              <tr>
                  <td><input id="check" class="largerCheckbox" type="checkbox" name="cd[]" value="<?php echo"".$row['srno'] ?>"></td>
                  <td><?php echo"".$row['invoice'] ?></td>
                  <td><?php echo"".$row['total'] ?></td>
                  <td><?php echo"".$row['niceDate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['Garden'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['grade'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['rate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['kg_bag'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['no_bag'] ?></td>
              </tr>
                <tr>
                <th style="backgound-color:#A4B0BD;">Dry Leaf</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['dry_leaf'] ?></td>
               
                <th style="backgound-color:#A4B0BD;">Liquor</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['liquor'] ?></td>
                 <th style="backgound-color:#A4B0BD;">Infusion</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['infusion'] ?></td>
            </tr>
              <?php
            }
        }
            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
               </table>
        </div>  


 <!-- FBOP button-->
            <?php 
            $grade = "FBOP";
            $msg = "";
            try {
              $sql = "select count(*) as count from inventory where grade='$grade' and grade_type='orthodox' ";
              $res = mysqli_query($conn,$sql);
                $num=mysqli_num_rows($res);  
                 if($num==0)
            {
                
            }
            else {
                $row=mysqli_fetch_assoc($res);
                $msg = $row['count'];
               
            }

            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
   
          
           <center>
            <input type="button" id="show43" value="FBOP -><?php echo"".$msg  ?>" onclick="view43()"></center>
 <div id="fbop"  style="display: none">
           <table align="center" cellpadding="5" cellspacing="2" border="1">
                <tr>
                    <th><b> Check Box</b></th>
                    <th><b>Invoice</b></th>
                    <th><b> Total</b></th>
                    
                    <th><b> Date</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b>Garden</b></th>
                       <th style="font-size: 20px;font-style: italic;"><b>Grade</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Rate</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Bag Size</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b> No of Bag</b></th>
                </tr>
            <?php 
            try {
                 $sql = "select srno,invoice,total,DATE_FORMAT(date,'%d/%m/%Y') as niceDate,Garden,grade,rate,kg_bag,no_bag,dry_leaf,liquor,infusion from inventory where grade='$grade' and grade_type='orthodox' order by rate ";
              $result = mysqli_query($conn,$sql);
                 $num = mysqli_num_rows($result);
            if($result->num_rows>0)
	        {
		     while($row = $result->fetch_assoc())
	        {
              ?>
              <tr>
                  <td><input id="check" class="largerCheckbox" type="checkbox" name="cd[]" value="<?php echo"".$row['srno'] ?>"></td>
                  <td><?php echo"".$row['invoice'] ?></td>
                  <td><?php echo"".$row['total'] ?></td>
                  <td><?php echo"".$row['niceDate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['Garden'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['grade'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['rate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['kg_bag'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['no_bag'] ?></td>
              </tr>
                <tr>
                <th style="backgound-color:#A4B0BD;">Dry Leaf</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['dry_leaf'] ?></td>
               
                <th style="backgound-color:#A4B0BD;">Liquor</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['liquor'] ?></td>
                 <th style="backgound-color:#A4B0BD;">Infusion</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['infusion'] ?></td>
            </tr>
              <?php
            }
        }
            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
               </table>
        </div>  


 <!-- FBOP1 button-->
            <?php 
            $grade = "FBOP1";
            $msg = "";
            try {
              $sql = "select count(*) as count from inventory where grade='$grade' and grade_type='orthodox' ";
              $res = mysqli_query($conn,$sql);
                $num=mysqli_num_rows($res);  
                 if($num==0)
            {
                
            }
            else {
                $row=mysqli_fetch_assoc($res);
                $msg = $row['count'];
               
            }

            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
   
          
           <center>
            <input type="button" id="show61" value="FBOP1 -><?php echo"".$msg  ?>" onclick="view61()"></center>
 <div id="fbop1"  style="display: none">
           <table align="center" cellpadding="5" cellspacing="2" border="1">
                <tr>
                    <th><b> Check Box</b></th>
                    <th><b>Invoice</b></th>
                    <th><b> Total</b></th>
                    
                    <th><b> Date</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b>Garden</b></th>
                       <th style="font-size: 20px;font-style: italic;"><b>Grade</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Rate</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Bag Size</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b> No of Bag</b></th>
                </tr>
            <?php 
            try {
                 $sql = "select srno,invoice,total,DATE_FORMAT(date,'%d/%m/%Y') as niceDate,Garden,grade,rate,kg_bag,no_bag,dry_leaf,liquor,infusion from inventory where grade='$grade' and grade_type='orthodox' order by rate ";
              $result = mysqli_query($conn,$sql);
                 $num = mysqli_num_rows($result);
            if($result->num_rows>0)
	        {
		     while($row = $result->fetch_assoc())
	        {
              ?>
              <tr>
                  <td><input id="check" class="largerCheckbox" type="checkbox" name="cd[]" value="<?php echo"".$row['srno'] ?>"></td>
                  <td><?php echo"".$row['invoice'] ?></td>
                  <td><?php echo"".$row['total'] ?></td>
                  <td><?php echo"".$row['niceDate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['Garden'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['grade'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['rate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['kg_bag'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['no_bag'] ?></td>
              </tr>
                <tr>
                <th style="backgound-color:#A4B0BD;">Dry Leaf</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['dry_leaf'] ?></td>
               
                <th style="backgound-color:#A4B0BD;">Liquor</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['liquor'] ?></td>
                 <th style="backgound-color:#A4B0BD;">Infusion</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['infusion'] ?></td>
            </tr>
              <?php
            }
        }
            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
               </table>
        </div>  


 <!-- BOP button-->
            <?php 
            $grade = "FBOP";
            $msg = "";
            try {
              $sql = "select count(*) as count from inventory where grade='$grade' and grade_type='orthodox' ";
              $res = mysqli_query($conn,$sql);
                $num=mysqli_num_rows($res);  
                 if($num==0)
            {
                
            }
            else {
                $row=mysqli_fetch_assoc($res);
                $msg = $row['count'];
               
            }

            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
   
          
           <center>
            <input type="button" id="show44" value="BOP -><?php echo"".$msg  ?>" onclick="view44()"></center>
 <div id="ortho_bop"  style="display: none">
           <table align="center" cellpadding="5" cellspacing="2" border="1">
                <tr>
                    <th><b> Check Box</b></th>
                    <th><b>Invoice</b></th>
                    <th><b> Total</b></th>
                    
                    <th><b> Date</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b>Garden</b></th>
                       <th style="font-size: 20px;font-style: italic;"><b>Grade</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Rate</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Bag Size</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b> No of Bag</b></th>
                </tr>
            <?php 
            try {
                 $sql = "select srno,invoice,total,DATE_FORMAT(date,'%d/%m/%Y') as niceDate,Garden,grade,rate,kg_bag,no_bag,dry_leaf,liquor,infusion from inventory where grade='$grade' and grade_type='orthodox' order by rate ";
              $result = mysqli_query($conn,$sql);
                 $num = mysqli_num_rows($result);
            if($result->num_rows>0)
	        {
		     while($row = $result->fetch_assoc())
	        {
              ?>
              <tr>
                  <td><input id="check" class="largerCheckbox" type="checkbox" name="cd[]" value="<?php echo"".$row['srno'] ?>"></td>
                  <td><?php echo"".$row['invoice'] ?></td>
                  <td><?php echo"".$row['total'] ?></td>
                  <td><?php echo"".$row['niceDate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['Garden'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['grade'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['rate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['kg_bag'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['no_bag'] ?></td>
              </tr>
                <tr>
                <th style="backgound-color:#A4B0BD;">Dry Leaf</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['dry_leaf'] ?></td>
               
                <th style="backgound-color:#A4B0BD;">Liquor</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['liquor'] ?></td>
                 <th style="backgound-color:#A4B0BD;">Infusion</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['infusion'] ?></td>
            </tr>
              <?php
            }
        }
            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
               </table>
        </div>  


</div>
<!-- End of Broken Leaves-->

<!-- Start of Whole leaf -->
<center> <input type="button" id="show_ortho_whole" value="WHOLE LEAF GRADES+" onclick="view_ortho_Whole()" ></center>
   <div id="ortho_whole_leaf_grades"  style="display: none"> 
       
 <!-- FP ORTHO button-->
            <?php 
            $grade = "fp";
            $msg = "";
            try {
              $sql = "select count(*) as count from inventory where grade='$grade' and grade_type='orthodox' ";
              $res = mysqli_query($conn,$sql);
                $num=mysqli_num_rows($res);  
                 if($num==0)
            {
                
            }
            else {
                $row=mysqli_fetch_assoc($res);
                $msg = $row['count'];
               
            }

            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
   
          
           <center>
            <input type="button" id="show45" value="FP -><?php echo"".$msg  ?>" onclick="view45()"></center>
 <div id="ortho_fp"  style="display: none">
           <table align="center" cellpadding="5" cellspacing="2" border="1">
                <tr>
                    <th><b> Check Box</b></th>
                    <th><b>Invoice</b></th>
                    <th><b> Total</b></th>
                    
                    <th><b> Date</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b>Garden</b></th>
                       <th style="font-size: 20px;font-style: italic;"><b>Grade</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Rate</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Bag Size</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b> No of Bag</b></th>
                </tr>
            <?php 
            try {
                 $sql = "select srno,invoice,total,DATE_FORMAT(date,'%d/%m/%Y') as niceDate,Garden,grade,rate,kg_bag,no_bag,dry_leaf,liquor,infusion from inventory where grade='$grade' and grade_type='orthodox' order by rate ";
              $result = mysqli_query($conn,$sql);
                 $num = mysqli_num_rows($result);
            if($result->num_rows>0)
	        {
		     while($row = $result->fetch_assoc())
	        {
              ?>
              <tr>
                  <td><input id="check" class="largerCheckbox" type="checkbox" name="cd[]" value="<?php echo"".$row['srno'] ?>"></td>
                  <td><?php echo"".$row['invoice'] ?></td>
                  <td><?php echo"".$row['total'] ?></td>
                  <td><?php echo"".$row['niceDate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['Garden'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['grade'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['rate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['kg_bag'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['no_bag'] ?></td>
              </tr>
                <tr>
                <th style="backgound-color:#A4B0BD;">Dry Leaf</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['dry_leaf'] ?></td>
               
                <th style="backgound-color:#A4B0BD;">Liquor</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['liquor'] ?></td>
                 <th style="backgound-color:#A4B0BD;">Infusion</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['infusion'] ?></td>
            </tr>
              <?php
            }
        }
            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
               </table>
        </div>  

           
 <!-- TGFOP ORTHO button-->
            <?php 
            $grade = "TGFOP";
            $msg = "";
            try {
              $sql = "select count(*) as count from inventory where grade='$grade' and grade_type='orthodox' ";
              $res = mysqli_query($conn,$sql);
                $num=mysqli_num_rows($res);  
                 if($num==0)
            {
                
            }
            else {
                $row=mysqli_fetch_assoc($res);
                $msg = $row['count'];
               
            }

            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
   
          
           <center>
            <input type="button" id="show62" value="TGFOP -><?php echo"".$msg  ?>" onclick="view62()"></center>
 <div id="tgfop"  style="display: none">
           <table align="center" cellpadding="5" cellspacing="2" border="1">
                <tr>
                    <th><b> Check Box</b></th>
                    <th><b>Invoice</b></th>
                    <th><b> Total</b></th>
                    
                    <th><b> Date</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b>Garden</b></th>
                       <th style="font-size: 20px;font-style: italic;"><b>Grade</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Rate</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Bag Size</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b> No of Bag</b></th>
                </tr>
            <?php 
            try {
                 $sql = "select srno,invoice,total,DATE_FORMAT(date,'%d/%m/%Y') as niceDate,Garden,grade,rate,kg_bag,no_bag,dry_leaf,liquor,infusion from inventory where grade='$grade' and grade_type='orthodox' order by rate ";
              $result = mysqli_query($conn,$sql);
                 $num = mysqli_num_rows($result);
            if($result->num_rows>0)
	        {
		     while($row = $result->fetch_assoc())
	        {
              ?>
              <tr>
                  <td><input id="check" class="largerCheckbox" type="checkbox" name="cd[]" value="<?php echo"".$row['srno'] ?>"></td>
                  <td><?php echo"".$row['invoice'] ?></td>
                  <td><?php echo"".$row['total'] ?></td>
                  <td><?php echo"".$row['niceDate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['Garden'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['grade'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['rate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['kg_bag'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['no_bag'] ?></td>
              </tr>
                <tr>
                <th style="backgound-color:#A4B0BD;">Dry Leaf</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['dry_leaf'] ?></td>
               
                <th style="backgound-color:#A4B0BD;">Liquor</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['liquor'] ?></td>
                 <th style="backgound-color:#A4B0BD;">Infusion</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['infusion'] ?></td>
            </tr>
              <?php
            }
        }
            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
               </table>
        </div>  
       
          
 <!-- FTGFOP ORTHO button-->
            <?php 
            $grade = "FTGFOP";
            $msg = "";
            try {
              $sql = "select count(*) as count from inventory where grade='$grade' and grade_type='orthodox' ";
              $res = mysqli_query($conn,$sql);
                $num=mysqli_num_rows($res);  
                 if($num==0)
            {
                
            }
            else {
                $row=mysqli_fetch_assoc($res);
                $msg = $row['count'];
               
            }

            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
   
          
           <center>
            <input type="button" id="show46" value="FTGFOP -><?php echo"".$msg  ?>" onclick="view46()"></center>
 <div id="ftgfop"  style="display: none">
           <table align="center" cellpadding="5" cellspacing="2" border="1">
                <tr>
                    <th><b> Check Box</b></th>
                    <th><b>Invoice</b></th>
                    <th><b> Total</b></th>
                    
                    <th><b> Date</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b>Garden</b></th>
                       <th style="font-size: 20px;font-style: italic;"><b>Grade</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Rate</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Bag Size</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b> No of Bag</b></th>
                </tr>
            <?php 
            try {
                 $sql = "select srno,invoice,total,DATE_FORMAT(date,'%d/%m/%Y') as niceDate,Garden,grade,rate,kg_bag,no_bag,dry_leaf,liquor,infusion from inventory where grade='$grade' and grade_type='orthodox' order by rate ";
              $result = mysqli_query($conn,$sql);
                 $num = mysqli_num_rows($result);
            if($result->num_rows>0)
	        {
		     while($row = $result->fetch_assoc())
	        {
              ?>
              <tr>
                  <td><input id="check" class="largerCheckbox" type="checkbox" name="cd[]" value="<?php echo"".$row['srno'] ?>"></td>
                  <td><?php echo"".$row['invoice'] ?></td>
                  <td><?php echo"".$row['total'] ?></td>
                  <td><?php echo"".$row['niceDate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['Garden'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['grade'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['rate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['kg_bag'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['no_bag'] ?></td>
              </tr>
                <tr>
                <th style="backgound-color:#A4B0BD;">Dry Leaf</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['dry_leaf'] ?></td>
               
                <th style="backgound-color:#A4B0BD;">Liquor</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['liquor'] ?></td>
                 <th style="backgound-color:#A4B0BD;">Infusion</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['infusion'] ?></td>
            </tr>
              <?php
            }
        }
            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
               </table>
        </div>  


 <!-- FTGFOP1 ORTHO button-->
            <?php 
            $grade = "FTGFOP11";
            $msg = "";
            try {
              $sql = "select count(*) as count from inventory where grade='$grade' and grade_type='orthodox' ";
              $res = mysqli_query($conn,$sql);
                $num=mysqli_num_rows($res);  
                 if($num==0)
            {
                
            }
            else {
                $row=mysqli_fetch_assoc($res);
                $msg = $row['count'];
               
            }

            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
   
          
           <center>
            <input type="button" id="show47" value="FTGFOP1 -><?php echo"".$msg  ?>" onclick="view47()"></center>
 <div id="ftgfop1"  style="display: none">
           <table align="center" cellpadding="5" cellspacing="2" border="1">
                <tr>
                    <th><b> Check Box</b></th>
                    <th><b>Invoice</b></th>
                    <th><b> Total</b></th>
                    
                    <th><b> Date</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b>Garden</b></th>
                       <th style="font-size: 20px;font-style: italic;"><b>Grade</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Rate</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Bag Size</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b> No of Bag</b></th>
                </tr>
            <?php 
            try {
                 $sql = "select srno,invoice,total,DATE_FORMAT(date,'%d/%m/%Y') as niceDate,Garden,grade,rate,kg_bag,no_bag,dry_leaf,liquor,infusion from inventory where grade='$grade' and grade_type='orthodox' order by rate ";
              $result = mysqli_query($conn,$sql);
                 $num = mysqli_num_rows($result);
            if($result->num_rows>0)
	        {
		     while($row = $result->fetch_assoc())
	        {
              ?>
              <tr>
                  <td><input id="check" class="largerCheckbox" type="checkbox" name="cd[]" value="<?php echo"".$row['srno'] ?>"></td>
                  <td><?php echo"".$row['invoice'] ?></td>
                  <td><?php echo"".$row['total'] ?></td>
                  <td><?php echo"".$row['niceDate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['Garden'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['grade'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['rate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['kg_bag'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['no_bag'] ?></td>
              </tr>
                <tr>
                <th style="backgound-color:#A4B0BD;">Dry Leaf</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['dry_leaf'] ?></td>
               
                <th style="backgound-color:#A4B0BD;">Liquor</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['liquor'] ?></td>
                 <th style="backgound-color:#A4B0BD;">Infusion</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['infusion'] ?></td>
            </tr>
              <?php
            }
        }
            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
               </table>
        </div>  


 <!-- GFOP ORTHO button-->
            <?php 
            $grade = "GFOP";
            $msg = "";
            try {
              $sql = "select count(*) as count from inventory where grade='$grade' and grade_type='orthodox' ";
              $res = mysqli_query($conn,$sql);
                $num=mysqli_num_rows($res);  
                 if($num==0)
            {
                
            }
            else {
                $row=mysqli_fetch_assoc($res);
                $msg = $row['count'];
               
            }

            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
   
          
           <center>
            <input type="button" id="show48" value="GFOP -><?php echo"".$msg  ?>" onclick="view48()"></center>
 <div id="gfop"  style="display: none">
           <table align="center" cellpadding="5" cellspacing="2" border="1">
                <tr>
                    <th><b> Check Box</b></th>
                    <th><b>Invoice</b></th>
                    <th><b> Total</b></th>
                    
                    <th><b> Date</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b>Garden</b></th>
                       <th style="font-size: 20px;font-style: italic;"><b>Grade</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Rate</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Bag Size</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b> No of Bag</b></th>
                </tr>
            <?php 
            try {
                 $sql = "select srno,invoice,total,DATE_FORMAT(date,'%d/%m/%Y') as niceDate,Garden,grade,rate,kg_bag,no_bag,dry_leaf,liquor,infusion from inventory where grade='$grade' and grade_type='orthodox' order by rate ";
              $result = mysqli_query($conn,$sql);
                 $num = mysqli_num_rows($result);
            if($result->num_rows>0)
	        {
		     while($row = $result->fetch_assoc())
	        {
              ?>
              <tr>
                  <td><input id="check" class="largerCheckbox" type="checkbox" name="cd[]" value="<?php echo"".$row['srno'] ?>"></td>
                  <td><?php echo"".$row['invoice'] ?></td>
                  <td><?php echo"".$row['total'] ?></td>
                  <td><?php echo"".$row['niceDate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['Garden'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['grade'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['rate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['kg_bag'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['no_bag'] ?></td>
              </tr>
                <tr>
                <th style="backgound-color:#A4B0BD;">Dry Leaf</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['dry_leaf'] ?></td>
               
                <th style="backgound-color:#A4B0BD;">Liquor</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['liquor'] ?></td>
                 <th style="backgound-color:#A4B0BD;">Infusion</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['infusion'] ?></td>
            </tr>
              <?php
            }
        }
            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
               </table>
        </div>  


 <!-- GFOP1 ORTHO button-->
            <?php 
            $grade = "GFOP1";
            $msg = "";
            try {
              $sql = "select count(*) as count from inventory where grade='$grade' and grade_type='orthodox' ";
              $res = mysqli_query($conn,$sql);
                $num=mysqli_num_rows($res);  
                 if($num==0)
            {
                
            }
            else {
                $row=mysqli_fetch_assoc($res);
                $msg = $row['count'];
               
            }

            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
   
          
           <center>
            <input type="button" id="show63" value="GFOP1 -><?php echo"".$msg  ?>" onclick="view63()"></center>
 <div id="gfop1"  style="display: none">
           <table align="center" cellpadding="5" cellspacing="2" border="1">
                <tr>
                    <th><b> Check Box</b></th>
                    <th><b>Invoice</b></th>
                    <th><b> Total</b></th>
                    
                    <th><b> Date</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b>Garden</b></th>
                       <th style="font-size: 20px;font-style: italic;"><b>Grade</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Rate</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Bag Size</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b> No of Bag</b></th>
                </tr>
            <?php 
            try {
                 $sql = "select srno,invoice,total,DATE_FORMAT(date,'%d/%m/%Y') as niceDate,Garden,grade,rate,kg_bag,no_bag,dry_leaf,liquor,infusion from inventory where grade='$grade' and grade_type='orthodox' order by rate ";
              $result = mysqli_query($conn,$sql);
                 $num = mysqli_num_rows($result);
            if($result->num_rows>0)
	        {
		     while($row = $result->fetch_assoc())
	        {
              ?>
              <tr>
                  <td><input id="check" class="largerCheckbox" type="checkbox" name="cd[]" value="<?php echo"".$row['srno'] ?>"></td>
                  <td><?php echo"".$row['invoice'] ?></td>
                  <td><?php echo"".$row['total'] ?></td>
                  <td><?php echo"".$row['niceDate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['Garden'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['grade'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['rate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['kg_bag'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['no_bag'] ?></td>
              </tr>
                <tr>
                <th style="backgound-color:#A4B0BD;">Dry Leaf</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['dry_leaf'] ?></td>
               
                <th style="backgound-color:#A4B0BD;">Liquor</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['liquor'] ?></td>
                 <th style="backgound-color:#A4B0BD;">Infusion</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['infusion'] ?></td>
            </tr>
              <?php
            }
        }
            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
               </table>
        </div>  


 <!-- FOP ORTHO button-->
            <?php 
            $grade = "FOP";
            $msg = "";
            try {
              $sql = "select count(*) as count from inventory where grade='$grade' and grade_type='orthodox' ";
              $res = mysqli_query($conn,$sql);
                $num=mysqli_num_rows($res);  
                 if($num==0)
            {
                
            }
            else {
                $row=mysqli_fetch_assoc($res);
                $msg = $row['count'];
               
            }

            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
   
          
           <center>
            <input type="button" id="show49" value="FOP -><?php echo"".$msg  ?>" onclick="view49()"></center>
 <div id="fop"  style="display: none">
           <table align="center" cellpadding="5" cellspacing="2" border="1">
                <tr>
                    <th><b> Check Box</b></th>
                    <th><b>Invoice</b></th>
                    <th><b> Total</b></th>
                    
                    <th><b> Date</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b>Garden</b></th>
                       <th style="font-size: 20px;font-style: italic;"><b>Grade</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Rate</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Bag Size</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b> No of Bag</b></th>
                </tr>
            <?php 
            try {
                 $sql = "select srno,invoice,total,DATE_FORMAT(date,'%d/%m/%Y') as niceDate,Garden,grade,rate,kg_bag,no_bag,dry_leaf,liquor,infusion from inventory where grade='$grade' and grade_type='orthodox' order by rate ";
              $result = mysqli_query($conn,$sql);
                 $num = mysqli_num_rows($result);
            if($result->num_rows>0)
	        {
		     while($row = $result->fetch_assoc())
	        {
              ?>
              <tr>
                  <td><input id="check" class="largerCheckbox" type="checkbox" name="cd[]" value="<?php echo"".$row['srno'] ?>"></td>
                  <td><?php echo"".$row['invoice'] ?></td>
                  <td><?php echo"".$row['total'] ?></td>
                  <td><?php echo"".$row['niceDate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['Garden'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['grade'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['rate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['kg_bag'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['no_bag'] ?></td>
              </tr>
                <tr>
                <th style="backgound-color:#A4B0BD;">Dry Leaf</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['dry_leaf'] ?></td>
               
                <th style="backgound-color:#A4B0BD;">Liquor</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['liquor'] ?></td>
                 <th style="backgound-color:#A4B0BD;">Infusion</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['infusion'] ?></td>
            </tr>
              <?php
            }
        }
            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
               </table>
        </div>  


 <!-- FOP1 ORTHO button-->
            <?php 
            $grade = "FOP1";
            $msg = "";
            try {
              $sql = "select count(*) as count from inventory where grade='$grade' and grade_type='orthodox' ";
              $res = mysqli_query($conn,$sql);
                $num=mysqli_num_rows($res);  
                 if($num==0)
            {
                
            }
            else {
                $row=mysqli_fetch_assoc($res);
                $msg = $row['count'];
               
            }

            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
   
          
           <center>
            <input type="button" id="show64" value="FOP1 -><?php echo"".$msg  ?>" onclick="view64()"></center>
 <div id="fop1"  style="display: none">
           <table align="center" cellpadding="5" cellspacing="2" border="1">
                <tr>
                    <th><b> Check Box</b></th>
                    <th><b>Invoice</b></th>
                    <th><b> Total</b></th>
                    
                    <th><b> Date</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b>Garden</b></th>
                       <th style="font-size: 20px;font-style: italic;"><b>Grade</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Rate</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Bag Size</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b> No of Bag</b></th>
                </tr>
            <?php 
            try {
                 $sql = "select srno,invoice,total,DATE_FORMAT(date,'%d/%m/%Y') as niceDate,Garden,grade,rate,kg_bag,no_bag,dry_leaf,liquor,infusion from inventory where grade='$grade' and grade_type='orthodox' order by rate ";
              $result = mysqli_query($conn,$sql);
                 $num = mysqli_num_rows($result);
            if($result->num_rows>0)
	        {
		     while($row = $result->fetch_assoc())
	        {
              ?>
              <tr>
                  <td><input id="check" class="largerCheckbox" type="checkbox" name="cd[]" value="<?php echo"".$row['srno'] ?>"></td>
                  <td><?php echo"".$row['invoice'] ?></td>
                  <td><?php echo"".$row['total'] ?></td>
                  <td><?php echo"".$row['niceDate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['Garden'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['grade'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['rate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['kg_bag'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['no_bag'] ?></td>
              </tr>
                <tr>
                <th style="backgound-color:#A4B0BD;">Dry Leaf</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['dry_leaf'] ?></td>
               
                <th style="backgound-color:#A4B0BD;">Liquor</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['liquor'] ?></td>
                 <th style="backgound-color:#A4B0BD;">Infusion</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['infusion'] ?></td>
            </tr>
              <?php
            }
        }
            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
               </table>
        </div>  


 <!-- OP ORTHO button-->
            <?php 
            $grade = "OP";
            $msg = "";
            try {
              $sql = "select count(*) as count from inventory where grade='$grade' and grade_type='orthodox' ";
              $res = mysqli_query($conn,$sql);
                $num=mysqli_num_rows($res);  
                 if($num==0)
            {
                
            }
            else {
                $row=mysqli_fetch_assoc($res);
                $msg = $row['count'];
               
            }

            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
   
          
           <center>
            <input type="button" id="show50" value="OP -><?php echo"".$msg  ?>" onclick="view50()"></center>
 <div id="op"  style="display: none">
           <table align="center" cellpadding="5" cellspacing="2" border="1">
                <tr>
                    <th><b> Check Box</b></th>
                    <th><b>Invoice</b></th>
                    <th><b> Total</b></th>
                    
                    <th><b> Date</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b>Garden</b></th>
                       <th style="font-size: 20px;font-style: italic;"><b>Grade</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Rate</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Bag Size</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b> No of Bag</b></th>
                </tr>
            <?php 
            try {
                 $sql = "select srno,invoice,total,DATE_FORMAT(date,'%d/%m/%Y') as niceDate,Garden,grade,rate,kg_bag,no_bag,dry_leaf,liquor,infusion from inventory where grade='$grade' and grade_type='orthodox' order by rate ";
              $result = mysqli_query($conn,$sql);
                 $num = mysqli_num_rows($result);
            if($result->num_rows>0)
	        {
		     while($row = $result->fetch_assoc())
	        {
              ?>
              <tr>
                  <td><input id="check" class="largerCheckbox" type="checkbox" name="cd[]" value="<?php echo"".$row['srno'] ?>"></td>
                  <td><?php echo"".$row['invoice'] ?></td>
                 <td><?php echo"".$row['total'] ?></td>
                  <td><?php echo"".$row['niceDate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['Garden'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['grade'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['rate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['kg_bag'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['no_bag'] ?></td>
              </tr>
                <tr>
                <th style="backgound-color:#A4B0BD;">Dry Leaf</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['dry_leaf'] ?></td>
               
                <th style="backgound-color:#A4B0BD;">Liquor</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['liquor'] ?></td>
                 <th style="backgound-color:#A4B0BD;">Infusion</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['infusion'] ?></td>
            </tr>
              <?php
            }
        }
            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
               </table>
        </div>  

 <!-- OP1 ORTHO button-->
            <?php 
            $grade = "OP1";
            $msg = "";
            try {
              $sql = "select count(*) as count from inventory where grade='$grade' and grade_type='orthodox' ";
              $res = mysqli_query($conn,$sql);
                $num=mysqli_num_rows($res);  
                 if($num==0)
            {
                
            }
            else {
                $row=mysqli_fetch_assoc($res);
                $msg = $row['count'];
               
            }

            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
   
          
           <center>
            <input type="button" id="show65" value="OP1 -><?php echo"".$msg  ?>" onclick="view65()"></center>
 <div id="op1"  style="display: none">
           <table align="center" cellpadding="5" cellspacing="2" border="1">
                <tr>
                    <th><b> Check Box</b></th>
                    <th><b>Invoice</b></th>
                    <th><b> Total</b></th>
                    
                    <th><b> Date</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b>Garden</b></th>
                       <th style="font-size: 20px;font-style: italic;"><b>Grade</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Rate</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Bag Size</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b> No of Bag</b></th>
                </tr>
            <?php 
            try {
                 $sql = "select srno,invoice,total,DATE_FORMAT(date,'%d/%m/%Y') as niceDate,Garden,grade,rate,kg_bag,no_bag,dry_leaf,liquor,infusion from inventory where grade='$grade' and grade_type='orthodox' order by rate ";
              $result = mysqli_query($conn,$sql);
                 $num = mysqli_num_rows($result);
            if($result->num_rows>0)
	        {
		     while($row = $result->fetch_assoc())
	        {
              ?>
              <tr>
                  <td><input id="check" class="largerCheckbox" type="checkbox" name="cd[]" value="<?php echo"".$row['srno'] ?>"></td>
                  <td><?php echo"".$row['invoice'] ?></td>
                  <td><?php echo"".$row['total'] ?></td>
                  <td><?php echo"".$row['niceDate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['Garden'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['grade'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['rate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['kg_bag'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['no_bag'] ?></td>
              </tr>
                <tr>
                <th style="backgound-color:#A4B0BD;">Dry Leaf</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['dry_leaf'] ?></td>
               
                <th style="backgound-color:#A4B0BD;">Liquor</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['liquor'] ?></td>
                 <th style="backgound-color:#A4B0BD;">Infusion</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['infusion'] ?></td>
            </tr>
              <?php
            }
        }
            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
               </table>
        </div>  

          </div>
        </div>
        

  <!-- Others display-->

    
 
            <?php 
            $grade = "others";
            $msg = "";
            try {
              $sql = "select count(*) as count from inventory where grade='$grade'  ";
              $res = mysqli_query($conn,$sql);
                $num=mysqli_num_rows($res);  
                 if($num==0)
            {
                
            }
            else {
                $row=mysqli_fetch_assoc($res);
                $msg = $row['count'];
               
            }

            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
   
          
           <center>
            <input type="button" id="show6" value="Others -><?php echo"".$msg  ?>" onclick="view6()"></center>
 <div id="other"  style="display: none">
           <table align="center" cellpadding="5" cellspacing="2" border="1">
                <tr>
                    <th><b> Check Box</b></th>
                    <th><b>Invoice</b></th>
                    <th><b> Total</b></th>
                    
                    <th><b> Date</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b>Garden</b></th>
                       <th style="font-size: 20px;font-style: italic;"><b>Grade</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Rate</b></th>
                        <th style="font-size: 20px;font-style: italic;"><b>Bag Size</b></th>
                     <th style="font-size: 20px;font-style: italic;"><b> No of Bag</b></th>
                </tr>
            <?php 
            try {
                 $sql = "select srno,invoice,total,DATE_FORMAT(date,'%d/%m/%Y') as niceDate,Garden,grade,rate,kg_bag,no_bag,dry_leaf,liquor,infusion from inventory where grade='$grade'  order by rate ";
              $result = mysqli_query($conn,$sql);
                 $num = mysqli_num_rows($result);
            if($result->num_rows>0)
	        {
		     while($row = $result->fetch_assoc())
	        {
              ?>
              <tr>
                  <td><input id="check" class="largerCheckbox" type="checkbox" name="cd[]" value="<?php echo"".$row['srno'] ?>"></td>
                  <td><?php echo"".$row['invoice'] ?></td>
                  <td><?php echo"".$row['total'] ?></td>
                  <td><?php echo"".$row['niceDate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['Garden'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['grade'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['rate'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['kg_bag'] ?></td>
                  <td style="font-weight: bold;"><?php echo"".$row['no_bag'] ?></td>
              </tr>
                <tr>
                <th style="backgound-color:#A4B0BD;">Dry Leaf</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['dry_leaf'] ?></td>
               
                <th style="backgound-color:#A4B0BD;">Liquor</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['liquor'] ?></td>
                 <th style="backgound-color:#A4B0BD;">Infusion</th>
                <td colspan="2" style="font-size: 15px;"><?php echo"".$row['infusion'] ?></td>
            </tr>
              <?php
            }
        }
            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
               </table>
        </div>  

    <center><input type="submit" name="blend_form"  value="Submit" ></center>
    </form>
       
    
    
    <script src="js/update.js"></script>
       </div>
       </div>
            </div>
    </body>
</html>
