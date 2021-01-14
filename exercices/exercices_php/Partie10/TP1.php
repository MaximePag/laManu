<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <title>PHP Partie10 TP1</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <form>
        <h1>Inscription à La Manu</h1>
        <?php
        if ((!empty($_POST['lastname']) && preg_match("#^[a-zA-ZÀ-ÿ'\- ]{2,25}$#", $_POST['lastname'])) && 
        (!empty($_POST['firstname']) && preg_match("#^[a-zA-ZÀ-ÿ'\- ]{2,25}$#", $_POST['firstname'])) &&
        (!empty($_POST['birthDate']) && preg_match("#^([0-2][0-9]\/02\/20((0[0|4|8])|(1[2|6])|20))|([0-2][0-9]\/02\/19((0[4|8])|(1[2|6])|(2[0|4|8])|(3[2|6])|(4[0|4|8])|(5[2|6])|(6[0|4|8])|(7[2|6])|(8[0|4|8])|(9[2|6])))|(([0-2][0-9]|30)\/((0[4|6|9])|(11))\/((19[0-9]{2})|(20([0-1][0-9])|20)))|(([0-2][0-9]|3[0-1])\/((0[1|3|5|7|8])|(1[0|2]))\/((19[0-9]{2})|(20([0-1][0-9])|20)))$#", $_POST['birthDate'])) &&
        (!empty($_POST['birthCountry']) && preg_match("#^[a-zA-ZÀ-ÿ'\- ]{2,42}$#", $_POST['birthCountry'])) &&
        (!empty($_POST['nationality']) && preg_match("#^[a-zA-ZÀ-ÿ'\- ]{2,42}$#", $_POST['nationality'])) &&
        (!empty($_POST['adress'])) &&
        (!empty($_POST['zip']) && preg_match("#^[0-9]{5}$#", $_POST['zip'])) &&
        (!empty($_POST['city'])) &&
        (!empty($_POST['mail']) && preg_match("#^([a-z0-9\-_.]{1,64})@([a-z0-9\-_.]{1,255})\.([a-z]{1,3})$#", $_POST['mail'])) &&
        (!empty($_POST['tel']) && preg_match("#^0[0-9](\/[0-9]{2}){4}$#", $_POST['tel'])) &&
        (!empty($_POST['degree'])) &&
        (!empty($_POST['peNum']) && preg_match("#^[0-9]{7}[[:alnum:]]$#", $_POST['peNum'])) &&
        (!empty($_POST['question1'])) &&
        (!empty($_POST['question2'])) &&
        (!empty($_POST['question3']))
        ){
            ?><h2><?= 'Bonjour ' . $_POST['lastname'] . ' ' . $_POST['firstname'] . ' !' ?></h2>
            <p class="valid">Votre inscription a bien été prise en compte.</p>
            <p>Vous avez envoyé les informations suivantes :</p>
            <ul>
                <li>Date de naissance : <?= $_POST['birthDate'] ?></li>
                <li>Pays de naissance : <?= $_POST['birthDate'] ?></li>
                <li>Nationalité : <?= $_POST['birthCountry'] ?></li>
                <li>Adresse : <?= $_POST['adresse'] . ' ' . $_POST['zip'] . ' ' . $_POST['city']?></li>
                <li>Adresse mail : <?= $_POST['mail'] ?></li>
                <li>Numéro de téléphone : <?= $_POST['tel'] ?></li>
                <li>Niveau d'étude : <?= $_POST['degree'] ?></li>
                <li>Numéro Pôle-Emploi : <?= $_POST['peNum'] ?></li>
                <li>Nombre de badges codecademy : <?= $_POST['badge'] ?></li>
                <li>Lien profil codecademy : <?= $_POST['codecademy'] ?></li>
                <li>À la question 1 vous avez répondu : <?= $_POST['question1'] ?></li>
                <li>À la question 2 vous avez répondu : <?= $_POST['question2'] ?></li>
                <li>À la question 3 vous avez répondu : <?= $_POST['question3'] ?></li>
            </ul>
            <button><a href="TP1.php">Retour Formulaire</a></button><?php
        }
        else{?>
            <ul>
                <li><label for="lastname">Nom : </label><input type="text" name="lastname" placeholder="ex : Dupuis"/></li>
                <?php
                if (!empty($_POST['lastname'])){
                    if (preg_match("#^[a-zA-ZÀ-ÿ'\- ]{2,25}$#", $_POST['lastname'])){;}
                    else{
                        ?><p class="invalid"><?= 'Nom invalide' ?><?php
                    }
                }
                elseif (isset($_POST['lastname'])){
                    ?><p class="invalid"><?= 'Veuillez renseigner votre nom (obligatoire)' ?><?php
                }?>
                <li><label for="firstname">Prénom : </label><input type="text" name="firstname" placeholder="ex : Jean"/></li>
                <?php if (!empty($_POST['firstname'])){
                    if (preg_match("#^[a-zA-ZÀ-ÿ'\- ]{2,25}$#", $_POST['firstname'])){;}
                    else{
                        ?><p class="invalid"><?= 'Prénom invalide' ?><?php
                    }
                }
                elseif (isset($_POST['firstname'])){
                    ?><p class="invalid"><?= 'Veuillez renseigner votre prénom (obligatoire)' ?><?php
                }?>
                <li><label for="birthDate">Date de naissance : </label><input type="date" name="birthDate" min="01/01/1900" min="01/01/2020" placeholder="ex : JJ/MM/AAAA"/></li>
                <?php 
                if (!empty($_POST['birthDate'])){
                    if (preg_match("#^([0-2][0-9]\/02\/20((0[0|4|8])|(1[2|6])|20))|([0-2][0-9]\/02\/19((0[4|8])|(1[2|6])|(2[0|4|8])|(3[2|6])|(4[0|4|8])|(5[2|6])|(6[0|4|8])|(7[2|6])|(8[0|4|8])|(9[2|6])))|(([0-2][0-9]|30)\/((0[4|6|9])|(11))\/((19[0-9]{2})|(20([0-1][0-9])|20)))|(([0-2][0-9]|3[0-1])\/((0[1|3|5|7|8])|(1[0|2]))\/((19[0-9]{2})|(20([0-1][0-9])|20)))$#", $_POST['birthDate'])){;}
                    else{
                        ?><p class="invalid"><?= 'Date de naissance invalide' ?><?php
                    }
                }
                elseif (isset($_POST['birthDate'])){
                    ?><p class="invalid"><?= 'Veuillez renseigner votre date de naissance (obligatoire)' ?><?php
                }?>
                <li><label for="birthCountry">Pays de naissance : </label><input type="text" name="birthCountry" placeholder="ex : France"/></li>
                <?php 
                if (!empty($_POST['birthCountry'])){
                    if (preg_match("#^[a-zA-Z'\- ]{2,42}$#", $_POST['birthCountry'])){;}
                    else{
                        ?><p class="invalid"><?= 'Pays de naissance invalide' ?><?php
                    }
                }
                elseif (isset($_POST['birthCountry'])){
                    ?><p class="invalid"><?= 'Veuillez renseigner votre pays de naissance (obligatoire)' ?><?php
                }?>
                <li><label for="nationality">Nationalité : </label><input type="text" name="nationality" placeholder="ex : Française"/></li>
                <?php 
                if (!empty($_POST['nationality'])){;}
                elseif (isset($_POST['nationality'])){
                    ?><p class="invalid"><?= 'Veuillez renseigner votre nationalité (obligatoire)' ?><?php
                }?>
                <li><label for="adress">Adresse : </label><ul>
                    <li><input type="text" name="adress" placeholder="ex : 3 rue sans nom" /></li>
                    <?php 
                    if (!empty($_POST['adress'])){;}
                    elseif (isset($_POST['adress'])){
                        ?><p class="invalid"><?= 'Veuillez renseigner votre adresse (obligatoire)' ?><?php
                    }?>
                    <li><input type="number" name="zip" placeholder="ex : 75000" /></li>
                    <?php 
                    if (!empty($_POST['zip'])){
                        if (preg_match("#^[0-9]{5}$#", $_POST['zip'])){;}
                        else{
                            ?><p class="invalid"><?= 'Code Postal invalide' ?><?php
                        }
                    }
                    elseif (isset($_POST['zip'])){
                        ?><p class="invalid"><?= 'Veuillez renseigner votre code postal (obligatoire)' ?><?php
                    }?>
                    <li><input type="text" name="city" placeholder="ex : Paris" /></li></ul>
                    <?php 
                    if (!empty($_POST['city'])){;}
                    elseif (isset($_POST['city'])){
                        ?><p class="invalid"><?= 'Veuillez renseigner votre ville (obligatoire)' ?><?php
                    }?>
                <li><label for="mail">Adresse Mail : </label><input type="email" name="mail" placeholder="ex : exemple@mail.fr" /></li>
                <?php 
                if (!empty($_POST['mail'])){
                    if (preg_match("#^([a-z0-9\-_.]{1,64})@([a-z0-9\-_.]{1,255})\.([a-z]{1,3})$#", $_POST['mail'])){;}
                    else{
                        ?><p class="invalid"><?= 'Adresse mail invalide' ?><?php
                    }
                }
                elseif (isset($_POST['mail'])){
                    ?><p class="invalid"><?= 'Veuillez renseigner votre adresse mail (obligatoire)' ?><?php
                }?>
                <li><label for="tel">Téléphone : </label><input type="tel" name="tel" placeholder="ex : 06/03/06/09/12" /></li>
                <?php 
                if (!empty($_POST['tel'])){
                    if (preg_match("#^0[0-9](\/[0-9]{2}){4}$#", $_POST['tel'])){;}
                    else{
                        ?><p class="invalid"><?= 'Numéro de téléphone invalide' ?><?php
                    }
                }
                elseif (isset($_POST['tel'])){
                    ?><p class="invalid"><?= 'Veuillez renseigner votre numéro de téléphone (obligatoire)' ?><?php
                }?>
                <li><label for="degree">Diplôme : </label><select name="degree">
                    <option value="">-----------------------------------</option>
                    <option value="Sans Diplômes">Sans Diplômes</option>
                    <option value="Baccalauréat">Baccalauréat</option>
                    <option value="Baccalauréat +2">BAC +2</option>
                    <option value="Baccalauréat +3 ou supérieur">BAC +3 ou supérieur</option>
                </select></li>
                <?php 
                    if (!empty($_POST['degree'])){;}
                    elseif (isset($_POST['degree'])){
                        ?><p class="invalid"><?= 'Veuillez renseigner votre niveau d\'étude (obligatoire)' ?><?php
                    }?>
                <li><label for="peNum">Numéro Pôle-Emploi : </label><input type="text" name="peNum" placeholder="ex : 4899052N" /></li>
                <?php 
                if (!empty($_POST['peNum'])){
                    if (preg_match("#^[0-9]{7}[[:alnum:]]$#", $_POST['peNum'])){;}
                    else{
                        ?><p class="invalid"><?= 'Identifiant Pôle-Emploi invalide' ?><?php
                    }
                }
                elseif (isset($_POST['peNum'])){
                    ?><p class="invalid"><?= 'Veuillez renseigner votre identifiant Pôle-Emploi (obligatoire)' ?><?php
                }?>
                <li><label for="badge">Nombre de badges : </label><input type="number" name="badge" placeholder="Badges codecademy" /></li>
                <li><label for="codecademy">Lien Codecademy : </label><input type="text" name="codecademy" placeholder="Lien codecademy" /></li>
                <?php
                if (!empty($_POST['codecademy'])){
                    if (preg_match("#^(((http|https)://)?(www.))?codecademy.com/profiles/net[0-9]{10}$#", $_POST['codecademy'])){;}
                    else{
                        ?><p class="invalid"><?= 'Lien codecademy invalide' ?><?php
                    }
                }?>
            </ul>
            <h2>Questions</h2>
            <ul>
                <li>Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ?</li>
                <li><textarea type="text" name="question1" cols="80" rows="5"></textarea></li>
                <?php 
                    if (!empty($_POST['question1'])){;}
                    elseif (isset($_POST['question1'])){
                        ?><p class="invalid"><?= 'Veuillez répondre à la première question (obligatoire)' ?><?php
                    }?>
                <li>Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)</li>
                <li><textarea type="text" name="question2" cols="80" rows="5"></textarea></li>
                <?php 
                    if (!empty($_POST['question2'])){;}
                    elseif (isset($_POST['question2'])){
                        ?><p class="invalid"><?= 'Veuillez répondre à la deuxième question (obligatoire)' ?><?php
                    }?>
                <li>Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</li>
                <li><textarea type="text" name="question3" cols="80" rows="5"></textarea></li>
                <?php 
                    if (!empty($_POST['question3'])){;}
                    elseif (isset($_POST['question3'])){
                        ?><p class="invalid"><?= 'Veuillez répondre à la troisième question (obligatoire)' ?><?php
                    }?>
            </ul>
            <button type="submit" formmethod="POST" formaction="TP1.php">Envoyer</button>
            <?php
        }
        ?>
        <button><a href="index.php">Retour Index</a></button>
    </form>    
</body>

</html>