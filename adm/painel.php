<?php
include_once "../app/conexao/Conexao.php";
include_once "../app/dao/UsuarioDAO.php";
include_once "../app/model/Usuario.php";

//instancia as classes
$usuario = new Usuario();
$usuariodao = new UsuarioDAO();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/style.css">
  <title>Administração</title>
</head>

<body>
  <div class="barra">
    <h1>Sistema de Controle de Mensalidade</h1>
  </div>
  <h2>Cadastrar novos alunos e editar &curvearrowright;</h2>
  <div class="add">
    <form action="../app/controller/UsuarioController.php" method="POST">
      <label for="nome">Nome Completo:</label>
      <input type="text" name="nome" id="nome" placeholder="Ex: Maria Silva">
      <input type="hidden" name="cadastrar">
      <input type="submit" value="cadastrar" id="botao">
    </form>
    <a href="editar.php" target="_blank" rel="noopener noreferrer">Editar nomes</a>
  </div>
  <div class="meio">
    <table>
      <tr>
        <th>#</th>
        <th>Nome</th>
        <th>Pagou?</th>
        <th>Marque quem pagou</th>
        <th>Excluir</th>
      </tr>
      <?php foreach ($usuariodao->read() as $usuario) { ?>
        <tr>
          <td><?php echo $usuario->getId(); ?></td>
          <td><?php echo $usuario->getNome(); ?></td>
          <td><?php echo $usuario->getPagou(); ?></td>
          <td><a href="../app/controller/UsuarioController.php?pagou=<?php echo $usuario->getId() ?>">Efetuou o pagamento</a></td>
          <td><a href="../app/controller/UsuarioController.php?del=<?php echo $usuario->getId() ?>">excluir</a></td>
        </tr>
      <?php } ?>
    </table>
  </div>
  <div class="aviso">
    <h1>ATENÇÃO!!!</h1>
    <h3>Só aperte o botão "resetar" quando for inicio do mẽs ou se houver uma necessidade especifica, ao apertar esse botão o campo "pagou" de todos vai receber "não". </h3>
  </div>
  <h2>Resetar &curvearrowright;</h2>
  <div class="extra">
    <a href="../app/controller/UsuarioController.php?reset" id="danger">Resetar</a>
  </div>
  <footer>
        <p>Desenvolvido por <a href="https://www.instagram.com/ramon_sant4na/" target="_blank" rel="noopener noreferrer">@ramon_sant4na</a></p>
    </footer>
</body>


</html>