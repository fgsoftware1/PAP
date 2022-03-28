<?php
    include("../utils/conexao.inc.php");

    //$id_user = $_POST["id_user"];
    $user_type = $_POST["user_type"];               //tipo do utilizador   
    $user_type_active = $_POST["user_type_active"]; //tipo de utilizador ativo?

    try {
        executarSQL("INSERT INTO tipo_utilizador (Tipo_Utilizador, Ativo) 
                    VALUES ('".$user_type."', '".$user_type_active."')");

        header("Location: ./list_user_types.php");
    } catch (Exception $erro) {
        echo $erro->getMessage();
    }
?>