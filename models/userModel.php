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
            $messageError[$key] = "votre " .$key . " est vide.";
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
        $query = 'update user set userNom :userNom, userSurnom = :userSurnom, userMDP = :userMdp, userTel = :userTel where id = :id';
        $ajouteUser = $pdo->prepare($query);
        $ajouteUser->execute{[
            'userNom' => $_POST["userNom"],
            'userSurnom' => $_POST["userSurnom"],
            'userMDP' => $_POST["userMDP"],
            'userTel' => $_POST["userTel"],
            'id' => $_SESSION["user"]->id
        ]};
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}
function updateSession($pdo)
{
    try{
        $query = 'select * from user where id = :id';
        $selectUser = $pdo->prepare($query);
        $selectUser->exeute([
            'id'=>$_SESSION["user"] -> id
        ]);
        $user = $selectUser->fetch();
        $_SESSION['user']= $user;
    }catch(PDOException $e){
        $message = $e-> getMessage();
        die( $message);
    }
}