<?php
    include("../utils/conexao.inc.php");

    $product_type = $_POST["product_type"];     //tipo do produto
    $nome = $_POST["produto"];                  //nome do produto
    $descricao = $_POST["descricao"];           //descrição do produto
    $preco = $_POST["preco"];                   //preço do produto
    $promocao = $_POST["promocao"];             //promocao?
    $desconto = $_POST["desconto"];             //desconto do produto
    $product_active = $_POST["product_active"]; //produto ativo?
    $filename = 'imagens/'.basename($_FILES["fileUpload"]["name"]);	//imagem

	if (move_uploaded_file($_FILES["fileUpload"]["tmp_name"],  "../../".$filename)) {
        try{
            executarSQL("INSERT INTO produtos (Tipo_Produto, Nome_Produto, Descricao_Produto, Preco_Produto, Promocao, Desconto, Imagem, Ativo)
                        VALUES(".$product_type.", '".$nome."', '".$descricao."', ".$preco.", ".$promocao.", ".$desconto.", '".$filename."', ".$product_active.")");

            header("Location: ./list_products.php");
        }catch(Exception $e){
            echo $e->getMessage();
        }
	} else {
		echo "<h1>Erro ao carregar imagem!</h1>";
	}
?>