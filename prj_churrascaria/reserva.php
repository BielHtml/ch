<?php
include "conexao.php";
include "Autenticacao.php";
include "Mesa.php";


if (isset($_POST["enviar"])) {

    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $data = $_POST["data"];
    $hora = $_POST["hora"];
    $num_pessoa = $_POST["num_pessoa"];
    $msg = $_POST["msg"];





    $login = new Autenticacao($conexao);
    $usuario = $login->logar($email,$senha);

    if ($usuario) {
        $reserva = new Mesa($conexao);
        $usuario_mesa = $reserva->reservar( $email,$num_pessoa, $data, $hora, $msg);
        if ($usuario_mesa) {
            session_start();
            $_SESSION["usuario"] = $usuario_mesa;
            header("location: reservado_sucesso.html");
            exit();
        }
       

    }
    else{
        header("location: reserva_de_mesa_teste.php?error=1");
    }

}