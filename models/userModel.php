<?php 

function createUser($pdo)
{
    try{
        $query = 'insert into user(userNom, userSurnom, userEmail, userMdp, userTel, userPerm)
        values (:userNom, :userSurnom, :userEmail, :userMdp, :userTel, :userPerm)';
        $ajouteUser = $pdo->prepare($query);
        $ajouteUser->execute([
            'userNom' => $_POST["userNom"],
            'userSurnom' => $_POST["userSurnom"],
            'userEmail' => $_POST["userEmail"],
            'userMdp' => $_POST["userMdp"],
            'userTel' => $_POST["userTel"],
            'userPerm' => 'cli'
        ]);
    } catch (PDOException $e){
        die('Erreur PDO: '.$e->getMessage());
    }
}


function connectUser($pdo)
{
    try{
        $query = 'select * from user where userNom = :userNom and userEmail = :userEmail and userMdp = :userMdp';
        $connectUser = $pdo->prepare($query);
        $connectUser->execute([
            "userNom" => $_POST['userNom'],
            "userEmail"=> $_POST['userEmail'],
            "userMdp"=> $_POST['userMdp']
        ]);
        $user=$connectUser->fetch();
        if (!$user){
            return false;
        }
        else{
            $_SESSION["user"] = $user;
            return true;
        }
    } catch (PDOException $e){
        die('Erreur PDO: '.$e->getMessage());
    }
}

function verifEmptyData()
{
    foreach ($_POST as $key => $value) {
        if (empty(str_replace(' ', '', $value))){
            $messageError[$key] = "Votre " .$key . " est vide.";
        }
    }
    if (isset($messageError)) {
        return $messageError;
    } else {
        return false;
    }
}

function updateUser($pdo)
{
    try {
        $query = 'update user set userNom = :userNom, userSurnom = :userSurnom, userMdp = :userMdp, userTel = :userTel where userID = :userID';
        $ajouteUser = $pdo->prepare($query);
        $ajouteUser->execute([
            'userNom' => $_POST["userNom"],
            'userSurnom' => $_POST["userSurnom"],
            'userMdp' => $_POST["userMdp"],
            'userTel' => $_POST["userTel"],
            'userID' => $_SESSION["user"] -> userID
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}
function updateSession($pdo)
{
    try{
        $query = 'select * from user where userID = :userID';
        $selectUser = $pdo->prepare($query);
        $selectUser->execute([
            'userID'=>$_SESSION["user"] -> userID
        ]);
        $user = $selectUser->fetch();
        $_SESSION['user']= $user;
    }catch(PDOException $e){
        $message = $e-> getMessage();
        die( $message);
    }
}
function deleteOptionReservatonsFromUser($dbh)
{
    try {
        $query = 'delete from choixOpt where resID in (select resID from reservations where userID = :userID)';
        $deleteAllUserFromId = $dbh->prepare($query);
        $deleteAllUserFromId->execute([
            'userID' => $_SESSION["user"] -> userID
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}
function deleteReservationsFromUser($dbh)
{
    try {
        $query = 'delete from reservations where userID = :userID';
        $deleteAllUserFromId = $dbh->prepare($query);
        $deleteAllUserFromId->execute([
            'userID' => $_SESSION["user"] -> userID
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}
function deleteUser($dbh)
{
    try {
        $query = 'delete from user where userID = :userID';
        $deleteAllUserFromId = $dbh->prepare($query);
        $deleteAllUserFromId->execute([
            'userID' => $_SESSION["user"] -> userID
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}
function SelectAllUsers($pdo){
    try {
        $query = "select * from user";
        $selectUser = $pdo->prepare($query);
        $selectUser->execute();
        $users = $selectUser->fetchAll();
        return $users;
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}
