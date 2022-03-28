<?php
    //função para conectar a base de dados
    function conexaoDB(){
        //variaveis para ligação à base de dados
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "pap";

        try{
            $conn = mysqli_connect($servername, $username, $password, $database);
        }
        catch(mysqli_sql_exception $mensagem) {
            echo nl2br("Erro: Não foi possivel conectar ao MySQL".$mensagem);
            throw $mensagem;
        }

        //se a ligacao foi bem sucedida, devolve a conexão
        return $conn;
    }

    //função para executar operações na base de dados
    function executarSQL($sql_command){
        //abrir a conexao com a base de dados
        $conn = conexaoDB();
        $resultado = mysqli_query($conn, $sql_command);
        //fechar a conexao com a base de dados
        //fecharDB($conn);

        return $resultado;
    }

    function fecharDB($conn){
        mysqli_close($conn);
    }

?>