<?php
include('db_conn.php');
if(isset($_REQUEST['uin'])){
$sql = "SELECT * FROM request_design WHERE uin='$_REQUEST[uin]'";
$result = mysqli_query($conn, $sql);
$row=mysqli_fetch_array($result);
$processing_fee="0.015";
$price = $row['total_price'];
$stamp_duty = "150";
$vat =$processing_fee * $price + $stamp_duty;
$totalprice = $vat + $price;

$num="100";
$_REQUEST['total_amount']=$totalprice*$num;
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
        <th>Cost of Design & Printing</th>
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
  <script src="https://js.paystack.co/v1/inline.js"></script>
  <button type="button" onclick="payWithPaystack()" class="btn btn-warning m-t"> Proceed to Payment</button> 
</form>
        
            <!-- place below the html form -->
<script>
  function payWithPaystack(){
    var handler = PaystackPop.setup({
      key: 'pk_live_cb78e1bea23c8f32b4d5749bc9ab33eb176a4652',
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
