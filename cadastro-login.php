<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastrar Usuário</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body style="background-color:#01559C;">
  <div class="container mt-5 p-5 justify-content-md-center d-grid">
    <div class="card p-3">
      <div class="card-body">


      <h2>Cadastrar Usuário</h2>
        <div class="row">
          <form action="cadastrar.php" method="POST">
          <input type="hidden" name="acao" value="cadastrar-usuario">
          <div class=" mb-3 col-auto">
              <label>Nome </label>
              <input class="form-control" type="text" name="nome">
            </div>
            <div class=" mb-3 col-auto">
              <label>E-mail </label>
              <input class="form-control" type="email" name="email">
            </div>
            <div class=" mb-3 col-auto">
              <label>Senha </label>
              <input class="form-control" type="password" name="senha">
            </div>
            
            <button value="entrar" id="entrar" name="entrar" type="submit" class="btn btn-primary">Cadastrar</button>
            
            </form>
          
          </div>
      </div>
    </div>
  </div>

  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

  <body>