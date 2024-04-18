<?php
    require_once "models/reservationsModel.php";

    $uri = $_SERVER["REQUEST_URI"];

    if($uri === "/mesReservations"){
        $reservation = selectMyReservations($pdo);
        
        $title = "Mes Reservations";
        $template = "Views/pageAccueil.php";
        require_once("Views/base.php");
    }
    elseif ($uri === "/createReservation"){
        if(isset($_POST["reservCr"])){
        
            createReservation($pdo);

            $reservationID = $pdo->lastInsertId();

            for($i = 0; $i < count($_POST["options"]); $i++){
                $optionReservationID = $_POST["options"][$i];

                ajouteOptionReservation($pdo,$reservationID,$optionReservationID);
            }
            header("location:/profile");
        }
        $options = selectAllOptions($pdo);
        $title = "Créer une réservation";
        $template = "Views/Users/profile.php";
        require_once("Views/base.php");
    }