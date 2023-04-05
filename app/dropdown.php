<?php
date_default_timezone_set('Africa/Lagos');
$rand = rand(1000,9999);
$randtime =date("his");
$randday = date("dm");

$finalcode = 'RT-' . $randtime.$randday.$rand;
?>

<?php
$rand2 = rand(1000,9999);
$randtime2 =date("his");
$randday2 = date("dm");
$finalcode2 = 'WS-' . $randtime2.$randday2.$rand2;
?>

<?php
$rand3 = rand(1000,9999);
$randtime3 =date("his");
$randday3 = date("dm");
$finalcode3 = 'WS-' . $randtime3.$randday3.$rand3;
?>

<?php
$rand4 = rand(1000,9999);
$randtime4 =date("his");
$randday4 = date("dm");
$finalcode4 = 'SR-' . $randtime3.$randday3.$rand3;
?>

<div id="wrapper">
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="staff/<?php echo $session_passport; ?>" height="50" />
                        </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?php echo $session_fullname; ?></strong>
                                </span> <span class="text-muted text-xs block"><?php echo $session_email; ?> <b class="caret"></b></span> </span> </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <!--<li><a href="profile.html">Profile</a></li>
                                <li><a href="contacts.html">Contacts</a></li>
                                <li><a href="mailbox.html">Mailbox</a></li>
                                <li class="divider"></li>-->
                            <li><a href="logout.php">Logout</a></li>
                        </ul>
                    </div>

                    <div class="logo-element">
                        <img src="img/favicon.fw.png">
                    </div>
                </li>
                <li class="active">
                    <a href="super_admin.php"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="index.php">Go to Dashboard</a></li>

                    </ul>
                </li>



                <li>
                    <a href="#"><i class="fa fa-database"></i> <span class="nav-label">Events</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a data-toggle="modal" data-target="#addevents">Add Events</a></li>
                        <li><a data-toggle="modal" data-target="#addpaidevents">Add Paid Events</a></li>
                        <!--<li><a data-toggle="modal" data-target="#addinventory">Add Inventory</a></li>-->
						<li><a href="allevent.php">All Events</a></li>
						<li><a href="allpaidevent.php">Add Paid Events</a></li>
                        
                    </ul>
                </li>

				<li>
                    <a href="#"><i class="fa fa-video-camera"></i> <span class="nav-label">Videos</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a data-toggle="modal" data-target="#addvideo">Add Video</a></li>
                        <!--<li><a data-toggle="modal" data-target="#addinventory">Add Inventory</a></li>-->
						<li><a href="allvideos.php">All Videos</a></li>
                        
                    </ul>
                </li>
		
				
				
                <li>
                    <a href="#"><i class="fa fa-music"></i> <span class="nav-label">Music</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a data-toggle="modal" data-target="#addaudio">Add Audio Track</a></li>
                        <!--<li><a data-toggle="modal" data-target="#addinventory">Add Inventory</a></li>-->
						<li><a href="allaudios.php">All Audio Tracks</a></li>
                        
                    </ul>
                </li>
				


                <li>
                    <a href="#"><i class="fa fa-music"></i> <span class="nav-label">Album</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a data-toggle="modal" data-target="#addalbum">Add Album Category</a></li>
                        <!--<li><a data-toggle="modal" data-target="#addinventory">Add Inventory</a></li>-->
						<li><a data-toggle="modal" data-target="#addalbum">Add Album</a></li>
                        <li><a href="allalbum.php">All Albums</a></li>

                        
                    </ul>
                </li>
				

            </ul>
        </div>
    </nav>
</div>


