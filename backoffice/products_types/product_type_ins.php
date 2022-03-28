<?php
    include("../utils/conexao.inc.php");

    $product_type_active = $_POST["product_type_active"];   //tipo de produto ativo?
    $product_type_name = $_POST["product_type_name"];       //nome do tipo de produto

    try {
        executarSQL("INSERT INTO tipo_produto (Tipo_Produto, Ativo)
                     VALUES ('".$product_type_name."','".$product_type_active."')");

        header("Location: ./list_product_types.php");
    } catch (Exception $erro) {
        echo $erro->getMessage();
    }
?>