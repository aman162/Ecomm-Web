<?php
session_start();
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
$phone = mysqli_real_escape_string($link, $_POST['phone']);
$message = mysqli_real_escape_string($link, $_POST['message']);

// attempt insert query execution
$sql = "INSERT INTO feedback(name,email_id,phone,message) VALUES('$name','$email_id',$phone,'$message')";
if(mysqli_query($link, $sql)){
    header('Location: ecomm.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);

?>