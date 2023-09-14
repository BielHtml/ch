<?php
   session_start();
   $senha1 = $_SESSION["senha"]; //pega os dados posto no logar 
   $email1 = $_SESSION["email"];
   ?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Teste</title>
</head>
<body>
    <br>
    <h1>RESERVA DE MESA</h1>
    <label class="d-block font-weight-bold">O usuario é o mesmo que o da conta?</label>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" value="true" name="client" id="true" />
              <label for="true" class="form-check-label">Sim</label>

            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" value="false" name="client" id="false" />
              <label class="form-check-label">Não</label>
            </div>

    <form action="reserva.php" method="post" id="form">
 
        <label for="email">E-mail </label>
        <input type="email" name="email" id="email" value="<?php echo $email1 //imprimi dados pego no logar?>"><br><br>


        <label for="senha">Senha </label>
        <input type="checkbox" id="mostrar">mostrar senha <br>
        <input type="password" name="senha" id="senha" value="<?php echo $senha1 ?>" ><br><br>

        <label for="data">Data: </label>
        <input type="date" name="data" id="data" ><br><br>
    
        <label for="hora">Hora: </label>
        <input type="time" name="hora" id="hora" ><br><br>

        <label for="num_pessoa">Quantidade de pessoas: </label>
        <input type="number" name="num_pessoa" id="num_pessoa" min="1" max="50" required><br><br>

        <label for="msg">Mensagem: </label><br>
          <textarea name="msg" id="msg" placeholder="Digite sua mensagem"  ></textarea><br>
        <label for="termos">Eu <a href="termos.html" target="_blank">li </a> e aceito os termos de uso</label>
        <input type="checkbox" id="termos" name="termos" >
        <br>
        
      
            <?php if(isset($_GET["error"])){?>
              <label  style="color:red;">Usuários não existe. </label>
              <?php }?>

          <button type="submit" name="enviar" style="width: 200px;" >Criar</button>



    </form>
    <button type="submit" name="teste" id="sair"  >Sair da conta</button>

    <a href="index1.html">Voltar</a>
    <script>
      var mostrar = document.getElementById("mostrar");
      var senha = document.getElementById("senha");

      mostrar.addEventListener("click", function(){
        if (senha.type === "text") {
          senha.type = "password";
        }
        else{
          senha.type = "text";

        }
      })
    var nao = document.getElementById("false"); //define nao como o elemento do id "false"
    nao.addEventListener("click", function() {  // clico no id: "false"
      window.location.href = "fazer_reserva_terceiros.php"; //muda de site
    })
    var sair = document.getElementById("sair");
    sair.addEventListener("click", function() {
      window.location.href = "sair.php";
 
    })
    </script>

</body>
</html>