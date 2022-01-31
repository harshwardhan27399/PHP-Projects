<?php
require_once "../config.php";

$scrolltextui = $_REQUEST['scrolltextform'];

$sql = "UPDATE `ntext` SET `scrolltext` = '$scrolltextui' WHERE `ntext`.`id` = 1;";

if ($conn->query($sql) === TRUE) {
  echo "Text edited Successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>