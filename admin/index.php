<!DOCTYPE html>
<?php
	require('db_conn.php');
	session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['email'])){
		
		$email = stripslashes($_REQUEST['email']); // removes backslashes
		$email = mysqli_real_escape_string($conn,$email); //escapes special characters in a string
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($conn,$password);
		
		
		
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `owner_id` WHERE email='$email' AND password=PASSWORD('$password')";
		$result = mysqli_query($conn,$query) or die(mysql_error());
		$rows = mysqli_num_rows($result);
        if($rows==1){
			$_SESSION['email'] = $email;
			echo '<script type="text/javascript"> window.open("../app/","_self");</script>'; // Redirect user to index.php
            }{
    echo "<script>alert('Invalid Login Credentials ')
	location.href='index.php'</script>";
   }
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TsaxMaestro | Admin Login</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-theme20.css">
    
<link rel="icon" type="image/x-icon" href="../wp-content/themes/music-club-pro/images/TsaxMaestro favicon.jpg">
</head>
<body>
    <div class="form-body without-side">
        <div class="website-logo">
            <a href="../">
                <div class="logo">
                    <!-- <img class="logo-size" src="images/TsaxMaestro-logo.png" alt=""> -->
                    <img src="images/TsaxMaestro-logo.jpg" alt="">

                </div>
            </a>
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3> Admin Login</h3>
                        <form method="post">
                            <input class="form-control" type="email" name="email" placeholder="E-mail Address" required>
                            <input class="form-control" type="password" name="password" placeholder="Password" required>
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Login</button>
                            </div>
                        </form>
                        <div class="other-links">
<!--                            <div class="text">Or register with</div>
                            <a href="#"><i class="fab fa-facebook-f"></i>Facebook</a><a href="#"><i class="fab fa-google"></i>Google</a><a href="#"><i class="fab fa-linkedin-in"></i>Linkedin</a>
                        </div>
                        <div class="page-links">
                            <a href="login20.html">Login to account</a>
                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>