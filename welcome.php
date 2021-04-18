<?php include_once 'logged_header.php'; ?>
<?php
if (isset($_SESSION['errorMessage'])) {

    ?>
    <div class="alert alert-success" >
        <?= $_SESSION['errorMessage'] ?>
    </div>
    <?php
    unset($_SESSION['errorMessage']);
}
?>
<div class="jumbotron">
    <h1 class="display-4">Bienvenu Mr/Mme <?php echo $_SESSION['user']; ?></h1>
    <p class="lead">vous pouvez ajouter , modifier ou supprimer des personnes</p>
    <hr class="my-4">
    <p>les actions sont enrigistrer dans la page historique des changement</p>
    <p class="lead">
        <a class="btn btn-primary btn-lg" href="historique.php" role="button">historique</a>
    </p>
</div>
</div>
</body>
</html>