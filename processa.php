<?php
include_once "conexao.php";
session_start();

if(isset($_POST['cpf'])){

    $cpf = $_POST['cpf']; //str
    $email = strval($_POST['email']);
    $hash = password_hash(strval($_POST['senha']), PASSWORD_DEFAULT);
    $nome = strval($_POST['nome']);
    $sobrenome = strval($_POST['sobrenome']);

    $query = "insert into usuariocomum (cpf, email, senha_hash, nome, sobrenome) values (".$cpf.",'".$email."','".$hash."','".$nome."','".$sobrenome."')";
    mysqli_query($connection, $query);
    $_SESSION['email'] = $email;
    $_SESSION['tipo'] = 'c';
    header("location: main-cidadao.php");

}else if(isset($_POST['codigo'])){
    $codigo = intval($_POST['codigo']);
    $email = strval($_POST['email']);
    $hash = password_hash(strval($_POST['senha']), PASSWORD_DEFAULT);
    $cidade = strval($_POST['cidade']);
    $estado = strval($_POST['estado']);

    $query = "insert into usuarioprefeitura (codigo_autorizacao, email, senha_hash, nome, estado) values (".$codigo.",'".$email."','".$hash."','".$cidade."','".$estado."')";
    mysqli_query($connection, $query);
    $_SESSION['email'] = $email;
    $_SESSION['tipo'] = 'p';
    header("location: main-prefeitura.php");

}else{
    header("location: erro-cadastro.php");
}
?>