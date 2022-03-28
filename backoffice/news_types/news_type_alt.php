<?php
    include("../utils/conexao.inc.php");

    $news_type_active = $_POST["news_type_active"]; //tipo de noticia ativo?
    $news_type_name = $_POST["news_type_name"];     //nome do tipo de noticia

    try {
        executarSQL("UPDATE tipo_noticia
        SET Tipo_Noticia = '".$news_type_name."', Ativo = '".$news_type_active."'
        WHERE ID_Tipo_Noticia = ".$_GET["ID"]."");

        header("Location: ./list_news_type.php");
    } catch (Exception $erro) {
        echo $erro->getMessage();
    }
?>