<?php
   session_start();
   $senha1 = $_SESSION["senha"];
   ?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
</head>
<body>
    <br>
    <h1>RESERVA DE MESA: USÚARIO SEM CONTA</h1>
    <label class="d-block font-weight-bold">O usuario já possui conta?</label>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" value="true" name="client" id="true" />
              <label for="true" class="form-check-label">Sim</label>

            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" value="false" name="client" />
              <label class="form-check-label">Não</label>
            </div>

    <form action="#" method="post" id="form">
        <label for="nome">Nome Completo: </label>
        <input type="text" name="nome" id="nome" ><br><br>



        <label for="tele" id="tell">Telefone </label>
        <input type="text" name="tele" id="tele" ><br><br>


 
        <label for="email">E-mail </label>
        <input type="email" name="email" id="email" ><br><br>



        <label for="senha">Senha </label>
        <input type="text" name="senha" id="senha"><br><br>


      
        <label for="confSenha">Confirmar Senha </label>
        <input type="text" name="confSenha" id="confSenha" ><br><br>

        <label for="termos">Eu <a href="termos.html" target="_blank">li </a> e aceito os termos de uso</label>
        <input type="checkbox" id="termos" name="termos" >
        <br>
        
      
            <?php if(isset($_GET["error"])){?>
              <label  style="color:red;">Usuários não existe. </label>
              <?php }?>

          <button type="submit" name="enviar" style="width: 200px;" >Criar</button>


    </form>
    <a href="index1.html">Voltar</a>
    <script>
    var sim = document.getElementById("true");
    sim.addEventListener("click", function() {
        window.location.href = "reserva_de_mesa_teste.php";
    })
    </script>
    <?php

// Pega o valor do campo client
if (isset($_POST["enviar"])) {
    $cliente = $_POST["client"];

    // Verifica se é igual a "true"
    if ($cliente == "true") {
      
    }
    elseif ($cliente == "false") {
        header("Location: logado.php");
        exit;
    }
    
}


?>
</body>
</html>