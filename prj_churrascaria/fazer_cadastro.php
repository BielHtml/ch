<?php
require "Usuario.php";
require "conexao.php";



if (isset($_POST["enviar"])) {
    $nome =  $_POST["nome"];
    $telefone =  $_POST["tele"];
    $email =  $_POST["email"];
    $senha =  $_POST["senha"];
    $confSenha = $_POST["confSenha"];
    
    if ($senha === $confSenha) {
        $Usuario = new Usuario($conexao);
        if ( $Usuario->cadastrar($nome,$telefone,$email,$senha)){
            echo "cadastrado";
        }
        else{
            echo "Deu errado";

        }
        
        
        


    }

}