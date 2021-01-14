<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <title>PHP Partie8 Exo4 UserPage</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <form>
        <?php
        if (isset($_COOKIE['pseudo']) && isset($_COOKIE['mdp'])){
        ?><h1><?= 'Salut ' . $_COOKIE['pseudo'] . ' le mot de passe que tu as entré est : ' . $_COOKIE['mdp'] . ' ! ' ?></h1><?php
        }
        else {
            ?><p><?= 'Erreur les données n\'ont pas été récupéré' ?></p><?php
        }?>
        <a href="exo4.php">Retour Exercice</a>
        <button><a href="index.php">Retour Index</a></button>
    </form>
</body>

</html>