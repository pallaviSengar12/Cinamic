<?php
session_start();

if(session_destroy()) {
    header("Location: logout.php");
}
?>

