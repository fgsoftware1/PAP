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
    <div class="total">
        <div class="wrap">
            <div class="header">
                <div class="header-bot">
                    <div class="logo">
                        <a href="products.php"><img src="images/logo.png" alt="" /></a>
                    </div>
                    <div class="header_top_right">
                        <ul>
                            <li><a href="./login.php">Login</a></li>
                        </ul>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
        <div class="main">
            <div class="container-flex">
                <div class="row">
                    <?php
                        $consulta = "SELECT * FROM produtos WHERE ID_Produto = ".$_GET["ID"]." ";

                        if($result = executarSQL($consulta)){
                            while($row = mysqli_fetch_array($result)){
                                echo "<center>";
                                    echo "<h3>".$row["Nome_Produto"]."</h3>";
                                echo "</center>";
                                echo "<hr/>";
                                echo "<br/>";
                                echo "<div class='col-md-4'>";
                                    echo "<img src='../".$row["Imagem"]."'  />";
                                echo "</div>";
                                echo "<div class='col-md-8'>";
                                    echo "<p>".$row["Descricao_Produto"]."</p>";
                                echo "</div>";
                                echo "<div class='col-md-8'>";
                                    if($row["Promocao"] = 1){
                                        echo number_format((float)$row["Preco_Produto"] - ($row["Preco_Produto"] * ($row["Desconto"] / 100)), 2 )."€"."</h5>";
                                    }else{
                                        echo $row["Preco_Produto"];
                                    }
                                echo "</div>";
								echo "<div class='col-md-8'>";
									echo "<h3>Ingredientes</h3>";
									echo "<p>".$row["Ingredientes"]."</p>";
								echo "</div>";
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
<?php
	include("./footer/footer.php");
?>
</body>
</html>