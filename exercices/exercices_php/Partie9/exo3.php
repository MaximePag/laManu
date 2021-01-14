<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <title>PHP Partie9 Exo3</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <div>
        <h1>Voici la date du jour : </h1>
        <?php
        setlocale(LC_TIME, 'fr_FR.UTF8');
        ?>
        <h2><?= date ('l d F Y') ?></h2>
        <h2><?= strftime (' %A %d %B %Y ') ?>(fr)</h2>
        <button><a href="index.php">Retour Index</a></button>
    </div>
</body>

</html>