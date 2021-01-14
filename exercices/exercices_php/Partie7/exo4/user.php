<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <title>PHP Partie7 Exo4 UserPage</title>
</head>

<body>
    <?php
    if (isset($_POST['lastname']) && isset($_POST['firstname'])){
        ?><p><?= 'Salut : ' . $_POST['firstname'] . ' ' . $_POST['lastname'] . ' !'?></p><?php
    }
    elseif (isset($_POST['lastname'])){
        ?><p><?= 'Salut : ' . '(Nom Non défini)' . ' ' . $_POST['lastname'] . ' !'?></p><?php
    }
    elseif (isset($_POST['firstname'])){
        ?><p><?= 'Salut : ' . $_POST['firstname'] . ' ' . '(Prénom Non défini)' . ' !'?></p><?php
    }
    else {
        ?><p><?= 'Erreur il n\'y a pas de paramètres' ?></p><?php
    }
    ?>
    <a href="index.php">Retour Formulaire</a>
</body>

</html>