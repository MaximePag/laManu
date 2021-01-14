<?php
    function isBigger($firstNumber, $secondNumber){
        if ($firstNumber < $secondNumber){
            $message = 'Le premier nombre est plus petit que le deuxième.';
        }
        elseif ($firstNumber > $secondNumber){
            $message = 'Le premier nombre est plus grand que le deuxième.';
        }
        elseif ($firstNumber == $secondNumber){
            $message = 'Le premier nombre est égal au deuxième.';
        }
        else {
            $message = 'ERREUR';
        }
        return $message;
    }
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <title>PHP Partie4 Exo4</title>
</head>

<body>
    <p><?php
    echo isBigger(50, 50);
    ?></p>
</body>

</html>