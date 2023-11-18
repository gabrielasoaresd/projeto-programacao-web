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
    <form action="processar_aluno.php" method="post">
        <div>
            <h2>Cadastro aluno</h2>
            <input type="text" name="nome" id="nome" placeholder="Nome"> <br><br>
            <input type="text" name="matricula" id="matricula" placeholder="Matrícula"> <br><br>
            <input type="text" name="nota1" id="nota1" placeholder="1° Nota"> <br><br>
            <input type="text" name="nota2" id="nota2" placeholder="2° Nota"> <br><br>
            <button type="submit" value="Enviar">Cadastrar</button>
            <br><br>
        </div>
    </form>
</body>
</html>