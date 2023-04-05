<?php
include('session.php');
include('db_conn.php');
$id = 1;
$sql="SELECT * FROM admin WHERE id='$id'";
$result=mysqli_query($conn,$sql)or die(mysqli_error($conn));
$rows=mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title><?php echo $session_name; ?> | NEWS UPLOAD</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="summernote.css" rel="stylesheet">


</head>

<body>
    <?php include('menu.php'); ?>
        <div class="wrapper wrapper-content">

            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                <div class="ibox-title">
                        <h5>Upload News</h5>
                       
                    </div>
                    <div class="ibox-content no-padding">
                    <div class="ibox-content">
                        <div class="row">
                    <form role="form" enctype="multipart/form-data" method="post">
                           <?php
            $rand = rand(000,999);
            $today = date("Y");
            $ID = "NEWS/".$today."/".$rand;
    include("db_conn.php");
        
    error_reporting(E_ALL);
    
    if(isset($_REQUEST['submit'])){
        $uin=trim(addslashes($_REQUEST['uin']));
        $date=trim(addslashes($_REQUEST['date']));
        $category=trim(addslashes($_REQUEST['category']));
        $headline=trim(addslashes($_REQUEST['headline']));
        $content=trim(addslashes($_REQUEST['content']));
        $cover = $_FILES["cover"]['name'];
        $target1="cover/";
        $target1=$target1.$_FILES["cover"]['name'];
        if(move_uploaded_file($_FILES["cover"]['tmp_name'], $target1)>0){ 
        $credit=trim(addslashes($_REQUEST['credit']));
        $embed=trim(addslashes($_REQUEST['embed']));
        $designation=trim(addslashes($_REQUEST['designation']));
        $a=trim(addslashes($_REQUEST['a']));

        function RemoveSpecialChar($headline){
           
            //using preg_replace() function
            // to replace the word
            $res = preg_replace('/[^a-zA-Z0-9_ -]/s',' ',$headline);

            //Returning the result
            return $res;
        }
        $headline2 = RemoveSpecialChar($headline);
        $headline3 = str_replace(" ",'-',$headline2);
        $headline4 = strtolower($headline3);

      
        $sql="INSERT INTO news (uin, date, category, headline, content, cover, credit, embed, designation, a, postview) VALUES ('$uin','$date','$category','$headline','$content','$cover','$credit','$embed','$designation','$headline4','0')";

		mysqli_query($conn,$sql) or die (mysqli_error($conn));
        $num=mysqli_insert_id($conn);
					if(mysqli_affected_rows($conn)!=0){
						$message= "Error inserting news.";
						}
echo "<script>alert('News has been uploaded successfully')</script>";
}
else{
	echo "<script>alert('Error in Uploading Passport')</script>";	
}
	
		}
				?>
                                    <div class="col-lg-4"><label>UIN</label> <input type="text"  class="form-control" name="uin" value="<?php echo $ID; ?>"></div>
                                    <div class="col-lg-4"><label>Date Added:</label> <input type="date" class="form-control" name="date" require></div>
                                    <div class="col-lg-4"><label>Category</label>
                                    <select class="form-control" require name="category" placeholder="Select Category">
                                        <option value="Select Category">Select News Category</option>
                                        <option value="Business">Business</option>
                                        <option value="Politics">Politics</option>
                                        <option value="Sports">Sports</option>
                                        <option value="Crime">Crime</option>
                                        <option value="Health">Health</option>
                                        <option value="Nigeria">Nigeria News</option>
                                        <option value="World">World News</option>
                                        <option value="Entertainment">Entertainment</option>
                                        <option value="Lifestyle">Lifestyle</option>
                                        <option value="Environment">Environment</option>
                                        <option value="Fashion">Fashion</option>
                                        <option value="Video">Trending Video</option>

                                    </select></div><br>
                                    <div class="col-lg-4"><label>Headline</label> <input type="text" placeholder="Enter Headline" name="headline" class="form-control" require></div>
                                    <div class="col-lg-4"><label>Cover Photo</label> <input type="file" class="form-control" name="cover" accept=".jpg, .JPG, .png, .PNG, .jpeg, .JPEG" require></div>
                                    <div class="col-lg-4"><label>Photo Credit</label> <input type="text" class="form-control" name="credit" placeholder="Enter Photo Credit" require></div>
                                    <div class="col-lg-4"><label>Embed code</label> <textarea  placeholder="Enter Embed code" name="embed" class="form-control" ></textarea></div>
                                    <div class="col-lg-4"><input type="hidden"  placeholder="Enter Link" name="a" class="form-control" ></div>
                                    <div class="col-lg-4"><input type="hidden"   name="designation" value="<?php echo $session_designation = $row['designation'];?>" class="form-control" ></div>
                                    <div class="col-lg-12"><label>Content</label> <textarea  id="summernote" name="content" class="form-control"></textarea>
                                    
                                                   
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
