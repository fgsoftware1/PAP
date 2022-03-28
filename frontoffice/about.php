<?php 
	include("./header/header.php"); 
?>
<div class="main">
   	<div class="about-top">
		<div class="col span_1_of_about">
			<?php
				$resultado = executarSQL("SELECT n.*, tn.* FROM noticias n, tipo_noticia tn WHERE n.ID_tipo_Noticia = tn.ID_tipo_Noticia AND n.ID_tipo_Noticia = 8 ");
				$row = mysqli_fetch_array($resultado);
			?>
			<h3><?php echo $row["Titulo"]; ?></h3>
			<div class="about-img">
				<img src="<?php echo "../".$row["Imagem"]; ?>" alt=""/>
			</div>
			<div class="about-desc">
				<p><?php echo $row["Conteudo"]; ?></p>
			</div>
			<div class="clear"></div>
			</div>
			<div class="clear"></div>
		</div>

		<hr/>
		<br/>
		<h2><center>Sugestões</center></h2>
   		
		<div class="content-bottom">
			<?php
				$consulta = "SELECT * FROM produtos LIMIT 0,3";

				if($result = executarSQL($consulta)){
					while($row = mysqli_fetch_array($result)){
						echo "<div class='col_1_of_3 span_1_of_3'>";
						echo "<img src='../".$row["Imagem"]."' alt='' height='250' width='475'/>";
						echo "<div class='texto_news'>";
							echo "<div class='bottom-head'>";
								echo "<h5>".$row["Nome_Produto"]."</h5>";
							echo "</div>";
						echo "</div>";
						echo "</div>";
					}
				}
			?>
			<div class="clear"></div> 
		</div>
	</div>
</div>
<?php 
	include("./footer/footer.php"); 
?>
</body>
</html>

    	
    	
            