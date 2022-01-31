
<?php
$link = mysqli_connect("localhost", "root", "");
mysqli_select_db($link, "shopopet");
?>
<html>
<head>
<style>
table {

 border:1px;	
  width: 90%;
}

th, td {
	text-align:center;
	height:30;
  text-align: center;
  padding: 8px;
}

tr:nth-child(even) {background-color: #c2c2c2;}
</style></head>
<body>
<div class="grid_10">
    <div class="box round first">

    <h3 style="color:orange;font-size:50;text-align:center;"> Your Appointment List </h3>

    <div class="block">

            <?php
            $res = "select * from  visiter";
            $r=mysqli_query($link,$res);
           
           
            echo "<table border='1'>";
            echo "<tr>";
            echo "<td style='font-weight:bold'>"; echo "Full Name"; echo "</td>";
            
            echo "<td style='font-weight:bold'>"; echo "Mobile No."; echo "</td>";
            echo "<td style='font-weight:bold'>"; echo "Date"; echo "</td>";
            echo "<td style='font-weight:bold'>"; echo "Time"; echo "</td>";
            echo "<td style='font-weight:bold'>"; echo "Visit"; echo "</td>";
        
            echo "<td style='font-weight:bold'>"; echo "Owner Email"; echo "</td>";
        
            echo "</tr>";

            while($row=mysqli_fetch_array($r))
            {
                echo "<tr>";
                echo "<td>"; echo $row["Full_name"]; echo "</td>";
                echo "<td>"; echo $row["mob_no"]; echo "</td>";
                echo "<td>"; echo $row["con_date"]; echo "</td>";
             
                echo "<td>"; echo $row["con_time"]; echo "</td>";
                echo "<td>"; echo $row["visit_des"]; echo "</td>";
                echo "<td>"; echo $row["doctornm"]; echo "</td>";
              
                echo "</tr>";
            }
            echo "</table>";

            ?>

        </div>
    </div>
	</body>
	</html>