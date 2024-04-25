<?php

$uri = $_SERVER['REQUEST_URI'];

if ($uri === "/home" || $uri === "/accueil" || $uri === "/index" || $uri === "/index.php" || $uri === "/") {

    $title = "Accueil";
    $template = "Views/pageAccueil.php";
    require_once("views/base.php");
} elseif ($uri === "/Epopee" || $uri === "/EpopeeTemporelle") {
    $title = "Epopee Temporelle";
    $template = "Views/Epopee.php";
    require_once("views/base.php");
} elseif ($uri === "/contact" || $uri === "/ContacterNous") {
    $title = "Contact";
    $template = "Views/contact.php";
    require_once("views/base.php");
} elseif ($uri === "/media" || $uri === "/Photos" || $uri === "Video") {
    $title = "Media";
    $template = "Views/media.php";
    require_once("views/base.php");
} elseif ($uri === "/Vrchat" || $uri === "/World") {
    header("Location: https://vrchat.com/home/world/wrld_505738e4-c1fb-4ecc-b49a-b7865e884bb1");
}
