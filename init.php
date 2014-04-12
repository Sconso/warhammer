<?php
    session_start();

    if (!isset($_SESSION["user"]) || empty($_SESSION["user"]))
    {
        $_SESSION["login"] = null;
        $_SESSION["mail"] = null;
        $_SESSION["user"] = "Visiteur";
        $_SESSION["status"] = 0;
    }

    if (!isset($_SESSION["login"]) || empty($_SESSION["login"]))
        $_SESSION["login"] = null;
?>