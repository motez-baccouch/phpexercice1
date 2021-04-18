<?php
session_start();
include_once "classes/connectionBD.php";


$bd = connexionBD::getInstance();
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];

$response=$bd->prepare("SELECT * FROM persons WHERE fname=? ");
$response->execute(array($fname));
$cred=$response->fetch(5);

if ($password=="" || $cpassword=="" || $fname=="" || $lname=="") {


    $_SESSION['errorMessage'] = "please fill all of the informations";
    header('location:ajoutP.php');
}
elseif($password != $cpassword) {


        $_SESSION['errorMessage'] = "Passwords does not match ";
        header('location:ajoutP.php');
    }
elseif($cred->fname==$fname) {
    $_SESSION['errorMessage'] = "name already exists ";
    header('location:ajoutP.php');
}else{

    $ajout=$bd->prepare("INSERT INTO persons(fname,name,password)
VALUES (?,?,?)");
    $ajout->execute(array($fname,$lname,$password));
    $_SESSION['errorMessage'] = "user added succefully";
    $a="a new user with the name $fname was added on ".date("d/m/Y")." ".date(date("h:i:sa"))." ";
    $historique=$bd->prepare("INSERT INTO historique(history)
VALUES (?)");
    $historique->execute(array($a));
    header('location:welcome.php');

}


