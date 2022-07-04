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
    <div class="container mx-auto">
        <?php 
            include "./includes/header.php"
        ?>
        <div class="w-full h-8 bg-lime-400 flex justify-between pr-2 flex-row sticky top-0">
            <?php 
                include "./includes/menu.php"
            ?>
        </div>
        <div class="w-full h-screen bg-emerald-600">
            <a name="inicio"></a>
            content
        </div>
        <div class="w-full h-12 bg-orange-500">
            <?php 
                include "./includes/footer.php"
            ?>
        </div>
        <button title="top" class="fixed z-90 bottom-10 right-8 bg-blue-600 w-20 h-20 rounded-full drop-shadow-lg flex justify-center items-center text-white text-4xl hover:bg-blue-600 hover:drop-shadow-2xl">
            <a href="#inicio" class="text-white font-bold align-middle sticky">
                <span class="material-symbols-sharp">
                arrow_upward
                </span>
            </a>
        </button>
    </div>
</body>

</html>