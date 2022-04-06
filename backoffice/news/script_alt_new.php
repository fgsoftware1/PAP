<?php
    include("../utils/conexao.inc.php");

    $nome = $_POST["titulo"];
    //nome da noticia
    $conteudo = $_POST["conteudo"];         //conteudo da noticia
    $data = $_POST["data"];                 //data da noticia
    $tipo_noticia = $_POST["tipo_noticia"]; //tipo da noticia
    $ativo = $_POST["ativo"];               //noticia ativa?
    $autor = $_POST["autor"];               //autor da noticia
    $filename = 'imagens/'.basename($_FILES["fileUpload"]["name"]);	//imagem

    if (move_uploaded_file($_FILES["fileUpload"]["tmp_name"], "../../".$filename)) {
        executarSQL("UPDATE noticias SET ID_Tipo_Noticia = ".$tipo_noticia.", Titulo = '".$nome."', Conteudo = '".$conteudo."', Data = '".$data."',
                    ID_Utilizador = ".$autor.", Imagem = '".$filename."', Ativo = ".$ativo." WHERE ID_Noticia = ".$_GET["ID"]."");

        header("Location: ./list_news.php");
	} else {
		echo "<h1>Erro ao carregar imagem!</h1>";
	}
?>