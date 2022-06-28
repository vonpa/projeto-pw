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
              <a class="nav-link active fs-5 mx-3" href="/projeto">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fs-5 mx-3" href="../list/list.php">Listar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fs-5 mx-3 disabled" href="#">Cadastro</a>
            </li>
          </ul>
          <form method="POST" action="#" class="d-flex">
            <button class="btn btn-primary fs-5" type="submit">Login</button>
          </form>
        </div>
      </nav>
    </div>

    <h1>Cadastro de usuários</h1>
    <form action="./save.php" method="POST">
      <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" name="nome" id="nome" class="form-control">
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Endereço de email</label>
        <input type="password" name="email" id="email" class="form-control">
      </div>
      <button type="submit" class="btn btn-primary">Salvar</button>
    </form>

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