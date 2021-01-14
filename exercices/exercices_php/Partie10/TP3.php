<?php
function displayPortrait(){
    $portrait1 = array('name'=>'Victor', 'firstname'=>'Hugo', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/5/5a/Bonnat_Hugo001z.jpg');
    $portrait2 = array('name'=>'Jean', 'firstname'=>'de La Fontaine', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/e/e1/La_Fontaine_par_Rigaud.jpg');
    $portrait3 = array('name'=>'Pierre', 'firstname'=>'Corneille', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/2/2a/Pierre_Corneille_2.jpg');
    $portrait4 = array('name'=>'Jean', 'firstname'=>'Racine', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/d/d5/Jean_racine.jpg');
    if ($_GET['portraitSelect'] == 'Victor Hugo'){
        ?><tr><td>NOM</td><td><?= $portrait1['name'] ?></td></tr>
        <tr><td>PRÉNOM</td><td><?= $portrait1['firstname'] ?></td></tr>
        <tr><td>PORTRAIT</td><td><img src="<?= $portrait1['portrait'] ?>" /></td></tr><?php
    }
    elseif ($_GET['portraitSelect'] == 'Jean de La Fontaine'){
        ?><tr><td>NOM</td><td><?= $portrait2['name'] ?></td></tr>
        <tr><td>PRÉNOM</td><td><?= $portrait2['firstname'] ?></td></tr>
        <tr><td>PORTRAIT</td><td><img src="<?= $portrait2['portrait'] ?>" /></td></tr><?php
    }
    elseif ($_GET['portraitSelect'] == 'Pierre Corneille'){
        ?><tr><td>NOM</td><td><?= $portrait3['name'] ?></td></tr>
        <tr><td>PRÉNOM</td><td><?= $portrait3['firstname'] ?></td></tr>
        <tr><td>PORTRAIT</td><td><img src="<?= $portrait3['portrait'] ?>" /></td></tr><?php
    }
    elseif ($_GET['portraitSelect'] == 'Jean Racine'){
        ?><tr><td>NOM</td><td><?= $portrait4['name'] ?></td></tr>
        <tr><td>PRÉNOM</td><td><?= $portrait4['firstname'] ?></td></tr>
        <tr><td>PORTRAIT</td><td><img src="<?= $portrait4['portrait'] ?>" /></td></tr><?php
    }
    elseif (isset(($_GET['portraitSelect']))){
        echo 'ERREUR';
        }
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <title>PHP Partie10 TP3</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <form>
        <select name="portraitSelect">
            <option value="<?php if (!empty($_GET['portraitSelect'])){ echo $_GET['portraitSelect']; } ?>"><?php if (!empty($_GET['portraitSelect'])){ echo $_GET['portraitSelect']; }else{ echo '----------------------'; } ?></option>
            <option value="Victor Hugo">Victor Hugo</option>
            <option value="Jean de La Fontaine">Jean de La Fontaine</option>
            <option value="Pierre Corneille">Pierre Corneille</option>
            <option value="Jean Racine">Jean Racine</option>
        </select>
        <button type="submit" formmethod="GET" formaction="TP3.php">Envoyer</button>
        <button><a href="index.php">Retour Index</a></button>
    </form>
    <table>
    <?php
    displayPortrait();
    ?>
    </table>
</body>

</html>