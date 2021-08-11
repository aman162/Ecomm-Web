<?php
session_start();
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE); //to remove warnings jugaad
$con = mysqli_connect("localhost" , "root" , "" , "ecomm");

$id = $_GET['action'];
$query = mysqli_query($con,"SELECT * FROM product where id = '$id'");
$row = mysqli_fetch_array($query);
$price = $row['price'];
$name = $row['name'];
$email = $_POST['email_id'];

$query = "INSERT INTO cart_details (email_id,price,name,quantity,id) VALUES ('$email' , '$price' , '$name' , 1 , '$id')";
$res = mysqli_query($con,$query);
$_SESSION['search'] = $_POST['search'];
header("Location: women22.php");
?>