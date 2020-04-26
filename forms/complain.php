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
				<div class="login100-form-title" >
					<span style="color: rgb(0, 74, 134);">
						<img src="images/bg.png" alt="" class="img-fluid">
					</span>	
				</div>

				<form class="login100-form validate-form" action="upload.php" method="POST">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Name</span>
						<input class="input100" type="name" name="uname" id="uname" placeholder="Enter your name">
						<span class="focus-input100"></span>
						
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Email is required">
						<span class="label-input100">Email</span>
						<input class="input100" type="email" name="email" id="email" placeholder="Enter your email">
						<span class="focus-input100"></span>
					</div>

					
					<!-- <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Days</span>
						<input class="input100" type="text" name="username" placeholder="Min. 3 days">
						<span class="focus-input100"></span>
						
					</div> -->

					

					<div class="wrap-input100 m-b-18 validate-input" >
						<span class="label-input100">Category</span>
						<select class="form-control" id="#">
						  <option>Select Category of Complain</option>
						  <option>Option 2</option>
						  <option>Option 3</option>
						  <option>Option 4</option>
						  <option>Option 5</option>
						</select>
						<span class="focus-input100"></span>

					

					 <!-- <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Pages</span>
						<input class="input100" type="text" name="username" placeholder="Automated">
						<span class="focus-input100"></span>
						
					</div> -->

					

					<div class="form-group wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Description</span>
						<textarea class="form-control" rows="5" id="comment" name="comment"></textarea>
					</div>

					<div class=" validate-input m-b-18" >
						<span class="label-input100">Photo</span>
						<div class="form-group">

							<!-- Image preview -->
							<img name="imgPreview" id="imgPreview" hidden="true" src="" alt="your image" width="100" height="100" />
							
							<!-- Input button -->
							<input id="imgFile" type="file" class="form-control-file" onchange="document.getElementById('imgPreview').src = window.URL.createObjectURL(this.files[0]), document.getElementById('imgPreview').hidden= false">
						 </div>
					</div>

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
						<button class="login100-form-btn" name="submit">
							Submit Complain
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