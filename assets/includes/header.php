<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <title>Pisco - Gestão de Empresas</title>
    <link rel="icon" href="media/img/favicon.jpg">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="media/css/bootstrap.css">
    <link rel="stylesheet" href="media/css/master.css">
    <script src="media/js/jquery-3.4.1.min.js"></script>
    <?php
    switch ($page) {
      case 'home':
        ?>
        <link rel="stylesheet" href="media/css/home.css">
        <?php
        break;
      case 'list':
        ?>
        <link rel="stylesheet" href="media/css/datatables.css">
        <link rel="stylesheet" href="media/css/listCompanies.css">
        <script src="media/js/datatables.js"></script>
        <script src="media/js/formatTable.js"></script>
        <?php
        break;
      case '':
      case 'register':
        ?>
        <link rel="stylesheet" href="media/css/login.css">
        <?php
        break;
    }
    ?>
    <script src="media/js/popper.min.js"></script>
    <script src="media/js/bootstrap.js"></script>
  </head>
  <body>
