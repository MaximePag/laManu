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
    <title>PHP Partie5 Exo10</title>
</head>

<body>
    <?php
        foreach($HDF as $depNumero => $dep )
        { ?>
        <p><?= 'Le département : ' . $dep . ' a le numéro : ' . $depNumero; ?></p>
        <?php }
    ?>
</body>

</html>