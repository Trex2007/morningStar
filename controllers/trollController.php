<?php

    $uri = $_SERVER['REQUEST_URI'];
    if ($uri === "/ph" || $uri === "/coquin"){
        header("Location: https://i.imgflip.com/78581b.gif");
    } elseif ($uri === "/mc" || $uri === "/so2011"){
        header("Location: https://www.minecraft.net/fr-fr");
    } elseif ($uri === "/con" || $uri === "/conne"){
        header("Location: https://www.dictionnaire-academie.fr/article/A9C3342");
    } elseif ($uri === "/rick" || $uri === "/morty" || $uri === "/meme" || $uri === "/rickroll" || $uri === "/roll"){
        header("Location: https://static.wikia.nocookie.net/dirtybiologistan/images/5/58/Rickroll.gif/revision/latest?cb=20220620191052&path-prefix=fr");
    } elseif ($uri === "/cocorex" || $uri === "/cocorex666" || $uri === "/cocorex333"){
        $title = "Cocorex666";
        $template = "Views/troll/cocorex.php";
        require_once("views/base.php");
    } 