<?php
include('session2.php');
include('db_conn.php');
$id = 1;
$sql="SELECT * FROM owner_id WHERE id='$id'";
$result=mysqli_query($conn,$sql)or die(mysqli_error($conn));
$rows=mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title><?php echo $session_business_name; ?> | Dashboard</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Toastr style -->
    <link href="css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="imgs/favicon.fw.png" type="text/javascript">

</head>
<body>

    <?php include 'super_menus.php'; ?>

                <div class="row  border-bottom white-bg dashboard-header">

                    <div class="col-sm-12">
                        <h2>Welcome <strong><?php echo $session_fullname; ?></strong> to <img src="imgs/img-01.png" height="40"><strong>SUPER ADMIN DASHBOARD</strong> </h2>



<a href="supersales.php?id=cash&invoice=<?php echo $finalcode ?>"> <div class="col-lg-3">
                <div class="widget style1 navy-bg">
                    <div class="row">
                       <div class="col-xs-4">
                            <i class="fa fa-shopping-cart fa-5x"></i>
                        </div>
                        <div class="col-xs-8 text-left">
                            <span> Add Retail Sales</span>
                            <h2 class="font-bold">Retail</h2>
                        </div>
                    </div>
                </div>
            </div></a>

            <a href="superbulksales.php?id=cash&invoice=<?php echo $finalcode2 ?>"> <div class="col-lg-3">
                <div class="widget style1 red-bg">
                    <div class="row">
                       <div class="col-xs-4">
                            <i class="fa fa-desktop fa-5x"></i>
                        </div>
                        <div class="col-xs-8 text-left">
                            <span> Add Wholesales</span>
                            <h2 class="font-bold" style="font-size: 24px">Wholesales</h2>
                        </div>
                    </div>
                </div>
            </div></a>




            <a data-toggle="modal" data-target="#addproduct"> <div class="col-lg-3">
                <div class="widget style1 yellow-bg">
                    <div class="row">
                       <div class="col-xs-4">
                            <i class="fa fa-database fa-5x"></i>
                        </div>
                        <div class="col-xs-8 text-left">
                            <span> Add Product</span>
                            <h2 class="font-bold">Inventory</h2>
                        </div>
                    </div>
                </div>
            </div></a>

            <a data-toggle="modal" data-target="#addopex"> <div class="col-lg-3">
                <div class="widget style1 lazur-bg">
                    <div class="row">
                       <div class="col-xs-4">
                            <i class="fa fa-calculator fa-5x"></i>
                        </div>
                        <div class="col-xs-8 text-left">
                            <span> Add Operating Expensis</span>
                            <h2 class="font-bold">Opex</h2>
                        </div>
                    </div>
                </div>
            </div></a>

