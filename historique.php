<?php
include_once "classes/connectionBD.php";

$bd = connexionBD::getInstance();


$response=$bd->prepare("select * from historique ");
$response->execute();
$cred=$response->fetchall(5);

include_once 'logged_header.php';
?>

<table class="table">
    <tr>
        <th>operation</th>


    </tr>
    <?php

    foreach ($cred as $his) {
        ?>
        <tr>
            <td><?= $his->history ?></td>

        </tr>
        <?php
    }
    ?>
</table>

</body>
</html>