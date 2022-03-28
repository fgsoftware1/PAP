<?php
    include("../utils/conexao.inc.php");

    $id = $_GET["ID"];

    if(isset($id)){
        try {
            executarSQL("DELETE FROM tipo_utilizador WHERE ID_Tipo_Utilizador = ".$id."");
    
            header("Location: ./list_user_types.php");
        } catch (Exception $erro) {
            echo $erro->getMessage();
        }
    }else{
        echo "nao foi possivel eliminar dados";
        die();
    }
?>