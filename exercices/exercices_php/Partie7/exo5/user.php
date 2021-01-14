<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <title>PHP Partie7 Exo5 UserPage</title>
</head>

<body>
    <?php
    if (isset($_GET['lastname']) && isset($_GET['firstname'])){
        ?><p><?= 'Bonjour : ' . $_GET['gender'] . ' ' . $_GET['firstname'] . ' ' . $_GET['lastname'] . ' !'?></p><?php
    }
    elseif (isset($_GET['lastname'])){
        ?><p><?= 'Salut : ' . '(Nom Non défini)' . ' ' . $_GET['lastname'] . ' !'?></p><?php
    }
    elseif (isset($_GET['firstname'])){
        ?><p><?= 'Salut : ' . $_GET['firstname'] . ' ' . '(Prénom Non défini)' . ' !'?></p><?php
    }
    else {
        ?><p><?= 'Erreur il n\'y a pas de paramètres' ?></p><?php
    }
    ?>
    <a href="index.php">Retour Formulaire</a>
</body>

</html>