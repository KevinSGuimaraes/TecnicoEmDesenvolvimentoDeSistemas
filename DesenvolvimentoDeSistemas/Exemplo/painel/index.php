<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="public/css/style_login.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div class="login-box">

        <h1>Login</h1>

        <form action="app/controllers/login.php" method="POST">
            <div class="input-group">
                <label>Email</label>
                <input type="email" name="email">
            </div>

            <div class="input-group">
                <label>Senha</label>
                <input type="password" name="senha">
            </div>

            <button type="submit" name="acao" value="login">
                Entrar
            </button>
        </form>
    </div>
</body>
</html>