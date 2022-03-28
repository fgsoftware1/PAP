<?php
	include("../utils/conexao.inc.php");

	$nome = $_POST["titulo"];              	//nome da noticia
	$conteudo = $_POST["conteudo"];         //conteudo da noticia
	$data = $_POST["data"];                 //data da noticia
	$tipo_noticia = $_POST["tipo_noticia"]; //tipo da noticia
	$ativo = $_POST["ativo"];               //noticia ativa?
	$autor = $_POST["autor"];              	//autor da noticia
	$filename = 'imagens/'.basename($_FILES["fileUpload"]["name"]);	//imagem

	if (move_uploaded_file($_FILES["fileUpload"]["tmp_name"],  "../../".$filename)) {
		// echo "INSERT INTO noticias (ID_Tipo_Noticia, Titulo, Conteudo, Data, ID_Utilizador, Imagem)
		// VALUES (".$tipo_noticia.", '".$nome."', '".$conteudo."', '".$data."', ".$autor.", '".$filename."')";

		executarSQL("INSERT INTO noticias (ID_Tipo_Noticia, Titulo, Conteudo, Data, ID_Utilizador, Imagem, Ativo)
							VALUES (".$tipo_noticia.", '".$nome."', '".$conteudo."', '".$data."', ".$autor.", '".$filename."', '".$ativo."')");
		header("Location: ./list_news.php");
	} else {
		echo "<h1>Erro ao carregar imagem!</h1>";
	} 
?> 