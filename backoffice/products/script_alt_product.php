<?php
    include("../utils/conexao.inc.php");

    if(isset($_GET["ID"])) {
        $product_type = $_POST["product_type"];     //tipo do produto
        $nome = $_POST["produto"];                  //nome do produto
        $descricao = $_POST["descricao"];           //descrição do produto
        $preco = $_POST["preco"];                   //preço do produto
        $desconto = $_POST["desconto"];             //desconto do produto
        $product_active = $_POST["product_active"]; //produto ativo?
        $filename = 'imagens/'.basename($_FILES["fileUpload"]["name"]);	//imagem

        if (move_uploaded_file($_FILES["fileUpload"]["tmp_name"], "../../".$filename)) {
            // echo "UPDATE produtos
            // SET Tipo_Produto = ".$product_type.", Nome_Produto = '".$nome."', Descricao_Produto = '".$descricao."', 
            // Preco_Produto = ".$preco.", Imagem = '"..$filename"' Ativo = ".$product_active." WHERE ID_Produto = ".$_GET["ID"]."";
            executarSQL("UPDATE produtos
                        SET Tipo_Produto = ".$product_type.", Nome_Produto = '".$nome."', Descricao_Produto = '".$descricao."', 
                        Preco_Produto = ".$preco.", Desconto = ".$desconto.", Imagem = '".$filename."', Ativo = ".$product_active." WHERE ID_Produto = ".$_GET["ID"]."");

            header("Location: ./list_products.php");
        } else {
            echo "<h1>Erro ao carregar imagem!</h1>";
        } 
    }
?> 