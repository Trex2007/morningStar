<?php

function selectAllUsers($pdo)
{
    try{
        $query = "select * from user";
        $selectUser = $pdo->prepare($query);
        $selectUser->execute();
        $user = $selectUser->fetchAll();
        return $user;
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}