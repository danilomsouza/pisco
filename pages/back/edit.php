<?php
  include '../../assets/includes/verifyLogin.php';
  include '../../assets/includes/connect.php';
  include '../../assets/includes/session.php';

  if (isset($_SESSION['idempresa'])) {
    $nome = $_POST['nome'];
    $cnpj = $_POST['cnpj'];
    $ddd = $_POST['ddd'];
    $telefone = $_POST['telefone'];
    $site = $_POST['site'];
    $email = $_POST['email'];
    $idempresa = $_SESSION['idempresa'];

    $query = sprintf("UPDATE empresa SET nome = '$nome', cnpj = '$cnpj', ddd = '$ddd', telefone = '$telefone', site = '$site', email = '$email' WHERE idempresa = '$idempresa';");
    mysqli_query($conexao, $query);

    unset($_SESSION['idempresa']);
    $_SESSION['sucesso'] = 1;
    header('Location: ../../index.php?page=list');
  } else {
    $_SESSION['erro'] = 1;
    header('Location: ../../index.php?page=list');
  }
