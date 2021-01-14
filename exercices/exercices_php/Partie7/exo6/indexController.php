<?php
$formErrors = array();
$civilityList = array('Madame' => 'Mme', 'Monsieur' => 'Mr', 'Mademoiselle' => 'Mlle');
$regexname = '/^([A-Z]{1}[a-zÀ-ÖØ-öø-ÿ]+)([\-\ ]{1}[A-Z]{1}[a-zÀ-ÖØ-öø-ÿ]+)*$/';
if (isset($_REQUEST['sendREQUEST'])){
    if (!empty($_REQUEST['civility'])){
        if (in_array($_REQUEST['civility'], $civilityList)){
            $civility = htmlspecialchars($_REQUEST['civility']);
        }
        else{
            $formErrors['civility'] = 'Une erreur est survenue';
        }
    }
    else{
        $formErrors['civility'] = 'Veuillez sélectionner une civilité';
    }
    if (!empty($_REQUEST['lastname'])){
        if (preg_match($regexname, $_REQUEST['lastname'])){
            $lastname = htmlspecialchars($_REQUEST['lastname']);
        }
        else{
            $formErrors['lastname'] = 'Votre nom n\'est pas valide il doit être sous la forme : Dupond-Durand';
        }
    }
    else{
        $formErrors['lastname'] = 'Veuillez saisir votre nom';
    }
    if (!empty($_REQUEST['firstname'])){
        if (preg_match($regexname, $_REQUEST['firstname'])){
            $firstname = htmlspecialchars($_REQUEST['firstname']);
        }
        else{
            $formErrors['firstname'] = 'Votre prénom n\'est pas valide il doit être sous la forme : Charles-Édouard';
        }
    }
    else{
        $formErrors['firstname'] = 'Veuillez saisir votre prénom';
    }
}
?>