<?php
	include("../utils/conexao.inc.php");

    $product = $_POST["product"];
    $places = $_POST["places"];
    $time = $_POST["time"];
    $date = $_POST["date"];
    $user = $_POST["user"];
    $status = $_POST["status"];

    INSERT INTO reservas (ID_Cliente, ID_Produto, Lugares, Data, Hora, Ativo)
				    VALUES ('"1"', ".$product.", ".$places.", '".$date."', '".$time."', '"1"')
    try{
		executarSQL("INSERT INTO reservas(ID_Cliente, ID_Produto, Lugares, Data, Hora, Ativo)
                    VALUES ('"1"', ".$product.", '".$places."', '".$date."', '".$time."', '"1"')");

		header("Location: ./list_news.php");
    }catch(Exception $e){
        echo $e->getMessage();
    }
?> 