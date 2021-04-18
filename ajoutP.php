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
    <form action="p_ajout.php" method="post">
        <div class="form-group ">

            <label for="exampleInputUserName">first name</label>
            <input type="text" name="fname" class="form-control" id="exampleInputUserName"  placeholder="username">

        </div>
        <div class="form-group ">

            <label for="exampleInputUserName">last name</label>
            <input type="text" name="lname" class="form-control" id="exampleInputUserName"  placeholder="last name">

        </div>
        <div class="form-group">
            <label for="InputPassword">Password</label>
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
