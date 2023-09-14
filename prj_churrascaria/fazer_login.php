<?php
include "conexao.php";
include "Autenticacao.php";
session_start();


if (isset($_POST["entrar"])) {

    $email = $_POST["email"];
    $senha = $_POST["senha"];


    $login = new Autenticacao($conexao);
    $usuario = $login->logar($email,$senha);

    if ($usuario) {
    $_SESSION["email"] = $email;
    $_SESSION["senha"] = $senha;




    $_SESSION["usuario"] = $usuario;
    header("location: logado.php");
    exit();

    }
    else{
        header("location: logar.php?error=1");
    }

}