<?php
include('session2.php');
include('db_conn.php');
$id = 1;
$sql="SELECT * FROM owner_id WHERE email='$_SESSION[email]'";
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

    <link rel="stylesheet" href="docsupport/style.css">
  <link rel="stylesheet" href="docsupport/prism.css">
  <link rel="stylesheet" href="chosen.css">





    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">

    <link href="css/plugins/chosen/chosen.css" rel="stylesheet">

    <link href="css/plugins/colorpicker/bootstrap-colorpicker.min.css" rel="stylesheet">

    <link href="css/plugins/cropper/cropper.min.css" rel="stylesheet">

    <link href="css/plugins/switchery/switchery.css" rel="stylesheet">

    <link href="css/plugins/jasny/jasny-bootstrap.min.css" rel="stylesheet">

    <link href="css/plugins/nouslider/jquery.nouislider.css" rel="stylesheet">

    <link href="css/plugins/datapicker/datepicker3.css" rel="stylesheet">

    <link href="css/plugins/ionRangeSlider/ion.rangeSlider.css" rel="stylesheet">
    <link href="css/plugins/ionRangeSlider/ion.rangeSlider.skinFlat.css" rel="stylesheet">

    <link href="css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">

    <link href="css/plugins/clockpicker/clockpicker.css" rel="stylesheet">

    <link href="css/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet">

    <link href="css/plugins/select2/select2.min.css" rel="stylesheet">

    <link href="css/plugins/touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
 <link rel="shortcut icon" href="../../images/logo.jpg" type="text/javascript">
    <link href="summernote.css" rel="stylesheet">

</head>

<body>
    <?php include('super_menus.php'); ?>
        <div class="wrapper wrapper-content">

            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                <div class="ibox-title">
                        <h5>Upload Events</h5>
                       
                    </div>
                    <div class="ibox-content no-padding">
                    <div class="ibox-content">
                        <div class="row">
                    <form role="form" enctype="multipart/form-data" method="post">
                    <?php
include("db_conn.php");


$rand = rand(0000,9999);
		$today = date("dmy");
		$time = date("His");
		$ID = "Tsax".$rand;

	error_reporting(E_ALL);
	if(isset($_REQUEST['submit'])){
		$title=trim(addslashes($_REQUEST['title']));
		$sub_title=trim(addslashes($_REQUEST['sub_title']));
        $address=trim(addslashes($_REQUEST['address']));
		$state=trim(addslashes($_REQUEST['state']));
        $country=trim(addslashes($_REQUEST['country']));
		$date=trim(addslashes($_REQUEST['date']));
		$details=trim(addslashes($_REQUEST['details']));
        $event_type=trim(addslashes($_REQUEST['event_type']));
        $regular=trim(addslashes($_REQUEST['regular']));
        $vip=trim(addslashes($_REQUEST['vip']));
        $vvip=trim(addslashes($_REQUEST['vvip']));
		$image=$_FILES["data"]['name'];
		$target="../events/";
		$target=$target.$_FILES["data"]['name'];




		/*	  $yyy = $_FILES['data']['name'];
        $_SESSION['pic']=$yyy;*/

if(move_uploaded_file($_FILES["data"]['tmp_name'], $target)>0){

	

		  //Check for duplicate record in database before inserting New Record
		  $check=mysqli_query($conn, "SELECT * FROM `events` WHERE date='$date'");
		  $checkrows=mysqli_num_rows($check);

		 if($checkrows>0) {
		  echo "<script>alert('There's an event for this day')
		  location.href='index.php'</script>";
		 } else {


$sql1="INSERT INTO events (title, sub_title, address, state, country, date, details, event_type, regular, vip, vvip, image) 
VALUES ('$title','$sub_title','$address','$state','$country','$date','$details','$event_type','$regular','$vip','$vvip','$image')";

mysqli_query($conn,$sql1) or die (mysqli_error($conn));
$num=mysqli_insert_id($conn);
					if(mysqli_affected_rows($conn)!=1){
						$message= "Error inserting the application information.";
						}
echo "<script>alert(' Dear $fullname Events Successfully Created')
	location.href='../allevent.php'</script>";

}
}
	mysqli_close($conn);
	}


