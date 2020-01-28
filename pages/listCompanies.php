<?php include 'assets/includes/verifyLogin.php'; //Inclui a verificação de login ?>
<script>
  formatTable("#list"); //Faz a formatação da tabela com o plugin DataTables
</script>
<div class="container">
  <div class="container">
    <div class="row">
      <h2 class="d-flex justify-content-start">Empresas Cadastradas</h2>
      <a href="index.php?page=regCompany" class="d-flex justify-content-start"><button class="btn btn-primary btn-reg-company">Cadastrar</button></a>
    </div>
  </div>
  <?php
  if (isset($_SESSION['sucesso'])) { //Verifica se há uma mensagem de sucesso a ser mostrada
    $sucesso = $_SESSION['sucesso'];
    switch ($sucesso) {
      case 1:
        $mensagem = 'Dados da empresa editados com sucesso!';
        break;
      case 2:
        $mensagem = 'Empresa excluída com sucesso!';
        break;
    }
    ?>
    <div class="alert alert-success">
      <?php echo ($mensagem); ?>
    </div>
    <?php
    unset($_SESSION['sucesso']);
  }
  if (isset($_SESSION['erro'])) { //Verifica se há uma mensagem de erro a ser mostrada
    $erro = $_SESSION['erro'];
    switch ($erro) {
      case 1:
        $mensagem = 'Ocorreu um erro ao tentar editar uma empresa';
        break;
      case 2:
        $mensagem = 'Ocorreu um erro ao tentar excluir uma empresa';
        break;
    }
    ?>
    <div class="alert alert-danger">
      <?php echo ($mensagem); ?>
    </div>
    <?php
    unset($_SESSION['erro']);
  }
  ?>
  <table id="list" class="table">
    <thead>
      <tr>
        <th class="table-cell table-cell-odd">#</th>
        <th class="table-cell">Nome</th>
        <th class="table-cell table-cell-odd">CNPJ</th>
        <th class="table-cell">DDD</th>
        <th class="table-cell table-cell-odd">Telefone</th>
        <th class="table-cell">Site</th>
        <th class="table-cell table-cell-odd">E-mail</th>
        <th class="table-cell">Ação</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $query = sprintf("SELECT * FROM empresa"); //Armazena a query
      $dados = mysqli_query($conexao, $query) or die(mysql_error()); //Faz a seleção dos dados no banco de dados
      $linha = mysqli_fetch_assoc($dados); //Armazena os dados em uma array associativa
      $total = mysqli_num_rows($dados); //Armazena o número total de linhas encontradas
      if ($total > 0) { //Verifica se houve retorno de linhas na base de dados
        do { //Mostra na tela os dados encontrados, enquanto houver dados a serem mostrados
          ?>
          <tr>
            <td class="table-cell table-cell-odd"><?php echo ($linha['idempresa']);?></td>
            <td class="table-cell"><?php echo ($linha['nome']);?></td>
            <td class="table-cell table-cell-odd"><?php echo $linha['cnpj'];?></td>
            <td class="table-cell"><?php echo ($linha['ddd']);?></td>
            <td class="table-cell table-cell-odd"><?php echo ($linha['telefone']);?></td>
            <td class="table-cell"><?php echo ($linha['site']);?></td>
            <td class="table-cell table-cell-odd"><?php echo ($linha['email']);?></td>
            <td class="table-cell">
              <!-- Cria o botão de edição com os dados da empresa já armazenados em GET -->
              <a class="a-edit" href="?page=edit&idempresa=<?php echo ($linha['idempresa']);?>&nome=<?php echo ($linha['nome']);?>&cnpj=<?php echo ($linha['cnpj']);?>&ddd=<?php echo ($linha['ddd']);?>&telefone=<?php echo ($linha['telefone']); ?>&site=<?php echo ($linha['site']); ?>&email=<?php echo ($linha['email']); ?>">
                <button class="btn btn-primary"><img src="media/img/pencil-white.png" style="width: 20px;" alt="Lápis ícone"></button>
              </a>
              <!-- Cria o botão de exclusão com o id da empresa -->
              <a class="a-edit" href="pages/back/delete.php?idempresa=<?php echo ($linha['idempresa']);?>">
                <button class="btn btn-primary"><img src="media/img/trash-bin-white.png" style="width: 20px;" alt="Lata de lixo ícone"></button>
              </a>
            </td>
          </tr>
          <?php
        } while ($linha = mysqli_fetch_assoc($dados));
      } else { //Caso nenhum dado seja encontrado na base de dados
        ?>
        <tr>
          <td colspan="8" class="">Nenhuma empresa cadastrada.</td>
          <td style="display: none;" class="table-cell"></td>
          <td style="display: none;" class="table-cell"></td>
          <td style="display: none;" class="table-cell"></td>
          <td style="display: none;" class="table-cell"></td>
          <td style="display: none;" class="table-cell"></td>
          <td style="display: none;" class="table-cell"></td>
          <td style="display: none;" class="table-cell"></td>
        </tr>
        <?php
      }
      mysqli_free_result($dados); //Limpa os dados armazenados na variável
      ?>
    </tbody>
  </table>
</div>
