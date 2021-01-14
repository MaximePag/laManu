<?php
    function returnString($string1, $string2){
        return $string1 . ' ' . $string2;
    }
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <title>PHP Partie4 Exo3</title>
</head>

<body>
    <p><?php
    echo returnString('Salut', 'Toi');
    ?></p>
</body>

</html>