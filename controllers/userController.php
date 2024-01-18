<?php

    $uri = $_SERVER['REQUEST_URI'];
    if ($uri === "/login" || $uri === "/connexion")
    {
        $title = "Login";
        $template = "Views/Users/login.php";
        require_once("views/baseLog.php");
    } elseif ($uri === "/register" || $uri === "/enregistrement"){
        $title = "Register";
        $template = "Views/Users/register.php";
        require_once("views/baseLog.php");
    }