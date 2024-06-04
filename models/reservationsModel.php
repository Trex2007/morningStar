<?php

function selectMyReservations($pdo)
{
    try {
        $query = 'SELECT * from reservations where userID = :userID';
        $selectReservations = $pdo->prepare($query);
        $selectReservations->execute([
            'userID' => $_SESSION['user']->userID
        ]);
        $Reservations = $selectReservations->fetchAll();
        return $Reservations;
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}
function selectAllReservations($pdo){
    try {
        $query = 'SELECT * from reservations';
        $selectAllReservations = $pdo->prepare($query);
        $selectAllReservations->execute();
        $ReservationsAll = $selectAllReservations->fetchAll();
        return $ReservationsAll;
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}
function selectAllOptions($pdo)
{
    try {
        $query = 'SELECT * from options';
        $selectOptions = $pdo->prepare($query);
        $selectOptions->execute();
        $options = $selectOptions->fetchAll();
        return $options;
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}
function createReservation($pdo)
{
    try {
        $query = 'INSERT into reservations (resDateDeb, resDateFin, userID) values (:resDateDeb, :resDateFin, :userID)';
        $addReservation = $pdo->prepare($query);
        $addReservation->execute([
            'resDateDeb' => $_POST['resDateDeb'],
            'resDateFin' => $_POST['resDateFin'],
            'userID' => $_SESSION['user']->userID

        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}
function ajouteOptionReservation($pdo, $reservationID, $optionId)
{
    try {
        $query = 'INSERT into choixopt (resID, optID) values (:resID, :optID)';
        $deleteAllReservationsFromId = $pdo->prepare($query);
        $deleteAllReservationsFromId->execute([
            'resID' => $reservationID,
            'optID' => $optionId
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}
function selectOneReservation($pdo)
{
    try {
        $query = 'SELECT * FROM reservations WHERE resID = :resID';
        $selectReservations = $pdo->prepare($query);
        $selectReservations->execute([
            'resID' => $_GET['resID']
        ]);
        $reservation = $selectReservations->fetch();
        return $reservation;
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}
function selectOptionsActiveReservation($pdo)
{
    try {
        $query = 'SELECT * from options where optID in (select optID from choixopt where resID = :resID);';
        $selectOptions = $pdo->prepare($query);
        $selectOptions->execute([
            'resID' => $_GET['resID']
        ]);
        $options = $selectOptions->fetchAll();
        return $options;
    } catch (PDOException $e){
        $message = $e->getMessage();
        die($message);
    }
} 
function updateReservation($dbh)
{
    try {
        $query = 'UPDATE reservations set resDateDeb = :resDateDeb, resDateFin = :resDateFin where resID = :resID';
        $updateReservationFromID = $dbh->prepare($query);
        $updateReservationFromID->execute([
            'resDateDeb' => $_POST['resDateDeb'],
            'resDateFin' => $_POST['resDateFin'],
            'resID' => $_GET['resID'],
        ]);
    } catch (PDOException $e){
        $message = $e->getMessage();
        die($message);
    }
}
function deleteOptionReservation($dbh)
{
    try {
        $query = 'DELETE FROM choixopt WHERE resID = :resID';
        $deleteAllReservationsFromId = $dbh->prepare($query);
        $deleteAllReservationsFromId->execute([
            'resID' => $_GET['resID']
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}
function deleteOneReservation($pdo)
{
    try {
        $query = 'DELETE from reservations where resID = :resID';
        $deleteAllReservationsFromId = $pdo->prepare($query);
        $deleteAllReservationsFromId->execute([
            'resID' => $_GET['resID']
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}