<?php
session_start();

unset($_SESSION['Cid']);
unset($_SESSION['iid']);
unset($_SESSION['qty']);

header('Location: billing.php');
exit();
?>