<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <title>PHP Partie7 Exo1</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <form>
        <ul>
            <label for="firstname">Prénom :</label>
            <li><input type="text" id="firstname" name="firstname" placeholder="FIRSTNAME" /></li>
            <label for="lastname">Nom :</label>
            <li><input type="text" id="lastname" name="lastname" placeholder="LASTNAME" /></li>
            <button type="submit" formmethod="GET" formaction="user.php">Envoyer</button>
        </ul>
    </form>
</body>

</html>