<?php
session_start();
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE); //to remove warnings jugaad
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "ecomm");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_POST['name']);
$email_id = mysqli_real_escape_string($link, $_POST['email_id']);
$pass1 = mysqli_real_escape_string($link, $_POST['pass']);
$pass2 = mysqli_real_escape_string($link, $_POST['pass2']);
if($pass1 != $pass2){
    header('Location: register.html');
}
else{
$pass = md5($pass1);

// attempt insert query execution
$sql = "INSERT INTO user_details (name, email_id, pass) VALUES ('$name', '$email_id', '$pass')";
if(mysqli_query($link, $sql)){
    header('Location: ecomm.php');
} else{
    header('Location: happy_page1.php');
}
}
// close connection
mysqli_close($link);

?>