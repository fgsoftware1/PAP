<?php
  include("../utils/conexao.inc.php");

  $nome_botao = "Inserir";
  $action_page = "./script_ins_product.php";
  $title_page = "Registar";

  if(isset($_GET["ID"])){
	$resultado = executarSQL("SELECT * FROM produtos WHERE ID_Produto = ".$_GET["ID"]."");
	$row = mysqli_fetch_array($resultado);

	$product_type = $row["Tipo_Produto"];
	$nome = $row["Nome_Produto"];
	$descricao = $row["Descricao_Produto"];
	$preco = $row["Preco_Produto"];
	$promocao = $row["Promocao"];
	$active = $row["Ativo"];
	$nome_botao = "Alterar";
	$action_page = "./script_alt_product.php?ID=".$_GET["ID"]."";
	$title_page = "Alterar produto";
  }
?>
<html> 
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
	<meta name="generator" content="Hugo 0.88.1">
	<title>products list</title>

	<link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sticky-footer-navbar/">
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<!-- Custom styles for this template -->
	<link href="css/sticky-footer-navbar.css" rel="stylesheet">

	  <style>
		.bd-placeholder-img {
		  font-size: 1.125rem;
		  text-anchor: middle;
		  -webkit-user-select: none;
		  -moz-user-select: none;
		  user-select: none;
		}

		@media (min-width: 768px) {
		  .bd-placeholder-img-lg {
			font-size: 3.5rem;
		  }
		}
	  </style>
	  <title>registar produto</title>
	</head>

	<body class="d-flex flex-column h-100">
	<?php
	  include("../header/header.php");
	?>
	<br>
	<br>
	<br>
	<main class="flex-shrink-0">
	  <div class="container">
		<h2>registar produto</h2>
		<form action="<?php echo $action_page ?>" method="POST" enctype="multipart/form-data">
			<div class="mb-3">
			  <label for="tipo_produto" class="form-label">Tipo produto</label>
			  <select class="form-select" id="product_type" name="product_type">
				<?php
				  $resultado_tipos = executarSQL("SELECT * FROM tipo_produto");
				  while($row = mysqli_fetch_array($resultado_tipos)){
					echo "<option value='".$row["ID_Tipo_Produto"]."'".(isset($product_type) ? ($product_type == $row["ID_Tipo_Produto"] ? 'selected' : '') : '')." >".$row["Tipo_Produto"]."</option>";
				  }
				?>
			  </select>
			<div class="mb-3">
			  	<label for="nome" class="form-label">nome do produto</label>
			  	<input type="text" class="form-control" id="produto" name="produto" value="<?php echo (isset($nome) ? $nome : ''); ?>" />
			</div>
			<div class="mb-3">
				<label for="descricao" class="form-label">descricao</label>
				<input type="text" class="form-control" id="descricao" name="descricao"  value="<?php echo (isset($descricao) ? $descricao : ''); ?>"/>
			</div>
			<div class="mb-3">
			  	<label for="preco" class="form-label">preco</label>
			  	<input type="text" class="form-control" id="preco" name="preco" value="<?php echo (isset($preco) ? $preco : ''); ?>" /> 
			</div>
			<div class="mb-3">
				<label for="promocao" class="form-label">promocao?</label>
				<select class="form-select" id="promocao" name="promocao">
					<option value="0" <?php echo (isset($promocao) ? ($promocao == '0' ? 'selected' : '') : ''); ?>>Nao</option>
					<option value="1" <?php echo (isset($promocao) ? ($promocao == '1' ? 'selected' : '') : ''); ?>>Sim</option>
				</select>
			</div>
			<div class="mb-3">
			  	<label for="desconto" class="form-label">desconto</label>
			  	<input type="text" class="form-control" id="desconto" name="desconto" value="<?php echo (isset($desconto) ? $desconto : ''); ?>" /> 
			</div>
			<div class="mb-3">
				<label for="product_active" class="form-label">produto ativo?</label>
				<select class="form-select" id="product_active" name="product_active">
				  <option value="0" <?php echo (isset($active) ? ($active == '0' ? 'selected' : '') : ''); ?>>Nao</option>
				  <option value="1" <?php echo (isset($active) ? ($active == '1' ? 'selected' : '') : ''); ?>>Sim</option>
				</select>
			</div>  
			<br>
			<!--image preview-->
			<div class="user-image mb-3 text-center">
				<div style="width: 100px; height: 100px; overflow: hidden; background: #cccccc; margin: 0 auto">
					<img src="..." class="figure-img img-fluid rounded" id="imgPlaceholder" alt="">
				</div>
			</div>
			<!--image input-->
			<div class="custom-file">
				<input type="file" name="fileUpload" class="custom-file-input" id="chooseFile">
			</div>

			<button type="submit" name="submit" class="btn btn-primary btn-block mt-4">
				<?php echo $nome_botao ?>
			</button>
		</form>
	  </div>
	</main>    
	<!-- jQuery -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="../../frontoffice/utils/image_preview.js"></script>
  </body>
</html>