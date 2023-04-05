<?php
include('db_conn.php');
?>

 <?php
include('db_conn.php');
if(isset($_REQUEST['uin'])){
$sql = "SELECT * FROM faan WHERE uin='$_REQUEST[uin]'";
$result = mysqli_query($conn, $sql);
$row=mysqli_fetch_array($result);
//$_REQUEST['fileno']=$row['fileno'];
?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $row['fullname']; ?> | AASCMSL</title>
    <meta name="description" content="AASCMSL | <?php echo $row['fullname']; ?> PROFILE" />
<meta property="og:title" content="AASCMSL | <?php echo $row['fullname']; ?> PROFILE" />
<meta property="og:site_name" content="wetindey.us">
<meta property="og:description" content="Akure Airport Staff Cooperative | <?php echo $row['fullname']; ?> PROFILE " />
<meta property="og:image" content="https://aascmsl.wetindey.us/member/<?php echo $row['passport']; ?>" />


    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/faan favicon.fw.png" type="text/javascript">

</head>

<body class="">

    <?php include 'm_menus.php'; ?>
        
            <div class="wrapper wrapper-content">
                 <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5><img src="img/faan favicon.fw.png" height="30" style="margin-top:-5px"> <?php echo $row['fullname']; ?> | <?php echo $row['uin']; ?> | PROFILE HISTORY</h5>
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
                    <h3>PERSONAL INFORMATION</h3>
                        <div class="row">
                           <table class="table table-striped table-bordered table-hover dataTables-example">
 <style>
th { text-align:right}
</style>
                           
                           <tr>
                           <th>UIN:</th>
                           <td><?php echo $row['uin']; ?></td>
                           <th>STAFF NO:</th>
                           <td><?php echo $row['staff_no']; ?></td>
                           <td rowspan="2"><img src="member/<?php echo $row['passport']; ?>" height="80" class="img-shadow"></td>
                           </tr>
                           <tr>
                           <th>FULLNAME:</th>
                           <td><?php echo $row['title']." ".$row['fullname']; ?></td>
                           <th>EMAIL ADDRESS:</th>
                           <td><?php echo $row['email']; ?></td>
                           </tr>
                           
                           <tr>
                           <th>PHONE NO:</th>
                           <td><?php echo $row['phone']; ?></td>
                           <th>GENDER:</th>
                           <td colspan="2"><?php echo $row['gender']; ?></td>
                           </tr>
                           
                           <tr>
                           <th>CIVIC STATUS:</th>
                           <td><?php echo $row['civic_status']; ?></td>
                           <th>DEPARTMENT:</th>
                           <td colspan="2"><?php echo $row['department']."/".$row['station']; ?></td>
                           </tr>
                           
                           <tr>
                           <th>NEXT OF KIN (NAME):</th>
                           <td><?php echo $row['nok_name']; ?></td>
                            <th>NEXT OF KIN (PHONE):</th>
                           <td colspan="2"><?php echo $row['nok_phone']; ?></td>
                           </tr>
                           
                        
                            <tr>
                           <th>BANK:</th>
                           <td><?php echo $row['bank']; ?></td>
                           <th>ACCOUNT NO:</th>
                           <td colspan="2"><?php echo $row['account_no']; ?></td>
                           </tr>
                           
                           
                           <?php
						   }
						   
mysqli_close($conn);

						   ?>
                           </table>
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


</body>

</html>
