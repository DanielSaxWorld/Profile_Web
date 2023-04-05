<?php
include('db_conn.php');
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>CEI SALT CONFERENCE | Registration</title>
    <meta name="description" content="CEI SALT CONFERENCE | MEMBER REGISTRATION" />
    <meta name="author" content="Wetin Dey Inc." />
<meta name="description" content="CEI SALT CONFERENCE | Registration" />
<meta property="og:title" content="CEI SALT CONFERENCE | Registration" />
<meta property="og:site_name" content="wetindey.us">
<meta property="og:description" content="Annual Sharing and Leanring Togeter (SALT) Conference | Registration" />
<meta property="og:image" content="https://aascmsl.wetindey.us/img/aascmsl logo.fw.png" />

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="css/plugins/steps/jquery.steps.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/plugins/toastr/toastr.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/cei favicon.fw.png">


    <style>

        .wizard > .content > .body  position: relative; }

    </style>

</head>

<body>

    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="img/cei logo.fw.png" height="50" />
                             </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">SALT CONFERENCE</strong>
                             </span> <span class="text-muted text-xs block">Online Registration <b class="caret"></b></span> </span> </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <!--<li><a href="profile.html">Profile</a></li>
                                <li><a href="contacts.html">Contacts</a></li>
                                <li><a href="mailbox.html">Mailbox</a></li>
                                <li class="divider"></li>-->
                                <li><a href="logout.php">Logout</a></li>
                            </ul>
                        </div>
                       
                        <div class="logo-element">
                           <img src="img/faan favicon.fw.png">
                        </div>
                    </li>
                    <li class="active">
                        <a href="admin.php"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li class="active"><a href="member_reg.php">Member Register <span class="label label-primary pull-right">NEW</span></a></li>
                	    </ul>
                    </li>
                    
                     
                   
                </ul>
            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg dashbard-1">

        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <form role="search" class="navbar-form-custom" method="post" action="#">
                <div class="form-group">
                    <input type="text" name="search" placeholder="Enter Member Name..." class="form-control" name="top-search" id="top-search">
                </div>
            </form>
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">Welcome to SALT Conference Portal <strong>(REGISTRATION)</strong>.</span>
                </li>
                
                <li>
                    <a href="logout.php">
                        <i class="fa fa-sign-out"></i> Exit
                    </a>
                </li>
                
            </ul>
        </nav>
        </div>
        
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>SALT Conference Registration</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="#">Dashboard</a>
                        </li>
                        
                        <li class="active">
                            <strong>Registration Form</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
            
            
        <div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox">
                        <div class="ibox-title">
                            <h5>SALT Conference Registration</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#">Config option 1</a>
                                    </li>
                                    <li><a href="#">Config option 2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <h2>
                                CEI SALT Conference Registration
                            </h2>
                            
                            <form id="form" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data" class="wizard-big">
                            <?php
include("db_conn.php");


$rand = rand(00000,99999);
		$today = date("dmy");
		$time = date("His");
		$ID = "SALT/"."C".$rand;
		
	error_reporting(E_ALL);
	if(isset($_REQUEST['submit'])){
		$uin=trim(addslashes($_REQUEST['uin']));
		$fullname=trim(addslashes($_REQUEST['fullname']));
		$email=trim(addslashes($_REQUEST['email']));
		$phone=trim(addslashes($_REQUEST['phone']));
		$gender=trim(addslashes($_REQUEST['gender']));
		$civic_status=trim(addslashes($_REQUEST['civic_status']));
		$attend=trim(addslashes($_REQUEST['attend']));
		$children=trim(addslashes($_REQUEST['children']));
		$donation=trim(addslashes($_REQUEST['donation']));
		$total_amount=trim(addslashes($_REQUEST['total_amount']));

$sql="INSERT INTO salt (uin, fullname, email, phone, gender, civic_status, attend, children, donation, total_amount) VALUES ('$uin','$fullname','$email','$phone','$gender','$civic_status','$attend','$children','$donation','$total_amount')";

mysqli_query($conn,$sql) or die (mysqli_error($conn));
$num=mysqli_insert_id($conn);
					if(mysqli_affected_rows($conn)!=1){
						$message= "Error inserting the application information.";
						}
echo "<script>alert('Dear - $fullname - now proceed to payment for SALT CONFERENCE 2019')
	location.href='pay.php?uin=".$_REQUEST['uin']."'</script>";
}
	mysqli_close($conn);
	
	
	
?>
 <script type="text/javascript">
 
