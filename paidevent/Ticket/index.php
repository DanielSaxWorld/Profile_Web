<?php
include('db_conn.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TsaxMaestro | Tickets</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body style="background-image: url(images/mine.jpg);">

    <div class="main">

        <section class="signup">
            <div class="container">
                <div class="signup-content" >
                    <form id="signup-form" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" class="signup-form">
                            <?php
include("db_conn.php");


$rand = rand(00000,99999);
		$today = date("dmy");
		$time = date("His");
		$ID = "TsaxMaestro/"."T".$rand;
		
	error_reporting(E_ALL);
	if(isset($_REQUEST['submit'])){
		$uin=trim(addslashes($_REQUEST['uin']));
		$fullname=trim(addslashes($_REQUEST['fullname']));
		$email=trim(addslashes($_REQUEST['email']));
		$phone=trim(addslashes($_REQUEST['phone']));
		$donation=trim(addslashes($_REQUEST['donation']));
		
$sql="INSERT INTO ace (uin, fullname, email, phone, donation) VALUES ('$uin','$fullname','$email','$phone','$donation')";

mysqli_query($conn,$sql) or die (mysqli_error($conn));
$num=mysqli_insert_id($conn);
					if(mysqli_affected_rows($conn)!=1){
						$message= "Error inserting the application information.";
						}
echo "<script>alert('Dear - $fullname - now proceed to payment for SALT CONFERENCE 2019')
	location.href='../donate/pay.php?uin=".$_REQUEST['uin']."'</script>";
}
	mysqli_close($conn);
	
	
	
?>

						<h2 class="form-title">Make Payment</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" value="<?php  echo $ID; ?>" readonly name="uin" type="text" placeholder="UIN" class="form-control required"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="fullname" id="fullname" placeholder="Your Fullname"/>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Your Email"/>
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-input" name="phone" id="phone" placeholder="Your Phone"/>
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-input" name="donation" id="donation" placeholder="Amount"/>
                        </div>
						<div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Proceed to Pay"/>
                        </div>
                    </form>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>