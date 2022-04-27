<?php
    session_start();

    include("../utils/conexao.inc.php");

    if(isset($_POST["login"])){
		$email = $_POST["email"];
		$pass = $_POST["pass"];

		try{
			$query = executarSQL("SELECT * FROM utilizadores WHERE Email = '".$email."'");
			$row = mysqli_fetch_array($query);

			if(password_verify($pass, $row["Pass"]) && mysqli_num_rows($query) == 1){
				$_SESSION['email'] = $email;

				if($email = "admin@spicyfoods.pt"){
					header("Location: ../../backoffice/index.php");
				}else{
					header("Location: ../index.php");
				}
			}else{
				header("Location: ../login.php?erro=1");
			}
		}catch(Exception $erro){
			echo $erro->getMessage();
		}
	}else{
		echo "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css'>
			<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js'></script>";
		echo "erro ao submeter os dados";
		echo "&nbsp&nbsp";
		echo "<button type='button' class='btn btn-secondary'>
				<a href='../login.php'>
					Voltar
				</a>
			</button>";
	}
?>