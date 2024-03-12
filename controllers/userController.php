<?php

    require_once("Models/userModel.php");

    $uri = $_SERVER['REQUEST_URI'];
    if ($uri === "/login" || $uri === "/connexion")
    {
        if(isset($_POST['userEmail'])){
            $erreur=false;
            if(connectUser($pdo)){
                header('location:/home');
            } else{
                $erreur=true;
            }
        }

        $title = "Login";
        $template = "Views/Users/login.php";
        require_once("views/baseLog.php");
    } elseif ($uri === "/register" || $uri === "/enregistrement"){
        if(isset($_POST['userNom'])){
            $messageError = verifEmptyData();
            if(!$messageError){
                createUser($pdo);
                header('location:/login');
            }
        }

        $title = "Register";
        $template = "Views/Users/register.php";
        require_once("views/baseLog.php");
    } elseif ($uri === "/profile" || $uri === "/profil"){
        if(isset($_SESSION['user'])){
            $title = "Profile";
            $template = "Views/Users/profile.php";
            require_once("views/base.php");
        } else{
            header("location:/login");
        }
    } elseif ($uri ==="/updateProfil") {
        if(isset($_POST['edit-button'])){
            $messageError = verifEmptyData();

            if(!$messageError) {
                updateUser($pdo);
                updateSession($pdo);
                header('Location:/profile');
            }
            $title = "Mise à jour du profil";
            $template = 'Views/Users/profil.php';
        }
    } elseif ($uri ==="/deconnexion") {
        session_destroy();
        header('Location:/home');
    }