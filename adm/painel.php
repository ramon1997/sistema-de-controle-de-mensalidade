<?php
include_once "../app/conexao/Conexao.php";
include_once "../app/dao/UsuarioDAO.php";
include_once "../app/model/Usuario.php";

//instancia as classes
$usuario = new Usuario();
$usuariodao = new UsuarioDAO();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
  .popup {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: white;
    padding: 20px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  }

  .popup form {
    text-align: center;
  }
</style>

</head>
<body>
    <form action="../app/controller/UsuarioController.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome">
        <input type="hidden" name="cadastrar">
        <input type="submit" value="cadastrar">
    </form>
    <a href="editar.php">editar</a>
    <a href="../app/controller/UsuarioController.php?reset">Resetar</a>
    <table>
    <tr>
        <th>#</th>
        <th>Nome</th>
        <th>Pagou?</th>
    </tr>
    <?php foreach ($usuariodao->read() as $usuario) { ?>
        <tr>
            <td><?php echo $usuario->getId(); ?></td>
            <td><?php echo $usuario->getNome(); ?></td>
            <td><?php echo $usuario->getPagou(); ?></td>
            <td></td>
            <td><a href="../app/controller/UsuarioController.php?pagou=<?php echo $usuario->getId()?>">Efetuou o pagamento</a></td>
            <td><a href="../app/controller/UsuarioController.php?del=<?php echo $usuario->getId() ?>">excluir</a></td>
        </tr>
    <?php } ?>
</table>

</body>


</html>