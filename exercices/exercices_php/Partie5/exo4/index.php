<?php
    $months= array('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <title>PHP Partie5 Exo4</title>
</head>

<body>
    <p><?php
    $months[7] = 'Août';
    echo $months[7];
    ?></p>
</body>

</html>