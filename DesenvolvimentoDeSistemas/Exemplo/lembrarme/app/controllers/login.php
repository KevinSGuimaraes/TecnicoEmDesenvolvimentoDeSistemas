<?php

    session_start();

    include_once("../models/User.php");

    $email = $_POST["email"];
    $senha = md5($_POST["senha"]);

    $obj = new User();

    if($obj->ValidarLogin($email,$senha))
    {
        $_SESSION["usuario"] = $email;

        if(isset($_POST["lembrar"]))
        {
            setcookie(
                "lembrar",
                $email,
                time() + (60 * 60 * 24 * 30),
                "/"
            );
        }

        header("Location: ../views/dashboard.php");
        exit;
    }
    else
    {        
        header("Location: ../views/index.php");
        exit;
    }
?>