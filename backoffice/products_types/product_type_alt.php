<?php
  include("../utils/conexao.inc.php");

  //$id_user = $_POST["id_user"];
  $product_type_active = $_POST["product_type_active"];   //tipo de produto ativo?
  $product_type_name = $_POST["product_type_name"];       //nome do tipo de produto

  try {
    executarSQL("UPDATE tipo_produto
    SET Tipo_Produto = '".$product_type_name."', Ativo = ".$product_type_active."
    WHERE ID_Tipo_Produto = ".$_GET["ID"]."");

    header("Location: ./list_product_types.php");
  }catch (Exception $erro) {
    echo $erro->getMessage();
  }
?>