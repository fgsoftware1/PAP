<?php
    include("../utils/conexao.inc.php");

    $id = $_GET["ID"];

    if(isset($id)){
        try {
            executarSQL("DELETE FROM reservas WHERE ID_Reserva = ".$id."");
    
            header("Location: ../index.php");
        } catch (Exception $erro) {
            echo $erro->getMessage();
        }
    }else{
        echo "nao foi possivel eliminar dados";
        die();
    }
?>