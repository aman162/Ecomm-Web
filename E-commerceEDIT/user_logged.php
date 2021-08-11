<!DOCTYPE html>
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

</style>

</head>

	

<body>

   
    
    

    
    
<!--- navigation top--->
<div class="topnav">
    <div class ="Center"><a href="ecomm.php"><img src="images/1.png" id = "icon_shift"></a></div>
  <a class="active" href="#home">Home</a>
  <a href="about.php">About</a>
  <a href="cont.php">Contact</a>
   <div style = "float:right;text-color:orange">
     <a href="login.html">Cart</a></div>
<div style = "float:right;text-color:orange">
           <a href="login/index.html">
<?php 
define('DB_HOST', 'localhost'); 
define('DB_NAME', 'ecomm'); 
define('DB_USER','root'); 
define('DB_PASSWORD',''); 
$con=mysqli_connect('localhost','root','','ecomm'); 
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$user1 = mysqli_real_escape_string($con,$_POST["email_id"]);
    $pass1 = mysqli_real_escape_string($con,$_POST["pass"]);
    $pass2 = md5($pass1);
    
    if(!empty($user1)) 
    {   //echo $user1;
        $query = mysqli_query($con,"SELECT * FROM user_details WHERE( email_id = '$user1' AND pass = '$pass2')"); 
        $row = mysqli_fetch_array($query); 
        
        if(!empty($row['email_id']) AND !empty($row['pass'])) 
        {
          
            echo $row['name'];
          // header('Location: user_logged.php');
        } 
    
    } 

?>
     <?php //echo $user1;
     
?>          
</a></div>
    
    <!--------        above for name of the consumer     --------->
    
    
<div class="search-container">
    <form action="action.php" method="post">
      <input type="text" placeholder="Search.." name="search" id = "search">
      <button type="submit"><i class="fa fa-search"></i></button>
           
    </form>
  </div>
    </div>
 
  
   
    <ul id="myUL"></ul>  <!--- search bar content--->
    <!--- end navigation top--->
    
    
    
    <!--- side navigation top--->

<div class="sidenav" style="margin-top:5px;margin-left:5px;">
  <a href="ecomm.php">Home</a>
  <a href="about.php">Contact</a>
  <button class="dropdown-btn">Mens
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>
    <button class="dropdown-btn">Womens 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>
<button class="dropdown-btn">Accesories
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>
  <a href="#contact">Contact</a>
</div>
    
<!--- end navigation--->

    
   
<!--slideshow-->

    
    <!--end slideshow-->
    

<section class= "featured-categories">
    <div class = "container">
    <div class ="row">
        <div class="col-md-4">
            <img src="2.jpg">
        </div>
        <div class="col-md-4">
            <img src="3.jpg">
		</div>
		<div class="col-md-4">
            <img src="1.jpg">
        </div>
    </div>
        
    </div>
</section>

<section class ="on-sale">
    <div class ="container">
        <div class = "title-box"><h2>On Sale</h2>
        </div>
        <div class ="row1">
            <div class="col-md-3">
            <div class = "product-top"><img src ="1.jpg">
                <div class = "overlay-right">
                <button type ="button" class = "btn btn-secondary" title = "Quick Shop"><i class = "fa fa-eye"></i></button>
                <button type ="button" class = "btn btn-secondary" title = "Add To Wishlist"><i class = "fa fa-heart-o"></i></button>
                <button type ="button" class = "btn btn-secondary" title = "Add To Cart"><i class = "fa fa-shopping-cart"></i></button></div>
                </div>
                <div class = "product-bottom text-center">
                    <i class = "fa fa-star"></i>
                    <i class = "fa fa-star"></i>
                    <i class = "fa fa-star"></i>
                    <i class = "fa fa-star"></i>
                    <i class = "fa fa-star-half-o"></i>
                    <h3>name </h3>
                    <h5>Price</h5>
                    
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    
 /********                   slideshow                 *****************/

    /*slideshow end*/
    
    
    
    
    
/* *********                                   side nav                              **********/
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
    
    
    
 <!--                       search  bar                    -->
    
    
    <script>
        $(document).ready(function(){
            $("#search").keyup(function(){
                var searchtxt = $(this).val().trim();
                if(searchtxt != ''){
                    $.ajax({
                        url:'action.php',
                        method:'POST',
                        data:{query:searchtxt},
                        success:function(response){
                            $('#myUL').html(response);
                        }
                    });
                }
                else{
                    $("#myUL").html('');
                }
            });
            $(document).on('click','a',function(){
                $("#search").val($(this).text());
                $("#myUL").html('');
            });
        });
        </script>

   

</body>
</html>