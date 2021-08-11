<!DOCTYPE html>
<html>
<head>
    <title>Insert Image in MySql using PHP</title>
</head>
<body>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $con = mysqli_connect('localhost','root','','ecomm') or die('Unable To connect');

    $sql = "insert into cart (name,price,quantity) values('Pink color Handcrafted Jhumka',599,'jewellery')";

    $stmt = mysqli_prepare($con,$sql);

    mysqli_stmt_bind_param($stmt, "s",$img);
    mysqli_stmt_execute($stmt);

    mysqli_close($con);
}
?>
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="image1" />
    <button>Upload</button>
</form>
</body>
</html>