<?php
    include("../utils/conexao.inc.php");

    //$id_user = $_POST["id_user"];
    $news_type_active = $_POST["news_type_active"]; //tipo de noticia ativo?
    $news_type_name = $_POST["news_type_name"];     //nome do tipo de noticia

    try {
        executarSQL("INSERT INTO tipo_noticia(Tipo_Noticia, Ativo) 
                     VALUES ('".$news_type_name."','".$news_type_active."')");

        header("Location: ./list_news_type.php");
    } catch (Exception $erro) {
        echo $erro->getMessage();
    }
?>