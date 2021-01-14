<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <title>PHP Partie8 Exo2 UserPage</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <form>
        <?php
        if (isset($_SESSION['lastname']) && isset($_SESSION['firstname']) && isset($_SESSION['age'])){
        ?><h1><?= 'Bonjour ' . $_SESSION['firstname'] . ' ' . $_SESSION['lastname'] . ' ! ' ?></h1>
        <p><?= ' Vous avez ' . $_SESSION['age'] . ' ans.' ?></p><?php
        }
        else {
            ?><p><?= 'Erreur les données n\'ont pas été récupéré' ?></p><?php
        }?>
        <a href="exo2.php">Retour Exercice</a>
        <button><a href="index.php">Retour Index</a></button>
    </form>
</body>

</html>