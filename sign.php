<?php

?>

<html>
<head>
    <style>

        table, th, td {
            border: 2px solid black;
            border-collapse: collapse;
            font-size: 15px;
        }
        th, td {
            padding: 5px;
        }
    </style>
</head>
<body bgcolor="lightblue">

<form action="add.php"  method="POST">
    <center>
        <table border="2" cellspacing="2" cellpadding="3">
            <p>Sign up</p>

            <tr>
                <td>NAME</td>
                <td><input type="text"  name="name"></td>
            </tr>

             <tr>
                <td>PASSWORD</td>
                <td><input type="password"  name="pass"></td>
            </tr>

            <tr>

             <tr>
                 <td> CONFIRM PASSWORD</td>
                 <td><input type="password"  ></td>
             </tr>
                <td>EMAIL</td>
                <td><input type="text"  name="email"></td>
            </tr>

            <tr>
                <td>MOBILE</td>
                <td><input type="text" name="mob"></td>
            </tr>

            <tr>
                <td rowspan="3" colspan="2"><input type="submit"value="SUBMIT FORM" name="saveform"></td>
            </tr>
        </table>
    </center>
</form>

</body>
</html>