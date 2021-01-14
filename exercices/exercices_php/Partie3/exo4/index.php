<?php
$number = 1;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <title>PHP Partie3 Exo4</title>
    </head>
    <body>
        <?php
        while ($number < 10){
            ?><p><?= ($number) ?></p><?php
            $number += $number / 2;
        }
        ?>
    </body>
</html>