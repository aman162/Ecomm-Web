<?php
session_start();
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE); //to remove warnings jugaad
?>

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
	

	

	<!-- Bootstrap file
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>+
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet"> Bootstrap file -->

	
	<link rel="stylesheet" type="text/css" href="contact/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" type="text/css" href="contact/css/util.css">
	<link rel="stylesheet" type="text/css" href="contact/css/main.css">
<style>

	        /* Footer */
@import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

#footer {
    background: #000 !important;
}
#footer h5{
	padding-left: 10px;
    border-left: 3px solid #eeeeee;
    padding-bottom: 6px;
    margin-bottom: 20px;
    color:#ffffff;
}
#footer a {
	
    color: #ffffff;
    text-decoration: none !important;
    background-color: transparent;
    -webkit-text-decoration-skip: objects;
}
#footer ul.social li{
	padding: 3px 0;
}
#footer ul.social li a i {
    margin-right: 5px;
	font-size:25px;
	-webkit-transition: .5s all ease;
	-moz-transition: .5s all ease;
	transition: .5s all ease;
}
#footer ul.social li:hover a i {
	color: orange;
	font-size:30px;
	margin-top:-10px;
}
#footer ul.social li a,
#footer ul.quick-links li a{
	color:#ffffff;
}
#footer ul.social li a:hover{
	color:orange;
}
#footer ul.quick-links li{
	padding: 3px 0;
	-webkit-transition: .5s all ease;
	-moz-transition: .5s all ease;
	transition: .5s all ease;
}
#footer ul.quick-links li:hover{
	color:orange;
	padding: 3px 0;
	margin-left:5px;
	font-weight:700;
}
#footer ul.quick-links li a i{
	margin-right: 5px;
}
#footer ul.quick-links li:hover a i {
	color: orange;
    font-weight: 700;
}

@media (max-width:767px){
	#footer h5 {
    padding-left: 0;
    border-left: transparent;
    padding-bottom: 0px;
    margin-bottom: 10px;
}
}

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
 
</style>
	


</head>


<body>

<div class="topnav">
    <div class ="Center"><a href="ecomm.php"><img src="images/1.png" id = "icon_shift"></a></div>
  <a class="active" href="#home">Home</a>
  <a href="about.php">About</a>
  <a href="cont.php">Contact</a>
   <div style = "float:right;text-color:orange">
     <a href="logout.php">
	 <?php
     $name = $_SESSION['name'];
     echo $name;
     ?>
	 </a></div>
       
  <div class="search-container">
     
      
    <form action="search1.php" method="post">
      <input type="text" placeholder="Search..." name="search" id = "search">
      <button type="submit"><i class="fa fa-search"></i></button>
           
    </form>
  </div>
    </div>
 
  
   
    <ul id="myUL">
 

</ul>

<section style="background-color: lightsalmon;">


	<div class="container-contact100">

		<div class="wrap-contact100">
			<div class="contact100-form-title" style="background-image: url(images/bg-01.jpg);">
				<span class="contact100-form-title-1">
					Finish Shopping
				</span>

				<span class="contact100-form-title-2">
					ENTER YOUR DETAILS BELOW
				</span>
			</div>

			<form class="contact100-form validate-form" action="buynow.php" method="post">
				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Full Name:</span>
					<input class="input100" type="text" name="name" placeholder="Enter full name">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Phone is required">
					<span class="label-input100">Phone:</span>
					<input class="input100" type="text" name="phone" placeholder="Enter phone number">
					<span class="focus-input100"></span>
				</div>
                <div class="wrap-input100 validate-input" data-validate = "Valid pincode is required">
					<span class="label-input100">Email:</span>
					<input class="input100" type="email" name="email_id" placeholder="Enter Email">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate = "address is required">
					<span class="label-input100">Full Address:</span>
					<textarea class="input100" type="text" name="place" placeholder="Your address..."></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<button type="submit" class="contact100-form-btn" onclick="myFunction()" >
						<span>
							Checkout
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>

  

	<div id="dropDownSelect1"></div>
  <script>
function myFunction() {
  alert("Your Order Has Been Placed Successfully!!");
}
</script>

	


</section>


<section id="footer">
<div class="container">
			<div class="row text-center text-xs-center text-sm-left text-md-left">
				<div class="col-xs-12 col-sm-4 col-md-4">
					
					<ul class="list-unstyled quick-links" style= "margin-left:400px;">
						<li><a href="ecomm.php"><i class="fa fa-angle-double-right"></i>Home</a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					
					<ul class="list-unstyled quick-links" style= "margin-left:200px;">
						<li><a href="about.php"><i class="fa fa-angle-double-right"></i>About</a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					
					<ul class="list-unstyled quick-links">
						<li><a href="cont.php"><i class="fa fa-angle-double-right"></i>Feedback</a></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
					<ul class="list-unstyled list-inline social text-center">
						<li class="list-inline-item"><a href="https://www.facebook.com" target="_blank"><i class="fa fa-facebook"></i></a></li>
						<li class="list-inline-item"><a href="https://www.instagram.com" target="_blank"><i class="fa fa-instagram"></i></a></li>
						<li class="list-inline-item"><a href="https://www.gmail.com" target="_blank"><i class="fa fa-envelope"></i></a></li>
					</ul>
				</div>
				
			</div>	
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
					<p>Created and Designed by Sanskari Boys</p>
					<p class="h6">&copy All right Reversed.</p>
				</div>
			
			</div>	
		</div>
	</section>

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