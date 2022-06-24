<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spicy foods</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="./../dist/output.css">
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div class="container mx-auto">
        <?php 
            include "./includes/header.php"
        ?>
        <div class="w-full h-8 bg-lime-400 flex justify-between pr-2">
            <?php 
                include "./includes/menu.php"
            ?>
        </div>
        <div class="w-full h-screen bg-emerald-600">content</div>
        <div class="w-full h-12 bg-orange-500">
            <?php 
                include "./includes/footer.php"
            ?>
        </div>
    </div>
</body>
</html>