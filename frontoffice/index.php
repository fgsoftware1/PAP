<?php 
	include("./header/header.php"); 
?>

<!--<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
	<?php
	  	$i = 0;
		$consulta = "SELECT * FROM produtos";
		
		if($result = executarSQL($consulta)){
			while($row = mysqli_fetch_array($result)){
				$i++;

				if($i <= 1){
					echo "<div class='carousel-item active'>
						<img class='d-block w-100' src='../".$row["Imagem"]."' alt='".$i."'>
				  	</div>";
				}else{
					echo "<div class='carousel-item'>
						<img class='d-block w-100' src='../".$row["Imagem"]."' alt='".$i."'>
				  	</div>";
				}
			}
		}
	?> 
	</div>
	<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>-->

<div class="main">
	<div class="content-bottom">
		<?php
			$consulta = "SELECT * FROM noticias LIMIT 0,3";

			if($result = executarSQL($consulta)){
				while($row = mysqli_fetch_array($result)){
					echo "<div class='col_1_of_3 span_1_of_3'>";
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