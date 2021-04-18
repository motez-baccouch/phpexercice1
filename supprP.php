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
    <form action="p_suppr.php" method="post">
        <div class="form-group ">

            <label for="exampleInputUserName">enter the name of the account you want to delete</label>
            <input type="text" name="name" class="form-control" id="exampleInputUserName"  placeholder="name">

        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        </fieldst>
    </form>
</div>
    </body>
</html>
