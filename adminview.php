<?php
include("logdb.php");
$rs =getUser();

?>


<html>
<body>

<?php
if(isset($_GET['rec']))
{
    $c = $_GET['rec'];
    if($c>0)
    {
        echo "Record Inserted !";
    }else{
        echo "Record Not Insert !";
    }
}
?>

<table border="3" cellspacing="3" cellpadding="5">
    <thead>

    <th>Name</th>

    <th>Email</th>
    <th>Password</th>
    <th>Mobile</th>
    </thead>
    <?php
         while($arr=mysqli_fetch_assoc($rs))
    {

        $Name = $arr['Name'];
        $Email = $arr['email'];
        $Pass= $arr['Password'];

        $Mobile = $arr['Mobile'];



        $tr ="<tr> 
                      
                        <td> $Name</td>
                        <td> $Email</td>
                         <td> $Pass</td>
                          
                         <td>  $Mobile</td>
                         
                        </tr>";
        echo $tr;
    }

    ?>
</table>
</body>
</html>