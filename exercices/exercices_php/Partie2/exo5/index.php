<?php
$gender = 'Femme';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <title>PHP Partie2 Exo5</title>
    </head>
    <body>
        <p><?php
        if ($gender != 'Homme'){
            echo 'C\'est une développeuse !!!';
        }
        else{
            echo 'C\'est un développeur !!!';
        }
        ?></p>
    </body>
</html>