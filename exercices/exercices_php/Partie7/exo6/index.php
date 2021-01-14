<?php include 'indexController.php'; ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <title>PHP Partie7 Exo6</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
<?php
if (isset($_REQUEST['sendREQUEST']) && count($formErrors) == 0){
    ?><p><?= 'Bonjour ' . $civility  . ' ' . $lastname . ' ' . $firstname ?></p><?php
}
else{?>
    <form>
        <h1>Mon "JOLI" Formulaire</h1>
        <ul>
            <li><label for="civility">Civilité</label><select name="civility" id="civility">
                    <option value="">-</option>
                    <?php foreach($civilityList as $civilityName => $civilityValue){
                        ?><option <?= isset($_REQUEST['civility']) && ($_REQUEST['civility'] == $civilityValue) ? 'selected' : '' ?> value="<?= $civilityValue ?>"><?= $civilityName ?></option><?php
                    }?>
                </select></li>
            <p><?= isset($formErrors['civility']) ? $formErrors['civility'] : '' ?></p>
            <li><label for="firstname">firstname</label><input type="text" id="firstname" name="firstname" value="<?= isset($_REQUEST['firstname']) ? $_REQUEST['firstname'] : '' ?>" placeholder="Prénom" /></li>
            <p><?= isset($formErrors['firstname']) ? $formErrors['firstname'] : '' ?></p>
            <li><label for="lastname">lastname</label><input type="text" id="lastname" name="lastname" value="<?= isset($_REQUEST['lastname']) ? $_REQUEST['lastname'] : '' ?>" placeholder="Nom" /></li>
            <p><?= isset($formErrors['lastname']) ? $formErrors['lastname'] : '' ?></p>
            <li><button type="submit" formmethod="get" formaction="index.php" name="sendGET">Envoyer (get)</button></li>
            <li><button type="submit" formmethod="POST" formaction="index.php" name="sendREQUEST">Envoyer (post)</button></li>
        </ul>
    </form><?php
}?>
</body>

</html>