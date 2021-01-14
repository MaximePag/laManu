<?php
$number = 0;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <title>PHP Partie3 Exo1</title>
    </head>
    <body>
        <?php
        while ($number <= 10)
        {
            ?><p><?= $number ?></p><?php
            $number++;
        }
        ?>
    </body>
</html>