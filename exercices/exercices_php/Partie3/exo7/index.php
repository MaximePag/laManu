<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <title>PHP Partie3 Exo7</title>
    </head>
    <body>
        <?php
        for ($number = 1; $number <= 100; $number += 15){
            ?><p><?= $number . ' On tient le bon bout ' ?></p><?php
        }?>
    </body>
</html>