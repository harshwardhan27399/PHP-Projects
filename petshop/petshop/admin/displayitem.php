    <?php
include "header.php";
include "menu.php";
$link = mysqli_connect("localhost", "root", "");
mysqli_select_db($link, "shopopet");
?>

<div class="grid_10">
    <div class="box round first">
        <h2>
            Edit or Delete Product</h2>

        <div class="block">

            <?php
            $res = "select * from product";
            $r=mysqli_query($link,$res);
           
           
            echo "<table border='1'>";
            echo "<tr>";
            echo "<td style='font-weight:bold'>"; echo "productimge"; echo "</td>";
            
            echo "<td style='font-weight:bold'>"; echo "productname"; echo "</td>";
            echo "<td style='font-weight:bold'>"; echo "productprice"; echo "</td>";
            echo "<td style='font-weight:bold'>"; echo "productqty"; echo "</td>";
            echo "<td style='font-weight:bold'>"; echo "productcategory"; echo "</td>";
        
            echo "<td style='font-weight:bold'>"; echo "delete"; echo "</td>";
        
            echo "<td style='font-weight:bold'>"; echo "edit"; echo "</td>";
            echo "</tr>";

            while($row=mysqli_fetch_array($r))
            {
                echo "<tr>";
                echo "<td>"; ?> <img src="<?php  echo $row["product_image"];  ?>" width="50" height="50" > <?php echo "</td>";
                echo "<td>"; echo $row["productname"]; echo "</td>";
                echo "<td>"; echo $row["productprice"]; echo "</td>";
                echo "<td>"; echo $row["productqty"]; echo "</td>";
                echo "<td>"; echo $row["productcatg"]; echo "</td>";
                echo "<td>"; ?> <a href="delete.php?id=<?php echo $row["id"];?>">delete</a> <?php echo "</td>";
                echo "<td>"; ?> <a href="edit.php?id=<?php echo $row["id"];?>" >edit</a> <?php echo "</td>";

                echo "</tr>";
            }
            echo "</table>";

            ?>

        </div>
    </div>
    <?php
    include "footer.php";

    ?>
     