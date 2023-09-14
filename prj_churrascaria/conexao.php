<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$database = "prj_churrascaria";
$conexao = mysqli_connect($servidor,$usuario,$senha,$database);

if (mysqli_connect_errno() <> 0) {
    $msg = mysqli_connect_error();
    echo "erro localizado"."<\br>";
    echo "o erro foi: ".$msg."<\br>";
}
else{
    echo "tudo certo";
 }
 
