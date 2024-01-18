<?php
try {
    $strConnection = "mysql:host=localhost;dbname=adrien";
    $pdo=new PDO($strConnection,"root","root",[
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
    ]);
} catch (PDOException $e) {
    $message = $e->getMessage();
    die($message);
}