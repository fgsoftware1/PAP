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
    <div class="mx-auto">
        <?php 
            "<a name='top'>";
            include "./includes/header.php"
        ?>
        
        <?php 
            include "./includes/menu.php"
        ?>

        <a name="inicio">
        <section class="bg-gray-400 h-screen">
            content
        </section>
        <a name="ementas">
        <section class="bg-gray-500 h-screen">
            content
        </section>
        <a name="reservar">
        <section class="bg-gray-600 h-screen">
            content
        </section>
        <a name="sobre">
        <section class="bg-gray-700 h-screen">
            content
        </section>

        <?php 
            include "./includes/footer.php"
        ?>

        <button class="fixed z-90 bottom-10 right-8 bg-blue-600 w-12 h-12 rounded-md drop-shadow-lg flex justify-center items-center text-black text-4xl hover:text-white hover:drop-shadow-2xl">
            <a href="#top" class="font-bold align-middle sticky">
                <span class="material-symbols-sharp">
                arrow_upward
                </span>
            </a>
        </button>
    </div>
</body>

</html>