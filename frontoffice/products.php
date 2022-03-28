<?php 
	include("./header/header.php"); 
?>		
<div class="main">
	<div class="container-fluid">
		<div class="row">
			<center>
				<h1>Promoções</h1>
			</center>
			<?php
			$consulta = "SELECT * FROM produtos WHERE Promocao = 1 LIMIT 0,4";

			if($result = executarSQL($consulta)){
				while($row = mysqli_fetch_array($result)){
					echo "<div class='col-md-3'>";
						echo "<center>";
							echo "<h4>".$row["Nome_Produto"]."</h4>";
							echo "(".$row["Desconto"]."%)";
						echo "</center>";
						echo "<img src='../".$row["Imagem"]."' height='320' width='640'>";
						echo "<center>";
							echo "<del>".$row["Preco_Produto"]."€</del>";
							echo "&nbsp&nbsp";																					//dp
							echo number_format((float)$row["Preco_Produto"] - ($row["Preco_Produto"] * ($row["Desconto"] / 100)), 2 )."€"."</h5>";
						echo "</center>";
					echo "</div>";
				}
			}
			?>
		</div>
		<hr>
		<div class="row">
			<center>
				<h1>Produtos</h1>
			</center>
			<?php
				$consulta = "SELECT * FROM produtos";

				if($result = executarSQL($consulta)){
					while($row = mysqli_fetch_array($result)){
						echo "<div class='col-sm-3'>";
							echo "<center>";
								echo "<h3>".$row["Nome_Produto"]."";
								echo "<img src='../".$row["Imagem"]."' height='320' width='640'/>";
								echo $row["Preco_Produto"]."€";
							echo "</center>";
						echo "</div>";
					}
				}
			?>
		</div>
	</div>
</div>
<?php 
	include("./footer/footer.php"); 
?>