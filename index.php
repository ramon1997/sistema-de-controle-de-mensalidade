<?php
include_once "./app/conexao/Conexao.php";
include_once "./app/dao/UsuarioDAO.php";
include_once "./app/model/Usuario.php";

//instancia as classes
$usuario = new Usuario();
$usuariodao = new UsuarioDAO();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Sistema de controle de mensalidade</title>
</head>

<body>
    <div class="barra">
        <h1>Sistema de Controle de Mensalidade</h1>
    </div>
    <h2>Lista de alunos &curvearrowright;</h2>
    <div class="meio">
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
    </div>
    <footer>
        <p>Desenvolvido por <a href="https://www.instagram.com/ramon_sant4na/" target="_blank" rel="noopener noreferrer">@ramon_sant4na</a></p>
    </footer>
</body>

</html>