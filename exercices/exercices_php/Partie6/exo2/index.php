<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <title>PHP Partie6 Exo2</title>
</head>

<body>
    <ul>
        <li><a href="index.php?lastname=Nemare&amp;firstname=Jean&amp;age=45">Tester Tous les Paramètres</a></li>
        <li><a href="index.php?lastname=Nemare">Tester seulement 'lastname'</a></li>
        <li><a href="index.php?firstname=Jean">Tester seulement 'firstname'</a></li>
        <li><a href="index.php?age=45">Tester seulement 'age'</a></li>
        <li><a href="index.php">Tester sans paramètres</a></li>
    </ul>
    <?php
    if (isset($_GET['lastname']) && isset($_GET['firstname']) && isset($_GET['age'])){
        ?><p><?= $_GET['firstname'] . ' ' . $_GET['lastname'] . ' ' . $_GET['age'] ?></p><?php
    }
    elseif (isset($_GET['age'])){
        ?><p><?= $_GET['age'] ?></p><?php
    }
    else {
        ?><p><?= 'Erreur il n\'y a pas de paramètre \'age\'' ?></p><?php
    }
    ?>
</body>

</html>