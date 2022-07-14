<?php
    $conn = mysqli_connect('localhost', 'root', '', 'pap', '3306');

    if(!$conn)
        die('erro ao ligar a base de dados');
?>