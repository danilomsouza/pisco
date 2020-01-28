<?php include 'assets/includes/verifyLogin.php'; ?>
<div class="container">
  <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
      <img src="media/img/company.png" class="rounded mr-2" alt="...">
      <strong class="mr-auto">Empresas Cadastradas</strong>
    </div>
    <div class="toast-body">
      <span class="toast-home-value">
        <?php
        $query = sprintf("SELECT COUNT(*) AS total FROM empresa");
        $dados = mysqli_query($conexao, $query);
        $linha = mysqli_fetch_assoc($dados);
        $total = $linha['total'];
        echo ($total);
        ?>
        </span>
        <?php
        if ($total == 1) {
          ?>
          <span class="toast-home-text">Empresa</span>
          <?php
        } else {
          ?>
          <span class="toast-home-text">Empresas</span>
          <?php
        }
        ?>
    </div>
  </div>
</div>
