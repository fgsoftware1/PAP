<?php
    include("../utils/conexao.inc.php");

    if(isset($_GET["ID"])){
        //$id_user = $_POST["id_user"];
        $user = $_POST["user"];                                     //nome do utilizador
        $pass = password_hash($_POST["pass"], PASSWORD_DEFAULT);    //password do utilizador
        $user_active = $_POST["user_active"];                       //utilizador ativo?
        $user_type = $_POST["user_type"];                           //tipo do utilizador          
        $data_nasc = $_POST["data_nasc"];                           //data de nascimento do utilizador        
        $email = $_POST["email"];                                   //email do utilizador                

        try {
            executarSQL("UPDATE utilizadores
                         SET Tipo_Utilizador = ".$user_type.", Nome = '".$user."',
                         Data_Nasc = '".$data_nasc."', Email = '".$email."', Pass = '".$pass."', Ativo = ".$user_active."
                         WHERE ID_Utilizador = ".$_GET["ID"]."");

            header("Location: ./list_users.php");
        } catch (Exception $erro) {
            echo $erro->getMessage();
        }
    }else{
        echo "nao foi possivel alterar dados";
        die();
    }
?>