<?php
$date = new DateTime();
echo $date->format('d/m/Y');

?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <title>PHP Partie9 Exo1</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <div>
        <h1>Voici la date du jour : </h1>
        <h2><?= date('d/m/Y') ?></h2>
        <button><a href="index.php">Retour Index</a></button>
    </div>
</body>

</html>