<?php
session_start();
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE); //to remove warnings jugaad
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/images%20(2).jpg');">
			<div class="wrap-login100">


					<span class="login100-form-title p-b-34 p-t-27">
                        <div style="text-shadow: '0px 0px 10px 2px #fff'"> 
							Wrong Password Or Email Id !!
                            <?php 
                                // header("refresh:2;url: ecomm.php");
                                header( "refresh:2;url=login.html" );
                            ?>
                        </div>
					</span>


                    
					

                    
					<div class="container-login100-form-btn">
						
					</div>

					<div class="text-center p-t-90">
						
					</div>

			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	

	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script src="js/main.js"></script>

</body>
</html>