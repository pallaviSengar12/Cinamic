<?php
include('logdb.php');
session_start();

$user_check = $_SESSION['login_user'];

$ses_sql = mysqli_query($con,"select Name from userreg where Email = '$user_check' ");

$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

$login_session = $row['Name'];

if(!isset($_SESSION['login_user'])){
    header("location:log.php");
}
?>

