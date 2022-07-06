<!DOCTYPE html>
<html lang="pt" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spicy foods</title>
    <?php
    include "./includes/favicon.php"
    ?>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="../dist/output.css">
</head>

<body>
    <div class="w-full h-screen bg-zinc-700">
        <div class="flex flex-col justify-center items-center">
            <div class="mx-auto">
                <h2 class="mt-6 text-center text-3xl font-extrabold">Iniciar sessão</h2>
            </div>
            <form class="flex flex-col h-96 mt-8 w-96 items-center justify-center bg-slate-900 rounded-lg shadow-2xl" method="POST">
                <span class="material-symbols-sharp flex justify-center text-8xl pt-0 top-0">
                    person
                </span>
                <div class="mb-4">
                    <label class="flex text-sm font-medium text-white">Email</label>
                    <input type="email" class="w-80 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" placeholder="email" required>
                </div>
                <div class="mb-6">
                    <label class="flex text-sm font-medium text-white">Palavra passe</label>
                    <input type="text" class="w-80 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" placeholder="palavra passe" required>
                </div>
                <div class="flex items-center justify-between">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                        Iniciar sessão
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>