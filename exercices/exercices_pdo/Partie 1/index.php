<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 1</title>
    <link rel="stylesheet" href="../css/style.css" />
</head>
<body>
    <h1>Exercice 1</h1>
    <?php
    try
    {
        $colyseum = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'admin', '!18m02j12');
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }
    $clients = $colyseum->query('SELECT lastName, firstName, birthDate FROM clients');
    ?><table><th>NOM</th><th>PRÉNOM</th><th>DATE DE NAISSANCE</th><?php
    while ($names = $clients->fetch()){?>
        <tr><td><?= $names['lastName'] ?></td><td><?= $names['firstName'] ?></td><td><?= date("d-m-Y", strtotime($names['birthDate'])) ?></td></tr><?php
    }?>
    </table><?php

$clients->closeCursor();
    ?>
    <p><a href="../index.php">Retour Index</a></p>
</body>
</html>