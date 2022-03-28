<?php
    include("../utils/conexao.inc.php");

    if(isset($_GET["ID"])){
        //$id_user = $_POST["id_user"];
        $user_type = $_POST["user_type"];               //tipo do utilizador 
        $user_type_active = $_POST["user_type_active"]; //tipo de utilizador ativo?

        try {
            executarSQL("UPDATE tipo_utilizador
            SET Tipo_Utilizador = '".$user_type."', Ativo = ".$user_type_active."
            WHERE ID_Tipo_Utilizador = ".$_GET["ID"]."");

            header("Location: ./list_user_types.php");
        } catch (Exception $erro) {
            echo $erro->getMessage();
        }
    }else{
        echo "nao foi possivel alterar dados";
        die();
    }
?>