

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sakec's Complaint Box</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter" ">
		<div class="container-login100" style="background-color: rgb(0, 74, 134);">
			<div class="wrap-login100" >
				
					<span class="login100-form-title-1" style="color: rgb(0, 74, 134);">
						<img src="images/bg_login.png" alt="" class="img-fluid">
					</span>
					
				

				<form class="login100-form validate-form" action="process.php" method="POST"> 
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Name</span>
						<input class="input100" type="text" id='username' name="username" placeholder="Enter your name">
						<span class="focus-input100"></span>
						
					</div>

					<!--<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="username" placeholder="Enter your Email Id">
						<span class="focus-input100"></span>
						
					</div>-->


					<div class="wrap-input100 validate-input m-b-18" data-validate = "Email is required">
						<span class="label-input100">Card No.</span>
						<input class="input100" type="password" id='password' name="password" placeholder="Smart Card / Registration Number">
						<span class="focus-input100"></span>
					</div>

					

					
					<!-- <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Days</span>
						<input class="input100" type="text" name="username" placeholder="Min. 3 days">
						<span class="focus-input100"></span>
						
					</div>

					<div class=" validate-input m-b-18" >
						<span class="label-input100">Assignnment</span>
						<div class="form-group">
							<input type="file" class="form-control-file" id="exampleFormControlFile1 ">
						 </div>
					</div> -->

					<!-- <div class="  m-b-18 validate-input">
						<span class="label-input100">Ink Color</span>
						<select class="form-control" id="#">
						  <option>Blue</option>
						  <option>Black</option> 
						</select>
						<span class="focus-input100"></span>
					</div>

					

					 <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Pages</span>
						<input class="input100" type="text" name="username" placeholder="Automated">
						<span class="focus-input100"></span>
						
					</div> -->

					<!-- <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Amount</span>
						<input class="input100" type="text" name="username" placeholder="In Rs.">
						<span class="focus-input100"></span>
						
					</div> -->

					<!-- <div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb2" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb2">
								Remember me
							</label>
						</div>

						
					</div> -->

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
								Login
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>