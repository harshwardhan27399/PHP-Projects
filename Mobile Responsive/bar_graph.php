<?php 
//index.php
$grade = "";
$grade_size = "";
if(isset($_POST['grade_graph'])){
  $grade = $_POST['grade'];
  $grade_type = $_POST['grade_type'];
}

require('connection.php');
//echo $grade;
//echo $grade_type;
$query = "SELECT * FROM inventory where grade='$grade' and grade_type='$grade_type' order by rate ";
$result = mysqli_query($conn, $query);
$chart_data = '';
while($row = mysqli_fetch_array($result))
{
 $chart_data .= "{ rate:'".$row["rate"]."', quantity:".$row["total"]."}, ";
}
$chart_data = substr($chart_data, 0, -2);
?>


<!DOCTYPE html>
<html>
 <head>
  <title>Graphs</title>
  
  <!-- Bootstrap CDN -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

  <script src="https://code.jquery.com/jquery-3.4.0.js"></script>
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

<link rel="stylesheet" type="text/css" href="css/download_finished.css">
  
 </head>
 <body>

 <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
            	 <span class="login100-form-title">
                        Type : <?php echo strtoupper("$grade_type")."  Grade :  ".$grade ?>
                    </span>
  
  <div class="container" style="width:800px;">
   
   
   
   <div id="chart">
   
   </div>
   <h4 style="margin:0px 200px">Rate -- ></h4>
  </div>

  <div class = "container">
  <button class = "btn btn-warning btn-sm"><a href = "dust_buttons_graphs.php" style = "text-decoration: none; color: #333;">Back to Results</a></button>
</div>

 </body>
</html>

<script>
Morris.Bar({
 element : 'chart',
 data:[<?php echo $chart_data; ?>],
 xkey:'rate',
 ykeys:['quantity'],
 labels:['quantity','rate'],
 hideHover:'auto',
 stacked:false,
 
});
</script>