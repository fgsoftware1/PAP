<!doctype html>
<html lang="en" class="h-100">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
		<meta name="generator" content="Hugo 0.88.1">
		<title>products list</title>
		<!-- Bootstrap CSS -->
		<link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sticky-footer-navbar/">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

		<link href="css/sticky-footer-navbar.css" rel="stylesheet">
		<link href="css/backoffice.css" rel="stylesheet">

	</head>
	<body class="d-flex flex-column h-100">
		<?php
			include("../utils/conexao.inc.php");
			include("../header/header.php");
		?>

		<main class="flex-shrink-0">
			<div class="container">
				<h1 class="mt-5">Listagem produtos</h1>
				<br>
				</br>
				<a href="./create_product.php">
					<button type="button" class="btn btn-primary">Inserir produto</button>
				</a>
				<br>
				</br>
				<table class="table table-striped">
					<thead>
						<tr>
							<th scope="col">ID_Produto</th>
							<!--<th scope="col">Tipo</th>-->
							<th scope="col">Nome</th>
							<th scope="col">Descricao</th>
							<th scope="col">Ingredientes</th>
							<th scope="col">Preco</th>
							<th scope="col">promocao</th>
							<th scope="col">Desconto</th>
							<th scope="col">Ativo</th>
							<th scope="col">Operações</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$n_registos_pagina = 10;
							//qual a página que estamos?
							$pagina_atual = intval(isset($_GET['pagina']) ? $_GET['pagina'] : 1);

							if($pagina_atual == 1){
								$query = "SELECT * FROM produtos
								LIMIT ".intval($pagina_atual -1).", ".$n_registos_pagina."" ;
							}else{
								$query = "SELECT * FROM produtos
								LIMIT ".intval(($pagina_atual -1 * $n_registos_pagina).", ".$n_registos_pagina)."";
							}

							if($result = executarSQL($query)){
								while($row = mysqli_fetch_array($result)){
									echo "<tr>";
										echo "<td>".$row["ID_Produto"]."</td>";
										//echo "<td>".$row["Tipo_Produto"]."</td>";
										echo "<td>".$row["Nome_Produto"]."</td>";
										echo "<td>".$row["Descricao_Produto"]."</td>";
										echo "<td>".$row["Ingredientes"]."</td>";
																							//dp(decimal places)
										echo "<td>".number_format((float)$row["Preco_Produto"], 2 )."</td>";
										echo "<td>",$row["Promocao"],"</td>";
										echo "<td>".$row["Desconto"]."</td>";
										echo "<td>".$row["Imagem"]."</td>";
										echo "<td>".$row["Ativo"]."</td>";
										echo "<td>
											<a href='./create_product.php?ID=".$row["ID_Produto"]."'>
												<button type='button' class='btn btn-warning'>Alterar</button>
											</a>
											<a href='./script_del_product.php?ID=".$row["ID_Produto"]."'>
												<button type='button' class='btn btn-danger'>Remover</button>
											</a>
										</td>";
									echo "</tr>";
								}
							}else{
								echo "Erro na consulta a base de dados";
							}
						?>
					</tbody>
				</table>
				<nav aria-label="Page navigation example">
					<ul class="pagination justify-content-end">
						<li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">Previous</a></li>
							<?php
								$total_registos = 0;
								$query1 = "SELECT * FROM produtos";
								$result1 = executarSQL($query1);
								$total_registos = mysqli_num_rows($result1);
								//calcula o número de páginações
								$paginações = intval($total_registos / $n_registos_pagina);

								for($i = 0; $i <= $paginações; $i++){
									if($pagina_atual == $i + 1){
										echo "<li class='page-item active'><a class='page-link' href='list_products.php?pagina=".($i + 1)."'>".($i + 1)."</a></li>";
									}else{
										echo "<li class='page-item'><a class='page-link' href='list_products.php?pagina=".($i + 1)."'>".($i + 1)."</a></li>";
									}
								}
							?>
						<li class="page-item"><a class="page-link" href="#">Next</a></li>
					</ul>
				</nav>
			</div>
		</main>

		<footer class="footer mt-auto py-3 bg-light">
			<div class="container">
				<span class="text-muted">Place sticky footer content here.</span>
			</div>
		</footer>
		<!--Bootstrap and Popper-->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	</body>
</html>
