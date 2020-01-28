<?php
include 'assets/includes/verifyLogin.php';

if (isset($_GET['idempresa'])) {
  $_SESSION['idempresa'] = $_GET['idempresa'];
}
?>
<div class="container">
  <h2>Alteração de dados da Empresa</h2>
  <form method="post" action="pages/back/edit.php">
    <div class="row">
      <div class="form-group col">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" name="nome" required value="<?php echo ($_GET['nome']); ?>">
      </div>
      <div class="form-group col">
        <label for="cnpj">CNPJ</label>
        <input type="number" class="form-control" name="cnpj" required value="<?php echo ($_GET['cnpj']); ?>">
      </div>
      <div class="form-group col">
        <label for="ddd">DDD</label>
        <input type="number" class="form-control" name="ddd" required value="<?php echo ($_GET['ddd']); ?>">
      </div>
      <div class="form-group col">
        <label for="telefone" class="form-label">Telefone</label>
        <input class="form-control" type="number" name="telefone" required value="<?php echo ($_GET['telefone']); ?>">
      </div>
    </div>
    <div class="form-group">
      <label for="site">Site</label>
      <input class="form-control" type="text" name="site" required value="<?php echo ($_GET['site']); ?>">
    </div>
    <div class="form-group">
      <label for="email">E-mail</label>
      <input type="text" class="form-control" name="email" required value="<?php echo ($_GET['email']); ?>">
    </div>
    <div class="form-group">
      <input type="submit" value="Salvar alterações" class="btn btn-primary">
    </div>
  </form>
</div>
