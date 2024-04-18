<?php
    
    function selectMyReservations($pdo)
    {
        try {
            $query = 'select * from reservation where userID = :userID';
            $selectReservations = $pdo->prepare($query);
            $selectReservations->execute([
            'userID' => $_SESSION['user']->id
            ]);
            $Reservations = $selectReservations->fetchAll();
            return $Reservations;
        } catch (PDOException $e) {
            $message = $e->getMessage();
            die ($message);
        }
    }
    function selectAllOptions($pdo)
    {
        try{
            $query = 'SELECT * FROM options';
            $selectOptions = $pdo->prepare($query);
            $selectOptions->execute();
            $options = $selectOptions->fetchAll();
            return $options;
        } catch (PDOException $e) {
            $message = $e->getMessage();
            die ($message);
        }
    }
    function createReservation($pdo)
    {
        try{
            $query = 'insert into reservations (resDateDeb, resDateFin, userID) values (:resDateDeb, :resDateFin, :userID)';
            $addReservation = $pdo->prepare($query);
            $addReservation->execute([
                'resDateDeb' => $_POST['resDateDeb'],
                'resDateFin' => $_POST['resDateFin'],
                'userID' => $_SESSION['user']->userID
    
            ]);
        } catch (PDOException $e) {
            $message = $e->getMessage();
            die ($message);
        }
    }
    function ajouteOptionReservation($pdo,$reservationID,$optionId)
    {
        try{
            $query='insert into choixopt (resID, optID) values (:resID, :optID)';
            $deleteAllReservationsFromId = $pdo->prepare($query);
            $deleteAllReservationsFromId->execute([
                'resID' => $reservationID,
                'optID' => $optionId
            ]);
        } catch (PDOException $e) {
            $message = $e->getMessage();
            die ($message);
        }
    }