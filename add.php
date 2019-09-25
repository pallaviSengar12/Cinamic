<?php
include("logdb.php");
$res = addUser($_POST);

header("location:log.php?$c=$res");