<div id="page-wrapper" class="gray-bg dashbard-1">

    <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                <form role="search" class="navbar-form-custom" method="post" action="supersearch.php">
                    <div class="form-group">
                        <input type="text" name="search" placeholder="Enter Product Name..." class="form-control" required name="top-search" id="top-search">
                    </div>
                </form>
            </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="font-extra-bold m-t-xl m-b-xs" style="font-weight:bold">
                        <script language=javascript>
                            todaysDate = new Date();
                            dayarray = new
                            Array("Sun", "Mon", "Tues", "Wed", "Thur", "Fri",
                                "Saturday");
                            montharray = new Array("Jan", "Feb", "Mar", "Apr",
                                "May", "Jun", "Jul", "Aug", "Sept", "Oct", "Nov", "Dec");
                            document.write(dayarray[todaysDate.getDay()] + ", " +
                                montharray[todaysDate.getMonth()] + " " + todaysDate.getDate() + ", ");
                            if (todaysDate.getYear() <
                                1000) {
                                document.write(todaysDate.getYear() + 1900);
                            } else {
                                document.write(todaysDate.getYear());
                            }
                        </script>

                    </span> &nbsp; | &nbsp; <span class="font-extra-bold m-t-xl m-b-xs" id="time" style="font-weight:bold">
                        <script>
                            function checkTime(i) {
                                if (i < 10) {
                                    i = "0" + i;
                                }
                                return i;
                            }

                            function startTime() {
                                var today = new Date();
                                var h = today.getHours();
                                var m = today.getMinutes();
                                var s = today.getSeconds();
                                // add a zero in front of numbers<10
                                m = checkTime(m);
                                s = checkTime(s);
                                document.getElementById('time').innerHTML = h + ":" + m + ":" + s;
                                t = setTimeout(function() {
                                    startTime()
                                }, 500);
                            }
                            startTime();
                        </script>
                    </span> &nbsp; | &nbsp; <span class="m-r-sm text-muted welcome-message">Welcome <strong>TsaxMaetro (<?php echo $session_email; ?>)</strong></span>
                </li>

                <li>
                    <a href="logout.php">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>

            </ul>
        </nav>
    </div>

    <!--Distributor Sales by Product-->
    <!--Ending of Distributor Sales by Product-->

<!--Distributor Invevtory by Brand-->
    <!--Ending of Distributor Inventory by Brand-->

<!--Add product Distributor-->
    <!--Ending of Add Product Distributor-->




    <!--Add product Line-->
    <div class="modal inmodal col-xs-12" id="addevents" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated flipInY">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3><i class="fa fa-dropbox"></i> Add Events</h3>
                    <hr>
                    <form class="form-horizontal" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
                      
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
		$location=trim(addslashes($_REQUEST['location']));
		$date=trim(addslashes($_REQUEST['date']));
		$details=trim(addslashes($_REQUEST['details']));
		$image=$_FILES["data"]['name'];
		$target="events/";
		$target=$target.$_FILES["data"]['name'];




		/*	  $yyy = $_FILES['data']['name'];
			  $_SESSION['pic']=$yyy;*/

if(move_uploaded_file($_FILES["data"]['tmp_name'], $target)>0){

	

		  //Check for duplicate record in database before inserting New Record
		  $check=mysqli_query($conn, "SELECT * FROM `events` AND `paidevents` WHERE date='$date'");
		  $checkrows=mysqli_num_rows($check);

		 if($checkrows>0) {
		  echo "<script>alert('There's an event for this day')
		  location.href='index.php'</script>";
		 } else {


$sql="INSERT INTO events (title, sub_title, location, date, details, image) VALUES ('$title','$sub_title','$location','$date','$details','$image')";

mysqli_query($conn,$sql) or die (mysqli_error($conn));
$num=mysqli_insert_id($conn);
					if(mysqli_affected_rows($conn)!=1){
						$message= "Error inserting the application information.";
						}
echo "<script>alert(' Dear $fullname Events Successfully Created')
	location.href='allevent.php'</script>";

}
}
	mysqli_close($conn);
	}


?>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Events Title:</label>
                            <div class="col-lg-9">
                                <input type="text" name="title" placeholder="Title In CAPS LOCK" class="form-control" required="required">
                            </div>
                        </div>

						
						
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Sub Title:</label>
                            <div class="col-lg-9">
                                <input type="text" name="sub_title" placeholder="Sub Title" class="form-control" required="required">
                            </div>
                        </div>

						
						
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Events Location:</label>
                            <div class="col-lg-9">
                                <input type="text" name="location" placeholder="Short and precise" class="form-control" required="required">
                            </div>
                        </div>

						
						
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Events Date:</label>
                            <div class="col-lg-9">
                                <input type="datetime-local" name="date" placeholder="Events Date" class="form-control" required="required">
                            </div>
                        </div>
						
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Events Details:</label>
                            <div class="col-lg-9">
                                <input type="text" name="details" placeholder="Details About Event" class="form-control" required="required">
                            </div>
                        </div>
						
						<div class="form-group">
                            <label class="col-lg-3 control-label">Events Image:</label>
                            <div class="col-lg-9">
								<input class="form-control" type="file" onChange="readURL(this);" name="data"  accept=".jpg,.jpeg,.png,.PNG,.JPG,.JPEG">
                            </div>
                        </div>
						
						<div class="form-group">

