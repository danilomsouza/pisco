<div class="container">
  <nav>
    <div>
      <img class="nav-image" src="media/img/logo.png" alt="Logo Pisco for Sales">
    </div>
    <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link <?php if ($page == 'home') { echo 'active'; } ?>" href="index.php?page=home">Home</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle <?php
        switch ($page) {
          case 'list':
          case 'regCompany':
          case 'edit':
            echo 'active';
            break;
        }
        ?>" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Administração</a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="index.php?page=list">Listar Empresas</a>
          <a class="dropdown-item" href="index.php?page=regCompany">Cadastrar Empresas</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pages/back/logout.php">Logout</a>
      </li>
    </ul>
  </nav>
</div>
