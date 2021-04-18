<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('location:login.php');}

$title="welcome";
include_once "header.php";
?>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="welcome.php">Bienvenu</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">

                <li class="nav-item active">
                    <a class="nav-link" href="ajoutP.php">Ajout personne</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="modifP.php">Modifier personne</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="supprP.php">Supprimer personne</a>
                </li>
                </li>

            </ul>
            <form class="form-inline" action="logout.php" method="post">
                <button type="submit" class="btn btn-success " type="button" >logout</button>

            </form>
        </div>
    </nav>
