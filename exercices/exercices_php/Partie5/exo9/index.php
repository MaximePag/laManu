<?php
    $HDF= array(
        '80' => 'Somme',
        '60' => 'Oise',
        '02' => 'Aisne',
        '59' => 'Nord',
        '62' => 'Pas de Calais',
        '51' => 'Marne'
    );
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <title>PHP Partie5 Exo9</title>
</head>

<body>
    <?php
        foreach($HDF as $ligne){ 
        ?><p><?= $ligne; ?></p><?php
        }
    ?>
</body>

</html>