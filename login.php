<?php
session_start();
if(isset($_SESSION['user'])){header('location:welcome.php');}
$title="login";
include_once "header.php";
?>
<div class="container">
    <?php
    if (isset($_SESSION['errorMessage'])) {

        ?>
        <div class="alert alert-danger">
            <?= $_SESSION['errorMessage'] ?>
        </div>
        <?php
        unset($_SESSION['errorMessage']);
    }
    ?>

<form action="p_login.php" method="post">
            <div class="form-group ">

            <label for="exampleInputUserName">User name</label>
            <input type="text" name="username" class="form-control" id="exampleInputUserName"  placeholder="username">
            <small id="emailHelp" class="form-text text-muted">We'll never share your credentials with anyone else.</small>
            </div>
            <div class="form-group">
            <label for="InputPassword">Password</label>
            <input type="password" name="password" class="form-control" id="InputPassword" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </fieldst>
</form>
</div>
</body>
</html>
