<?php
    include("../utils/conexao.inc.php");

    $id = $_GET["ID"];

    if(isset($id)){
        try {
            executarSQL("DELETE FROM utilizadores WHERE ID_Utilizador = ".$id."");
    
            header("Location: ./list_users.php");
        } catch (Exception $erro) {
            echo $erro->getMessage();
        }
    }else{
        echo "nao foi possivel eliminar dados";
        die();
    }
?>