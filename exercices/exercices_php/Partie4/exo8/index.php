<?php
function add($numberA = 0, $numberB = 0, $numberC = 0)
{
    $sum = $numberA + $numberB + $numberC;
    return 'La somme de A, B et C est : ' . $sum;
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <title>PHP Partie4 Exo8</title>
</head>

<body>
    <p><?php
        echo add(0, 6, 4);
        ?></p>
</body>

</html>