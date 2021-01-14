<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <title>PHP Partie3 Exo8</title>
    </head>
    <body>
        <?php
        for ($number = 200; $number >= 0; $number -= 12){
            ?><p><?= $number . ' Enfin !!! ' ?></p><?php
        }?>
    </body>
</html>