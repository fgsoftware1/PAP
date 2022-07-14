<?php
    include '../include/db.php';
?>
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
    <link rel="stylesheet" href="../../../dist/output.css">
</head>

<body>
    <div class="w-full flex">
        <div class="w-56 h-screen bg-cor3 p-2 sticky" id="menu">
            <div class="h-10 w-10 rounded-full p-2 cursor-pointer bg-black" id="botao">
                <span class="block w-6 h-1 bg-gray-600"></span>
                <span class="block w-6 h-1 bg-gray-600 mt-1"></span>
                <span class="block w-6 h-1 bg-gray-600 mt-1"></span>
            </div>
            <?php
                include '../include/menu.php'
            ?>
        </div>
        <div class="w-full h-fit p-10 bg-cor7">
            <div class="flex justify-between w-3/4 py-6">
                <div><h1 class="text-lg font-bold">Tipo de Utilizador</h1></div>
                <div>
                    <a href="create.php" class="bg-cor4 rounded-full py-2 px-3">
                        <span class="material-symbols-sharp text-cor7 font-bold">add</span>
                    </a>
                </div>
            </div>
            <table class="w-3/4">
                <thead>
                    <tr class="bg-cor1 py-2"><th>Designação</th><th></th></tr>
                </thead>
                <tbody>
                    <?php
                        $sql = "SELECT * FROM tipo_utilizador";
    	                $data = mysqli_query($conn, $sql);

                        while($row = mysqli_fetch_array($data)){
                            echo "<tr class='py-4 border-b-2'><td>".$row[1]."</td><td><a href='update.php?id=".$row[0]."'><span class='material-symbols-sharp align-middle'>edit</span></a><a href='delete.php?id=".$row[0]."'><span class='material-symbols-sharp align-middle ml-4'>delete</span></a></td></tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="../scripts/app.js"></script>
</body>

</html>
<?php
    mysqli_close($conn);
?>