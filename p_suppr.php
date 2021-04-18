<?php
session_start();
include_once "classes/connectionBD.php";

$bd = connexionBD::getInstance();
$name = $_POST['name'];


$response=$bd->prepare("SELECT * FROM persons WHERE fname=? ");
$response->execute(array($name));
$cred=$response->fetch(5);

if($cred->name == $_SESSION['user']){
    $_SESSION['errorMessage'] = "you can't delete the current user";
    header('location:supprP.php');
} elseif ($cred->fname != $name) {


    $_SESSION['errorMessage'] = "this name does not exist";
    header('location:supprP.php');
} else{

    $suppr=$bd->prepare("DELETE FROM persons WHERE fname=?");
    $suppr->execute(array($name));
    $a="user with the name $name was deleted on ".date("d/m/Y")." ".date(date("h:i:sa"))." ";
    $historique=$bd->prepare("INSERT INTO historique(history)
VALUES (?)");
    $historique->execute(array($a));
    $_SESSION['errorMessage'] = "user deleted succefully";
    header('location:welcome.php');

}


