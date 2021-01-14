<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <title>PHP Partie9 Exo7</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <div>
        <h1>Date actuel du jour + 20 jours :</h1>
        <h2><?php
            $today = new DateTime(date ("m/d/Y"));
            $today->add(new DateInterval('P20D'));
            echo $today->format('d/m/Y');
            ?></h2>
        <button><a href="index.php">Retour Index</a></button>
    </div>
</body>

</html>