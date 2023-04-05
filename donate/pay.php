<?php
include('db_conn.php');
if(isset($_REQUEST['uin'])){
$sql = "SELECT * FROM donate WHERE uin='$_REQUEST[uin]'";
$result = mysqli_query($conn, $sql);
$row=mysqli_fetch_array($result);
	$stampduty = 50;
	$vat = 0.075;
	$actualvat = $vat * $row['amount'];
	$newpayment = $row['amount'] + $stampduty + $actualvat;
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
     <title>GOGHI Donation | <?php echo $row['email'];?></title>
    <meta name="description" content="GOGHI | DONATION" />
    <meta name="author" content="Wetin Dey Inc." />

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
    <img src="img/logo.png"><br>
               
        <h2>Dear <strong><?php echo $row['fullname'];?>,</strong></h2>
        <h3>Below are about to donate <strong style="font-size:20px; color:#DDA508"><span id="naira">N</span><?php echo number_format($newpayment, 2);?></strong> to GOGHI</h3>
		
		<table class="table table-bordered">
        <style>
		th { font-size:16px}
		
		</style>
        
        <thead>
        <th>Amount</th>
        <th>Vat</th>
        <th>Stamp Duty</th>
        <th>Total Price</th>
        </thead>
        <tbody>
        <th><span id="naira">N</span><?php echo number_format($row['amount'], 2);?></th>
        <th><span id="naira">N</span><?php echo number_format($actualvat, 2);?></th>
        <th><span id="naira">N</span><?php echo number_format($stampduty, 2);?></th>
        <th><span id="naira">N</span><?php echo number_format($newpayment, 2);?></th>
        
        </tbody>
        </table>
        
       
         <h3>kindly click the button below to continue. </h3>
        

        <div class="error-desc">
        <form>
    <script src="https://api.ravepay.co/flwv3-pug/getpaidx/api/flwpbf-inline.js"></script>
    <button type="button" onClick="payWithRave()" class="btn btn-warning m-t"><strong>Donate Now</strong></button><br><br>
    
    <div class="col-md-12 col-sm-12 col-xs-12" align="center">
                                <div class="form-group">
                                    <img src="../images/trusted.png" height="90">
                                    
                                </div>
                            </div> 
</form>

<script>
    const API_publicKey = "FLWPUBK-1299238c49fcde329a6b168addf370a1-X";

    function payWithRave() {
        var x = getpaidSetup({
            PBFPubKey: API_publicKey,
            customer_email: "<?php echo $row['email'] ?>",
            amount: <?php echo $newpayment; ?>,
            customer_phone: "<?php echo $row['phone'] ?>",
            currency: "NGN",
            txref: "rave-123456",
            meta: [{
                metaname: "flightID",
                metavalue: "AP1234"
            }],
            onclose: function() {},
            callback: function(response) {
                var txref = response.data.txRef; // collect txRef returned and pass to a 					server page to complete status check.
                console.log("This is the response returned after a charge", response);
                if (
                    response.data.chargeResponseCode == "00" ||
                    response.data.chargeResponseCode == "0"
                ) {
                    location.href = "failed.php";
                } else {
                    location.href = "thanks.php";
                }

                x.close(); // use this to close the modal immediately after payment.
            }
        });
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
