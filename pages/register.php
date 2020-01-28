<div>
  <div  class="wrapper reg-wrap">
    <img src="media/img/logo.png" alt="Logo Pisco for Sales">
    <form action="pages/back/reg.php" method="post">
      <?php
      if(isset($_SESSION['erro'])) {
        $erro = $_SESSION['erro'];
        switch ($erro) {
          case '201':
            $mensagem = 'Os campos estão vazios.';
            break;
          case '202':
            $mensagem = 'Campo de e-mail não foi preenchido.';
            break;
          case '203':
            $mensagem = 'Campo de senha não foi preenchido.';
            break;
          case '204':
            $mensagem = 'Campo de confirmação não foi preenchido.';
            break;
          case '205':
            $mensagem = 'As senhas não coincidem.';
            break;
          case '206':
            $mensagem = 'E-mail já cadastrado.';
            break;
        }
        ?>
        <div class="alert alert-danger">
          <?php echo $mensagem; ?>
        </div>
        <?php
        unset($_SESSION['erro']);
      }
      if (isset($_SESSION['sucesso'])) {
        $sucesso = $_SESSION['sucesso'];
        switch ($sucesso) {
          case '101':
              $mensagem = 'Cadastro realizado com sucesso! Faça login <a href="index.php" class="alert-link">AQUI</a>.';
            break;
        }
        ?>
        <div class="alert alert-success">
          <?php echo $mensagem; ?>
        </div>
        <?php
        unset($_SESSION['sucesso']);
      }
      ?>
      <div class="reg-input">
        <div>
          <label for="email">E-mail:</label>
          <input type="email" name="email" value="<?php if (isset($_GET['email'])) { echo ($_GET['email']); } ?>" class="input">
        </div>
        <div>
          <label for="senha">Senha:</label>
          <input type="password" name="senha" class="input">
        </div>
        <div>
          <label for="confsenha">Confirme:</label>
          <input type="password" name="confsenha" class="input">
        </div>
      </div>
      <button type="submit" class="btn btn-primary text-btn">Cadastrar</button>
    </form>
    <a href="index.php" class="btn btn-info text-btn">Voltar</a>
  </div>
</div>
