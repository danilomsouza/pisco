<?php
include '../../assets/includes/verifyLogin.php';
include '../../assets/includes/session.php';
include '../../assets/includes/connect.php';

if (empty($_POST['email']) && empty($_POST['senha']) && empty($_POST['confsenha'])) { //Todos os campos vazios

  $_SESSION['erro'] = 201;
  header('Location: ../../index.php?page=register');

} elseif (empty($_POST['email'])) { //Campo email vazio

  $_SESSION['erro'] = 202;
  header('Location: ../../index.php?page=register');

} elseif (empty($_POST['senha'])) { //Campo senha vazio

  $_SESSION['erro'] = 203;
  header('Location: ../../index.php?page=register&email='.$_POST['email'].'');

} elseif (empty($_POST['confsenha'])) { //Campo confirmação de senha vazio

  $_SESSION['erro'] = 204;
  header('Location: ../../index.php?page=register&email='.$_POST['email'].'');

} else { //Todos os campos preenchidos

  $email = trim($_POST['email']);
  $senha = trim(md5($_POST['senha']));
  $confsenha = trim(md5($_POST['confsenha']));

  $queryExistingEmail = mysqli_query($conexao, "select count(*) as total from usuario where email = '$email'");
  $linhaExistingEmail = mysqli_fetch_assoc($queryExistingEmail);

  if ($linhaExistingEmail['total'] == 0) { //Verifica se o e-mail já existe

    if ($senha == $confsenha) { //Verifica se a senha e a confirmação são iguais
      //Realiza o cadastro
      $query = mysqli_query($conexao, "insert into usuario (idusuario, email, senha) values (default, '$email', '$senha')") or die(mysqli_error($conexao));
      $_SESSION['sucesso'] = 101;
      header('Location: ../../index.php?page=register');

    } else { //Confirmação de senha não bate com a senha digitada

      $_SESSION['erro'] = 205;
      header('Location: ../../index.php?page=register&email='.$email.'');

    }
  } else { //Email já existe

    $_SESSION['erro'] = 206;
    header('Location: ../../index.php?page=register');

  }
}
