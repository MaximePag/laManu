<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <title>PHP Partie6 Exo3</title>
</head>
<body>
    <ul>
        <li><a href="index.php?startDate=2/05/2016&endDate=27/11/2016">Tester Tous les Paramètres</a></li>
        <li><a href="index.php">Tester sans paramètres</a></li>
    </ul>
    <?php
    if (isset($_GET['startDate']) && isset($_GET['endDate'])){
        ?><p><?= $_GET['endDate'] . ' ' . $_GET['startDate'] ?></p><?php
    }
    else {
        ?><p><?= 'Erreur il n\'y a pas tous les paramètres' ?></p><?php
    }
    ?>
</body>
</html>