<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>

<head>
    <title>Free Spicy-Foods a Hotels and Restaurants Category Website Template | Home :: w3layouts</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href='//fonts.googleapis.com/css?family=Patua+One' rel='stylesheet' type='text/css'>
    <!--slider-->
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" />
    <script src="js/modernizr.js"></script>
    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <script>
    window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')
    </script>
    <!-- FlexSlider -->
    <script defer src="js/jquery.flexslider.js"></script>
    <script type="text/javascript">
    $(function() {
        SyntaxHighlighter.all();
    });
    $(window).load(function() {
        $('.flexslider').flexslider({
            animation: "slide",
            start: function(slider) {
                $('body').removeClass('loading');
            }
        });
    });
    </script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <?php
	    include("./utils/conexao.inc.php");
    ?>
<div class="wrap">
    <div class="total">
        <div class="header">
            <div class="header_top_right">
                <ul>
                    <li><a href="login.php">Login</a></li>
                </ul>
            </div>
            <div class="clear"></div>
                <div class="header-bot">
                    <div class="logo">
                        <img src="images/logo.png" alt="" />
                    </div>
                    <ul class="follow_icon">
                        <li><a href="#"><img src="images/fb.png" alt=""></a></li>
                        <li><a href="#"><img src="images/googleplus.png" alt=""></a></li>
                        <li><a href="#"><img src="images/tw.png" alt=""></a></li>
                        <li><a href="#"><img src="images/pinterest.png" alt=""></a></li>
                    </ul>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="menu">
                <div class="top-nav">
                    <ul>
                        <li class="active"><a href="index.php">Inicio</a></li>
                        <li><a href="about.php">Sobre</a></li>
                        <li><a href="products.php">Produtos</a></li>
                        <!--<li><a href="pricing.php">Preço</a></li>-->
                        <li><a href="booking.php">Reserva</a></li>
                        <li><a href="events.php">Eventos</a></li>
                        <li><a href="contact.php">Contatos</a></li>
                    </ul>
            <div class="clear"></div>
        </div>
    </div>
</body>