<?php
include('db_conn.php');
if(isset($_REQUEST['uin'])){
$sql = "SELECT * FROM unikexpress WHERE uin='$_REQUEST[uin]'";
$result = mysqli_query($conn, $sql);
$row=mysqli_fetch_array($result);
$processing_fee="0.014";
$price = $row['total_price'];
$stamp_duty = "50";
$vat =$processing_fee * $price + $stamp_duty;
$totalprice = $vat + $price;

$_REQUEST['total_amount']= $totalprice;
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
     <title>UNIKEXPRESS | <?php echo $row['fullname'];?></title>
    <meta name="description" content="UNIKEXPRESS | PAYMENT" />
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
        <h2>Dear <?php echo $row['fullname'];?></h2>
        <h3>Below are the details of your payment analysis</h3>
        
        <table class="table table-bordered">
        <style>
		th { font-size:16px}
		
		</style>
        
        <thead>
        <th>Price</th>
        <th>Vat</th>
        <th>Total Price</th>
        </thead>
        <tbody>
        <th><span id="naira">N</span><?php echo number_format($row['total_price'], 2);?></th>
        <th><span id="naira">N</span><?php echo number_format($vat, 2);?></th>
        <th><span id="naira">N</span><?php echo number_format($totalprice, 2);?></th>
        
        </tbody>
        </table>
        
         <h3>kindly click the button below to make payment. </h3>

        <div class="error-desc">
        <form>
    <script src="https://api.ravepay.co/flwv3-pug/getpaidx/api/flwpbf-inline.js"></script>
    <button type="button" onClick="payWithRave()" class="btn btn-warning m-t">Proceed to Payment Now</button>
</form>

<script>
    const API_publicKey = "FLWPUBK-4f099baeeca1bbd1ba7b1045cdb5808b-X";

    function payWithRave() {
        var x = getpaidSetup({
            PBFPubKey: API_publicKey,
            customer_email: "<?php echo $row['email'];?>",
            amount: <?php echo $_REQUEST['total_amount'];?>,
            customer_phone: "<?php echo $row['phone'];?>",
            currency: "NGN",
            txref: "rave-123456",
            meta: [{
                metaname: "flightID",
                metavalue: "AP1234"
            }],
            onclose: function() {},
            callback: function(response) {
                var txref = response.tx.txRef; // collect txRef returned and pass to a 					server page to complete status check.
                console.log("This is the response returned after a charge", response);
                if (
                    response.tx.chargeResponseCode == "00" ||
                    response.tx.chargeResponseCode == "0"
                ) {
				   window.location.replace("thanks.php");
					
                } else {
                   window.location.replace("failed.php");
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
