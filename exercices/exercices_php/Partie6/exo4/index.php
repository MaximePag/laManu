<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <title>PHP Partie6 Exo4</title>
</head>

<body>
    <ul>
        <li><a href="index.php?language=PHP&server=LAMP">Tester Tous les Paramètres</a></li>
        <li><a href="index.php">Tester sans paramètres</a></li>
    </ul>
    <?php
    if (isset($_GET['language']) && isset($_GET['server'])){
        ?><p><?= $_GET['server'] . ' ' . $_GET['language'] ?></p><?php
    }
    else {
        ?><p><?= 'Erreur il n\'y a pas tous les paramètres' ?></p><?php
    }
    ?>
</body>

</html>