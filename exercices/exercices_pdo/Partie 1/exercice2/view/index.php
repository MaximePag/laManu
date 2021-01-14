<?php
include '../model/showTypes.php';
include '../control/controller.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO Exercice 2 Partie 1</title>
    <link rel="stylesheet" href="../../../assets/css/style.css" />
</head>
<body>
    <h1>Les différents types de spectacles :</h1>
    <table>
    <?php
    foreach($showTypesList as $showType){
        ?><tr><td><?= $showType->type ?></td><?php
        if ($showType->type == 'Concert'){
            ?><td><img class="imgTable" src="../../../assets/img/Concert.jpg" /></td></tr><?php
        }
        if ($showType->type == 'Thtre'){
            ?><td><img class="imgTable" src="../../../assets/img/theatre.jpg" /></td></tr><?php
        }
        if ($showType->type == 'Humour'){
            ?><td><img class="imgTable" src="../../../assets/img/humour.jpg" /></td></tr><?php
        }
        if ($showType->type == 'Danse'){
            ?><td><img class="imgTable" src="../../../assets/img/danse.jpg" /></td></tr><?php
        }
    }
    ?>
</table>
<p><a href="../../../index.php">Retour Index</a></p>
</body>
</html>