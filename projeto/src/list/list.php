<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="confirm.js"></script>
  <title>Document</title>
</head>
<body>
  <div class="container">
    <div class="border-bottom border-2 my-4 py-3">
      <nav class="navbar navbar-expand-md navbar-light mx-4">
        <a class="navbar-brand mb-0 h1" href="#">Logo</a>
        <div class="collapse navbar-collapse">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active fs-5 mx-3" href="/projeto">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fs-5 mx-3" href="#">Listar</a>
            </li>
            <li class="nav-item">
              <?php if(isset($_SESSION['usuario'])){ ?>
              <a class="nav-link fs-5 mx-3" href="#">Cadastro</a>
              <?php } else { ?>
              <a class="nav-link fs-5 mx-3 disabled" href="#">Cadastro</a>
              <?php }?>
            </li>
          </ul>
          <?php if(isset($_SESSION['usuario'])){?>
          <form method="POST" action="../login/logout.php" class="d-flex">
            <button class="btn btn-primary fs-5" type="submit">Logout</button>
          </form>
          <?php } else { ?>
          <form method="POST" action="../login/logon.php" class="d-flex">
            <button class="btn btn-primary fs-5" type="submit">Login</button>
          </form>
          <?php } ?>
        </div>
      </nav>
    </div>

    <h1>Lista de usuários</h1>
    <?php require __DIR__  . '/select.php' ?>

    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-5 border-top">
      <p class="col-md-4 mb-0 text-muted">&copy; 2021 Company, Inc</p>
      <ul class="nav col-md-4 justify-content-end">
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Cadastro</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Listar</a></li>
      </ul>
    </footer>
  </div>
</body>
</html>