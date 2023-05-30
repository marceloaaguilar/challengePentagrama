<?php 
session_start();
if (empty($_SESSION))
  header('Location:index.php');

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Minha Conta</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>


<body>
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="">
        <img src="icon-pentagrama-full-color.png" style="max-width: 3rem;" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="dashboard.php">Início</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="dashboard.php?page=nova">Nova Cidade/Bairro</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="dashboard.php?page=relatorio">Relatório</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="dashboard.php?page=novo">Novo Usuário</a>
        </li>
      </ul>
      
    
        <a style="text-decoration:none; margin-right:1rem;"class="navbar-text" href="minhaConta.php">Minha Conta</a>
        <a  href="logout.php" class="nav-item btn btn-danger">Sair</a>

    </div>
  </div>
</nav>
    <div class="container">

        <div class="col-5 mt-5">
            <form action="cadastrar.php" method="POST">
                <input type="hidden" name="acao" value="editar-usuario">
                <h1> Minha Conta</h1>
                
                <div class="mt-3 mb-3">
                    <label> Nome:</label>
                    <input type="text" name="nome" class="form-control" value="<?php print $_SESSION["nome"] ?>">
                </div>
                
                <div class="mt-3 mb-3">
                    <label> E-mail </label>
                    <input type="email" name="email" class="form-control" value="<?php print $_SESSION["email"] ?>">
                </div>
                
                <div class="mt-3 mb-3">
                    <label> Senha </label>
                    <input required name="senha" type="password" class="form-control">
                    
                </div>
                <button type="submit" class="btn btn-primary">Salvar</button>
                </form>
                
            </div>
        </div>
            
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        </body>