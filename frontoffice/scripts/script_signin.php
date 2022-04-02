<?php
    session_start();

    include("../utils/conexao.inc.php");

    if(isset($_POST["login"])){
		$email = $_POST["email"];
		$pass = $_POST["pass"];

		try{
			$query = executarSQL("SELECT * FROM utilizadores WHERE Email = ".$email."");
			$row = mysqli_fetch_array($query);

			if(password_verify($password, $row["password"]) && mysqli_num_rows($query) == 1){
				$_SESSION['email'] = $email;

				header("Location: ../index.php");
			}else{
				header("Location: ../login.php?erro=1");
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