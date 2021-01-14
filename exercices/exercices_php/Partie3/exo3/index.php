<?php
$firstNumber = 100;
$secondNumber = 21;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <title>PHP Partie3 Exo3</title>
    </head>
    <body>
        <?php
        while ($firstNumber >= 10){
            $firstNumber * $secondNumber;?>
            <p><?= ($firstNumber * $secondNumber) ?></p><?php
            $firstNumber--;
        }
        ?>
    </body>
</html>