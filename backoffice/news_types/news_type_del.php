<?php
    include("../utils/conexao.inc.php");

    $id = $_GET["ID"];

    if(isset($id)){
        try {
            executarSQL("DELETE FROM tipo_noticia WHERE ID_Tipo_Noticia = ".$id."");
    
            header("Location: ./list_news_type.php");
        } catch (Exception $erro) {
            echo $erro->getMessage();
        }
    }else{
        echo "nao foi possivel eliminar dados";
        die();
    }
?>