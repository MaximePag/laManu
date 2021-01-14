<?php
$age = 50;
$gender = "Femme";
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <title>PHP Partie2 Exo3</title>
    </head>
    <body>
        <p><?php
            if ($gender == "Homme" && $age >= 18){
                echo "Vous êtes un homme majeur";
            }
            else if ($gender == "Homme" && $age <= 18){
                echo "Vous êtes un homme mineur";
            }
            else if ($gender == "Femme" && $age >= 18){
                echo "Vous êtes une femme majeur";
            }
            else if ($gender == "Femme" && $age <= 18){
                echo "Vous êtes une femme mineur";
            }
            else{
                echo "Il y a erreur";
            }
        ?></p>
    </body>
</html>