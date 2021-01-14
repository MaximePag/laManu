<?php
include '../model/clients.php';
include '../control/controller.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO Exercice 6 Partie 1</title>
    <link rel="stylesheet" href="../../../assets/css/style.css" />
</head>
<body>
    <ul>
        <?php
        foreach($showList as $show){
            ?><li><?= $show->title ?> par <?= $show->performer ?> le <?= $show->dateFR ?> à <?= $show->startTime ?></li><?php
        }
        ?>
    </ul>
    <p><a href="../../../index.php">Retour Index</a></p>
</body>
</html>