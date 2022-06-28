<?php
require __DIR__ .'/../../db/config.php';

extract($_POST);

$sqlInsert = "INSERT INTO tb_usuario(nome_us, email_us) VALUES('$nome','$email')";

$connection = connection();

mysqli_query($connection, $sqlInsert) ? header("Location: ../list/list.php") : mysqli_connect_error();

