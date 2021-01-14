<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <title>PHP Partie9 Exo6</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <div>
        <h1>Nombre total de jours du mois de Février de l'année 2016 :</h1>
        <h2><?php
            setlocale(LC_TIME, 'fr_FR.UTF8');
            $_f2016 = new DateTime('02/01/2016');
            $_m2016 = new DateTime('03/01/2016');
            $interval = $_f2016->diff($_m2016);
            echo $interval->format('%a jours');
            ?></h2>
        <button><a href="index.php">Retour Index</a></button>
    </div>
</body>

</html>