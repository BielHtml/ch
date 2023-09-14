<?php
class Autenticacao {
    public $conexao;
    private $email;
    private $senha;

    function __construct($conexao)
    {
        $this->conexao = $conexao;
    }

    function logar ($email,$senha){
        $query = "SELECT * FROM cadastro WHERE email = ?";
        $stmt = $this->conexao->prepare($query);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = mysqli_num_rows($result);
        if ( $row === 1 ) {
            $usuario =  $result->fetch_assoc();
            if (password_verify($senha,  $usuario["senha"])) {
                return $usuario;
            }
        }
        else{
            return false;
        }

    }

}