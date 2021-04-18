<?php
session_start();
include_once "classes/connectionBD.php";

$bd = connexionBD::getInstance();
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];

$response=$bd->prepare("SELECT * FROM persons WHERE fname=? ");
$response->execute(array($_SESSION['name']));
$cred=$response->fetch(5);

if($password != $cpassword) {


    $_SESSION['errorMessage'] = "Passwords does not match ";
    header('location:ajoutP.php');
} elseif ($password=="") {
    $password=$cred->password;
}

if ($lname=="") {
    $lname=$cred->name;
}
if ($fname=="") {
    $fname=$cred->fname;
}




    $modif=$bd->prepare("UPDATE persons 
SET 
    fname =?,name=?,password=?
WHERE
    fname= ?");
    $modif->execute(array($fname,$lname,$password,$_SESSION['name']));
$a="user with the name $fname was modified on ".date("d/m/Y")." ".date(date("h:i:sa"))." ";
$historique=$bd->prepare("INSERT INTO historique(history)
VALUES (?)");
$historique->execute(array($a));
    $_SESSION['errorMessage'] = "user modified succefully";
    unset($_SESSION['name']);
    header('location:welcome.php');




