<?php
    include '../include/db.php';

    session_start();

    if(!isset($_SESSION['nome'])){
        header("Location: ./../../../login.php");
    }

    if($_SERVER['REQUEST_METHOD'] == "GET"){
        $id = $_GET['id'];
    }
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $id = $_POST['id'];

        mysqli_query($conn, "DELETE FROM refeicoes WHERE ID = ".$id."");
        header('Location: ./home.php');
    }
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
                <div><h1 class="text-lg font-bold">Tipo de Utilizador>Eliminar</h1></div>
                <div></div>
            </div>
            <div class="flex justify-center">
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                    <span class="material-symbols-sharp flex text-9xl text-red pl-10">
                    warning
                    </span>
                    <h1 class="font-bold text-2xl pb-5 pr-10">Deseja mesmo eliminar?</h1>
                    <input type="hidden" name="id" value="<?php if(isset($id)){echo $id;} ?>">
                    <input type="reset" value="Cancelar" class="bg-red text-cor7 font-bold py-2 px-4 rounded shadow-2xl" type="button">
                    <input type="submit" value="Eliminar" class="bg-cor4 text-cor7 font-bold py-2 px-4 rounded shadow-2xl" type="button">
                </form>
            </div>
        </div>
    </div>
    <script src="../scripts/app.js"></script>
</body>

</html>
<?php
    mysqli_close($conn);
?>