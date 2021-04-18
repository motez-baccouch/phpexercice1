<?php
session_start();
include_once "classes/connectionBD.php";

$bd = connexionBD::getInstance();
$name = $_POST['name'];


$response=$bd->prepare("SELECT * FROM persons WHERE fname=? ");
$response->execute(array($name));
$cred=$response->fetch(5);

if($cred->name == $_SESSION['user']){
    $_SESSION['errorMessage'] = "you can't modify the current user";
    header('location:modifP.php');
} elseif ($cred->fname != $name) {


    $_SESSION['errorMessage'] = "this name does not exist";
    header('location:modifP.php');
} else{
    $_SESSION['name']=$name;
    header('location:modifP2.php');}




