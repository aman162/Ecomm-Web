<?php
session_start();
unset($_SESSION['email_id']);

unset($_SESSION['name']);
session_destroy();
header("Location: ecomm.php");
?>