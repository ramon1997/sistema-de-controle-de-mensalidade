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
    <div class="meio">
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha" placeholder="Digite a senha">
            <input type="submit" value="Entrar" id="botao">
        </form>
    </div>
</body>
<footer>
    <p>Desenvolvido por <a href="https://www.instagram.com/ramon_sant4na/" target="_blank" rel="noopener noreferrer">@ramon_sant4na</a></p>
</footer>

</html>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verifica se a senha foi enviada pelo formulário
    if (isset($_POST['senha'])) {
        $senha = $_POST['senha'];

        // Verifica se a senha é correta
        if ($senha === "123") {
            header("Location: painel.php");
            exit(); // É uma boa prática usar exit() após redirecionar
        } else {
            echo "<script>alert('Senha incorreta')</script>";
        }
    } else {
        echo "Senha não fornecida";
    }
}
?>