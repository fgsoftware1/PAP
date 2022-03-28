<?php
    include("../utils/conexao.inc.php");

    $id = $_GET["ID"];

    if(isset($id)){
        try {
            executarSQL("DELETE FROM produtos WHERE ID_Produto = ".$id."");
    
            header("Location: ./list_products.php");
        } catch (Exception $erro) {
            echo $erro->getMessage();
        }
    }else{
        echo "nao foi possivel eliminar dados";
        die();
    }
?>