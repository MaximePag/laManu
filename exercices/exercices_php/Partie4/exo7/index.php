<?php
    function isMajor($gender, $age){
        if ($gender == 'Homme' && $age >= 18){
            return 'Vous êtes un homme majeur';
        }
        elseif ($gender == 'Homme' && $age <= 18){
            return 'Vous êtes un homme mineur';
        }
        elseif ($gender == 'Femme' && $age >= 18){
            return 'Vous êtes une femme majeure';
        }
        elseif ($gender == 'Femme' && $age <= 18){
            return 'Vous êtes une femme mineure';
        }
        else {
            return 'Il y a une erreur';
        }
    }
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <title>PHP Partie4 Exo7</title>
</head>

<body>
    <p><?php
    echo isMajor('Femme', 4);
    ?></p>
</body>

</html>