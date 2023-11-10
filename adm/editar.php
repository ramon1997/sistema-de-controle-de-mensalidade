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
    <h2>Editar nomes &curvearrowright;</h2>
    <div class="editar">
        <?php foreach ($usuariodao->read() as $usuario) { ?>
            <form action="../app/controller/UsuarioController.php" method="POST">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" value="<?php echo $usuario->getNome() ?>">
                <!-- Adicione um campo oculto para enviar o ID do usuário -->
                <input type="hidden" name="id" value="<?php echo $usuario->getId() ?>">
                <!-- Defina um campo "editar" como um botão de envio -->
                <button type="submit" name="editar" value="editar" id="botao">Atualizar</button>
            </form>
        <?php } ?>
    </div>
    <footer>
        <p>Desenvolvido por <a href="https://www.instagram.com/ramon_sant4na/" target="_blank" rel="noopener noreferrer">@ramon_sant4na</a></p>
    </footer>
</body>

</html>