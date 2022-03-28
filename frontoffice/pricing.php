<?php
	include("./header/header.php");
?>
<div class="main">
    <div class="section group">
        <div class="col_1_of_2 span_1_of_2">
            <div class="grid1">
                <h3 class="head">Promoções de hoje</h3>
				<?php
					$consulta = "SELECT * FROM produtos WHERE Promocao = 1";

					if($result = executarSQL($consulta)){
						while($row = mysqli_fetch_array($result)){
							echo "<h5>".$row["Nome_Produto"]."&nbsp&nbsp".$row["Desconto"]."% &nbsp&nbsp
								<del>".$row["Preco_Produto"]."</del>&nbsp&nbsp".($row["Preco_Produto"]) *  ($row["Desconto"] / 100)."€"."</h5>";
						}
					}
				?>
            </div>
            <ul class="hover-img">
                <li>
                    <img src="images/pic17.jpg" alt="" />
                </li>
            </ul>
        </div>
        <div class="clear"></div>
    </div>
    <div class="pricing">
        <div class="col_1_of_3 span_1_of_3">
            <div class="inner-block">
                <h3 class='top-2'>Pequeno almoço</h3>
                <?php
					$consulta = "SELECT * FROM produtos WHERE Tipo_Produto = 22";

					if($result = executarSQL($consulta)){
						while($row = mysqli_fetch_array($result)){
							echo "<ul class='list-1 top-1 bot-2'>";
							echo "<li>";
							echo "<a href='#'>".$row["Nome_Produto"]."</a>";
							echo "<span>".$row["Preco_Produto"]."€</span>";
							echo "<strong>"."&nbsp"."</strong>";
							echo "</li>";
							echo "</ul>";
						}
					}
				?>

                <h3>Entradas</h3>
                <?php
					$consulta = "SELECT * FROM produtos WHERE Tipo_Produto = 26";

					if($result = executarSQL($consulta)){
						while($row = mysqli_fetch_array($result)){
							echo "<ul class='list-1 top-4'>";
							echo "<li>";
							echo "<a href='#'>".$row["Nome_Produto"]."</a>";
							echo "<span>".$row["Preco_Produto"]."€</span>";
							echo "<strong>"."&nbsp"."</strong>";
							echo "</li>";
							echo "</ul>";
						}
					}
				?>
            </div>
        </div>

        <div class="col_1_of_3 span_1_of_3">
            <div class="inner-block">
                <h3 class="top-2">Almoço</h3>
                <?php
					$consulta = "SELECT * FROM produtos WHERE Tipo_Produto = 23";
						
					if($result = executarSQL($consulta)){
						while($row = mysqli_fetch_array($result)){
							echo "<ul class='list-1 top-4'>";
							echo "<li>";
							echo "<a href='#'>".$row["Nome_Produto"]."</a>";
							echo "<span>".$row["Preco_Produto"]."€</span>";
							echo "<strong>"."&nbsp"."</strong>";
							echo "</li>";
							echo "</ul>";
						}
					}
				?>

                <h3 class="top-2">Bebidas</h3>
                <?php
					$consulta = "SELECT * FROM produtos WHERE Tipo_Produto = 24";

					if($result = executarSQL($consulta)){
						while($row = mysqli_fetch_array($result)){
							echo "<ul class='list-1 top-4'>";
							echo "<li>";
							echo "<a href='#'>".$row["Nome_Produto"]."</a>";
							echo "<span>".$row["Preco_Produto"]."€</span>";
							echo "<strong>"."&nbsp"."</strong>";
							echo "</li>";
						echo "</ul>";
						}
				 	}
				?>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<?php
	include("./footer/footer.php");
?>
</body>
</html>