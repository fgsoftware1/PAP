<?php 
	include("./header/header.php"); 
?>
<div class="main">
	<div class="content-bottom">
		<?php
			$consulta = "SELECT * FROM noticias WHERE ID_tipo_Noticia = 9";

			if($result = executarSQL($consulta)){
				while($row = mysqli_fetch_array($result)){
					echo "<div class='col_1_of_4 span_1_of_4'>";
					echo "<img src='../".$row["Imagem"]."' alt='' height='250' width='475'/>";
					echo "<div class='texto_news'>";
						echo "<div class='bottom-head'>";
							echo "<h5>".$row["Titulo"]."</h5>";
							echo "<p>".substr($row["Conteudo"], 0, 150)." (...) </p></div>";
							echo "<div class='but'>";
								echo "<a href='./single_news.php?ID=".$row["ID_Noticia"]."'class='btn1 btn-8 btn-8a'>Ler</a>";
							echo "</div>";
						echo "</div>";
					echo "</div>";
				}
			}
		?>
		<div class="clear"></div> 
	</div>
</div>
<?php 
	include("./footer/footer.php"); 
?>
</body>
</html>