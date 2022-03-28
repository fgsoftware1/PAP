<?php
    include("../utils/conexao.inc.php");

    //id_user = $_POST["id_user"];
    $user = $_POST["user"];                                     //nome do utilizador
    $pass = password_hash($_POST["pass"], PASSWORD_DEFAULT);    //password do utilizador
    $user_active = $_POST["user_active"];                       //utilizador ativo?
    $user_type = $_POST["user_type"];                           //tipo do utilizador
    $data_nasc = $_POST["data_nasc"];                           //data de nascimento do utilizador     
    $email = $_POST["email"];                                   //email do utilizador                              

    try {
        executarSQL("INSERT INTO utilizadores (Tipo_Utilizador, Nome, Data_Nasc, Email, Ativo, Pass) 
                    VALUES (".$user_type.", '".$user."', '".$morada."', '".$email."',".$user_active.", '".$pass."')"); 
                    
        header("Location: ./list_users.php");
    } catch (Exception $erro) {
        echo $erro->getMessage();
    }
?>