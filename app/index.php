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

    <title> Dashboard</title>

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
                        <h2>Welcome <strong><?php echo $session_fullname; ?></strong> to <strong>SUPER ADMIN DASHBOARD</strong> </h2>



<a href="index.php"> <div class="col-lg-3">
                <div class="widget style1 navy-bg">
                    <div class="row">
                       <div class="col-xs-2">
                            </div>
                        <div class="col-xs-6 text-left">
                        <h2 class="font-bold">HOME</h2>
                            <span> View Dashboard</span>
                            
                        </div>
                    </div>
                </div>
            </div></a>



            <a href="allevent.php"> <div class="col-lg-3">
                <div class="widget style1 red-bg">
                    <div class="row">
                       <div class="col-xs-2">
                           </div>
                        <div class="col-xs-6 text-left">
                        <h2 class="font-bold">EVENTS</h2>
                        <span> View, Add, Edit Events</span>
                        </div>
                    </div>
                </div>
            </div></a>




            <a href="allaudios.php"> <div class="col-lg-3">
                <div class="widget style1 yellow-bg">
                    <div class="row">
                       <div class="col-xs-2">
                            </div>
                        <div class="col-xs-6 text-left">
                        <h2 class="font-bold">MUSIC</h2>
                            <span> View, Add, Edit Music</span>
                            
                        </div>
                    </div>
                </div>
            </div></a>


            <a href="allvideos.php"> <div class="col-lg-3">
                <div class="widget style1 lazur-bg">
                    <div class="row">
                       <div class="col-xs-2">
                        </div>
                        <div class="col-xs-6 text-left">
                        <h2 class="font-bold">VIDEOS</h2>
                            <span> View, Add, Edit Videos</span>
                            
                        </div>
                    </div>
                </div>
            </div></a>


<!-- Top section above -->
<br />
<br />


<!-- All events -->

<div class="col-lg-12">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <h5><b>ALL EVENTS (free)</b></h5>
                                        <div class="ibox-tools">
                                            <a class="collapse-link">
                                                <i class="fa fa-chevron-up"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="ibox-content">
                                        <table class="table table-hover no-margins">
                                            <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>Tittle</th>
                                                <th>Sub tittle</th>
                                                <th>Location</th>
                                                <th>Date</th>
                                                <th>Details</th>
                                                <th>Image</th>
                                                <th>Action</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
//to include database connection
include("db_conn.php");

//call from data table
                $sql = "SELECT * FROM `events`";

                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_array($result))
                    {
    

?>
                                            <tr>
                                                <td class="text-navy"><?php echo $row['id']; ?></td>
                                                <td class="text-navy"><?php echo $row['title']; ?></td>
                                                <td class="text-navy"><?php echo $row['sub_title']; ?></td>
                                                <td class="text-navy"><?php echo $row['address']; ?> <?php echo $row['state']; ?> <?php echo $row['country']; ?></td>
                                                <td class="text-navy"><?php echo $row['date']; ?></td>
                                                <td class="text-navy"><?php echo $row['details']; ?></td>                             
                                                <td class="text-navy"><img src="events/<?php echo $row['image']?>" height="30" ></td>
                                                
                                                <td><div class="btn-group">
                            <button data-toggle="dropdown" class="btn btn-primary btn-xs dropdown-toggle">Action <span class="caret"></span></button>
                            <ul class="dropdown-menu">

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
<!-- ends -->


<!-- All music  -->

                    <div class="col-lg-12">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <h5><b>ALL MUSIC</b></h5>
                                        <div class="ibox-tools">
                                            <a class="collapse-link">
                                                <i class="fa fa-chevron-up"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="ibox-content">
                                        <table class="table table-hover no-margins">
                                            <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>Link</th>
                                                <th>Date</th>
                                                <th>Audio</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php

//to include database connection
                include("db_conn.php");

//call from data table
                $sql = "SELECT * FROM `audio`";

                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_array($result))
                    {
 

?>
                                            <tr>
                                                <td class="text-navy"><?php echo $row['id']; ?></td>
                                                <td class="text-navy" width="400px" height="50px"><?php echo $row['link']; ?></td>
                                                <td class="text-navy"><?php echo $row['date']; ?></td>
                                                <td class="text-navy">
                <audio controls>
  <source src="audios/<?php echo $row['audio']; ?>" type="audio/mp3" type="au">
  
  Your browser does not support the audio tag.
</audio></td>
                                                <td><div class="btn-group">
                            <button data-toggle="dropdown" class="btn btn-danger btn-xs dropdown-toggle">Action <span class="caret"></span></button>
                            <ul class="dropdown-menu"></ul>
                            
                        </div></td>

                                            </tr>

                                            <?php
                    }}
											?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>


<!-- All Videos -->

                                 <div class="col-lg-12">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <h5><b>ALL VIDEOS</b></h5>
                                        <div class="ibox-tools">
                                            <a class="collapse-link">
                                                <i class="fa fa-chevron-up"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="ibox-content">
                                        <table class="table table-hover no-margins">
                                            <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>Title</th>
                                                <th>Sub_title</th>
                                                <th>Link</th>
                                                <th>YouTube Id</th>
                                                <th>Date</th>
                                                <th>Image</th>
                                                <th>Action</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
//to include database connection
include("db_conn.php");

//call from data table
                $sql = "SELECT * FROM `video`";

                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_array($result))
                    {
?>
                                            <tr>
                                                <td class="text-navy"><?php echo $row['id']; ?></td>
                                                <td class="text-navy"><?php echo $row['title']; ?></td>
                                                <td class="text-navy"><?php echo $row['sub_title']; ?></td>
                                                <td class="text-navy"><?php echo $row['link']; ?></td>
                                                <td class="text-navy"><?php echo $row['youtubeid']; ?></td>
                                                <td class="text-navy"><?php echo $row['date']; ?></td>
                                                <td class="text-navy"><img src="videos/<?php echo $row['image']?>" height="30" ></td>



                                                <td><div class="btn-group">
                            <button data-toggle="dropdown" class="btn btn-danger btn-xs dropdown-toggle">Action <span class="caret"></span></button>
                            <ul class="dropdown-menu">

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
