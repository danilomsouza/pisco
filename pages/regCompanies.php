<?php include 'assets/includes/verifyLogin.php'; ?>
<div class="container">
  <h2>Cadastro de Empresa</h2>
  <?php
  if(isset($_SESSION['sucesso'])) {
    ?>
    <div class="alert alert-success">
      <?php echo 'Empresa cadastrada com sucesso!'; ?>
    </div>
    <?php
    unset($_SESSION['sucesso']);
  }
  if(isset($_SESSION['erro'])) {
    ?>
    <div class="alert alert-danger">
      <?php echo 'Ocorreu um erro com o preenchimento do formulário'; ?>
    </div>
    <?php
    unset($_SESSION['erro']);
  }
  ?>
  <form method="post" action="pages/back/regComp.php">
    <div class="row">
      <div class="form-group col">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" name="nome" placeholder="Ex.: Pisco for Sales" required>
      </div>
      <div class="form-group col">
        <label for="cnpj">CNPJ</label>
        <input type="number" class="form-control" name="cnpj" placeholder="Ex.: 00.000.000/0000-00" required>
      </div>
      <div class="form-group col">
        <label for="ddd">DDD</label>
        <input type="number" class="form-control" name="ddd" placeholder="Ex.: 11" required>
      </div>
      <div class="form-group col">
        <label for="telefone" class="form-label">Telefone</label>
        <input class="form-control" type="number" placeholder="Ex.: 4130-7445" name="telefone" required>
      </div>
    </div>
    <div class="form-group">
      <label for="site">Site</label>
      <input class="form-control" type="text" name="site" placeholder="Ex.: www.piscoforsales.com.br" required>
    </div>
    <div class="form-group">
      <label for="email">E-mail</label>
      <input type="email" class="form-control" name="email" placeholder="Ex.: contato@piscoforsales.com.br" required>
    </div>
    <div class="form-group">
      <input type="submit" value="Cadastrar" class="btn btn-primary">
    </div>
  </form>
</div>
