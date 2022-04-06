<?php
include("../utils/conexao.inc.php");

$nome_botao = "Inserir";
$action_page = "./script_ins_new.php";
$title_page = "Registar";

if (isset($_GET["ID"])) {
	$resultado = executarSQL("SELECT * FROM  noticias WHERE ID_Noticia = " . $_GET["ID"] . "");
	$row = mysqli_fetch_array($resultado);

	$new_type = $row["ID_Tipo_Noticia"];
	$titulo = $row["Titulo"];
	$conteudo = $row["Conteudo"];
	$data = $row["Data"];
	$ativo = $row["Ativo"];
	$autor = $row["ID_Utilizador"];
	$imagem = $row["Imagem"];

	$nome_botao = "Alterar";
	$action_page = "./script_alt_new.php?ID=" . $_GET["ID"] . "";
	$title_page = "Alterar noticia";
}
?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
	<meta name="generator" content="Hugo 0.88.1">
	<title>registar noticia</title>
	<!-- Bootstrap CSS -->
	<link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sticky-footer-navbar/">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<link href="css/sticky-footer-navbar.css" rel="stylesheet">
	<link href="css/backoffice.css" rel="stylesheet">
</head>

<body class="d-flex flex-column h-100">
	<?php
	include("../header/header.php");
	?>
	<br>
	<br>
	<br>
	<br>
	<main class="flex-shrink-0">
		<div class="container">
			<h2>registar noticia</h2>
			<form action="<?php echo $action_page ?>" method="POST" enctype="multipart/form-data">
				<div class="mb-3">
					<label for="tipo_noticia" class="form-label">Tipo noticia</label>
					<select class="form-select" id="tipo_noticia" name="tipo_noticia">
						<?php
						$resultado_tipos = executarSQL("SELECT * FROM tipo_noticia");
						while ($row = mysqli_fetch_array($resultado_tipos)) {
							echo "<option value='" . $row["ID_Tipo_Noticia"] . "'" . (isset($new_type) ? ($new_type == $row["ID_Tipo_Noticia"] ? 'selected' : '') : '') . " >" . $row["Tipo_Noticia"] . "</option>";
						}
						?>
					</select>
				</div>
				<div class="mb-3">
					<label for="titulo" class="form-label">Titulo da noticia</label>
					<input type="text" class="form-control" id="titulo" name="titulo" value="<?php echo (isset($noticia) ? $noticia : ''); ?>" />
				</div>
				<div class="mb-3">
					<label for="conteudo" class="form-label">conteudo</label>
					<input type="text" class="form-control" id="conteudo" name="conteudo" value="<?php echo (isset($conteudo) ? $conteudo : ''); ?>" />
				</div>
				<div class="mb-3">
					<label for="data" class="form-label">data</label>
					<input type="date" class="form-control" id="data" name="data" value="<?php echo (isset($data) ? $data : ''); ?>" />
				</div>
				<div class="mb-3">
					<label for="ativo" class="form-label">noticia ativa?</label>
					<select class="form-select" id="ativo" name="ativo">
						<option value="0" <?php echo (isset($active) ? ($active == '0' ? 'selected' : '') : ''); ?>>Nao</option>
						<option value="1" <?php echo (isset($active) ? ($active == '1' ? 'selected' : '') : ''); ?>>Sim</option>
					</select>
				</div>
				<label for="autor" class="form-label">Autor</label>
				<select class="form-select" id="autor" name="autor">
					<?php
					$resultado_utilizadores = executarSQL("SELECT * FROM utilizadores");
					while ($row = mysqli_fetch_array($resultado_utilizadores)) {
						echo "<option value='" . $row["ID_Utilizador"] . "' " . (isset($autor) ? ($autor == $row["ID_Utilizador"] ? 'selected' : '') : '') . " >" . $row["Nome"] . "</option>";
					}
					?>
				</select>
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
	<!--jQuery-->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="../../frontoffice/scripts/image_preview.js"></script>
</body>
</html>