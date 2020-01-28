<?php
include '../../assets/includes/verifyLogin.php';
include '../../assets/includes/connect.php';
include '../../assets/includes/session.php';

if (isset($_POST['nome']) && isset($_POST['cnpj']) && isset($_POST['ddd']) && isset($_POST['telefone']) && isset($_POST['site']) && isset($_POST['email'])) {

  $nome = $_POST['nome'];
  $cnpj = $_POST['cnpj'];
  $ddd = $_POST['ddd'];
  $telefone = $_POST['telefone'];
  $site = $_POST['site'];
  $email = $_POST['email'];
  
  $query = mysqli_query($conexao, "INSERT INTO empresa VALUES(DEFAULT,'$nome', '$cnpj', '$ddd', '$telefone', '$site', '$email')") or die(mysqli_error($conexao));

  $_SESSION['sucesso'] = 1;
  header('Location: ../../index.php?page=regCompany');

} else {

  $_SESSION['erro'] = 1;
  header('Location: ../../index.php?page=regCompany');

}