function sum()
{
var children = parseInt(document.getElementById("children").value);
var attend = parseInt(document.getElementById("attend").value);
var donation = parseInt(document.getElementById("donation").value);


if(children.value=="")
{
children.value = 0.00;
}
if(attend.value=="")
{
attend.value = 0.00;
}
if(donation.value=="")
{
donation.value = 0.00;
}

var sum = (children+attend+donation).toFixed(2);
document.getElementById("total_amount").value=sum;
}
</script>

                                <h1>Personal Information</h1>
                                <fieldset>
                                    <h2>Personal Information</h2>
                                    <div class="row">
                                        <div class="col-lg-12">
                                        
                                            <div class="form-group col-lg-6">
                                                <label>UIN *</label>
                                                <input id="userName" value="<?php  echo $ID; ?>" readonly name="uin" type="text" placeholder="UIN" class="form-control required">
                                            </div>
                                            
                                            
                                            <div class="form-group col-lg-6">
                                                <label>Fullname *</label>
                                                <input id="name" name="fullname" placeholder="Fullname" type="text" class="form-control required">
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label>Email *</label>
                                                <input id="email" name="email" placeholder="Email Address" type="text" class="form-control required email">
                                            </div>
                                             <div class="form-group col-lg-6">
                                                <label>Phone No *</label>
                                                <input id="name" name="phone" placeholder="Phone No" type="text" class="form-control required">
                                            </div>
                                            
                                              <div class="form-group col-lg-6">
                                                <label>Gender *</label>
                                                <select id="name" name="gender" class="form-control required">
                                                <option value="">--Select Gender--</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                                </select>
                                                
                                            </div>
                                            
                                            <div class="form-group col-lg-6">
                                                <label>Civic Status *</label>
                                                <select id="name" name="civic_status" class="form-control required">
                                                <option value="">--Select Civic Status--</option>
                                                <option value="Single">Single</option>
                                                <option value="Married">Married</option>
                                                <option value="Single Parent">Single Parent</option>
                                                <option value="Widowed">Widowed</option>
                                                </select>
                                                
                                            </div>
                                           <div class="form-group col-lg-6">
                                                <label>I shall attend *</label>
                                                <select step="any" name="attend" id="attend" onkeyup="sum()" class="form-control required">
                                                <option value="">--Select appropriate--</option>
                                                <option value="35000">With my Wife</option>
                                                <option value="35000">With my Husband</option>
                                                <option value="25000">As Single</option>
                                                <option value="5000">As a Youth</option>
                                                </select>
                                                
                                            </div>
                                           
                                            <div class="form-group col-lg-6">
                                                <label>Number of Children to attend with you *</label>
                                                <select id="children" name="children" step="any"  onkeyup="sum()" class="form-control required">
                                                <option value="">--Select appropriate--</option>
                                                <option value="0">0</option>
                                                <option value="1500">1</option>
                                                <option value="3000">2</option>
                                                <option value="4500">3</option>
                                                <option value="5500">4</option>
                                                </select>
                                                
                                            </div>
                                             
                                            
                                             
                                            <div class="form-group col-lg-6">
              <label>Donation (Enter Amount) *</label>
              <input type="number" step="any" id="donation" onkeyup="sum()" placeholder="We will accept & appreciate your donation (N)"  class="form-control" title="Donation" name="donation" required>
          </div>
          
           <div class="form-group col-lg-6">
              <label>Total Amount Payable *</label>
              <input type="number" step="any" id="total_amount" onkeyup="sum()" readonly placeholder="Total Amount Payable"  class="form-control" title="Total Amount" name="total_amount">
          </div>
                                            
                                             
                                            
                                            
                                    </div>

                                </fieldset>
                                
                                <h1>Finish</h1>
                                <fieldset>
                                    <h2>Terms and Conditions</h2>
                                    <input id="acceptTerms" name="acceptTerms" type="checkbox" class="required"> <label for="acceptTerms">I agree with the Terms and Conditions.</label>
                                    
<input type="submit" name="submit" value="Proceed to Payment" class="btn btn-primary block m-b">
                                </fieldset>
                            </form>
                        </div>
                    </div>
                    </div>

                </div>
            </div>
       
       <?php include 'footer.php'; ?>

        </div>
        </div>



    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- Steps -->
    <script src="js/plugins/staps/jquery.steps.min.js"></script>

    <!-- Jquery Validate -->
    <script src="js/plugins/validate/jquery.validate.min.js"></script>


    <script>
        $(document).ready(function(){
            $("#wizard").steps();
            $("#form").steps({
                bodyTag: "fieldset",
                onStepChanging: function (event, currentIndex, newIndex)
                {
                    // Always allow going backward even if the current step contains invalid fields!
                    if (currentIndex > newIndex)
                    {
                        return true;
                    }

                    // Forbid suppressing "Warning" step if the user is to young
                    if (newIndex === 3 && Number($("#age").val()) < 18)
                    {
                        return false;
                    }

                    var form = $(this);

                    // Clean up if user went backward before
                    if (currentIndex < newIndex)
                    {
                        // To remove error styles
                        $(".body:eq(" + newIndex + ") label.error", form).remove();
                        $(".body:eq(" + newIndex + ") .error", form).removeClass("error");
                    }

                    // Disable validation on fields that are disabled or hidden.
                    form.validate().settings.ignore = ":disabled,:hidden";

                    // Start validation; Prevent going forward if false
                    return form.valid();
                },
                onStepChanged: function (event, currentIndex, priorIndex)
                {
                    // Suppress (skip) "Warning" step if the user is old enough.
                    if (currentIndex === 2 && Number($("#age").val()) >= 18)
                    {
                        $(this).steps("next");
                    }

                    // Suppress (skip) "Warning" step if the user is old enough and wants to the previous step.
                    if (currentIndex === 2 && priorIndex === 3)
                    {
                        $(this).steps("previous");
                    }
                },
                onFinishing: function (event, currentIndex)
                {
                    var form = $(this);

                    // Disable validation on fields that are disabled.
                    // At this point it's recommended to do an overall check (mean ignoring only disabled fields)
                    form.validate().settings.ignore = ":disabled";

                    // Start validation; Prevent form submission if false
                    return form.valid();
                },
                onFinished: function (event, currentIndex)
                {
                    var form = $(this);

                    // Submit form input
                    form.submit();
                }
            }).validate({
                        errorPlacement: function (error, element)
                        {
                            element.before(error);
                        },
                        rules: {
                            confirm: {
                                equalTo: "#password"
                            }
                        }
                    });
       });
    </script>

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
                toastr.success('to Add New Member', 'Welcome <?php echo $session_fullname ?>');

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
