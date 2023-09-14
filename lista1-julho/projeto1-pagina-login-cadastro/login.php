<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    
</head>
<body>
    <a href="home.php">Voltar</a>
        <div class="box">
            <form action="acessologin.php" method="POST">
                <h1>Login</h1>
                <input type="text" name="email" placeholder="E-mail">
                <br><br>
                <input type="password" name="senha" placeholder="Senha">
                <br><br>
                <input class="inputSubmit" type="submit" name="submit" value="Enviar">
            </form>
        </div>
</body>
</html>