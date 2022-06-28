<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
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
              <a class="nav-link active fs-5 mx-3" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fs-5 mx-3" href="src/list/list.php">Listar</a>
            </li>
            <li class="nav-item">
              <?php if(isset($_SESSION['usuario'])){ ?>
              <a class="nav-link fs-5 mx-3" href="src/cadastre/cadastre.php">Cadastro</a>
              <?php } else { ?>
              <a class="nav-link fs-5 mx-3 disabled" href="src/cadastre/cadastre.php">Cadastro</a>
              <?php }?>
            </li>
          </ul>
          <?php if(isset($_SESSION['usuario'])){?>
          <form method="POST" action="src/login/logout.php" class="d-flex">
            <button class="btn btn-primary fs-5" type="submit">Logout</button>
          </form>
          <?php } else { ?>
          <form method="POST" action="src/login/logon.php" class="d-flex">
            <button class="btn btn-primary fs-5" type="submit">Login</button>
          </form>
          <?php } ?>
        </div>
      </nav>
    </div>

    <h1>Página Inicial</h1>
    <p class="fs-5">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat fugiat aliquam 
      doloribus est tempora, nihil accusantium error blanditiis, veritatis ducimus pariatur 
      neque et quasi quos perspiciatis laboriosam nemo quis deleniti.
    </p>
    <img src="https://images.unsplash.com/photo-1656166438746-aee2e378d5d9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1125&q=80" 
    class="rounded mx-auto d-block my-5"
    style="height: 500px; width: 100%;"
    >

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