<br />
<br />

  <div class="wrapper wrapper-content">
        <div class="row">



                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-primary pull-right">Daily</span>
                                <h5>Cash Sales</h5>
                            </div>
                            <div class="ibox-content">
                            <?php $today2 = date("Y-m-d");

 $sql = "SELECT * , SUM( amount ) AS SALES_TOTAL_amount FROM  `sales` WHERE  `date` =  '$today2' AND `imei` = 'Cash'";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result)) {

?>
                                <h1 class="no-margins"><strong>&#8358;<?php echo number_format($row['SALES_TOTAL_amount'], 2); ?></strong></h1>
                                <?php }?>

                                <small>Total income Today</small>
                            </div>
                        </div>
                    </div>

			<div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-primary pull-right">Daily</span>
                                <h5>POS Sales</h5>
                            </div>
                            <div class="ibox-content">
                            <?php $today2 = date("Y-m-d");

 $sql = "SELECT * , SUM( amount ) AS SALES_TOTAL_amount FROM  `sales` WHERE  `date` =  '$today2' AND `imei` = 'POS'";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result)) {

?>
                                <h1 class="no-margins"><strong>&#8358;<?php echo number_format($row['SALES_TOTAL_amount'], 2); ?></strong></h1>
                                <?php }?>

                                <small>Total income Today</small>
                            </div>
                        </div>
                    </div>

			<div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-primary pull-right">Daily</span>
                                <h5>Transfer Sales</h5>
                            </div>
                            <div class="ibox-content">
                            <?php $today2 = date("Y-m-d");

 $sql = "SELECT * , SUM( amount ) AS SALES_TOTAL_amount FROM  `sales` WHERE  `date` =  '$today2' AND `imei` = 'Transfer'";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result)) {

?>
                                <h1 class="no-margins"><strong>&#8358;<?php echo number_format($row['SALES_TOTAL_amount'], 2); ?></strong></h1>
                                <?php }?>

                                <small>Total income Today</small>
                            </div>
                        </div>
                    </div>

			<div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-primary pull-right">Daily</span>
                                <h5>Credit Sales</h5>
                            </div>
                            <div class="ibox-content">
                            <?php $today2 = date("Y-m-d");

 $sql = "SELECT * , SUM( amount ) AS SALES_TOTAL_amount FROM  `sales` WHERE  `date` =  '$today2' AND `imei` = 'Credit'";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result)) {

?>
                                <h1 class="no-margins"><strong>&#8358;<?php echo number_format($row['SALES_TOTAL_amount'], 2); ?></strong></h1>
                                <?php }?>

                                <small>Total income Today</small>
                            </div>
                        </div>
                    </div>

			<div class="col-lg-6">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-primary pull-right">Daily</span>
                                <h5>TOTAL Sales</h5>
                            </div>
                            <div class="ibox-content">
                            <?php $today2 = date("Y-m-d");

 $sql = "SELECT * , SUM( amount ) AS SALES_TOTAL_amount FROM  `sales` WHERE  `date` =  '$today2'";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result)) {

?>
                                <h1 class="no-margins"><strong>&#8358;<?php echo number_format($row['SALES_TOTAL_amount'], 2); ?></strong></h1>
                                <?php }?>

                                <small>Total income Today</small>
                            </div>
                        </div>
                    </div>



                     <div class="col-lg-6">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-primary pull-right">Daily</span>
                                <h5>TOTAL Operating Expensis</h5>
                            </div>
                            <div class="ibox-content">
                            <?php
							$today2 = date("Y-m-d");

 $sql = "SELECT * , SUM( amount ) AS OPEX_TOTAL_amount FROM  `opex` WHERE  `opex_date` =  '$today2'";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result)) {

?>
                                <h1 class="no-margins"><strong>&#8358;<?php echo number_format($row['OPEX_TOTAL_amount'], 2); ?></strong></h1>
                                <?php }?>

                                <small>Total Expensis Today</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <h5><b>Active Sales Rep Order  (SR)</b></h5>
                                        <div class="ibox-tools">
                                            <a class="collapse-link">
                                                <i class="fa fa-chevron-up"></i>
                                            </a>
                                            <a class="close-link">
                                                <i class="fa fa-times"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="ibox-content">
                                        <table class="table table-hover no-margins">
                                            <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>Date</th>
                                                <th>Cashier</th>
                                                <th>Invoice</th>
                                                <th>Sales Rep Name</th>
                                                <th>QTY</th>
                                                <th>Amount</th>
                                                <th>Action</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
include('db_conn.php');
$todayDATE = date("Y-m-d");
$sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%y') as NEWDate FROM `event` WHERE date='$todayDATE' AND `invoice_number` LIKE '%SR%' ORDER by transaction_id DESC LIMIT 10";

$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
 while($row = mysqli_fetch_array($result)) {
    

?>
                                            <tr>
                                            <td class="text-navy"><?php echo $row['transaction_id']; ?></td>
                                                <td class="text-navy"><i class="fa fa-clock-o"></i> <?php echo $row['NEWDate']." - ".date('h:i:s a', strtotime($row['time']));; ?></td>

                                                <td class="text-navy"><?php echo $row['cashier']; ?></td>
                                                <td class="text-navy"><?php echo $row['invoice_number']; ?></td>
                                                <td class="text-navy"><?php echo $row['name']; ?></td>
                                                <td class="text-navy"><?php echo $row['qty']; ?></td>
                                                <td class="text-navy">&#8358;<?php echo number_format($row['amount'], 2); ?></td>

                                                <td><div class="btn-group">
                            <button data-toggle="dropdown" class="btn btn-danger btn-xs dropdown-toggle">Action <span class="caret"></span></button>
                            <ul class="dropdown-menu">

                             <li><a data-toggle="modal" href="dpreview_sr.php?invoice=<?php echo $row['invoice_number']; ?>">Print Receipt</a></li>
                             <li><a data-toggle="modal" href="2porder_sr.php?id=cash&invoice=<?php echo $row['invoice_number']; ?>">Sales Order</a></li>
                             <li><a data-toggle="modal" href="2superdeletesalesorder_sr.php?transaction_id=<?php echo $row['transaction_id']; ?>" onclick="return confirm('ARE YOU SURE TO REVOKE THIS SALES!'); ">Revoke</a></li>
                             
                            
                            </ul>
                        </div></td>

                                            </tr>

                                            <?php
 }
}
											?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                 </div>


                    <div class="col-lg-12">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <h5><b>Current Active Retail Sales (RT)</b></h5>
                                        <div class="ibox-tools">
                                            <a class="collapse-link">
                                                <i class="fa fa-chevron-up"></i>
                                            </a>
                                            <a class="close-link">
                                                <i class="fa fa-times"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="ibox-content">
                                        <table class="table table-hover no-margins">
                                            <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>Date</th>
                                                <th>Cashier</th>
                                                <th>Invoice</th>
                                                <th>Customer Name</th>
                                                <th>QTY</th>
                                                <th>Amount</th>
                                                <th>Action</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
