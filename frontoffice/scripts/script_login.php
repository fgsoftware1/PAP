<?php
    session_start();

    include("../utils/conexao.inc.php");

    $email = $_POST["email"];
    $pass = $_POST["pass"];

    if(isset($_POST["login"])){
		try{
			$query = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$pass'";
			$row = mysqli_fetch_array($query);

			if(password_verify($password, $row["password"]) && mysqli_num_rows($query) == 1){
				$_SESSION['id_user'] = $id_utilizador;

                $loggedin = true;

				header("Location: ../index.php");
			}else{
				header("Location: ./login.php?erro=1");
			}
		}
		catch(Exception $erro){
			echo $erro->getMessage();
		}
	}else{
		echo "erro ao submeter os dados";
		die();
	}
?>