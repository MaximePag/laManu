<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <title>PHP Partie8 Exo5 UserPage</title>
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
        <ul>
            <li><input type="text" id="pseudo" name="pseudo" placeholder="$_COOKIE['pseudo']"/></li>
            <li><input type="password" id="mdp" name="mdp" placeholder="$_COOKIE['mdp']"/></li>
            <li><button type="submit" formmethod="get" formaction="user5.php">Modifier les cookies</button></li>
        </ul>
        <?php 
            if (isset($_GET['pseudo']) && isset($_GET['mdp'])){
                setcookie('pseudo', $_GET['pseudo'] );
                setcookie('mdp', $_GET['mdp'] );
                ?><p><?= 'Cookies modifiés' ?></p><?php
            }
            else{
                ?><p><?= 'Cookies non modifiés' ?></p><?php
            }?>
        <a href="exo5.php">Retour Exercice</a>
        <button><a href="index.php">Retour Index</a></button>
    </form>
</body>

</html>