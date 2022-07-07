<!DOCTYPE html>
<html lang="pt" class="scroll-smooth">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Spicy foods</title>
	<?php
	include "./includes/favicon.php";
	include "./includes/fonts.php"
	?>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@48,400,0,0" />
	<link rel="stylesheet" href="../dist/output.css">
</head>

<body>
	<div class="mx-auto">
		<?php
		"<a name='top'>";
		include "./includes/header.php"
		?>

		<?php
		include "./includes/menu.php"
		?>

		<a name="inicio">
		<section class="bg-white h-screen">
			Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore consectetur dolor ipsum reiciendis modi cupiditate dolorum iure. Quo, nemo. Hic soluta iure voluptatem dignissimos cum omnis, aperiam obcaecati corrupti fugit.
		</section>
		<a name="ementas">
		<section class="bg-cor4 h-screen">
			Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis fuga esse quasi itaque asperiores harum, ipsa quisquam. Ab, tempora? Et odit quo non alias maiores ea assumenda recusandae cupiditate unde.
		</section>
		<a name="reservar">
		<section class="bg-white h-screen">
			Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel consectetur possimus aut repudiandae esse reprehenderit, beatae, dolore distinctio minus similique eligendi necessitatibus impedit atque perferendis. Inventore ducimus nesciunt eligendi repellat.
		</section>
		<a name="equipa">
		<section class="flex w-full h-auto bg-cor3">
			<h1 class="font-medium font-gulzar">Equipa</h1>
			<div class="w-1/3 h-fit max-w-sm rounded overflow-hidden shadow-2xl bg-cor7">
				<img class="w-auto h-auto" src="../res/img/joao_cura.webp" alt="João Cura">
				<div class="px-6 py-4">
					<div class="font-bold text-xl mb-2">João Cura</div>
					<p class="text-gray-700">
						Formou-se na Escola de Hotelaria e Turismo de Coimbra, em Coimbra. Depois de passagens em grandes cozinhas de Espanha como o Restaurante Dos Cielos dos Hermanos Torres em Barcelona (1*Michelin), Restaurant Monvinic em Barcelona, Restaurante Cinc Sentits em Barcelona(1*Michelin) regressou a Portugal em finais de 2016 e motivado pelas suas viagens e vivências, abre o seu primeiro restaurante de cozinha de autor, no Porto.
					</p>
				</div>
			</div>
			<div class="w-1/3 max-w-sm rounded overflow-hidden shadow-2xl bg-cor7">
				<img class="w-auto h-auto" src="../res/img/alex_atala.webp" alt="Alex Atala">
				<div class="px-6 py-4">
					<div class="font-bold text-xl mb-2">Alex Atala</div>
					<p class="text-gray-700 ">
						Formou-se na Escola de Hotelaria e Turismo de Coimbra, em Coimbra. Depois de passagens em grandes cozinhas de Espanha como o Restaurante Dos Cielos dos Hermanos Torres em Barcelona (1*Michelin), Restaurant Monvinic em Barcelona, Restaurante Cinc Sentits em Barcelona(1*Michelin) regressou a Portugal em finais de 2016 e motivado pelas suas viagens e vivências, abre o seu primeiro restaurante de cozinha de autor, no Porto.
					</p>
				</div>
			</div>
			<div class="w-1/3">

			</div>
		</section>

		<?php
		include "./includes/footer.php"
		?>

		<button class="fixed z-90 bottom-10 right-8 bg-cor6 w-12 h-12 rounded-md drop-shadow-lg flex justify-center items-center text-black text-4xl hover:text-white hover:drop-shadow-2xl">
			<a href="#top" class="font-bold align-middle sticky">
				<span class="material-symbols-sharp">
					arrow_upward
				</span>
			</a>
		</button>
	</div>
</body>

</html>