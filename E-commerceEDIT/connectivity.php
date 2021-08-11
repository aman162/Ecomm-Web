<?php 
define('DB_HOST', 'localhost'); 
define('DB_NAME', 'ecomm'); 
define('DB_USER','root'); 
define('DB_PASSWORD',''); 
$con=mysqli_connect('localhost','root','','ecomm'); 
if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE); //to remove warnings jugaad
    session_start();
    $user1 = mysqli_real_escape_string($con,$_POST["email_id"]);
    $pass1 = mysqli_real_escape_string($con,$_POST["pass"]);
    $pass2 = md5($pass1);
    $_SESSION['email_id'] = $user1;
    if(!empty($user1)) 
    {   
        $query = mysqli_query($con,"SELECT * FROM user_details where email_id = '$user1' AND pass = '$pass2'"); 
        $row = mysqli_fetch_array($query); 


        if($user1 == "admin@gmail.com"){
            header("Location: ecomm_admin.php");}
            else{
        if(!empty($row['email_id']) AND !empty($row['pass'])) 
        {
            $_SESSION['name'] =  $row['name'];
            
 
          header('Location: ecomm1.php');
        } 
        else 
        { 
            header('Location: happy_page2.php');
           // header( "refresh:4;url=login.html" );
        } 
    }
    } 

?>

