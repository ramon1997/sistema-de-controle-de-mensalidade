<?php
include_once "../conexao/Conexao.php";
include_once "../model/Usuario.php";
include_once "../dao/UsuarioDAO.php";

//instancia as classes
$usuario = new Usuario();
$usuariodao = new UsuarioDAO();

//pega todos os dados passado por POST

$d = filter_input_array(INPUT_POST);

//se a operação for gravar entra nessa condição
if(isset($_POST['cadastrar'])){

    $usuario->setNome($d['nome']);

    $usuariodao->create($usuario);

    echo "<script>window.location.href='../../adm/painel.php'</script>";
} 
// se a requisição for editar
else if(isset($_POST['editar'])){

    $usuario->setNome($d['nome']);

    $usuario->setId($d['id']);

    $usuariodao->update($usuario);

    echo "<script>window.location.href='../../adm/painel.php'</script>";
}

else if(isset($_GET['pagou'])){

    $usuario->setPagou($d['pagou']);

    $usuario->setId($_GET['pagou']);

    $usuariodao->pagou($usuario);

    echo "<script>window.location.href='../../adm/painel.php'</script>";
}

else if(isset($_GET['reset'])){
    $usuariodao->reset();
    echo "<script>window.location.href='../../adm/painel.php'</script>";
}

// se a requisição for deletar
else if(isset($_GET['del'])){

    $usuario->setId($_GET['del']);

    $usuariodao->delete($usuario);

    echo "<script>window.location.href='../../adm/painel.php'</script>";
}else{
    echo "<script>window.location.href='/index.php'</script>";
}