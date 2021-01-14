<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <title>PHP Partie6 Exo1</title>
</head>

<body>
    <ul>
        <li><a href="index.php?lastname=Nemare&firstname=Jean">Tester Tous les Paramètres</a></li>
        <li><a href="index.php?lastname=Nemare">Tester seulement 'lastname'</a></li>
        <li><a href="index.php?firstname=Jean">Tester seulement 'firstname'</a></li>
        <li><a href="index.php">Tester sans paramètres</a></li>
    </ul>
    <?php
    if (isset($_GET['lastname']) && isset($_GET['firstname'])){
        ?><p><?= 'Salut : ' . $_GET['firstname'] . ' ' . $_GET['lastname'] . ' !'?></p><?php
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
</body>

</html>