<style>
img{
max-width:110px; max-height:100px;
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



                        <!--<script type="text/javascript">
                            function sum() {
                                var o_price = parseInt(document.getElementById("o_price").value);
                                var price = parseInt(document.getElementById("price").value);


                                if (o_price.value == "") {
                                    o_price.value = 0.00;
                                }
                                if (price.value == "") {
                                    price.value = 0.00;
                                }


                                var sum = (price - o_price).toFixed(2);
                                document.getElementById("profit").value = sum;
                            }
                        </script>-->
                        <!--<div class="form-group">
                            <label class="col-lg-3 control-label">Profit:</label>
                            <div class="col-lg-9">
                                <input type="text" name="profit" step="any" readonly id="profit" placeholder="Profit" class="form-control" required="required">
                            </div>
                        </div>-->


                        <div class="col-lg-12">
                            <input type="submit" name="submit" value="Save Events" class="btn btn-warning">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

<!-- paid events -->	
	
	
	    <div class="modal inmodal col-xs-12" id="addpaidevents" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated flipInY">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3><i class="fa fa-dropbox"></i> Paid Eventsz</h3>
                    <hr>
                    <form class="form-horizontal" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
                
                
                
                
                    <?php
include("db_conn.php");


$rand = rand(0000,9999);
		$today = date("dmy");
		$time = date("His");
		$ID = "Tsax".$rand;

	error_reporting(E_ALL);
	if(isset($_REQUEST['paidevent'])){
		$title=trim(addslashes($_REQUEST['title']));
		$sub_title=trim(addslashes($_REQUEST['sub_title']));
		$location=trim(addslashes($_REQUEST['location']));
		$date=trim(addslashes($_REQUEST['date']));
		$details=trim(addslashes($_REQUEST['details']));
        $regular=trim(addslashes($_REQUEST['regular']));
        $vip=trim(addslashes($_REQUEST['vip']));
        $vvip=trim(addslashes($_REQUEST['vvip']));
		$image=$_FILES["data"]['name'];
		$target="events/";
		$target=$target.$_FILES["data"]['name'];




		/*	  $yyy = $_FILES['data']['name'];
        $_SESSION['pic']=$yyy;*/

if(move_uploaded_file($_FILES["data"]['tmp_name'], $target)>0){

	

		  //Check for duplicate record in database before inserting New Record
		  $check=mysqli_query($conn, "SELECT * FROM `paidevents` WHERE date='$date'");
		  $checkrows=mysqli_num_rows($check);

		 if($checkrows>0) {
		  echo "<script>alert('There's an event for this day')
		  location.href='index.php'</script>";
		 } else {


$sql1="INSERT INTO paidevents (title, sub_title, location, date, details, regular, vip, vvip, image) VALUES ('$title','$sub_title','$location','$date','$details','$regular','$vip','$vvip','$image')";

mysqli_query($conn,$sql1) or die (mysqli_error($conn));
$num=mysqli_insert_id($conn);
					if(mysqli_affected_rows($conn)!=1){
						$message= "Error inserting the application information.";
						}
echo "<script>alert(' Dear $fullname Events Successfully Created')
	location.href='allpaidevent.php'</script>";

}
}
	mysqli_close($conn);
	}


?>


                        <div class="form-group">
                            <label class="col-lg-3 control-label">Events Title:</label>
                            <div class="col-lg-9">
                                <input type="text" name="title" placeholder="Title In CAPS LOCK" class="form-control" required="required">
                            </div>
                        </div>

						
						
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Sub Title:</label>
                            <div class="col-lg-9">
                                <input type="text" name="sub_title" placeholder="Sub Title" class="form-control" required="required">
                            </div>
                        </div>

						
						
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Events Location:</label>
                            <div class="col-lg-9">
                                <input type="text" name="location" placeholder="Short and precise" class="form-control" required="required">
                            </div>
                        </div>

						
						
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Events Date:</label>
                            <div class="col-lg-9">
                                <input type="datetime-local" name="date" placeholder="Events Date" class="form-control" required="required">
                            </div>
                        </div>
						

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Events Details:</label>
                            <div class="col-lg-9">
                                <input type="text" name="details" placeholder="Details About Event" class="form-control" required="required">
                            </div>
                        </div>
						
						
						
						<div class="form-group">
                            <label class="col-lg-3 control-label">Regular:</label>
                            <div class="col-lg-9">
                                <input type="number" name="regular" placeholder="Amount" class="form-control" required="required">
                            </div>
                        </div>
						
						
						<div class="form-group">
                            <label class="col-lg-3 control-label">Vip:</label>
                            <div class="col-lg-9">
                                <input type="number" name="vip" placeholder="Amount" class="form-control" required="required">
                            </div>
                        </div>
						
						
						<div class="form-group">
                            <label class="col-lg-3 control-label">vvip:</label>
                            <div class="col-lg-9">
                                <input type="number" name="vvip" placeholder="Amount" class="form-control" required="required">
                            </div>
                        </div>
						
						
						<div class="form-group">
                            <label class="col-lg-3 control-label">Events Image:</label>
                            <div class="col-lg-9">
								<input class="form-control" type="file" onChange="readURL(this);" name="data"  accept=".jpg,.jpeg,.png,.PNG,.JPG,.JPEG">
                            </div>
                        </div>
						
						<div class="form-group">
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





                        <!--<script type="text/javascript">
                            function sum() {
                                var o_price = parseInt(document.getElementById("o_price").value);
                                var price = parseInt(document.getElementById("price").value);


                                if (o_price.value == "") {
                                    o_price.value = 0.00;
                                }
                                if (price.value == "") {
                                    price.value = 0.00;
                                }


                                var sum = (price - o_price).toFixed(2);
                                document.getElementById("profit").value = sum;
                            }
                        </script>-->
                        <!--<div class="form-group">
                            <label class="col-lg-3 control-label">Profit:</label>
                            <div class="col-lg-9">
                                <input type="text" name="profit" step="any" readonly id="profit" placeholder="Profit" class="form-control" required="required">
                            </div>
                        </div>-->




                        <div class="col-lg-12">
                            <input type="submit" name="paidevent" value="Save Events" class="btn btn-warning">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

	
<!-- video upload -->	
	
	
	
<div class="modal inmodal col-xs-12" id="addvideo" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated flipInY">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3><i class="fa fa-dropbox"></i> Add Video</h3>
                    <hr>
                    <form class="form-horizontal" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
                      <?php
                        include("db_conn.php");

						$rand = rand(000,999);
						$today = date("dmy");
						$time = date("His");
						$stock = "STOCK".$today.$rand;

                        error_reporting(E_ALL);
                        if (isset($_REQUEST['addvideo'])) {
                            $title = trim(addslashes($_REQUEST['title']));
                            $sub_title = trim(addslashes($_REQUEST['sub_title']));
                            $link = trim(addslashes($_REQUEST['link']));
                            $youtubeid = trim(addslashes($_REQUEST['youtubeid']));
                            $date = trim(addslashes($_REQUEST['date']));
							$image = $_FILES["data"]['name'];
							$target="videos/";
							$target=$target.$_FILES["data"]['name'];

		/*	  $yyy = $_FILES['data']['name'];
			  $_SESSION['pic']=$yyy;*/

if(move_uploaded_file($_FILES["data"]['tmp_name'], $target)>0){

                            $sql1 = "INSERT INTO video (title, sub_title, link, youtubeid, date, image) VALUES ('$title','$sub_title','$link','$youtubeid','$date','$image')";

                            mysqli_query($conn, $sql1) or die(mysqli_error($conn));
                            $num = mysqli_insert_id($conn);
                            if (mysqli_affected_rows($conn) != 1) {
                                $message = "Error inserting the application information.";
                            }

                            echo "<script>alert('Video Successfully Added')
location.href='allvideos.php'</script>";
                        }

                        mysqli_close($conn);
						}

                        ?>


						<div class="form-group">
                            <label class="col-lg-3 control-label">Video Link:</label>
                            <div class="col-lg-9">
                                <input type="text" name="title" placeholder="Youtube link" class="form-control" required="required">
                            </div>
                        </div>
						
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Video ID:</label>
                            <div class="col-lg-9">
                                <input type="text" name="youtubeid" placeholder="Youtube ID" class="form-control" required="required">
                            </div>
                        </div>
						
						<div class="form-group">
                            <label class="col-lg-3 control-label">Headline:</label>
                            <div class="col-lg-9">
                                <input type="text" name="title" placeholder="Headline" class="form-control" required="required">
                            </div>
                        </div>
						
						
						<div class="form-group">
                            <label class="col-lg-3 control-label">Attractive content:</label>
                            <div class="col-lg-9">
                                <input type="text" name="sub_title" placeholder="Short Attractive Content" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Date Of Upload:</label>
                            <div class="col-lg-9">
                                <input type="datetime-local" name="date" placeholder="Events Date" class="form-control" required="required">
                            </div>
                        </div>

						<div class="form-group">
                            <label class="col-lg-3 control-label">Video Image:</label>
                            <div class="col-lg-9">
								<input class="form-control" type="file" onChange="readURL(this);" name="data"  accept=".jpg,.jpeg,.png,.PNG,.JPG,.JPEG">
                            </div>
                        </div>
						
						<div class="form-group">

<style>
img{
max-width:110px; max-height:100px;
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


						
						
                        <div class="col-lg-12">
                            <input type="submit" name="addvideo" value="Save Events" class="btn btn-warning">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>


<!-- Adding Album -->


<div class="modal inmodal col-xs-12" id="addaudio" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated flipInY">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3><i class="fa fa-dropbox"></i> Add Audio Tracks</h3>
                    <hr>
                    <form class="form-horizontal" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
                      
						                 <?php
include("db_conn.php");


$rand = rand(0000,9999);
		$today = date("dmy");
		$time = date("His");
		$ID = "Tsax".$rand;

	error_reporting(E_ALL);
	if(isset($_REQUEST['addaudio'])){
		$link=trim(addslashes($_REQUEST['link']));
		$date=trim(addslashes($_REQUEST['date']));
		$audio=$_FILES["data"]['name'];
		$target="audios/";
		$target=$target.$_FILES["data"]['name'];




		/*	  $yyy = $_FILES['data']['name'];
			  $_SESSION['pic']=$yyy;*/

if(move_uploaded_file($_FILES["data"]['tmp_name'], $target)>0){

	

		  //Check for duplicate record in database before inserting New Record
		  $check=mysqli_query($conn, "SELECT * FROM `audio` WHERE link='$link'");
		  $checkrows=mysqli_num_rows($check);

		 if($checkrows>0) {
		  echo "<script>alert('This audio exists')
		  location.href='allaudios.php'</script>";
		 } else {


$sql="INSERT INTO audio (link, date, audio) VALUES ('$link','$date','$audio')";

mysqli_query($conn,$sql) or die (mysqli_error($conn));
$num=mysqli_insert_id($conn);
					if(mysqli_affected_rows($conn)!=1){
						$message= "Error inserting the application information.";
						}
echo "<script>alert('Audio Successfully Added')
	location.href='allaudios.php'</script>";

}
}
	mysqli_close($conn);
	}


?>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Audio Link:</label>
                            <div class="col-lg-9">
                                <input type="text" name="link" placeholder="AudioMark Link" class="form-control" required="required">
                            </div>
                        </div>
						
						
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Audio Date:</label>
                            <div class="col-lg-9">
                                <input type="datetime-local" name="date" placeholder="Audio's Date" class="form-control" required="required">
                            </div>
                        </div>
						
						<div class="form-group">
                            <label class="col-lg-3 control-label">Audio File:</label>
                            <div class="col-lg-9">
								<input class="form-control" type="file" onChange="readURL(this);" name="data"  accept=".mp3,.mp4,.m4a,.wav">
                            </div>
                        </div>
						
						<div class="form-group">

<style>
img{
max-width:110px; max-height:100px;
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



                        <!--<script type="text/javascript">
                            function sum() {
                                var o_price = parseInt(document.getElementById("o_price").value);
                                var price = parseInt(document.getElementById("price").value);


                                if (o_price.value == "") {
                                    o_price.value = 0.00;
                                }
                                if (price.value == "") {
                                    price.value = 0.00;
                                }


                                var sum = (price - o_price).toFixed(2);
                                document.getElementById("profit").value = sum;
                            }
                        </script>-->
                        <!--<div class="form-group">
                            <label class="col-lg-3 control-label">Profit:</label>
                            <div class="col-lg-9">
                                <input type="text" name="profit" step="any" readonly id="profit" placeholder="Profit" class="form-control" required="required">
                            </div>
                        </div>-->


                        <div class="col-lg-12">
                            <input type="submit" name="addaudio" value="Save Events" class="btn btn-warning">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>


	

	
	<!--Ending of Add Audio Line-->


	
    <!--Distributor Opex by Date-->
    <div class="modal inmodal col-xs-12" id="dopexbydate" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated flipInY">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3><i class="fa fa-fax"></i>Distributor Opex Report by Date</h3>
                    <hr>
                    <form class="form-horizontal" method="post" action="dsuperopexbydate.php">

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Select Date From:</label>
                            <div class="col-lg-9">
                                <input type="date" name="datefrom" placeholder="Date From" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Select Date To:</label>
                            <div class="col-lg-9">
                                <input type="date" name="dateto" placeholder="Date To" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <input type="submit" name="dopexbydate" value="Generate Report" class="btn btn-danger">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!--Ending of Distributor Opex by Date-->

    <!--Distributor Opex by Purpose-->
    <div class="modal inmodal col-xs-12" id="dopexbypurpose" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated flipInY">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3><i class="fa fa-fax"></i>Distributor Opex Report by Purpose</h3>
                    <hr>
                    <form class="form-horizontal" method="post" action="dsuperopexbypurpose.php">

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Select Date From:</label>
                            <div class="col-lg-9">
                                <input type="date" name="datefrom" placeholder="Date From" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Select Date To:</label>
                            <div class="col-lg-9">
                                <input type="date" name="dateto" placeholder="Date To" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Purpose:</label>
                            <div class="col-lg-9">
                                <select name="purpose" class="form-control" required="required">
                                    <option value="">--Select Category--</option>
                                    <?php
                                    include('db_conn.php');
                                    $sql2 = "SELECT category FROM opex_ctg ";
                                    $result2 = mysqli_query($conn, $sql2);
                                    if (mysqli_num_rows($result2) > 0) {
                                        while ($row = mysqli_fetch_array($result2)) {
                                    ?>
                                            <option value="<?php echo $row['category'] ?>"> <?php echo $row['category'] ?> </option><?php }
                                                                                                                                    } ?>
                                </select>
                            </div>
                        </div>



                        <div class="col-lg-12">
                            <input type="submit" name="dopexbypurpose" value="Generate Report" class="btn btn-danger">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!--Ending of Distributor Opex by Purpose-->


    <!--Opex by Date-->
    <div class="modal inmodal col-xs-12" id="opexbydate" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated flipInY">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3><i class="fa fa-fax"></i> Opex Report by Date</h3>
                    <hr>
                    <form class="form-horizontal" method="post" action="superopexbydate.php">

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Select Date From:</label>
                            <div class="col-lg-9">
                                <input type="date" name="datefrom" placeholder="Date From" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Select Date To:</label>
                            <div class="col-lg-9">
                                <input type="date" name="dateto" placeholder="Date To" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <input type="submit" name="opexbydate" value="Generate Report" class="btn btn-danger">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!--Ending of Opex by Date-->

    <!--Opex by Purpose-->
    <div class="modal inmodal col-xs-12" id="opexbypurpose" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated flipInY">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3><i class="fa fa-fax"></i> Opex Report by Purpose</h3>
                    <hr>
                    <form class="form-horizontal" method="post" action="superopexbypurpose.php">

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Select Date From:</label>
                            <div class="col-lg-9">
                                <input type="date" name="datefrom" placeholder="Date From" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Select Date To:</label>
                            <div class="col-lg-9">
                                <input type="date" name="dateto" placeholder="Date To" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Purpose:</label>
                            <div class="col-lg-9">
                                <select name="purpose" class="form-control" required="required">
                                    <option value="">--Select Category--</option>
                                    <?php
                                    include('db_conn.php');
                                    $sql2 = "SELECT category FROM opex_ctg ";
                                    $result2 = mysqli_query($conn, $sql2);
                                    if (mysqli_num_rows($result2) > 0) {
                                        while ($row = mysqli_fetch_array($result2)) {
                                    ?>
                                            <option value="<?php echo $row['category'] ?>"> <?php echo $row['category'] ?> </option><?php }
                                                                                                                                    } ?>
                                </select>
                            </div>
                        </div>



                        <div class="col-lg-12">
                            <input type="submit" name="opexbypurpose" value="Generate Report" class="btn btn-danger">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!--Ending of Opex by Purpose-->


    <!--Add Salary Line-->
    <div class="modal inmodal col-xs-12" id="addsalary" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated flipInY">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3><i class="fa fa-money"></i> Add Salary</h3>
                    <hr>
                    <form class="form-horizontal" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <?php
                        include("db_conn.php");


                        $rand = rand(000, 999);
                        $today = date("dmy");
                        $time = date("His");
                        $ID = "SALARY" . $today . $time;

                        error_reporting(E_ALL);
                        if (isset($_REQUEST['addsalary'])) {
                            $salary_id = trim(addslashes($_REQUEST['salary_id']));
                            $salary_date = trim(addslashes($_REQUEST['salary_date']));
                            $staff_name = trim(addslashes($_REQUEST['staff_name']));
                            $payment_type = trim(addslashes($_REQUEST['payment_type']));
                            $month = trim(addslashes($_REQUEST['month']));
                            $year = trim(addslashes($_REQUEST['year']));
                            $salary_amount = trim(addslashes($_REQUEST['salary_amount']));


                            $sql1 = "INSERT INTO salary (salary_id, salary_date, staff_name, payment_type, month, year, salary_amount) VALUES ('$salary_id','$salary_date','$staff_name','$payment_type','$month','$year','$salary_amount')";

                            mysqli_query($conn, $sql1) or die(mysqli_error($conn));
                            $num = mysqli_insert_id($conn);
                            if (mysqli_affected_rows($conn) != 1) {
                                $message = "Error inserting the application information.";
                            }

                            echo "<script>alert('Salary Successfully Added')
location.href='supersalary.php'</script>";
                        }

                        mysqli_close($conn);


                        ?>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Salary ID:</label>
                            <div class="col-lg-9">
                                <input type="text" name="salary_id" value="<?php echo $ID; ?>" placeholder="Salary ID" readonly class="form-control" required="required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Select Date:</label>
                            <div class="col-lg-9">
                                <input type="date" name="salary_date" placeholder="Salary Date" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Staff Name:</label>
                            <div class="col-lg-9">
                                <select name="staff_name" class="form-control" required="required">
                                    <option value="">--Select Staff Name--</option>
                                    <?php
                                    include('db_conn.php');
                                    $sql2 = "SELECT staff_name FROM workers ";
                                    $result2 = mysqli_query($conn, $sql2);
                                    if (mysqli_num_rows($result2) > 0) {
                                        while ($row = mysqli_fetch_array($result2)) {
                                    ?>
                                            <option value="<?php echo $row['staff_name'] ?>"> <?php echo $row['staff_name'] ?> </option><?php }
                                                                                                                                } ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Payment Type:</label>
                            <div class="col-lg-9">
                                <select name="payment_type" class="form-control" required="required">
                                    <option value="">--Select Payment Type--</option>
                                    <option value="Salary">Salary</option>
                                    <option value="Allowance">Allowance</option>
                                    <option value="IOU">IOU</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Select Month:</label>
                            <div class="col-lg-9">
                                <select name="month" class="form-control" required="required">
                                    <option value="">--Select Month--</option>
                                    <option value="January">January</option>
                                    <option value="February">February</option>
                                    <option value="March">March</option>
                                    <option value="April">April</option>
                                    <option value="May">May</option>
                                    <option value="June">June</option>
                                    <option value="July">July</option>
                                    <option value="August">August</option>
                                    <option value="September">September</option>
                                    <option value="October">October</option>
                                    <option value="November">November</option>
                                    <option value="December">December</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Select Year:</label>
                            <div class="col-lg-9">
                                <select name="year" class="form-control" required="required">
                                    <option value="">--Select Year--</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                    <option value="2025">2025</option>
                                    <option value="2026">2026</option>
                                    <option value="2027">2027</option>
                                    <option value="2028">2028</option>
                                    <option value="2029">2029</option>
                                    <option value="2030">2030</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Amount:</label>
                            <div class="col-lg-9">
                                <input type="text" name="salary_amount" step="any" id="Amount" onKeyUp="sum()" placeholder="Amount" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <input type="submit" name="addsalary" value="Add Salary" class="btn btn-primary">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!--Ending of Add Salary Line-->


    <!--Salary by Date-->
    <!--Ending of Salary by Date-->

    <!--Salary by Staff-->
    <!--Ending of Salary by Staff-->

    <!--Salary by Type-->
    <!--Ending of Salary by Type-->
