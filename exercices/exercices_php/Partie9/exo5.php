<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <title>PHP Partie9 Exo5</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <div>
        <h1>Nombre de jour séparant le 16 Mai 2016 et aujourd'hui :</h1>
        <h2><?php
            setlocale(LC_TIME, 'fr_FR.UTF8');
            $_2016 = new DateTime('05/16/2016');
            $today = new DateTime(date ("m/d/Y"));
            $interval = $_2016->diff($today);
            echo $interval->format('%a jours');
            ?></h2>
        <button><a href="index.php">Retour Index</a></button>
    </div>
</body>

</html>