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
</head>
<body>
<?php foreach ($usuariodao->read() as $usuario) { ?>
    <form action="../app/controller/UsuarioController.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value="<?php echo $usuario->getNome() ?>">
        <!-- Adicione um campo oculto para enviar o ID do usuário -->
        <input type="hidden" name="id" value="<?php echo $usuario->getId() ?>">
        <!-- Defina um campo "editar" como um botão de envio -->
        <button type="submit" name="editar" value="editar">Atualizar</button>
    </form>
<?php } ?>


</body>
</html>