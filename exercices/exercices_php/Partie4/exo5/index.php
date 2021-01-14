<?php
    function returnString($int, $string){
        return 'La variable ' . $string . ' est un string et la variable ' . $int . ' est un entier.';
    }
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <title>PHP Partie4 Exo5</title>
</head>

<body>
    <p><?php
    echo returnString(55314684, 'hjgfdvfqdkjhg');
    ?></p>
</body>

</html>