<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <title>PHP Partie7 Exo5</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <form>
        <h1>Mon "JOLI" Formulaire</h1>
        <ul>
            <li><select name="gender" id="gender">
                    <option value="Madame">Madame</option>
                    <option value="Monsieur">Monsieur</option>
                </select></li>
            <li><input type="text" id="firstname" name="firstname" placeholder="Prénom"/></li>
            <li><input type="text" id="lastname" name="lastname" placeholder="Nom"/></li>
            <li><button type="submit" formmethod="GET" formaction="index.php">Envoyer</button></li>
        </ul>
    </form>
</body>

</html>