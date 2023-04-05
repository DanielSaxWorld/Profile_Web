<?php
include('db_conn.php');
session_start();
$user_check = $_SESSION['phone'];

$sql = mysqli_query($conn, "SELECT * FROM staff_id WHERE phone='$user_check' AND designation='Staff' ");

$row = mysqli_fetch_array($sql, MYSQLI_ASSOC);

$staff_id = $row['staff_id'];
$session_fullname = $row['fullname'];
$session_email = $row['email'];
$session_phone = $row['phone'];
$session_station = $row['station'];
$session_designation = $row['designation'];
$session_business_name = $row['business_name'];
$session_business_phone = $row['business_phone'];
$session_business_address = $row['business_address'];
$session_passport = $row['passport'];

if (!isset($user_check)) {
    header("Location: ../");
}
