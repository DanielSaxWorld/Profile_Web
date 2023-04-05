<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="refresh" content="600;url=../events/" />
    <?php
		include ('db_conn.php');
		$id=$_GET['id'];
		$sql = "SELECT * FROM events";
		$sql = "SELECT * FROM events WHERE id = $id";
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0)
	{
		while($row = mysqli_fetch_assoc($result))
		{
			?>
    
    <title><?php echo $row['title']; ?></title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body style="background-image: url('../app/events/<?php echo $row['image']; ?>');" >

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form">
                        <h2 class="form-title">MAKE PAYMENT FOR <?php echo $row['title']; ?> EVENT</h2><?php
		}
	}
	mysqli_close($conn);
			
			
			
			?>
                        <h4 class="form-title">Fill The Form Appropriately To Book A Ticket</h4>
                        <?php
include("db_conn.php");


$rand = rand(00000,99999);
		$today = date("dmy");
		$time = date("His");
		$ID = "TSAX/"."C".$rand;
		
	error_reporting(E_ALL);
	if(isset($_REQUEST['submit'])){
		$uin=trim(addslashes($_REQUEST['uin']));
		$name=trim(addslashes($_REQUEST['name']));
        $phone=trim(addslashes($_REQUEST['phone']));
		$email=trim(addslashes($_REQUEST['email']));
		$ticket_type=trim(addslashes($_REQUEST['ticket_type']));


        $check=mysqli_query($conn, "SELECT * FROM payment WHERE email='$email' AND phone='$phone'");
        $checkrows=mysqli_num_rows($check);

       if($checkrows>0) {
        echo "<script>alert('Email Or Phone Already Exist, Please Enter another Email & Phone')
        location.href='../events/'</script>";
       } else {

		
$sql="INSERT INTO payment (uin, name, phone, email, ticket_type) VALUES ('$uin','$name','$phone','$email','$ticket_type')";

mysqli_query($conn,$sql) or die (mysqli_error($conn));
$num=mysqli_insert_id($conn);
					if(mysqli_affected_rows($conn)!=1){
						$message= "Error inserting the application information.";
						}
echo "<script>alert('Dear - $name - now proceed to payment for Tsax Event')
	location.href='pay/pay.php?uin=".$_REQUEST['uin']."'</script>";
}
    }
	mysqli_close($conn);
	
	
	
?>
                        <div class="form-group">
                            <input type="hidden" class="form-input" value="<?php  echo $ID; ?>" readonly name="uin" type="text" placeholder="UIN" class="form-control required"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" required name="name" id="name" placeholder="Your Name"/>
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-input" required name="phone" id="phone" placeholder="Your Phone No"/>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" required name="email" id="email" placeholder="Your Email"/>
                        </div>
                        <?php
		include ('db_conn.php');
		$id=$_GET['id'];
		$sql = "SELECT * FROM events";
		$sql = "SELECT * FROM events WHERE id = $id";
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0)
	{
		while($row = mysqli_fetch_assoc($result))
		{
			?>
                        <div class="form-group">
                                <select name="ticket_type" class="form-input">
  								    <option value="<?php echo $row['regular'];?>">REGULAR: &#36;<?php echo $row['regular'];?></option>
  								    <option value="<?php echo $row['vip'];?>">VIP: &#36;<?php echo $row['vip'];?></option>
                                      <option value="<?php echo $row['vvip'];?>">VVIP: &#36;<?php echo $row['vvip'];?></option>
  								 </select>
                        </div>
                        <?php
		}
	}
	mysqli_close($conn);
			
			
			
			?>
<!-- 				   
                        <div class="form-group">
                            <input type="checkbox" name="agree_term" id="agree_term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms For Events</a></label>
                        </div> -->
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="PROCEED TO PAYMENT"/>
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