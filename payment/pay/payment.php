<?php
include('db_conn.php');
if(isset($_REQUEST['uin'])){
$sql = "SELECT * FROM unikexpress WHERE uin='$_REQUEST[uin]'";
$result = mysqli_query($conn, $sql);
$row=mysqli_fetch_array($result);
$num="100";
$_REQUEST['total_price']=$row['total_price']*$num;
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
     <title>PAYMENT | <?php echo $row['fullname'];?> You</title>
    <meta name="description" content="UNIKEXPRESS | PAYMENT" />
    <meta name="author" content="Wetin Dey Inc." />
<!--<meta name="description" content="CEI SALT CONFERENCE | Registration" />
<meta property="og:title" content="CEI SALT CONFERENCE | Registration" />
<meta property="og:site_name" content="wetindey.us">
<meta property="og:description" content="Annual Sharing and Leanring Togeter (SALT) Conference | Registration" />
<meta property="og:image" content="https://aascmsl.wetindey.us/img/aascmsl logo.fw.png" />
-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="css/plugins/steps/jquery.steps.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/plugins/toastr/toastr.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/apple-touch-icon.png">



</head>

<body class="gray-bg">


    <div class="middle-box text-center animated fadeInDown">
    <a href="../flex.php"><img src="img/logo.png"></a><br><br>
        <h2>Dear <strong><?php echo $row['fullname'];?></strong>!</h2>
        <h2>The Total Price for your printing is <strong>N<?php echo $row['total_price'];?></strong>. 
        Click the button below to proceed to payment.</h2>

       <div class="error-desc">
        <form>
  <script src="https://js.paystack.co/v1/inline.js"></script>
  <button type="button" onclick="payWithPaystack()" class="btn btn-warning m-t"> Proceed to Payment</button> 
</form>
        
            <!-- place below the html form -->
<script>
  function payWithPaystack(){
    var handler = PaystackPop.setup({
      key: 'pk_live_9a453f141f2268e9508101d73cd518adc9c7a8a2',
      email: '<?php echo $row['email'];?>',
      amount: <?php echo $_REQUEST['total_amount'];?>,
      ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
      metadata: {
         custom_fields: [
            {
                display_name: "Mobile Number",
                variable_name: "mobile_number",
                value: "<?php echo $row['phone'];?>"
            }
         ]
      },
      callback: function(response){
          alert('success. transaction ref is ' + response.reference)
		  location.href = "thanks.php";
      },
      onClose: function(){
          alert('window closed');
      }
    });
    handler.openIframe();
  }
</script>

        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
<?php
}
?>
</body>

</html>
