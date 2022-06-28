<?php
require __DIR__ . '/../../db/config.php';

$connection  = connection();

$sqlSelect = "SELECT * FROM tb_usuario";
$respostas = mysqli_query($connection, $sqlSelect);

?>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">E-mail</th>
    </tr>
  </thead>
  <tbody>
    <?php while ($linha = mysqli_fetch_assoc($respostas)) : ?>
      <tr>
        <th scope="row"><?= $linha['id_us'] ?></th>
        <td class="fs-5"><?= $linha['nome_us'] ?></td>
        <td class="fs-5"><?= $linha['email_us'] ?></td>
        <td class="fs-5">
          <div class="d-flex justify-content-end mx-3">
            <form class="mx-2" action="../cadastre/delete.php" method="POST">
              <input type="hidden" name="id" value="<?= $linha['id_us'] ?>"/>
              <input type="submit" value="Excluir" class="btn btn-danger fs-5"/>
            </form>

            <form class="mx-2" action="../cadastre/cadastre.php" method="POST">
              <input type="hidden" value="<?= $linha['id_us'] ?>"/>
              <input type="submit" value="Novo" class="btn btn-success fs-5"/>
            </form>
          </div>
        </td>
      </tr>
    <?php endwhile; ?>
  </tbody>
</table>