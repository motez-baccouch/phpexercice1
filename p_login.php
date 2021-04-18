<?php
session_start();
include_once "classes/connectionBD.php";

$bd = connexionBD::getInstance();
$username = $_POST['username'];
$password = $_POST['password'];

$response=$bd->prepare("SELECT * FROM persons WHERE fname=? AND password=?");
$response->execute(array($username,$password));
$cred=$response->fetch(5);

    if ($username != "" && $password != "") {

        if ($cred->fname == $username && $cred->password == $password) {
            $_SESSION['user'] = $cred->name;
            header('location:welcome.php');
        } else {
            $_SESSION['errorMessage'] = "Veuillez vérifier vos credenitals ";
            header('location:login.php');
        }}else {
        $_SESSION['errorMessage'] = "Veuillez vérifier vos credenitals hihihi";
        header('location:login.php');

}