<?php
require_once("models/reservationsModel.php");

$uri = $_SERVER["REQUEST_URI"];

if ($uri === "/Chambres" || $uri === "/BedRooms") {
    if (isset($_SESSION['user'])) {
        if (isset($_POST["reservCr"])) {

            createReservation($pdo);

            $reservationID = $pdo->lastInsertId();

            for ($i = 0; $i < count($_POST["options"]); $i++) {
                $optionReservationID = $_POST["options"][$i];

                ajouteOptionReservation($pdo, $reservationID, $optionReservationID);
            }
            header("location:/profile");
        }
        $options = selectAllOptions($pdo);
    } else {
        header("location:/login");
    }
    $title = "Chambres";
    $template = "Views/chambres.php";
    require_once("views/base.php");
} elseif (isset($_GET["resID"]) && str_starts_with($uri, "/voirReservation")) {
    $reservation = selectOneReservation($pdo);
    $options = selectAllOptions($pdo);
    $optionsActiveReservation = selectOptionsActiveReservation($pdo);
    
    if (isset($_POST['edit-button-Res'])) { 
        updateReservation($pdo);
        deleteOptionReservation($pdo);
        for ($i = 0; $i < count($_POST["options"]); $i++) {
            $optionReservationID = $_POST["options"][$i];
            ajouteOptionReservation($pdo, $reservation->resID, $optionReservationID);
        }
        header("location:/voirReservation?resID=$reservation->resID");
    }
    else if (isset($_POST['suprr-Res'])) { 
        deleteOptionReservation($pdo);
        deleteOneReservation($pdo);
        header("location:/profile");
    }

    $title = "Vôtre réservation";
    $template = "views/Users/voirReservation.php";
    require_once("views/base.php");
}
