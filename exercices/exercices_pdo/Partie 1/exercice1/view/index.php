<?php
include '../model/clients.php';
include '../control/controller.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO Exercice 1 Partie 1</title>
</head>
<body>
    <ul>
    <?php
    foreach($clientList as $client){
        ?><li>Prénom: <?= $client->firstName ?> Nom: <?= $client->lastName ?> Né le: <?= $client->birthDateFR ?></li><?php
    }
    ?>
    </ul>
    <p><a href="../../../index.php">Retour Index</a></p>
</body>
</html>