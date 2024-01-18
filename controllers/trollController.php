<?php

    $uri = $_SERVER['REQUEST_URI'];
    if ($uri === "/ph" || $uri === "/coquin"){
        $title = "ph";
        $template = "Views/troll/ph.php";
        require_once("views/baseLog.php");
    } elseif ($uri === "/mc" || $uri === "/so2011"){
        $title = "mc";
        $template = "Views/troll/Mc.php";
        require_once("views/baseLog.php");
    } elseif ($uri === "/con" || $uri === "/conne"){
        $title = "con";
        $template = "Views/troll/con_.php";
        require_once("views/baseLog.php");
    } elseif ($uri === "/rick" || $uri === "/morty" || $uri === "/meme" || $uri === "/rickroll" || $uri === "/roll"){
        $title = "RickRolled";
        $template = "Views/troll/rick.php";
        require_once("views/baseLog.php");
    } elseif ($uri === "/cocorex" || $uri === "/cocorex666" || $uri === "/cocorex333"){
        $title = "Cocorex666";
        $template = "Views/troll/cocorex.php";
        require_once("views/base.php");
    } 