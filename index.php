<?php
include 'assets/includes/session.php'; //Inclui a abertura da session
include 'assets/includes/connect.php'; //Inclui a abertura da conexão

$page = isset($_GET['page'])? $_GET['page']:''; //Verifica se uma página já esta setada

include 'assets/includes/header.php'; //Inclui o cabeçalho

switch ($page) {
  case '':
  case 'register':
    break;
  default:
    include 'assets/includes/nav.php'; //Inclui a barra de navegação
    break;
}

switch ($page) { //Faz a alternância das páginas de acordo com o link
  case 'edit':
    include 'pages/editCompany.php';
    break;
  case 'regCompany':
    include 'pages/regCompanies.php';
    break;
  case 'list':
    include 'pages/listCompanies.php';
    break;
  case 'home':
    include 'pages/home.php';
    break;
  case 'register':
    include 'pages/register.php';
    break;
  default:
    include 'pages/login.php';
}

switch ($page) {
  case '':
  case 'register':
    break;
  default:
    include 'assets/includes/footer.php'; //Inclui o rodapé
    break;
}
