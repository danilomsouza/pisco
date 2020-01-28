<?php
include '../../assets/includes/verifyLogin.php';
include '../../assets/includes/connect.php';
include '../../assets/includes/session.php';

if (isset($_GET['idempresa'])) {
  $idempresa = $_GET['idempresa'];

  $query = sprintf("DELETE FROM empresa WHERE idempresa = '$idempresa';");
  mysqli_query($conexao, $query);

  $_SESSION['sucesso'] = 2;
  header('Location: ../../index.php?page=list');
} else {
  $_SESSION['erro'] = 2;
  header('Location: ../../index.php?page=list');
}
