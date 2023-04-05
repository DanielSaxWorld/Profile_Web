<?php
include('db_conn.php');
if(isset($_REQUEST['id'])){
$sql = "SELECT * FROM video WHERE id='$_REQUEST[id]'";
$result = mysqli_query($conn, $sql);
$row=mysqli_fetch_array($result);
//$_REQUEST['fileno']=$row['fileno'];
?>

<?php

// sql to delete a record
$sql = "DELETE FROM video WHERE id=$_REQUEST[id]";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Audio Successfully DELETED')
location.href='allvideos.php'</script>";
} else {
    echo "Error deleting Record: " . mysqli_error($conn);
}

mysqli_close($conn);
}

