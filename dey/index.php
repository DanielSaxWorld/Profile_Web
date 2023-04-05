<!DOCTYPE html>
<html lang="en">
<head>
	<title>TsaxMaestro | Register</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
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
    <link rel="shortcut icon" href="images/icon.jpg">
<!--===============================================================================================-->
</head>
<body style="background-color: #999999;">

	<div class="limiter">
		<div class="container-login100">
			<div class="login100-more" style="background-image: url(images/bg.jpg);"></div>

			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
				<form class="login100-form validate-form" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post"  enctype="multipart/form-data">
                 <?php
include("db_conn.php");


$rand = rand(0000,9999);
		$today = date("dmy");
		$time = date("His");
		$ID = "Tsax".$rand;

	error_reporting(E_ALL);
	if(isset($_REQUEST['submit'])){
		$fullname=trim(addslashes($_REQUEST['fullname']));
		$email=trim(addslashes($_REQUEST['email']));
		$password=trim(addslashes($_REQUEST['password']));
		$passport = $_FILES["data"]['name'];
		$target="../app/staff/";
		$target=$target.$_FILES["data"]['name'];




		/*	  $yyy = $_FILES['data']['name'];
			  $_SESSION['pic']=$yyy;*/

if(move_uploaded_file($_FILES["data"]['tmp_name'], $target)>0){

	


	

		  //Check for duplicate record in database before inserting New Record
		  $check=mysqli_query($conn, "SELECT * FROM owner_id WHERE fullname='$fullname' AND email='$email'");
		  $checkrows=mysqli_num_rows($check);

		 if($checkrows>0) {
		  echo "<script>alert('Admin Already Exist, Please login instead')
		  location.href='index.php'</script>";
		 } else {


$sql="INSERT INTO owner_id (fullname, email, password, passport) VALUES ('$fullname','$email',PASSWORD('$password'),'$passport')";

mysqli_query($conn,$sql) or die (mysqli_error($conn));
$num=mysqli_insert_id($conn);
					if(mysqli_affected_rows($conn)!=1){
						$message= "Error inserting the application information.";
						}
echo "<script>alert('$fullname  ADMIN Successfully Created')
	location.href='../admin/'</script>";
}
}
	mysqli_close($conn);
	}


?>
					<span class="login100-form-title p-b-59">
						ADMIN Sign Up
					</span>

                    <div class="wrap-input100 validate-input" data-validate = "Fullname is required">
						<span class="label-input100">Fullname</span>
						<input required class="input100" type="text" name="fullname" placeholder="Enter Fullname...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<span class="label-input100">Email</span>
						<input required class="input100" type="text" name="email" placeholder="Email addess...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input required class="input100" type="password" name="password" placeholder="Choose Password">
						<span class="focus-input100"></span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "Upload a Passport">
						<span class="label-input100">Passport</span>
						<input class="input100" type="file" onChange="readURL(this);" name="data"  accept=".jpg,.jpeg,.png,.PNG,.JPG,.JPEG">
						<span class="focus-input100"></span>
					</div>

                    <div class="wrap-input100 validate-input">
						<style>
img{
max-width:80px; max-height:80px;
}
input[type=file]{
padding:10px;}
</style>

<script>
function readURL(input) {
if (input.files && input.files[0]) {
var reader = new FileReader();

reader.onload = function (e) {
$('#blah')
.attr('src', e.target.result);
};

reader.readAsDataURL(input.files[0]);
}
}
</script>

<img id="blah" class="img-circle" />
					</div>



					<div class="flex-m w-full p-b-33">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							
						</div>


					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>


							<button name="submit" class="login100-form-btn">
                            Register
                            </button>

						</div>

						<a href="../admin/" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
							Sign in
							<i class="fa fa-long-arrow-right m-l-5"></i>
						</a>
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