include('db_conn.php');
$todayDATE = date("Y-m-d");
$sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%y') as NEWDate FROM `sales` WHERE date='$todayDATE' AND `invoice_number` LIKE '%RT%' ORDER by transaction_id DESC LIMIT 10";

$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
 while($row = mysqli_fetch_array($result)) {
    

?>
                                            <tr>
                                            <td class="text-navy"><?php echo $row['transaction_id']; ?></td>
                                                <td class="text-navy"><i class="fa fa-clock-o"></i> <?php echo $row['NEWDate']." - ".date('h:i:s a', strtotime($row['time']));; ?></td>

                                                <td class="text-navy"><?php echo $row['cashier']; ?></td>
                                                <td class="text-navy"><?php echo $row['invoice_number']; ?></td>
                                                <td class="text-navy"><?php echo $row['name']; ?></td>
                                                <td class="text-navy"><?php echo $row['qty']; ?></td>
                                                <td class="text-navy">&#8358;<?php echo number_format($row['amount'], 2); ?></td>

                                                <td><div class="btn-group">
                            <button data-toggle="dropdown" class="btn btn-primary btn-xs dropdown-toggle">Action <span class="caret"></span></button>
                            <ul class="dropdown-menu">

                             <li><a data-toggle="modal" href="super_preview2.php?invoice=<?php echo $row['invoice_number']; ?>">Print Receipt</a></li>
                             <li><a data-toggle="modal" href="supersales.php?id=cash&invoice=<?php echo $row['invoice_number']; ?>">Sales Order</a></li>
                             <li><a data-toggle="modal" href="superdeletesalesorder2.php?transaction_id=<?php echo $row['transaction_id']; ?>" onclick="return confirm('ARE YOU SURE TO REVOKE THIS SALES!'); ">Revoke</a></li>
                             
                            
                            </ul>
                        </div></td>

                                            </tr>

                                            <?php
 }
}
											?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                 </div>


                                 <div class="col-lg-12">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <h5><b>Current Active Wholesales (WS)</b></h5>
                                        <div class="ibox-tools">
                                            <a class="collapse-link">
                                                <i class="fa fa-chevron-up"></i>
                                            </a>
                                            <a class="close-link">
                                                <i class="fa fa-times"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="ibox-content">
                                        <table class="table table-hover no-margins">
                                            <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>Date</th>
                                                <th>Cashier</th>
                                                <th>Invoice</th>
                                                <th>Customer Name</th>
                                                <th>QTY</th>
                                                <th>Amount</th>
                                                <th>Action</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
