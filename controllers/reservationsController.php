<?php
require_once ("models/reservationsModel.php");

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
}
