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
		<section class="flex flex-wrap justify-around w-full h-screen bg-cor3 items-center">
			<div class="w-96 pb-5 rounded-2xl shadow-2xl bg-cor7 flex flex-col">
				<div class="flex justify-center pt-6">
					<img class="rounded-full w-36" src="../res/img/joao_cura.png" alt="João Cura">
				</div>
				<div class="px-6 py-4">
					<div class="font-bold text-xl mb-2">João Cura</div>
					<p class="text-gray-700">
						Formou-se na Escola de Hotelaria e Turismo de Coimbra, em Coimbra. Depois de passagens em grandes cozinhas de Espanha como o Restaurante Dos Cielos dos Hermanos Torres em Barcelona (1*Michelin), Restaurant Monvinic em Barcelona, Restaurante Cinc Sentits em Barcelona(1*Michelin) regressou a Portugal em finais de 2016 e motivado pelas suas viagens e vivências, abre o seu primeiro restaurante de cozinha de autor, no Porto.
					</p>
				</div>
			</div>
			<div class="w-96 pb-5 rounded-2xl shadow-2xl bg-cor7 flex flex-col">
				<div class="flex justify-center pt-6">
					<img class="rounded-full w-36" src="../res/img/henrique_fogaca.png" alt="João Cura">
				</div>
				<div class="px-6 py-4">
					<div class="font-bold text-xl mb-2">Henrique Fogaça</div>
					<p class="text-gray-700">
						Formou-se na Escola de Hotelaria e Turismo de Coimbra, em Coimbra. Depois de passagens em grandes cozinhas de Espanha como o Restaurante Dos Cielos dos Hermanos Torres em Barcelona (1*Michelin), Restaurant Monvinic em Barcelona, Restaurante Cinc Sentits em Barcelona(1*Michelin) regressou a Portugal em finais de 2016 e motivado pelas suas viagens e vivências, abre o seu primeiro restaurante de cozinha de autor, no Porto.
					</p>
				</div>
			</div>
			<div class="w-96 pb-5 rounded-2xl shadow-2xl bg-cor7 flex flex-col">
				<div class="flex justify-center pt-6">
					<img class="rounded-full w-36" src="../res/img/joao_cura.png" alt="João Cura">
				</div>
				<div class="px-6 py-4">
					<div class="font-bold text-xl mb-2">João Cura</div>
					<p class="text-gray-700">
						Formou-se na Escola de Hotelaria e Turismo de Coimbra, em Coimbra. Depois de passagens em grandes cozinhas de Espanha como o Restaurante Dos Cielos dos Hermanos Torres em Barcelona (1*Michelin), Restaurant Monvinic em Barcelona, Restaurante Cinc Sentits em Barcelona(1*Michelin) regressou a Portugal em finais de 2016 e motivado pelas suas viagens e vivências, abre o seu primeiro restaurante de cozinha de autor, no Porto.
					</p>
				</div>
			</div>
		</section>
        <a name="contato">
		<section class="flex flex-wrap justify-around w-full h-screen bg-cor7 items-center">
            <form>
                <div class="mb-4">
                    <label class="flex text-sm font-medium text-white">Nome</label>
                    <input type="text" class="w-80 border-2 border-gray text-sm rounded-lg " placeholder="nome" required>
                </div>
                <div class="mb-4">
                    <label class="flex text-sm font-medium text-white">Email</label>
                    <input type="email" class="w-80 border-2 border-gray text-sm rounded-lg " placeholder="email" required>
                </div>
                <div class="mb-4">
                    <label class="flex text-sm font-medium text-white">Mensagem</label>
                    <textarea type="text" rows="5" cols="30" placeholder="mensagem" required></textarea>
                </div>
                <div class="flex items-center justify-between">
                    <button class="bg-cor3 hover:bg-cor7 text-cor7 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                        Cancelar
                    </button>
                    <button class="bg-cor4 hover:bg-cor7 text-cor7 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                        Submeter
                    </button>
                </div>
            </form>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d85328.07430872599!2d-7.957523849070762!3d40.63373939024881!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd23370fdf817c41%3A0x21a500bea26165af!2sPal%C3%A1cio%20do%20Gelo!5e0!3m2!1sen!2spt!4v1657208304362!5m2!1sen!2spt" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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