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
                            <img alt="image" class="img-circle" src="../staff/<?php echo $session_passport; ?>" height="50" />
                        </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?php echo $session_fullname; ?></strong>
                                </span> <span class="text-muted text-xs block"><?php echo $session_email; ?> <b class="caret"></b></span> </span> </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <!--<li><a href="profile.html">Profile</a></li>
                                <li><a href="contacts.html">Contacts</a></li>
                                <li><a href="mailbox.html">Mailbox</a></li>
                                <li class="divider"></li>-->
                            <li><a href="../logout.php">Logout</a></li>
                        </ul>
                    </div>

                    <div class="logo-element">
                        <img src="../imgs/favicon.fw.png">
                    </div>
                </li>
                <li class="active">
                    <a href="super_admin.php"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="../">All inputs</a></li>

                    </ul>
                </li>




                


                <li>
                    <a href="#"><i class="fa fa-database"></i> <span class="nav-label">Events</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="addevent/">Add Events</a></li>
                        <!--<li><a data-toggle="modal" data-target="#addinventory">Add Inventory</a></li>-->
						<li><a href="../allevent.php">All Events</a></li>
						
                    </ul>
                </li>

				
				
				
                <li>
                    <a href="#"><i class="fa fa-music"></i> <span class="nav-label">Music</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a data-toggle="modal" data-target="#addaudio">Add Audio Track</a></li>
                        <!--<li><a data-toggle="modal" data-target="#addinventory">Add Inventory</a></li>-->
						<li><a href="../allaudios.php">All Audio Tracks</a></li>
                        
                    </ul>
                </li>
				


                <li>
                    <a href="#"><i class="fa fa-video-camera"></i> <span class="nav-label">Videos</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a data-toggle="modal" data-target="#addvideo">Add Video</a></li>
                        <!--<li><a data-toggle="modal" data-target="#addinventory">Add Inventory</a></li>-->
						<li><a href="../allvideos.php">All Videos</a></li>
                        
                    </ul>
                </li>
		




                <li>
                    <a href="#"><i class="fa fa-list"></i> <span class="nav-label">News Letter List</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <!-- <li><a data-toggle="modal" data-target="#addalbum">Add Album Category</a></li>
                        <li><a data-toggle="modal" data-target="#addinventory">Add Inventory</a></li>
						<li><a data-toggle="modal" data-target="#addalbum">Add Album</a></li> -->
                        <li><a href="../newsletter.php">Newsletter</a></li>

                        
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
   

<!-- paid events -->	
	
	
	    <div class="modal inmodal col-xs-12" id="addevent" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated flipInY">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h3><i class="fa fa-dropbox"></i> Events </h3>
                    <hr>
                    <form class="form-horizontal" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
                
                
                
                
                    <?php
include("db_conn.php");


$rand = rand(0000,9999);
		$today = date("dmy");
		$time = date("His");
		$ID = "Tsax".$rand;

	error_reporting(E_ALL);
	if(isset($_REQUEST['event'])){
		$title=trim(addslashes($_REQUEST['title']));
		$sub_title=trim(addslashes($_REQUEST['sub_title']));
		$location=trim(addslashes($_REQUEST['location']));
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


$sql1="INSERT INTO events (title, sub_title, location, date, details, event_type, regular, vip, vvip, image) VALUES ('$title','$sub_title','$location','$date','$details','$event_type','$regular','$vip','$vvip','$image')";

mysqli_query($conn,$sql1) or die (mysqli_error($conn));
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
                                <input type="text" oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);" name="title" placeholder="Title" class="form-control" required="required">
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
                        <label class="col-lg-3 control-label">Events Type:</label>
						    <div class="col-lg-9">
                                <select name="event_type" class="form-control">
  								    <option class="pagemore" value="free">FREE</option>
  								    <option class="pagemore" value="paid">PAID</option>
  								 </select>
                            </div>
                        </div>
						
						<div class="form-group">
                            <label class="col-lg-3 control-label">Regular:</label>
                            <div class="col-lg-9">
                                <input type="number" name="regular" placeholder="Amount" class="form-control">
                            </div>
                        </div>
						
						
						<div class="form-group">
                            <label class="col-lg-3 control-label">Vip:</label>
                            <div class="col-lg-9">
                                <input type="number" name="vip" placeholder="Amount" class="form-control">
                            </div>
                        </div>
						
						
						<div class="form-group">
                            <label class="col-lg-3 control-label">vvip:</label>
                            <div class="col-lg-9">
                                <input type="number" name="vvip" placeholder="Amount" class="form-control">
                            </div>
                        </div>
						

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Events Details:</label>
                            <div class="col-lg-9">
                                <textarea name="details" placeholder="Details About Event" class="form-control" id="" cols="30" rows="10" required="required"></textarea>
                                
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
                            <input type="submit" name="event" value="Save Events" class="btn btn-warning">
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
							$target="../videos/";
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
location.href='../allvideos.php'</script>";
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
                                <input oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);" type="text" name="title" placeholder="Headline" class="form-control" required="required">
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
                            <label class="col-lg-3 control-label">Video Image{510*340}:</label>
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
		$target="../audios/";
		$target=$target.$_FILES["data"]['name'];




		/*	  $yyy = $_FILES['data']['name'];
			  $_SESSION['pic']=$yyy;*/

if(move_uploaded_file($_FILES["data"]['tmp_name'], $target)>0){

	

		  //Check for duplicate record in database before inserting New Record
		  $check=mysqli_query($conn, "SELECT * FROM `audio` WHERE link='$link'");
		  $checkrows=mysqli_num_rows($check);

		 if($checkrows>0) {
		  echo "<script>alert('This audio exists')
		  location.href='../allaudios.php'</script>";
		 } else {


$sql="INSERT INTO audio (link, date, audio) VALUES ('$link','$date','$audio')";

mysqli_query($conn,$sql) or die (mysqli_error($conn));
$num=mysqli_insert_id($conn);
					if(mysqli_affected_rows($conn)!=1){
						$message= "Error inserting the application information.";
						}
echo "<script>alert('Audio Successfully Added')
	location.href='../allaudios.php'</script>";

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


    <!--Ending of Add Salary Line-->


    <!--Salary by Date-->
    <!--Ending of Salary by Date-->

    <!--Salary by Staff-->
    <!--Ending of Salary by Staff-->

    <!--Salary by Type-->
    <!--Ending of Salary by Type-->
