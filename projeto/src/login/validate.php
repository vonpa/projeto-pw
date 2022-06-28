<?php
session_start();

if (isset($_REQUEST['nome']) == false) {
  if (!isset($_SESSION['usuario'])) {
    header("Location: ./login.php");
  } else {
    exit();
  }
}

if ($_REQUEST['nome'] == "admin" && $_REQUEST['senha'] == "nimda") {
  $_SESSION['usuario'] = "Adminstrador";
  header("Location: ../../index.php");
}
