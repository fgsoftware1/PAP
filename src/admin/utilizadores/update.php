<?php
    include '../include/db.php';

    session_start();

    if(!isset($_SESSION['nome'])){
        header("Location: ./../../login.php");
    }

    if($_SERVER['REQUEST_METHOD'] == "GET"){
        $id = $_GET['id'];
        $data = mysqli_query($conn, "SELECT * FROM utilizadores WHERE id=$id");
        $row = mysqli_fetch_array($data);

    }
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $id = $_POST['id'];
        $tipo = $_POST['tipo'];
        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $passe = $_POST['passe'];
        $ativo = $_POST['ativo'];

        mysqli_query($conn, "UPDATE utilizadores SET Utilizadores = '".$tipo."', Nome = '".$nome."', Telefone = '".$telefone."', Email = '".$email."', Passe = '".sha1($passe)."', Ativo = '".$ativo."' WHERE ID = ".$id."");
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
                <div><h1 class="text-lg font-bold">Utilizadores>Editar</h1></div>
                <div></div>
            </div>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
                <input type="hidden" name="id" value="<?php echo $row[0]; ?>">
                <div class="mb-4">
                    <label class="flex text-lg font-bold mb-2">Tipo</label>
                    <select name="tipo" id="tipo" class="border-2 border-gray w-80 rounded-lg h-10" autofocus>
                        <?php
                            $data = mysqli_query($conn, "SELECT * FROM tipo_utilizador");

                            while($row2 = mysqli_fetch_array($data)){
                                echo "<option value='".$row2[0]."'>".$row2[1]."</option>";
                            }
                        ?>
                    </select>
                </div>
                <div class="mb-4">
                    <label class="flex text-lg font-bold mb-2">Nome</label>
                    <input type="text" name="nome" id="nome" value="<?php echo $row[2]; ?>" maxlength="25" class="w-80 h-10 border-2 border-gray text-sm rounded-lg focus:outline-dark-gray" placeholder="Introduzir nome" required>
                </div>
                <div class="mb-4">
                    <label class="flex text-lg font-bold mb-2">Telefone</label>
                    <input type="tel" name="telefone" id="telefone" value="<?php if(isset($row[3])){echo $row[3];} ?>" maxlength="25" class="w-80 h-10 border-2 border-gray text-sm rounded-lg focus:outline-dark-gray" placeholder="Introduzir telefone" required>
                </div>
                <div class="mb-4">
                    <label class="flex text-lg font-bold mb-2">Email</label>
                    <input type="email" name="email" id="email" value="<?php if(isset($row[4])){echo $row[4];} ?>" maxlength="25" class="w-80 h-10 border-2 border-gray text-sm rounded-lg focus:outline-dark-gray" placeholder="Introduzir email" required>
                </div>
                <div class="mb-4">
                    <label class="flex text-lg font-bold mb-2">Password</label>
                    <input type="password" name="pass" id="password" value="" maxlength="15" class="w-80 h-10 border-2 border-gray text-sm rounded-lg focus:outline-dark-gray" placeholder="Introduzir palavra-passe" required>
                </div>
                <div class="mb-4">
                    <label class="flex text-lg font-bold mb-2">Password</label>
                    <input type="password" name="passe" id="passe" value="" maxlength="15" class="w-80 h-10 border-2 border-gray text-sm rounded-lg focus:outline-dark-gray" placeholder="Cnfirmar palavra-passe" required>
                </div>
                <div class="mb-4">
                    <label class="flex text-lg font-bold mb-2">Ativo</label>
                    Sim <input type="checkbox" name="ativo" id="ativo" value="<?php if(isset($row[6])){echo $row[6];} ?>" class="w-4 h-4 border-2 border-gray text-sm rounded-lg focus:outline-dark-gray">
                </div>
                <input type="reset" value="Cancelar" class="bg-red text-cor7 font-bold py-2 px-4 rounded shadow-2xl" type="button">
                <input type="submit" value="Guardar" class="bg-cor4 text-cor7 font-bold py-2 px-4 rounded shadow-2xl" type="button">
            </form>
        </div>
    </div>
    <script src="../scripts/app.js"></script>
</body>

</html>
<?php
    mysqli_close($conn);
?>