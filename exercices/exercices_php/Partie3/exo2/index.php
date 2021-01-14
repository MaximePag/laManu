<?php
$firstNumber = 0;
$secondNumber = rand(0, 100);
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <title>PHP Partie3 Exo2</title>
    </head>
    <body>
        <?php
        while ($firstNumber < 20){
            $firstNumber * $secondNumber;?>
            <p><?= ($firstNumber * $secondNumber) ?></p><?php
            $firstNumber++;
        }
        ?>
    </body>
</html>