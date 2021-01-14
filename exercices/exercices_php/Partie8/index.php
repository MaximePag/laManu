<?php
session_start();
$_SESSION['firstname'] = 'Maxime';
$_SESSION['lastname'] = 'Pageot';
$_SESSION['age'] = 22;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <title>PHP Partie8 INDEX</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <form>
        <h1>Mes supers Exercices !<sub>(non)</sub></h1>
        <h2>Partie 8</h2>
        <ul>
            <li><a href="exo1.php">Exercice 1</a></li>
            <li><a href="exo2.php">Exercice 2</a></li>
            <li><a href="exo3.php">Exercice 3</a></li>
            <li><a href="exo4.php">Exercice 4</a></li>
            <li><a href="exo5.php">Exercice 5</a></li>
        </ul>        
    </form>
</body>

</html>