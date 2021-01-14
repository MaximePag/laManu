<?php
    function returnString($lastName, $firstName, $age){
        return 'Bonjour ' . $lastName . ' ' . $firstName . ' ,' . ' Tu as ' . $age . ' ans.';
    }
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <title>PHP Partie4 Exo6</title>
</head>

<body>
    <p><?php
    echo returnString('Pageot', 'Maxime', 22);
    ?></p>
</body>

</html>