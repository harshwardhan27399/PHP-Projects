<?php
include "header.php";
include "menu.php";
$link = mysqli_connect("localhost", "root", "root");
mysqli_select_db($link, "petshop");
?>

<div class="grid_10">
    <div class="box round first">
        <h2>
            Display Order</h2>

        <div class="block">

            <?php
            $res = "select * from checka order by id desc";
            $r=mysqli_query($link,$res);
           
           
            echo "<table border='1'>";
            echo "<tr>";
            echo "<td style='font-weight:bold'>"; echo "username"; echo "</td>";
            echo "<td style='font-weight:bold'>"; echo "lastname"; echo "</td>";
            echo "<td style='font-weight:bold'>"; echo "email"; echo "</td>";
            echo "<td style='font-weight:bold'>"; echo "addressa"; echo "</td>";
            echo "<td style='font-weight:bold'>"; echo "city"; echo "</td>";
            echo "<td style='font-weight:bold'>"; echo "pincode"; echo "</td>";
            echo "<td style='font-weight:bold'>"; echo "mobno"; echo "</td>";
            echo "</tr>";

            while($row=mysqli_fetch_array($r))
            {
                echo "<tr>";
                echo "<td>"; echo $row["username"]; echo "</td>";
                echo "<td>"; echo $row["lastname"]; echo "</td>";
                echo "<td>"; echo $row["email"]; echo "</td>";
                echo "<td>"; echo $row["addressa"]; echo "</td>";
                echo "<td>"; echo $row["city"]; echo "</td>";
                echo "<td>"; echo $row["pincode"]; echo "</td>";
                echo "<td>"; echo $row["mobno"]; echo "</td>";
                echo "<td>"; ?> <a href="display_order_1.php?id=<?php echo $row["id"]; ?>">View Order</a> <?php echo "</td>";
                echo "</tr>";
            }
            echo "</table>";

            ?>

        </div>
    </div>
    <?php
    include "footer.php";

    ?>
     