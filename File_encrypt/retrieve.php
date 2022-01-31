<?php
include_once 'database.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>File Retrieve With PHP and MySql</title>
</head>
<body>
<div>
<label>File Retrieve With PHP and MySql</label>
</div>
<div>
 <table width="80%" border="1">
    <tr>
    <th colspan="4">your uploads...<label><a href="home.php">upload new files...</a></label></th>
    </tr>
    <tr>
    <td>Sr No</td>
    <td>File Name</td>
    <td>View</td>
    <td>View with key</td>
    </tr>
    <?php
$result = mysqli_query($conn,"SELECT * FROM file_saver");
  ?>
  <?php
$i=0;
while($row = mysqli_fetch_array($result)) {
if($i%2==0)
$classname="evenRow";
else
$classname="oddRow";
?>
  
        <tr>
            <td><?php echo $i+1; ?></td>
            <td><?php echo $row["file_name"]; ?></td>
            <td><a href="upload/<?php echo $row['file_name'] ?>" target="_blank">view file</a></td>
            <td><form action="view.php" method="post" enctype="multipart/form-data">
            Decryption Key :<input type="text" name="key" />
            <input type="hidden" name="file_name" value="upload/<?php echo $row['file_name'] ?>" />
            <button type="submit" name="view">view</button></form>
        </td>
        </tr>
       <?php
$i++;
}
?> 
    </table>
    
</div>


<a href="home.php">upload new files...</a>
<a href="retrieve.php">View Existing files...</a>
</body>
</html>
