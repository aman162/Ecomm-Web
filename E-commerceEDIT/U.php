<!DOCTYPE html>
<html>
<head>
    <title>Insert Image in MySql using PHP</title>
</head>
<body>
<?php
$msg = '';
if($_SERVER['REQUEST_METHOD']=='POST'){
    $image1 = $_FILES['image1']['tmp_name'];
    $img = file_get_contents($image1);
    $con = mysqli_connect('localhost','root','','ecomm') or die('Unable To connect');

    $sql = "insert into product (id,photo,name,price,description) values(100,?,'Pink color Handcrafted Jhumka',599,'jewellery')";

    $stmt = mysqli_prepare($con,$sql);

    mysqli_stmt_bind_param($stmt, "s",$img);
    mysqli_stmt_execute($stmt);

    $check = mysqli_stmt_affected_rows($stmt);
    if($check==1){
        $msg = 'Image Successfullly UPloaded';
    }else{
        $msg = 'Error uploading image';
    }
    mysqli_close($con);
}
?>
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="image1" />
    <button>Upload</button>
</form>
<?php 
    echo $msg;
?>
</body>
</html>