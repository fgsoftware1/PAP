<!DOCTYPE html>
<html lang="pt" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spicy foods</title>
    <link rel="shortcut icon" href="../../res/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="../../res/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../res/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../res/img/favicon-16x16.png">
    <link rel="manifest" href="../../site.webmanifest">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="../../dist/output.css">
</head>

<body>
    <div class="w-full flex">
        <div class="w-56 h-screen bg-cor3 p-2" id="menu">
            <div class="h-10 w-10 rounded-full p-2 cursor-pointer bg-black" id="botao">
                <span class="block w-6 h-1 bg-gray-600"></span>
                <span class="block w-6 h-1 bg-gray-600 mt-1"></span>
                <span class="block w-6 h-1 bg-gray-600 mt-1"></span>
            </div>
            <ul class="pt-4 uppercase" id="opcoes">
                <li class="text-white font-bold hover:bg-gray-200">
                    <a href="./index.php">
                        <span class="material-symbols-sharp align-middle">
                            home
                        </span>
                        <span class="mostrar">
                            inicio
                        </span>
                    </a>
                </li>
                <li class="text-white font-bold hover:bg-gray-200">
                    <a href="./utilizadores/home.php">
                        <span class="material-symbols-sharp align-middle">
                            person
                        </span>
                        <span class="mostrar">
                            utilizadores
                        </span>
                    </a>
                </li>
                <li class="text-white font-bold hover:bg-gray-200">
                    <a href="./tutilizadores/home.php">
                        <span class="material-symbols-sharp align-middle">
                            group
                        </span>
                        <span class="mostrar">
                            tipo utilizador
                        </span>
                    </a>
                </li>
                <li class="text-white font-bold hover:bg-gray-200">
                    <a href="./ementas/home.php">
                        <span class="material-symbols-sharp align-middle">
                            menu_book
                        </span>
                        <span class="mostrar">
                            ementas
                        </span>
                    </a>
                </li>
                <li class="text-white font-bold hover:bg-gray-200">
                    <a href="./refeicoes/home.php">
                        <span class="material-symbols-sharp align-middle">
                            restaurant
                        </span>
                        <span class="mostrar">
                            refeições
                        </span>
                    </a>
                </li>
                <li class="text-white font-bold hover:bg-gray-200">
                    <a href="./reservas/home.php">
                        <span class="material-symbols-sharp align-middle">
                            room_service
                        </span>
                        <span class="mostrar">
                            reservas
                        </span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="w-auto flex mt-8 bg-cor7">
            direita
        </div>
    </div>
    <script src="./scripts/app.js"></script>
</body>

</html>