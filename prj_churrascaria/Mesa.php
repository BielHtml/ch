<?php  
class Mesa {
    public $conexao;
    private $email;
    private $data;
    private $hora;
    private $num_pessoa;
    private $msg;




    function __construct($conexao)
    {
        $this->conexao = $conexao;
    }

    function reservar($email,$num_pessoa,$data,$hora, $msg ){
    $sql = "INSERT INTO reserva(email_mesa,num_pessoa,dia,horas,mensagem) VALUES(?,?,?,?,?)  ";
    $stmt = $this->conexao->prepare($sql);
    $stmt->bind_param("sssss", $email, $num_pessoa, $data, $hora,$msg);
    if ($stmt->execute()) {
        return true;
    }
    else {
        return false;

    }        
    }
}

?>