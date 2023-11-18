<!-- formulario_cadastro.php -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Login</title>
    <link rel="stylesheet" href="login-cadastro.css">
</head>
<body>
    <form action="processar_cadastro.php" method="post">
        <div>
            <h1>Cadastro</h1>
            <input type="text" name="nome" id="nome" placeholder="Nome"> <br><br>
            <input type="text" name="telefone" id="telefone" placeholder="Telefone"> <br><br>
            <input type="email" name="email" id="email" placeholder="Email"> <br><br>
            <input type="text" name="username" id="username" placeholder="Username"> <br><br>
            <input type="password" name="password" id="password" placeholder="Senha"> <br> <br>
            <button type="submit" value="Enviar">Cadastrar</button>
            <br><br>
        </div>
    </form>
</body>
</html>
