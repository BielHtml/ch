<?php
class Usuario {
   public $conexao;
   private $nome;
   private $telefone;
   private $email;
   private $senha;
   private $confSenha;

 function __construct($conexao)
 {
    $this->conexao = $conexao;
 }

 function cadastrar($nome,$telefone,$email,$senha){
        $senhaSegura = password_hash($senha, PASSWORD_DEFAULT );
        $sql = "INSERT INTO cadastro(nome,telefone,email,senha) VALUES(?,?,?,?)";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bind_param("ssss",$nome,$telefone,$email,$senhaSegura);
        if ( $stmt->execute()) {
            return true;
        }
        else {
            return false;

        }
    }
    

 }
