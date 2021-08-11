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
$phone = mysqli_real_escape_string($link, $_POST['phone']);
$email_id = mysqli_real_escape_string($link, $_POST['email_id']);
$place = mysqli_real_escape_string($link, $_POST['place']);



// attempt insert query execution
$sql = "INSERT INTO addresses(name,phone,emai_id,place) VALUES('$name',$phone ,'$email_id', '$place')";
$res1 = mysqli_query($link, $sql);


$query1 = mysqli_query($link,"SELECT * FROM cart_details WHERE email_id = '$email_id'");
while($row1 = mysqli_fetch_array($query1)){

$price = $row1['price'];
$pro_name = $row1['name'];
$quantity = $row1['quantity'];
$id = $row1['id'];




$t = "INSERT INTO order_details (email_id , name , id , price , phone , place , pro_name , quantity) VALUES('$email_id' , '$name' , '$id' , '$price' , '$phone' , '$place' , '$pro_name' , '$quantity')";
$res2 = mysqli_query($link, $t);

$m = "INSERT INTO order_summary (email_id , name , id , price , phone , place , pro_name , quantity) VALUES('$email_id' , '$name' , '$id' , '$price' , '$phone' , '$place' , '$pro_name' , '$quantity')";
$res4 = mysqli_query($link, $m);
}
$q = "DELETE FROM cart_details WHERE email_id = '$email_id'";
$res3 = mysqli_query($link, $q);

if(res1){
 header('Location: happy_page.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);

?>