?>
                                    <div class="col-lg-4"><label>UIN</label> <input type="text"  class="form-control" name="news_uin" value="<?php echo $ID; ?>"></div>
                                    <div class="col-lg-4"><label>Date:</label> <input type="datetime-local" class="form-control" name="date" require></div>
                                    <div class="col-lg-4"><label>Event Type</label>
                                    <select class="form-control" require name="event_type" placeholder="Select Category">
                                        <option value="Select Category">Select Event Type</option>
                                            <option value="free">FREE</option>
                                            <option value="paid">Paid</option>
  
                                    </select></div><br>
                                    <div class="col-lg-4">
                                        <label>Event Title</label> 
                                        <input type="text" placeholder="Event Title" name="title" class="form-control" require>
                                    </div>

                                    <div class="col-lg-4">
                                        <label>Address:</label> 
                                        <input class="form-control" required placeholder="Street Address" type="text" name="address" required>
                                    </div>

                                    <div class="col-lg-4">
                                        <label>State:</label> 
                                        <input class="form-control" required placeholder="State Of Event" type="text" name="state" required>
                                    </div>

                                    <div class="col-lg-4">
                                        <label>Country:</label> 
                                        <input class="form-control" required placeholder="Country Of Event" type="text" name="country" required>
                                    </div>

                                    <div class="col-lg-4">
                                        <label>Regular</label> 
                                        <input class="form-control" required placeholder="Regular Amount" type="number" name="regular">
                                    </div>

                                    <div class="col-lg-4">
                                        <label>VIP</label> 
                                        <input class="form-control" required placeholder="VIP Amount" type="number" name="vip">
                                    </div>

                                    <div class="col-lg-4">
                                        <label>VVIP</label> 
                                        <input class="form-control" required placeholder="VVIP Amount" type="number" name="vvip">
                                    </div>

                                    <div class="col-lg-4">
                                        <label>Photo</label> 
                                        <input class="input100" required type="file" onChange="readURL(this);" name="data"  accept=".jpg,.jpeg,.png,.PNG,.JPG,.JPEG">
                                    </div>

                                    <div class="col-lg-12">
                                        <label>Attra Content</label> 
                                        <textarea required minlength="5" name="attra" class="form-control" onkeyup="CountWords(this)" id="txtBody"></textarea>
        <span id="words" style="width: 120px; color:Gray; display: block; float: left; margin: 5px; line-height: 27px;">
            15 characters left.</span>
                                    </div>

                                    <script>
                                        function CountWords(s) {
   var maxChars = 15;
   if (s.value.length > maxChars) {
       s.value = s.value.substring(0, maxChars);
   }
   else {
       $($(s).parent()).find("#words").html((maxChars - s.value.length) + " characters     left.");
   }
}


                                        </script>
                                    <div class="col-lg-12">
                                        <label>Content</label> 
                                        <textarea id="summernote" name="details" class="form-control"></textarea>
                                    </div>
                                    <div class="col-lg-12">
                                    <style>
img{
max-width:80px; max-height:80px;
}
input[type=file]{
padding:10px;}
</style>

<script>
function readURL(input) {
if (input.files && input.files[0]) {
var reader = new FileReader();

reader.onload = function (e) {
$('#blah')
.attr('src', e.target.result);
};

reader.readAsDataURL(input.files[0]);
}
}
</script>

<img id="blah" class="img-circle" />
</div>






                                                   
                                        <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit" name="submit" value="submit"><strong>Upload</strong></button>
                                        
                                    </div>
                                </form>
                    </div>
                </div>
            </div>
            </div>
             </div>
                

            </div>
        <div>
            <div class="pull-right">
            
            </div>
            <div>
               
            </div>
        </div>

        </div>
        </div>



    <!-- Mainly scripts -->



    <script src="docsupport/jquery-3.2.1.min.js" type="text/javascript"></script>
  <script src="chosen.jquery.js" type="text/javascript"></script>
  <script src="docsupport/prism.js" type="text/javascript" charset="utf-8"></script>
  <script src="docsupport/init.js" type="text/javascript" charset="utf-8"></script>







    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- SUMMERNOTE -->
    <script src="summernote.js"></script>

    <script>
                                            $(document).ready(function() {
                                                $('#summernote').summernote();
                                                
                                            });
                                        </script>
                                                 

</body>

</html>
