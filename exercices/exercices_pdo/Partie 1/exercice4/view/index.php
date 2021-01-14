<?php
include '../model/clients.php';
include '../control/controller.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO Exercice 4 Partie 1</title>
    <link rel="stylesheet" href="../../../assets/css/style.css" />
</head>
<body>
    <table>
        <tr>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Date de naissance</th>
            <th>Numéro de carte</th>
        </tr>
            <?php
            foreach($clientList as $client){
                ?><tr><td><?= $client->firstName ?></td><td><?= $client->lastName ?></td><td><?= $client->birthDateFR ?></td><td><?= $client->cardNumber ?></td></tr><?php
            }
            ?>
    </table>
    <p><a href="../../../index.php">Retour Index</a></p>
</body>
</html>