include('db_conn.php');
$todayDATE = date("Y-m-d");
$sql = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%y') as NEWDate FROM `sales` WHERE date='$todayDATE' AND `invoice_number` LIKE '%WS%' ORDER by transaction_id DESC LIMIT 10";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
 while($row = mysqli_fetch_array($result)) {


?>
                                            <tr>
                                            <td class="text-navy"><?php echo $row['transaction_id']; ?></td>
                                            <td class="text-navy"><i class="fa fa-clock-o"></i> <?php echo $row['NEWDate']." - ".date('h:i:s a', strtotime($row['time']));; ?></td>
                                                <td class="text-navy"><?php echo $row['cashier']; ?></td>
                                                <td class="text-navy"><?php echo $row['invoice_number']; ?></td>
                                                <td class="text-navy"><?php echo $row['name']; ?></td>
                                                <td class="text-navy"><?php echo $row['qty']; ?></td>
                                                <td class="text-navy">&#8358;<?php echo number_format($row['amount'], 2); ?></td>



                                                <td><div class="btn-group">
                            <button data-toggle="dropdown" class="btn btn-danger btn-xs dropdown-toggle">Action <span class="caret"></span></button>
                            <ul class="dropdown-menu">

                             <li><a data-toggle="modal" href="super_bulkpreview2.php?invoice=<?php echo $row['invoice_number']; ?>">Print Receipt</a></li>
                             <li><a data-toggle="modal" href="superbulksales.php?id=cash&invoice=<?php echo $row['invoice_number']; ?>">Sales Order</a></li>
                             <li><a data-toggle="modal" href="superdeletesalesorder2.php?transaction_id=<?php echo $row['transaction_id']; ?>" onclick="return confirm('ARE YOU SURE TO REVOKE THIS SALES!'); ">Revoke</a></li>
                             
                            
                            </ul>
                        </div></td>
                                            </tr>
                                            <?php
 }
}
											?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                 </div>








                                 </div>
                                 </div>
                                 </div>
                                 </div>





               <?php include 'footer.php'; ?>

            </div>
        </div>

        </div>



    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Flot -->
    <script src="js/plugins/flot/jquery.flot.js"></script>
    <script src="js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="js/plugins/flot/jquery.flot.pie.js"></script>

    <!-- Peity -->
    <script src="js/plugins/peity/jquery.peity.min.js"></script>
    <script src="js/demo/peity-demo.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- GITTER -->
    <script src="js/plugins/gritter/jquery.gritter.min.js"></script>

    <!-- Sparkline -->
    <script src="js/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="js/demo/sparkline-demo.js"></script>

    <!-- ChartJS-->
    <script src="js/plugins/chartJs/Chart.min.js"></script>

    <!-- Toastr -->
    <script src="js/plugins/toastr/toastr.min.js"></script>


    <script>
        $(document).ready(function() {
            setTimeout(function() {
                toastr.options = {
                    closeButton: true,
                    progressBar: true,
                    showMethod: 'slideDown',
                    timeOut: 4000
                };
				toastr.success('Super Admin Dashboard', 'Welcome to <?php echo $session_business_name; ?>');


            }, 1300);


            var data1 = [
                [0,4],[1,8],[2,5],[3,10],[4,4],[5,16],[6,5],[7,11],[8,6],[9,11],[10,30],[11,10],[12,13],[13,4],[14,3],[15,3],[16,6]
            ];
            var data2 = [
                [0,1],[1,0],[2,2],[3,0],[4,1],[5,3],[6,1],[7,5],[8,2],[9,3],[10,2],[11,1],[12,0],[13,2],[14,8],[15,0],[16,0]
            ];
            $("#flot-dashboard-chart").length && $.plot($("#flot-dashboard-chart"), [
                data1, data2
            ],
                    {
                        series: {
                            lines: {
                                show: false,
                                fill: true
                            },
                            splines: {
                                show: true,
                                tension: 0.4,
                                lineWidth: 1,
                                fill: 0.4
                            },
                            points: {
                                radius: 0,
                                show: true
                            },
                            shadowSize: 2
                        },
                        grid: {
                            hoverable: true,
                            clickable: true,
                            tickColor: "#d5d5d5",
                            borderWidth: 1,
                            color: '#d5d5d5'
                        },
                        colors: ["#1ab394", "#1C84C6"],
                        xaxis:{
                        },
                        yaxis: {
                            ticks: 4
                        },
                        tooltip: false
                    }
            );

            var doughnutData = [
                {
                    value: 300,
                    color: "#a3e1d4",
                    highlight: "#1ab394",
                    label: "App"
                },
                {
                    value: 50,
                    color: "#dedede",
                    highlight: "#1ab394",
                    label: "Software"
                },
                {
                    value: 100,
                    color: "#A4CEE8",
                    highlight: "#1ab394",
                    label: "Laptop"
                }
            ];

            var doughnutOptions = {
                segmentShowStroke: true,
                segmentStrokeColor: "#fff",
                segmentStrokeWidth: 2,
                percentageInnerCutout: 45, // This is 0 for Pie charts
                animationSteps: 100,
                animationEasing: "easeOutBounce",
                animateRotate: true,
                animateScale: false
            };

            var ctx = document.getElementById("doughnutChart").getContext("2d");
            var DoughnutChart = new Chart(ctx).Doughnut(doughnutData, doughnutOptions);

            var polarData = [
                {
                    value: 300,
                    color: "#a3e1d4",
                    highlight: "#1ab394",
                    label: "App"
                },
                {
                    value: 140,
                    color: "#dedede",
                    highlight: "#1ab394",
                    label: "Software"
                },
                {
                    value: 200,
                    color: "#A4CEE8",
                    highlight: "#1ab394",
                    label: "Laptop"
                }
            ];

            var polarOptions = {
                scaleShowLabelBackdrop: true,
                scaleBackdropColor: "rgba(255,255,255,0.75)",
                scaleBeginAtZero: true,
                scaleBackdropPaddingY: 1,
                scaleBackdropPaddingX: 1,
                scaleShowLine: true,
                segmentShowStroke: true,
                segmentStrokeColor: "#fff",
                segmentStrokeWidth: 2,
                animationSteps: 100,
                animationEasing: "easeOutBounce",
                animateRotate: true,
                animateScale: false
            };
            var ctx = document.getElementById("polarChart").getContext("2d");
            var Polarchart = new Chart(ctx).PolarArea(polarData, polarOptions);

        });
    </script>
</body>
</html>
