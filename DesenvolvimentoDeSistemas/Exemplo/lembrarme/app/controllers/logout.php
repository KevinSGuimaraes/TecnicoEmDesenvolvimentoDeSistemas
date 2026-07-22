<?php

    session_start();

    session_destroy();

    setcookie(
        "lembrar",
        "",
        time() - 3600,
        "/"
    );

    header("Location: ../views/index.php");
    exit;

?>