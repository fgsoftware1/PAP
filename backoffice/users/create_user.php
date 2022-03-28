<?php
  include("../utils/conexao.inc.php");

  $nome_botao = "Inserir";
  $action_page = "./script_ins_user.php";
  $title_page = "Registar";

  if(isset($_GET["ID"])){
    $resultado = executarSQL("SELECT * FROM utilizadores WHERE ID_Utilizador = ".$_GET["ID"]."");
    $row = mysqli_fetch_array($resultado);

    $nome = $row["Nome"];
    $active = $row["Ativo"];
    $data_nasc = $row["Data_Nasc"];
    $email = $row["Email"];
    $tipo_user = $row["Tipo_Utilizador"];

    $nome_botao = "Alterar";
    $action_page = "./script_alt_user.php?ID=".$_GET["ID"]."";
    $title_page = "Alterar utilizador";
  }
?>
<html> 
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>users list</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sticky-footer-navbar/">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="css/sticky-footer-navbar.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
      	.bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
        <title>registar utilizador</title>
    </head>

    <body class="d-flex flex-column h-100">
    <?php
      include("../header/header.php");
    ?>
    <br>
    </br>
    <br>
    </br>
    <main class="flex-shrink-0">
      <div class="container">
        <h2>registar utilizador</h2>
        <form action="<?php echo $action_page ?>" method="POST">
            <div class="mb-3">
              <label for="nome" class="form-label">Tipo Utilizador</label>
              <select class="form-select" id="user_type" name="user_type">
                <?php
                  $resultado_tipos = executarSQL("SELECT * FROM tipo_utilizador");
                  while($row = mysqli_fetch_array($resultado_tipos)){
                    echo "<option value='".$row["ID_Tipo_Utilizador"]."' ".(isset($tipo_user) ? ($tipo_user == $row["ID_Tipo_Utilizador"] ? 'selected' : '') : '')." >".$row["Tipo_Utilizador"]."</option>";
                  }
                ?>
              </select>
            </div>
            <div class="mb-3">
              <label for="nome" class="form-label">nome de utilizador</label>
              <input type="text" class="form-control" id="user" name="user" value="<?php echo (isset($nome) ? $nome : ''); ?>" />
            </div>
            <div class="mb-3">
                <label for="passsword" class="form-label">password</label>
                <input type="text" class="form-control" id="pass" name="pass" />
            </div>
            <div class="mb-3">
              <label for="data_nasc" class="form-label">data de nascimento</label>
              <input type="date" class="form-control" id="data_nasc" name="data_nasc" value="<?php echo (isset($data_nasc) ? $data_nasc : ''); ?>">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">email</label>
              <input type="text" class="form-control" id="email" name="email" value="<?php echo (isset($email) ? $email : ''); ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputAtivo" class="form-label">utilizador ativo?</label>
								<select class="form-select" id="user_active" name="user_active">
                  <option value="0" <?php echo (isset($active) ? ($active == '0' ? 'selected' : '') : ''); ?>>Nao</option>
                  <option value="1" <?php echo (isset($active) ? ($active == '1' ? 'selected' : '') : ''); ?>>Sim</option>
                </select>
            </div>  
            <br>
            <button type="submit" class="btn btn-primary"><?php echo $nome_botao ?></button>
        </form>
      </div>
    </main>       
  </body>
</html>