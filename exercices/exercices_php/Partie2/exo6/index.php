<?php
$age = 4;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <title>PHP Partie2 Exo6</title>
    </head>
    <body>
        <p><?php
        if ($age >= 18)
        {
            echo 'Tu es majeur';
        }
        else
        {
            echo 'Tu es mineur';
        }
        ?></p>
    </body>
</html>