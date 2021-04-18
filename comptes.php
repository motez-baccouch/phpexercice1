<?php
include_once "classes/connectionBD.php";

$bd = connexionBD::getInstance();


$response=$bd->prepare("select * from persons where fname=? and password=?");
$response->execute(array('motez','azerty123'));
$cred=$response->fetchall(5);

include_once 'header.php';
?>

<table class="table">
    <tr>
        <th>Firstname</th>
        <th>Name</th>
        <th>pass</th>

    </tr>
    <?php
    $username="motez";
    $password="azerty123";
    if($cred->fname==$username && $cred->password==$password){}
    foreach ($cred as $personne) {
        ?>
        <tr>
            <td><?= $personne->fname ?></td>
            <td><?= $personne->name ?></td>
            <td><?= $personne->password ?></td>

        </tr>
        <?php
    }
    ?>
</table>

</body>
</html>