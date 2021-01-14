<?php
session_start();
$_SESSION['firstname'] = 'Maxime';
$_SESSION['lastname'] = 'Pageot';
$_SESSION['age'] = 22;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <title>PHP Partie8 Exo2</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <form>
        <h1>Mon "JOLI" Formulaire</h1>
        <p><?= 'Bonjour ' . $_SESSION['firstname'] . ' ' . $_SESSION['lastname'] . ' ! ' ?></p>
        <p><?= 'Vous avez ' . $_SESSION['age'] . ' ans.' ?></p>
        <ul>
            <li><h2>Votre User Agent : </h2><?= $_SERVER['HTTP_USER_AGENT'] ?></li>
            <li><h2>Votre Adresse IP : </h2><?= $_SERVER['SERVER_ADDR'] ?></li>
            <li><h2>Nom du serveur : </h2><?= $_SERVER['SERVER_NAME'] ?></li>
        </ul>
        <a href="user2.php">Aller sur la page Utilisateur</a>
        <button><a href="index.php">Retour Index</a></button>
    </form>
</body>

</html>