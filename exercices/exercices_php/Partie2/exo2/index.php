<?php
$isEasy = true;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <title>PHP Partie2 Exo2</title>
    </head>
    <body>
        <p><?php
            if ($isEasy)
            {
                echo "C'est facile !!! (Pour l'instant)";
            }
            else
            {
                echo "C'est difficile !!!";
            }
        ?></p>
    </body>
</html>