<?php
session_start();
include('../../assets/includes/connect.php');

if (empty($_POST['email']) && empty($_POST['senha'])) { //Ambos os campos vazios

  $_SESSION['erro'] = 101;
  header('Location: ../../index.php');

} elseif (empty($_POST['email']) && !empty($_POST['senha'])) { //Campo email vazio

  $_SESSION['erro'] = 102;
  header('Location: ../../index.php');

} elseif (!empty($_POST['email']) && empty($_POST['senha'])) { //Campo senha vazio

  $_SESSION['erro'] = 103;
  header('Location: ../../index.php');

} elseif (!empty($_POST['email']) && !empty($_POST['senha'])) { //Campos preenchidos
  //Armazena informações digitadas para utilização na validação
  $email = $_POST['email'];
  $senha = $_POST['senha'];

  //Faz a seleção no banco de dados com o email digitado
  $queryEmail = sprintf("select email from usuario where email = '$email'");
  $dadosEmail = mysqli_query($conexao, $queryEmail) or die(mysql_error());
  $linhaEmail = mysqli_fetch_assoc($dadosEmail);

  //Verificação das informações digitadas
  if (empty($linhaEmail)) { //Email inexistente

    $_SESSION['erro'] = 104;
    header('Location: ../../index.php');

  } elseif (!empty($linhaEmail)) { //Email existe
    //Faz a seleção da senha cadastrada cruzando com a senha digitada
    $querySenha = sprintf("select senha from usuario where email = '$email' and senha = md5('$senha')");
    $dadosSenha = mysqli_query($conexao, $querySenha) or die(mysql_error());
    $linhaSenha = mysqli_fetch_assoc($dadosSenha);

    if (!empty($linhaSenha)) { //Senha correta

      $_SESSION['login'] = $email;
      header('Location: ../../index.php?page=home');

    } else {
      //Senha incorreta
      $_SESSION['erro'] = 105;
      header('Location: ../../index.php');

    }
  }
}
