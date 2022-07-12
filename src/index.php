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
        <!--secção inicio-->
        <a name="inicio">
        <section class="bg-white h-screen">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore consectetur dolor ipsum reiciendis modi cupiditate dolorum iure. Quo, nemo. Hic soluta iure voluptatem dignissimos cum omnis, aperiam obcaecati corrupti fugit.
        </section>
        <!--secção ementas-->
        <a name="ementas">
        <section class="flex flex-wrap w-full h-fit bg-cor4 p-10">
            <div class="w-1/2">
                <div class="flex flex-col">
                    <div class="border-r border-b border-l lg:border-l-0 lg:border-t bg-cor7 rounded-b lg:rounded-b-none lg:rounded-r p-4 flex justify-between leading-normal">
                        <div class="w-48 flex bg-cover text-center">
                            <img src="../res/img/arroz_de_salpicao.jpg" alt="">
                        </div>
                        <div class="pl-8">
                            <div class="mb-8">
                                <p class="text-base pr-96">
                                    Sopa:
                                    <br>
                                    Prato:
                                    <br>
                                    Sobremesa:
                                </p>
                            </div>
                            <div class="flex items-center">
                                <span class="material-symbols-sharp font-medium">
                                    event
                                </span>
                                <div class="text-sm">
                                    <p class="text-gray-900 leading-none">Jonathan Reinink</p>
                                    <p class="text-gray-600">Aug 18</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-2 border-r border-b border-l lg:border-l-0 lg:border-t bg-cor7 rounded-b lg:rounded-b-none lg:rounded-r p-4 flex justify-between leading-normal">
                        <div class="w-48 flex bg-cover text-center">
                            <img src="../res/img/arroz_de_salpicao.jpg" alt="">
                        </div>
                        <div class="pl-8">
                            <div class="mb-8">
                                <div class="text-gray-900 font-bold text-xl mb-2">Can coffee make you a better developer?</div>
                                <p class="text-gray-700 text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.</p>
                            </div>
                            <div class="flex items-center">
                                <span class="material-symbols-sharp font-medium">
                                    event
                                </span>
                                <div class="text-sm">
                                    <p class="text-gray-900 leading-none">Jonathan Reinink</p>
                                    <p class="text-gray-600">Aug 18</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-2 border-r border-b border-l lg:border-l-0 lg:border-t bg-cor7 rounded-b lg:rounded-b-none lg:rounded-r p-4 flex justify-between leading-normal">
                        <div class="w-48 flex bg-cover text-center">
                            <img src="../res/img/arroz_de_salpicao.jpg" alt="">
                        </div>
                        <div class="pl-8">
                            <div class="mb-8">
                                <div class="text-gray-900 font-bold text-xl mb-2">Can coffee make you a better developer?</div>
                                <p class="text-gray-700 text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.</p>
                            </div>
                            <div class="flex items-center">
                                <span class="material-symbols-sharp font-medium">
                                    event
                                </span>
                                <div class="text-sm">
                                    <p class="text-gray-900 leading-none">Jonathan Reinink</p>
                                    <p class="text-gray-600">Aug 18</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-1/2 pl-4">
                <img src="../res/img/feast.jpg" class="h-48">
            </div>
        </section>
        <!--secção reservar-->
        <a name="reservar">
        <section class="bg-white h-screen">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel consectetur possimus aut repudiandae esse reprehenderit, beatae, dolore distinctio minus similique eligendi necessitatibus impedit atque perferendis. Inventore ducimus nesciunt eligendi repellat.
        </section>
        <!--secção equipa-->
        <a name="equipa">
        <section class="flex flex-wrap justify-around w-full h-screen bg-cor3 items-center">
            <div class="w-96 h-96 pb-5 rounded-2xl shadow-2xl bg-cor7 flex flex-col">
                <div class="flex justify-center pt-6">
                    <img class="rounded-full w-36" src="../res/img/joao_cura.png" alt="João Cura">
                </div>
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">João Cura</div>
                    <p class="text-gray-700">
                        Formou-se na Escola de Hotelaria e Turismo de Coimbra. Depois de passagens em grandes cozinhas de Espanha,
                        motivado pelas suas viagens e vivências, abre o seu primeiro restaurante de cozinha de autor, no Porto.
                    </p>
                </div>
            </div>
            <div class="w-96 h-96 pb-5 rounded-2xl shadow-2xl bg-cor7 flex flex-col">
                <div class="flex justify-center pt-6">
                    <img class="rounded-full w-36" src="../res/img/henrique_fogaca.png" alt="João Cura">
                </div>
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Henrique Fogaça</div>
                    <p class="text-gray-700">
                        Em 2017, Fogaça lançou seu primeiro livro, intitulado "Um Chef Hardcore", que trata-se de um relato autobiográfico que mistura momentos de sua vida com 30 receitas assinadas por ele.
                    </p>
                </div>
            </div>
            <div class="w-96 h-96 pb-5 rounded-2xl shadow-2xl bg-cor7 flex flex-col">
                <div class="flex justify-center pt-6">
                    <img class="rounded-full w-36" src="../res/img/alex_atala.png" alt="João Cura">
                </div>
                <div class="h-fit px-6 py-4">
                    <div class="font-bold text-xl mb-2">Alex Atala</div>
                    <p class="text-gray-700">
                        Alex Atala conta atualmente com três restaurantes:
                        D.O.M. - este restaurante trabalha exclusivamente com um menu degustação,
                        Dalva e Dito - um restaurante que conta com três estrelas michelin,
                        Bio comer saudável - um restaurante no qual as refeições são confecionadas com produtos orgânicos.
                    </p>
                </div>
            </div>
        </section>
        <!--secção contato-->
        <a name="contato">
        <section class="flex flex-wrap justify-around w-full h-screen bg-cor7 items-center">
            <form method="POST" action="">
                <div class="mb-4">
                    <label class="flex text-sm font-medium text-white">Nome</label>
                    <input type="text" max-lenght="80" class="w-80 h-10 border-2 border-gray text-sm rounded-lg focus:outline-dark-gray" placeholder="nome" required>
                </div>
                <div class="mb-4">
                    <label class="flex text-sm font-medium text-white">Email</label>
                    <input type="email" max-lenght="100" class="w-80 h-10 border-2 border-gray text-sm rounded-lg focus:outline-dark-gray" placeholder="email" required>
                </div>
                <div class="mb-4">
                    <label class="flex text-sm font-medium text-white">Mensagem</label>
                    <textarea type="text" rows="5" cols="30" max-lenght="2000" class="w-80 border-2 border-gray focus:outline-dark-gray" placeholder="mensagem" required></textarea>
                </div>
                <div class="flex items-center justify-between">
                    <input type="reset" value="cancelar" class="bg-cor3 hover:bg-cor7 text-cor7 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline shadow-2xl" type="button">
                    <input type="submit" value="submeter" class="bg-cor4 hover:bg-cor7 text-cor7 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline shadow-2xl" type="button">
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