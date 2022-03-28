<?php
    include("../utils/conexao.inc.php");
    
    $nome = $_POST["nome"];
    $datanasc = $_POST["datanasc"];
    $email = $_POST["email"];
    $pass = password_hash($_POST["pass"], PASSWORD_DEFAULT);

    try {
        executarSQL("INSERT INTO utilizadores (Tipo_Utilizador, Nome, Data_Nasc, Email, Ativo, Pass) 
                    VALUES (2, '".$nome."', '".$datanasc."', '".$email."', 1, '".$pass."')"); 
                
        header("Location: ../login.php");
    } catch (Exception $erro) {
        echo $erro->getMessage();
    }
?>