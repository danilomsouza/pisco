<?php if (isset($_SESSION['login'])) { header('Location: index.php?page=home'); } ?>
<div>
  <div class="wrapper">
    <img src="media/img/logo.png" alt="Logo Pisco for Sales" class="login-logo">
    <form action="pages/back/auth.php" method="post">
      <?php
      if(isset($_SESSION['erro'])) {
        $erro = $_SESSION['erro'];
        switch ($erro) {
          case '101':
            $mensagem = 'Os campos estão vazios.';
            break;
          case '102':
            $mensagem = 'Campo de e-mail não foi preenchido.';
            break;
          case '103':
            $mensagem = 'Campo de senha não foi preenchido.';
            break;
          case '104':
            $mensagem = 'E-mail inexistente.';
            break;
          case '105':
            $mensagem = 'Senha incorreta.';
            break;
        }
        ?>
        <div class="alert alert-danger">
          <?php echo $mensagem; ?>
        </div>
        <?php
        unset($_SESSION['erro']);
      }
      ?>
      <div>
        <label for="email" class="text">E-mail:</label>
        <input type="text" name="email" class="input">
      </div>
      <div>
        <label for="senha" class="text">Senha:</label>
        <input type="password" name="senha" class="input">
      </div>
      <button type="submit" class="btn btn-primary text-btn">Entrar</button>
    </form>
    <a href="index.php?page=register" class="btn btn-info text-btn">Cadastrar</a>
  </div>
</div>
