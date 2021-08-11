<?php
session_start();
$conn=mysqli_connect('localhost','root','','ecomm'); 
if(!empty($_POST['email_id'])){
$email = mysqli_real_escape_string($conn,$_POST["email_id"]);}
else{
  $email = $_SESSION['email_id'];
 // $_SESSION['email_id'] = $email;

}

error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE); //to remove warnings 
        $query = mysqli_query($conn,"SELECT * FROM cart_details WHERE email_id = '$email'"); 
        
?>

<html>
    <head>
	<title>
		E-commerce Website
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">

	<!-- Bootstrap file -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
    <link rel ="stylesheet" href="video4.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	
    <style>

.topnav {
  overflow: hidden;
  background-color: rgba(0,0,0,0.8);
}

.topnav a {
  float: left;
    
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
  background-color: orange;
  color: white;
 
}

.topnav a.active {
  background-color: orange;
  color: white;
  border-radius:15%;
  margin:4px 2px 4px 5px;
  padding: 10px 10px 10px 10px;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
     width: 400px;
 
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: orange;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: orange;
}

@media screen and (max-width: 1000px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
.Center img{ 
width:50px; 
height:50px; 
border-radius: 100%;
margin-bottom: -10px;
margin-top: -10px;
cursor: pointer;
} 

        
#myUL {
  list-style-type: none;
  padding: 0px 215px 0px ;
    float: right;
}

#myUL li a {
  border: 1px solid #ddd;
  margin-top: -10px; /* Prevent double borders */
  background-color: #f6f6f6;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  color: black;
  display: block;
     width: 400px;
}

#myUL li a:hover:not(.header) {
  background-color: #eee;
}
 
        
.sidenav {
  height: 400px;
  width: 230px;
  display: inline-block;
    z-index: 1;
  top: 70px;
  left: 5px;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;


}

/* Style the sidenav links and the dropdown button */
.sidenav a, .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
  
}

/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
  color: #f1f1f1;
}

/* Main content */
.main {
  margin-left: 200px; /* Same as the width of the sidenav */
  font-size: 20px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

/* Add an active class to the active dropdown button */
.active {
  background-color: orange;
  color: white;
}

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
  display: none;
  background-color: #262626;
  padding-left: 8px;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 8px;
}

/* Some media queries for responsiveness */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
        
/*slideshow
.mySlides {width:600px; height: 30vw;top:5px}
        
.change_shape{
        float: right;
    }
*/
        
        
/*table of cart content*/     
table {
  border-collapse: collapse;
  width: 40%;
    margin-top: -350px;
}

th, td {
  text-align: left;
  padding: 8px;
    
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: orange;
  color: white;
}

        
        /*Button*/
.button {
  background-color: orange;
    border: none;
  border-radius: 12%;
  color: white;
  padding: 10px 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>

</head>
    <body>
        <div class="topnav">
    <div class ="Center"><a href="ecomm1.php"><img src="images/1.png" id = "icon_shift"></a></div>
  <a class="active" href="ecomm1.php">Home</a>
  <a href="#about">About</a>
  <a href="#contact">Contact</a>
   <div style = "float:right;text-color:orange">
     <a href="cart_page.php">Cart</a></div>
<div style = "float:right;text-color:orange">
           <a href="logout.php">
<?php 

    $user1 = $email;  
        $q = mysqli_query($conn,"SELECT * FROM user_details where email_id = '$user1'"); 
        $rowe = mysqli_fetch_array($q); 
        
            echo $rowe['name'];
         
       
?>
               
</a></div>
    
    <!--------        above for name of the consumer     --------->
    
    
<div class="search-container">
    <form action="search11.php" method="post">
      <input type="text" placeholder="Search.." name="search" id = "search">
      <button type="submit"><i class="fa fa-search" style = "height:25px"></i></button>
           
    </form>
  </div>
    </div>
 
  
   
    <ul id="myUL"></ul>  <!--- search bar content--->
    <!--- end navigation top--->
    
    
    
    <!--- side navigation top--->

<div class="sidenav" style="margin-top:5px;margin-left:5px;">
  <a href="ecomm1.php">Home</a>
  <a href = "order_summary.php">Order Summary</a>
  <a href="cont.php">Contact</a>
  <button class="dropdown-btn">Mens
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="men11.php">T-shirt</a>
    <a href="men22.php">Shirt</a>
    <a href="men33.php">Trouser</a>
  </div>
    <button class="dropdown-btn">Womens 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="women11.php">Saree</a>
    <a href="women22.php">Gowns</a>
  </div>
<button class="dropdown-btn">Accesories
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="acc11.php">Watches</a>
    <a href="acc22.php">Shoes</a>
    <a href="acc33.php">Jewellery</a>
  </div>
  <a href="cont1.php">Contact</a>
</div>
      <!--           Cart ka samaan             -->  
    <center>
        <form action="" method = "post">
        <table>
            <tr><th>To Remove</th><th>Name</th><th>Quantity</th><th>Price</th></tr>
            <?php
            $remove = array();
            $x = 0;
            $y = 0;
        while($row=mysqli_fetch_array($query)){
            echo "<tr>";
            echo '<td><input type="checkbox" name="remove[]" id ="option" value="'.$row['id'].'"></td><td>'.$row['name'].'</td><td>'.$row['quantity'].'</td><td>'.$row['price'].'</td></tr>';
            $x = $x + $row['price']*$row['quantity'];
            $y = $y + $row['quantity'];
        }
            
            echo "<tr><td></td><td></td><td>".$y."</td><td><b>".$x."</b></td></tr>";
            echo '<input type="hidden" name="email_id" value="'.$email.'">';
                 echo '<tr><td><button type = "submit" class ="button">Update</button></td><td><button class = "button"><a href ="ecomm1.php" style ="text-decoration : none;color:white;">Continue Shopping</a></button></td><td></td><td><button class="button"><a href = "buy.php" style ="text-decoration : none;color:white;">Checkout</a></button></td></tr>';
                echo "<tr><td colspan = '4' >**Refresh to update</td></tr>";
            ?>
             
        </table>
        </form>
        </center>
        <!--     deleting query    -->
     <?php   
        
      
        foreach ($_POST['remove'] as $color){ 
            if (isset($color)){
  
                    $query = mysqli_query($conn,"DELETE FROM cart_details WHERE id = '$color' AND email_id = '$email'"); 
                    $res = mysqli_fetch_array($query);
    }
           $_SESSION['email_id'] = $_POST['email_id'];
		  
		 
    
}
        ?>
        <script>
 
 
	
 function openmenu() {


   document.getElementById("side-menu").style.display="block";
   document.getElementById("menu-btn").style.display="none";
   document.getElementById("close-btn").style.display="block";
 }

 function closemenu() {
   document.getElementById("side-menu").style.display="none";
   document.getElementById("menu-btn").style.display="block";
   document.getElementById("close-btn").style.display="none";
 }
   
   
   
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
 dropdown[i].addEventListener("click", function() {
 this.classList.toggle("active");
 var dropdownContent = this.nextElementSibling;
 if (dropdownContent.style.display === "block") {
 dropdownContent.style.display = "none";
 } else {
 dropdownContent.style.display = "block";
 }
 });
}
   
</script>

        
    </body>
</html>