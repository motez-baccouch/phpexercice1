<?php include_once 'logged_header.php' ?>


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
    <h1>leave the field you dont want to modify empty ^^ </h1>
    <form action="p_modif.php" method="post">
        <div class="form-group ">

            <label for="exampleInputUserName">new first name</label>
            <input type="text" name="fname" class="form-control" id="exampleInputUserName"  placeholder="username">

        </div>
        <div class="form-group ">

            <label for="exampleInputUserName">new last name</label>
            <input type="text" name="lname" class="form-control" id="exampleInputUserName"  placeholder="last name">

        </div>
        <div class="form-group">
            <label for="InputPassword">new Password</label>
            <input type="password" name="password" class="form-control" id="InputPassword" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="InputPassword">Confirm Password</label>
            <input type="password" name="cpassword" class="form-control" id="InputPassword" placeholder="Confirm Password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </fieldst>
    </form>
</div>
</body>
</html>
