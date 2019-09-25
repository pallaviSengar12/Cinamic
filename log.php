<?php
include("logdb.php");
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    // username and password sent from form

    $myusername = mysqli_real_escape_string($con,$_POST['email']);
    $mypassword = mysqli_real_escape_string($con,$_POST['password']);

    $sql = "SELECT ID FROM userreg WHERE Email= '$myusername' and Password = '$mypassword'";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

    $sq="select ID from admin where  Name='$myusername'and Password='$mypassword'";
    $res= mysqli_query($con,$sq);
    $row1 = mysqli_fetch_array($res,MYSQLI_ASSOC);

    $count1= mysqli_num_rows($res);
    $count = mysqli_num_rows($result);

    // If result matched $myusername and $mypassword, table row must be 1 row

    if($count == 1) {

        $_SESSION['login_user'] = $myusername;

        header("location: category.php");
    }else {

        header("location:sign.php");
        "Your Login Name or Password is invalid";
    }
    if ($count1==1)
    {

    header("location:control.php");
}}
?>
<html>

<head>
    <title>Login Page</title>

    <style type = "text/css">
        body {
            padding: 40px;
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
            background-color:lightcoral;
        }
        .boxx{
            background-color: paleturquoise;
            padding:45px;
            font-size:20px;
            border: black solid 3px;
            margin-left: 20px;
        }

        label {
            font-weight:bold;
            width:100px;
            font-size:15px;
            color: lightcoral;
        }
        .box {
            border:sienna solid 2px;
            background-color: aliceblue;
        }
    </style>

</head>

<body bgcolor = "#FFFFFF">

<div   align = "center">
    <div class="boxx" style = "width:300px; border: solid 1px #333333; " align = "left">
        <div style="background-color:darkcyan"><b style="font-size:20px;color: black;">Login </b></div>

        <div  style = "margin:30px">

            <form action = "log.php" method = "post">
                <label>Email  :</label><input type = "text" name = "email" class = "box"/><br /><br />
                <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                <input type = "submit" value = " Submit " style="color:white; font-size: 21px; background-color: dodgerblue"/><br />

            </form>



    </div>
</div>

</body>
</html>