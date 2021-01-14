<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <title>PHP Partie9 Exo4</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <div>
        <h1>"Timestamp" du jour :</h1>
        <h2><?php
            $today = new DateTime();
            echo $today->getTimestamp();
            ?></h2>
        <h1>"Timestamp" du 2 Août 2016 à 15h :</h1>
        <h2><?php
            $_2016 = new DateTime('2016/08/02 15:00');
            echo $_2016->getTimestamp();
            ?></h2>
        <button><a href="index.php">Retour Index</a></button>
    </div>
</body>

</html>