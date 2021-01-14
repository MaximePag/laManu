<?php

?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <title>PHP Partie7 Exo8</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>

    <?php
    if (isset($_GET['lastname']) && isset($_GET['firstname']) && isset($_GET['gender']) && isset($_GET['browsefile'])){
        ?><p><?= 'Bonjour : ' . $_GET['gender'] . ' ' . $_GET['firstname'] . ' ' . $_GET['lastname'] . ' !'?></p>
        <p><?= 'Vous avez envoyé le fichier : ' . $_GET['browsefile'] ?><?php
        $file = $_GET['browsefile'];
        $fileExt = substr(strrchr($file, '.'), 1);
        if ($fileExt == 'pdf'){
            ?><p><?= 'C\'est bien un fichier pdf' ?></p><?php
        }
        else{
            ?><p><?= 'Ce n\'est pas un fichier pdf' ?></p><?php
        }
        ?><p><a href="index.php"><button>Retour Formulaire</button></a></p><?php
    }
    elseif (isset($_POST['lastname']) && isset($_POST['firstname']) && isset($_POST['gender']) && isset($_POST['browsefile'])){
        ?><p><?= 'Bonjour : ' . $_POST['gender'] . ' ' . $_POST['firstname'] . ' ' . $_POST['lastname'] . ' !'?></p>
        <p><?= 'Vous avez envoyé le fichier : ' . $_POST['browsefile'] ?><?php
        $file = $_POST['browsefile'];
        $fileExt = substr(strrchr($file, '.'), 1);
        if ($fileExt == 'pdf'){
            ?><p><?= 'C\'est bien un fichier pdf' ?></p><?php
        }
        else{
            ?><p><?= 'Ce n\'est pas un fichier pdf' ?></p><?php
        }
        ?><p><a href="index.php"><button>Retour Formulaire</button></a></p><?php
    }
    else{
        ?><form>
            <h1>Mon "JOLI" Formulaire</h1>
            <ul>
                <li><select name="gender" id="gender">
                        <option value="default"> </option>
                        <option value="Madame">Madame</option>
                        <option value="Monsieur">Monsieur</option>
                    </select></li>
                <li><input type="text" id="firstname" name="firstname" placeholder="Prénom"/></li>
                <li><input type="text" id="lastname" name="lastname" placeholder="Nom"/></li>
                <li><input type="file" id="browsefile" name="browsefile"/></li>
                <li><p>Veuillez envoyer un fichier pdf</p></li>
                <li><button type="submit" formmethod="get" formaction="index.php">Envoyer (get)</button></li>
                <li><button type="submit" formmethod="post" formaction="index.php">Envoyer (post)</button></li>
            </ul>
        </form><?php
    }
    ?>
</body>

</html>