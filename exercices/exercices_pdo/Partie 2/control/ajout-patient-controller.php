<?php
$formErrors = array();
if (isset($_POST['submit'])){
    $addPatient = new Patient;
    // Vérifications Nom
    if (isset($_POST['lastName'])){
        if (!empty($_POST['lastName'])){
            if (preg_match('/^[a-zA-ZÀ-ÿ]+([\-\' ]{1}[a-zA-ZÀ-ÿ]+)*$/', $_POST['lastName'])){
                $addPatient->lastName = htmlspecialchars($_POST['lastName']);
            }
            else{
                $formErrors['lastName'] = 'Veuillez entrer un nom valide sous forme : Dupond-Durand';
            }
        }
        else{
            $formErrors['lastName'] = 'Veuillez entrer votre nom';
        }
    }
    // Vérifications Prénom
    if (isset($_POST['firstName'])){
        if (!empty($_POST['firstName'])){
            if (preg_match('/^[A-ÿ]+([\-\' ]{1}[A-ÿ]+)*$/', $_POST['firstName'])){
                $addPatient->firstName = htmlspecialchars($_POST['firstName']);
            }
            else{
                $formErrors['firstName'] = 'Veuillez entrer un prénom valide sous forme : Charles-Édouard';
            }
        }
        else{
            $formErrors['firstName'] = 'Veuillez entrer votre prénom';
        }
    }
        // Vérifications Date de naissance
    if (isset($_POST['birthDate'])){
        if (!empty($_POST['birthDate'])){
            if (preg_match('/^(19((0[4|8])|([1|3|5|7|9][2|6])|([2|4|6|8][0|4|8]))[ \-\/]02[ \-\/]((0[1-9])|([1|2][0-9])))|((20((0[0|4|8])|(1[2|6])|20))[ \-\/]02[ \-\/]((0[1-9])|([1|2][0-9])))|((19[0-9][0-9])|(20([0-1][0-9])|20))[ \-\/]((((0[4|6|9])|11)[ \-\/]((0[1-9])|([1|2][0-9])|30))|(((0[1|3|5|7|8])|1([0|2]))[ \-\/]((0[1-9])|([1|2][0-9])|3([0-1])))|02[ \-\/]((0[1-9])|(1[0-9])|(2[0-8])))$/', $_POST['birthDate'])){
                $addPatient->birthDate = htmlspecialchars($_POST['birthDate']);
            }
            else{
                $formErrors['birthDate'] = 'Veuillez entrer une date de naissance valide';
            }
        }
        else{
            $formErrors['birthDate'] = 'Veuillez entrer une date de naissance';
        }
    }
    // Vérifications Adresse mail
    if (isset($_POST['mail'])){
        if (!empty($_POST['mail'])){
            if (preg_match('/^([a-z0-9\-_.]{1,64})@([a-z0-9\-_.]{1,255})\.([a-z]{1,3})$/', $_POST['mail'])){
                $addPatient->mail = htmlspecialchars($_POST['mail']);
            }
            else{
                $formErrors['mail'] = 'Veuillez entrer une adresse mail valide sous forme : exemple@exemple.fr';
            }
        }
        else{
            $formErrors['mail'] = 'Veuillez entrer votre adresse mail';
        }
    }
    // Vérifications Numéro de téléphone
    if (isset($_POST['phone'])){
        if (!empty($_POST['phone'])){
            if (preg_match('/^((\+33[0-9]{9})|(0[1-9][ .\/-]?([0-9]{2}[ .\/-]?){4})){1}$/', $_POST['phone'])){
                $addPatient->phone = htmlspecialchars($_POST['phone']);
            }
            else{
                $formErrors['phone'] = 'Veuillez entrer un numéro de téléphone valide sous forme : 0123456789 ou +33123456789';
            }
        }
        else{
            $formErrors['phone'] = 'Veuillez entrer votre numéro de téléphone';
        }
    }
    if (empty($formErrors)){
        if ($addPatient->ifPatientExist() == 0){
            $addPatient->addPatient();
            $addPatientMessage = 'Le nouveau patient a bien été enregistré.';
        }
        else {
            $addPatientMessage = 'Un patient similaire existe déjà.';
        }
    }  
}


?>