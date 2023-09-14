<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
</head>
<body>
    <br>
    <h1>Logar</h1>

    <form action="fazer_login.php" method="post">
        <label for="email">E-mail </label>
        <input type="email" name="email" id="email" required><br><br>

        
        <label for="senha">Senha </label>
        <input type="text" name="senha" id="senha" required><br><br>
        <?php if(isset($_GET["error"])){//existe erro??>
        <label>Senha ou usuario errado</label>
        <?php } ?>
        <button type="submit" name="entrar" style="width: 200px;">Entrar</button>

    </form>
    <a href="index1.html">Voltar</a>

