<?php
    $months= array('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre');

?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <title>PHP Partie5 Exo8</title>
</head>

<body>
    <?php
        foreach ($months as $ligne){
        ?><p><?= $ligne; ?></p><?php
        }
    ?>
</body>

</html>