<?php



$con=mysqli_connect("localhost","root","","foodorder")or die("connection failed");
function addUser($arr)
{
    global $con;
    $name = $arr['name'];
    $email = $arr['email'];
    $pass = $arr['pass'];
    $mobile = $arr['mob'];

    $query="insert into userreg(Name,email,Password,Mobile) values('$name','$email','$pass','$mobile')";

    mysqli_query($con,$query);
    $res = mysqli_affected_rows($con);

    return $res;
}

function getUser()
{
    global $con;
    $qu = "select * from userreg";
    $rs = mysqli_query($con,$qu);
    return $rs;
}
?>