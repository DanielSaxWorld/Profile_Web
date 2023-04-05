<?php
include('db_conn.php');
/*$id = 1;
$sql="SELECT * FROM staff_id WHERE id='$id'";
$result=mysqli_query($conn,$sql)or die(mysqli_error($conn));
$rows=mysqli_fetch_array($result);
*/?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>AASCMSL | Member List</title>

<meta name="description" content="AASCMSL | REGISTERED MEMBERS" />
<meta property="og:title" content="AASCMSL | REGISTERED MEMBERS" />
<meta property="og:site_name" content="wetindey.us">
<meta property="og:description" content="Akure Airport Staff Cooperative | Registered Members" />
<meta property="og:image" content="https://aascmsl.wetindey.us/img/aascmsl logo.fw.png" />

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/plugins/dataTables/datatables.min.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/faan favicon.fw.png" type="text/javascript">

</head>

<body>

   <?php  include 'menus.php'; ?>
   
   
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>REGISTERED MEMBER LIST </h2>
                    <ol class="breadcrumb">
                        
                        
                        <li class="active">
                            <strong>Member List</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>AASCMSL Member List</h5>
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

                        <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                        <th>UIN</th>
                        <th>Staff No</th>
                        <th>Fullname</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Passport</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    
                    <tbody>
                    <?php 
include('db_conn.php'); 
$sql = "SELECT * FROM `faan` ORDER by fullname";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
 while($row = mysqli_fetch_array($result)) {
		
?>  

                   
                    <tr class="gradeA">
                        <td><?php echo $row['uin']; ?></td>
                        <td><?php echo $row['staff_no']; ?></td>
                        <td><?php echo $row['title']." ".$row['fullname']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td class="center"><?php echo $row['phone']; ?></td>
                        <td class="center"><img src="member/<?php echo $row['passport']; ?>" height="35" class="img-circle"></td>
                        
                        <td>
                        <a <?php echo "href='member_profile.php?uin=".$row['uin']."' title='View Profile'"; ?>><button type="button" class="btn btn-outline btn-primary btn-xs">View Profile</button></a>
                        
                        </td>
                    </tr>
                    
<?php  
}
}

mysqli_close($conn);
?>
                    </tbody>
                    <div id="modal-form" class="modal fade" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-sm-12 b-r"><h3 class="m-t-none m-b"><?php echo $row['uin']; ?></h3>

                                                    
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                    
                    </table>
                    
                     
                        </div>

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
    <script src="js/plugins/jeditable/jquery.jeditable.js"></script>

    <script src="js/plugins/dataTables/datatables.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    { extend: 'copy'},
                    {extend: 'csv'},
                    {extend: 'excel', title: 'AASCMSL_Member_List'},
                    {extend: 'pdf', title: 'AASCMSL_Member_List'},

                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                    }
                    }
                ]

            });

            /* Init DataTables */
            var oTable = $('#editable').DataTable();

            /* Apply the jEditable handlers to the table */
            oTable.$('td').editable( '../example_ajax.php', {
                "callback": function( sValue, y ) {
                    var aPos = oTable.fnGetPosition( this );
                    oTable.fnUpdate( sValue, aPos[0], aPos[1] );
                },
                "submitdata": function ( value, settings ) {
                    return {
                        "row_id": this.parentNode.getAttribute('id'),
                        "column": oTable.fnGetPosition( this )[2]
                    };
                },

                "width": "90%",
                "height": "100%"
            } );


        });

        function fnClickAddRow() {
            $('#editable').dataTable().fnAddData( [
                "Custom row",
                "New row",
                "New row",
                "New row",
                "New row" ] );

        }
    </script>

</body>

</html>
