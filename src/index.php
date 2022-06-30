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
    <link rel="stylesheet" href="./../dist/output.css">
</head>

<body>
    <div class="mx-auto">
        <div class="w-full h-24 bg-lime-500 flex justify-between pr-2 sticky top-0">
            <?php
                include "./includes/menu.php"
            ?>
        </div>
        <div class="w-full h-screen bg-emerald-600">
            <section class="w-full h-auto flex-auto">
                <a name="inicio"></a>
                <figure class="md:flex bg-slate-100 rounded-xl p-8 md:p-0 dark:bg-slate-800">
                    <img class="w-24 h-24 md:w-48 md:h-auto md:rounded-none rounded-full " src="../res/img/bg.jpg" width="384" height="512">
                    <figcaption>test</figcaption>
                </figure>
            </section>
            <section class="w-full h-auto flex-auto">
                <a name="ementas"></a>
                <figure class="md:flex bg-slate-100 rounded-xl p-8 md:p-0 dark:bg-slate-800">
                    <img class="w-24 h-24 md:w-48 md:h-auto md:rounded-none rounded-full " src="../res/img/bg.jpg" width="384" height="512">
                    <figcaption>test</figcaption>
                </figure>
            </section>
            <section class="w-full h-auto flex-auto">
                <a name="reservar"></a>
                <figure class="md:flex bg-slate-100 rounded-xl p-8 md:p-0 dark:bg-slate-800">
                    <img class="w-24 h-24 md:w-48 md:h-auto md:rounded-none rounded-full " src="../res/img/bg.jpg" width="384" height="512">
                    <figcaption>test</figcaption>
                </figure>
            </section>
            <section class="w-full h-auto flex-auto">
                <a name="sobre"></a>
                <figure class="md:flex bg-slate-100 rounded-xl p-8 md:p-0 dark:bg-slate-800">
                    <img class="w-24 h-24 md:w-48 md:h-auto md:rounded-none rounded-full " src="../res/img/bg.jpg" width="384" height="512">
                    <figcaption>test</figcaption>
                </figure>
            </section>
        </div>
        <div class="w-full h-12 bg-orange-500">
            <?php
            include "./includes/footer.php"
            ?>
        </div>
        <button title="Contact Sale" class="fixed z-90 bottom-10 right-8 bg-blue-600 w-20 h-20 rounded-full drop-shadow-lg flex justify-center items-center text-white text-4xl hover:bg-blue-600 hover:drop-shadow-2xl">
            <a href="#inicio" class="text-white font-bold align-middle sticky">
                <span class="material-symbols-sharp">
                arrow_upward
                </span>
            </a>
        </button>
    </div>
</body>

</html>