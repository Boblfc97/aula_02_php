<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="caixa_login">
        <h2>Login</h2>
        <form action="fazer_login.php" method="post">
            <input type="text" name="usuario_digitado" placeholder="digite seu username"> <br> <br>
            <input type="password" name="senha_digitada" placeholder="digite sua senha"> <br> <br>
            <?php 
                echo isset($_GET['erro'])? "Usuário e/ou senha incorreto! <br>":"";
                echo isset($_GET['erro2'])? "Você precisa estar logado! <br>":"";

            ?>
            <button type="submit">Entrar</button>
        </form>
    </div>
</body>
</html>