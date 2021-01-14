<?php
$age = 22;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <title>PHP Partie1 Exo8</title>
    </head>
    <body>
        <p><?php
        if ($age >= 18) {
            echo 'Vous êtes Majeur';
        } else {
            echo 'Vous êtes Mineur';
        }
        ?></p>
    </body>
</html>