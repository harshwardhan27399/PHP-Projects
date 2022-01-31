<?php
ob_start();
session_start();

// Destroying session


session_destroy();

 
header('Location:index.html');
?>