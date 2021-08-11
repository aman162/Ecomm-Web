<!DOCTYPE html>
<html>
<head>
<title>Image retrieve</title>
</head>

<body>
<form name="form1" action="" method="post" enctype="multipart/form-data">
<table>
<tr>
<td><input type="submit" name="submit2" value="display"></td>
</tr>
</table>
</form>
<?php
$con = mysqli_connect('127.0.0.1:3306','root','','ecomm') or die('Unable To connect');


if(isset($_POST["submit2"]))
{
   $res=mysqli_query($con,"select * from product where description='tshirt'");
   echo "<table>";
   echo "<tr>";
   
   while($row=mysqli_fetch_array($res))
   {
   echo "<td>"; 
   echo '<img src="data:image/jpeg;base64,'.base64_encode($row['photo'] ).'" height="200" width="200"/>';
   echo "<br>";
   echo ($row['name']);
   echo "<br>";
   echo ($row['price']);
   echo "<br>";

   ?><a href="ecomm.php?id=<?php echo $row["id"]; ?>">Add To Cart</a> <?php
   echo "</td>";
   } 
   echo "</tr>";
   
   echo "</table>";
  }
?>
</body>
</html>