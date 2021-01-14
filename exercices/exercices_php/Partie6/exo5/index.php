<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <title>PHP Partie6 Exo5</title>
</head>

<body>
    <ul>
        <li><a href="index.php?week=12">Tester Tous les Paramètres</a></li>
        <li><a href="index.php">Tester sans paramètres</a></li>
    </ul>
    <?php
    if (isset($_GET['week'])){
        ?><p><?= $_GET['week'] ?></p><?php
    }
    else {
        ?><p><?= 'Erreur il n\'y a pas tous les paramètres' ?></p><?php
    }
    ?>
</body>

</html>