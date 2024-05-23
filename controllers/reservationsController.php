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
    $options = selectOptionsActiveReservation($pdo);
    $title = "Vôtre réservation";
    $template = "views/Users/voirReservation.php";
    require_once("views/base.php");
} else if (isset($_GET["resID"]) && str_starts_with($uri, "/updateReservation")) {
    if (isset($_POST['BUTTON'])) { // RAJOUTER LE NOM DU 'BUTTON' !! 
        updateReservation($pdo);
        deleteOptionReservation($pdo);
        for ($i = 0; $i < count($_POST["options"]); $i++) {
            $optionReservationID = $_POST["options"][$i];
            ajouteOptionReservation($pdo, $_GET["resID"], $optionReservationID);
        }
        header("location:/MaReservations");
    }
    $reservation = selectOneReservation($pdo);
    $optionsActiveReservation = selectOptionsActiveReservation($pdo);
    $options = selectAllOptions($pdo);
    $title = "Mise a jour de vôtre réservation";
    $template = "Views/Schools/voirReservation.php";
    require_once("Views/base.php");
} elseif (isset($_GET["resID"]) && str_starts_with($uri, "/deleteReservation")) {
    deleteOptionReservation($pdo);
    deleteOneReservation($pdo);
    header("location:/MaReservations");
}
