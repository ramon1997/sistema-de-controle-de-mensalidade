<?php
include_once "./app/conexao/Conexao.php";
include_once "./app/dao/UsuarioDAO.php";
include_once "./app/model/Usuario.php";

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
        </tr>
    <?php } ?>
</table>

</body>
</html>