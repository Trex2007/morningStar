<?php

    //require_once("Models/connectUsers.php");

    $uri = $_SERVER['REQUEST_URI'];

    if ($uri === "/home" || $uri === "/accueil" || $uri === "/index" || $uri === "/index.php" || $uri === "/"){

        //$user = selectAllUsers($pdo);

        $title = "Accueil";
        $template = "Views/pageAccueil.php";
        require_once("views/base.php");
    } 