<?php
  include("../utils/conexao.inc.php");

  $nome_botao = "Inserir";
  $action_page = "./script_ins_user_type.php";
  $title_page = "Inserir tipo utilizador";

  if(isset($_GET["ID"])){
    $resultado = executarSQL("SELECT * FROM tipo_utilizador WHERE ID_Tipo_Utilizador = ".$_GET["ID"]."");
    $row = mysqli_fetch_array($resultado);

    $active = $row["Ativo"];
    $nome = $row["Tipo_Utilizador"];

    $nome_botao = "Alterar";
    $action_page = "./script_alt_user_type.php?ID=".$_GET["ID"]."";
    $title_page = "Alterar tipo utilizador";
  }
?>

<!doctype html>
<html lang="en" class="h-100">
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

  </head>
  <body class="d-flex flex-column h-100">
    <?php
      include("../header/header.php");
    ?>

    <main class="flex-shrink-0">
      <div class="container">
        <h1 class="mt-5"><?php echo "$title_page"?></h1>
        <form name="form_ins_user_type" action="<?php echo $action_page ?>" method="POST">
          <!-- <div class="mb-3">
            <label for="exampleInputID" class="form-label">ID utilizador</label>
            <input class="form-control" id="id_user" name="id_user">
          </div> -->
          <div class="mb-3">
            <label for="exampleInputTipo" class="form-label">tipo utilizador</label>
            <input class="form-control" id="user_type" name="user_type" value="<?php echo (isset($nome) ? $nome : ''); ?>">
          </div>
          <label for="exampleInputAtivo" class="form-label">tipo utilizador ativo?</label>
          <select class="form-select" id="user_type_active" name="user_type_active">
            <option value="0" <?php echo (isset($active) ? ($active == '0' ? 'selected' : '') : ''); ?>>Nao</option>
            <option value="1" <?php echo (isset($active) ? ($active == '1' ? 'selected' : '') : ''); ?>>Sim</option>
          </select>
          <br>
          </br>
          <button type="submit" class="btn btn-primary"><?php echo $nome_botao ?></button>
        </form>
      </div>
    </main>

    <footer class="footer mt-auto py-3 bg-light">
      <div class="container">
        <span class="text-muted">Place sticky footer content here.</span>
      </div>
    </footer>
    <!--Bootstrap and Popper-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!--<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>-->
    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>-->
  </body>
</html>
