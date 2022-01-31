<?php
include "header.php";
include "menu.php";
$link=mysqli_connect("localhost","root","root");
mysqli_select_db($link,"petshop");
?>
      
        <div class="grid_10">
            <div class="box round first">
                <h2>
                    Order Items</h2>
                <div class="block">
                <?php
                    $id=$_GET["id"];
                $res="select * from product where id=$id";
                 $re=mysqli_query($link,$res);

                echo "<table border='1'>";
                echo "<tr>";
                echo "<td >"; echo "product image"; echo "</td>";
                echo "<td >"; echo "product name"; echo "</td>";
                echo "<td >"; echo "product price"; echo "</td>";
                echo "<td >"; echo "product qty"; echo "</td>";
                echo "</tr>";
               
                while($row=mysqli_fetch_array($re))
                {
                    echo "<tr>";
                    echo "<td valign='top'>"; ?> <img src="<?php echo $row["product_image"]; ?>" height="100" width="100"> <?php echo "</td>";
                    echo "<td valign='top'>"; echo $row["productname"]; echo "</td>";
                    echo "<td valign='top'>"; echo $row["productprice"]; echo "</td>";
                    echo "<td valign='top'>"; echo $row["productqty"]; echo "</td>";
                    echo "</tr>";

                }
                echo "</table>";
                 ?>
                </div>
            </div>
<?php
include "footer.php";  
  
?>         
     