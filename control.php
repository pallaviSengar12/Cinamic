<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 7/3/2018
 * Time: 6:19 PM
 */
?>

<html lang="en">
<head>
    <title>Food Order | Catalogue</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/layout.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen">
    <script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
    <script src="js/cufon-yui.js" type="text/javascript"></script>
    <script src="js/cufon-replace.js" type="text/javascript"></script>
    <script src="js/Dynalight_400.font.js" type="text/javascript"></script>
    <script src="js/FF-cash.js" type="text/javascript"></script>
    <script src="js/jquery.prettyPhoto.js" type="text/javascript"></script>
    <script src="js/hover-image.js" type="text/javascript"></script>
    <script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
    <script src="js/jquery.bxSlider.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#slider-2').bxSlider({
                pager: true,
                controls: false,
                moveSlideQty: 1,
                displaySlideQty: 4
            });
            $("a[data-gal^='prettyPhoto']").prettyPhoto({
                theme: 'facebook'
            });
        });
    </script>
    <!--[if lt IE 9]><script type="text/javascript" src="js/html5.js"></script><![endif]-->
</head>
<body id="page3">
<!--==============================header=================================-->
<header>
    <div class="row-top">
        <div class="main">
            <div class="wrapper">
                <h1><a href="index.php">Food<span> Order</span></a></h1>
                <nav>
                    <ul class="menu">
                        <h1>Welcome Admin</h1>

                        <li><a class="active" href="adminview.php">History</a></li>
                        <li><a href=".php">Add category</a></li>


                        <li><a href="adminlog.php">logout</a></li>

                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="row-bot">
        <div class="row-bot-bg">
            <div class="main">
                <h2>Admin <span>admin </span></h2>
            </div>
        </div>
    </div>
</header>
<!--==============================content================================-->

<!--==============================footer=================================-->
<footer>
    <div class="main">
        <div class="aligncenter"> <span>Copyright &copy; <a href="#">Universal Informatics</a> All Rights Reserved</span> Design by : php3pm </div>
    </div>
</footer>
<script type="text/javascript">Cufon.now();</script>
</body>
</html>

