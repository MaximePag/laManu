<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <title>PHP Partie10 TP2</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <form>
        <h1>Formulaire</h1>
        <ul>
            <li><label for="civility">Civilité</label>
            <select name="civility">
                <option value="<?php if (!empty($_POST['civility'])){ echo $_POST['civility']; } ?>"><?php if (!empty($_POST['civility'])){ echo $_POST['civility']; }else{ echo '----------------------'; } ?></option>
                <option value="Madame">Madame</option>
                <option value="Monsieur">Monsieur</option>
            </select></li>
            <?php
                if (!empty($_POST['civility'])){
                    ?><p class="valid"><?= 'Civilité validé' ?><?php
                }
                elseif (isset($_POST['civility'])){
                    ?><p class="invalid"><?= 'Veuillez renseigner votre civilité (obligatoire)' ?><?php
                }?>
            <li><label for="lastname">Votre Nom : </label><input type="text" name="lastname" value="<?php if (!empty($_POST['lastname'])){ echo $_POST['lastname']; } ?>" placeholder="ex : Dupont" /></li>
            <?php
                if (!empty($_POST['lastname'])){
                    if (preg_match("#^[a-zA-ZÀ-ÿ'\- ]{2,25}$#", $_POST['lastname'])){
                        ?><p class="valid"><?= 'Nom validé' ?><?php
                    }
                    else{
                        ?><p class="invalid"><?= 'Nom invalide' ?><?php
                    }
                }
                elseif (isset($_POST['lastname'])){
                    ?><p class="invalid"><?= 'Veuillez renseigner votre nom (obligatoire)' ?><?php
                }?>
            <li><label for="firstname">Votre Prénom : </label><input type="text" name="firstname" value="<?php if (!empty($_POST['firstname'])){ echo $_POST['firstname']; } ?>" placeholder="ex : Jean" /></li>
            <?php
                if (!empty($_POST['firstname'])){
                    if (preg_match("#^[a-zA-ZÀ-ÿ'\- ]{2,25}$#", $_POST['firstname'])){
                        ?><p class="valid"><?= 'Prénom validé' ?><?php
                    }
                    else{
                        ?><p class="invalid"><?= 'Prénom invalide' ?><?php
                    }
                }
                elseif (isset($_POST['firstname'])){
                    ?><p class="invalid"><?= 'Veuillez renseigner votre prénom (obligatoire)' ?><?php
                }?>
            <li><label for="age">Votre Âge : </label><input type="text" name="age" value="<?php if (!empty($_POST['age'])){ echo $_POST['age']; } ?>" placeholder="ex : 45" /></li>
            <?php
                if (!empty($_POST['age'])){
                    if (preg_match("#^((1[8-9])|[2-9][0-9]|(1[0-1][0-9])|(12[0-5]))?$#", $_POST['age'])){
                        ?><p class="valid"><?= 'Âge validé' ?><?php
                    }
                    elseif (preg_match("#^((1[0-7])|[0-9])?$#", $_POST['age'])){
                        ?><p class="invalid"><?= 'Âge invalide vous ne pouvez pas être mineur' ?><?php
                    }
                    else{
                        ?><p class="invalid"><?= 'Âge invalide' ?><?php
                    }
                }
                elseif (isset($_POST['age'])){
                    ?><p class="invalid"><?= 'Veuillez renseigner votre âge (obligatoire)' ?><?php
                }?>
            <li><label for="company">Votre Société : </label><input type="text" name="company" value="<?php if (!empty($_POST['company'])){ echo $_POST['company']; } ?>" placeholder="ex : AsusTeK Computer Inc" /></li>
            <?php
                if (!empty($_POST['company'])){
                    ?><p class="valid"><?= 'Société validé' ?><?php
                }
                elseif (isset($_POST['company'])){
                    ?><p class="invalid"><?= 'Veuillez renseigner votre société (obligatoire)' ?><?php
                }?>
        </ul>
        <button type="submit" formmethod="POST" formaction="TP2.php">Envoyer</button>
        <button><a href="index.php">Retour Index</a></button>
    </form> 
    <?php
    if ((!empty($_POST['civility'])) &&
        (!empty($_POST['lastname']) && preg_match("#^[a-zA-ZÀ-ÿ'\- ]{2,25}$#", $_POST['lastname'])) &&
        (!empty($_POST['firstname']) && preg_match("#^[a-zA-ZÀ-ÿ'\- ]{2,25}$#", $_POST['firstname'])) && 
        (!empty($_POST['age']) && preg_match("#^((1[8-9])|[2-9][0-9]|(1[0-1][0-9])|(12[0-5]))?$#", $_POST['age'])) && 
        (!empty($_POST['company']))
    ){
        ?><p><?= 'Bonjour ' . $_POST['civility'] . ' ' . $_POST['lastname'] . ' ' . $_POST['firstname'] .' !' ?></p>
        <p><?= ' Vous avez ' . $_POST['age'] . ' ans et vous travaillez chez : ' . $_POST['company'] . ' !' ?></p><?php
    }?>
</body>

</html>