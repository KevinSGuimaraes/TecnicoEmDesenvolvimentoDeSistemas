<?php

session_start();

// Se já está logado
if(isset($_SESSION["usuario"]))
{
    header("Location: dashboard.php");
    exit;
}

// Se marcou lembrar-me anteriormente
if(isset($_COOKIE["lembrar"]))
{
    $_SESSION["usuario"] = $_COOKIE["lembrar"];

    header("Location: dashboard.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../controllers/login.php" method="POST">

    <input type="email" name="email">

    <input type="password" name="senha">

    <input type="checkbox" name="lembrar">
    <label>Lembrar-me</label>

    <button type="submit">
        Entrar
    </button>

</form>
</body>
</html>