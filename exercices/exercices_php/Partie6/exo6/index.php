<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <title>PHP Partie6 Exo6</title>
</head>

<body>
    <ul>
        <li><a href="index.php?building=12&room=101">Tester Tous les Paramètres</a></li>
        <li><a href="index.php">Tester sans paramètres</a></li>
    </ul>
    <?php
    if (isset($_GET['building']) && isset($_GET['room'])){
        ?><p><?= $_GET['room'] . ' ' . $_GET['building'] ?></p><?php
    }
    else {
        ?><p><?= 'Erreur il n\'y a pas tous les paramètres' ?></p><?php
    }
    ?>
</body>

</html>