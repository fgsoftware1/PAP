<?php
    $conn = mysqli_connect('localhost', 'root', '', 'pap', '3306');

    if(!$conn)
        die('erro ao ligar a base de dados');


    function ementa($id, $conn){
        $data = mysqli_query($conn, "SELECT * FROM ementas WHERE ID=$id");
        $row = mysqli_fetch_array($data);

        return $row[2];
    }

    function tipoUtilizador($id, $conn){
        $data = mysqli_query($conn, "SELECT * FROM tipo_utilizador WHERE ID=$id");
        $row2 = mysqli_fetch_array($data);
        return $row2[1];
    }
?>