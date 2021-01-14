<?php
$patientClass = new Patient;
$patientList = $patientClass->getPatientList();
$formErrors = array();
if (isset($_POST['submit'])){
    $addRDV = new RDV;
    // Vérifications Date
    if (isset($_POST['date'])){
        if (!empty($_POST['date'])){
            if (isset($_POST['hour'])){
                if (!empty($_POST['hour'])){
                    $dateHour = $_POST['date'] . ' ' . $_POST['hour'];
                    $addRDV->dateHour = htmlspecialchars($dateHour);
                }
                else{
                    $formErrors['hour'] = 'Veuillez entrer l\'heure du RDV';
                }
            }
        }
        else{
            $formErrors['date'] = 'Veuillez entrer la date du RDV';
        }
    }
    if (isset($_POST['patient'])){
        if (!empty($_POST['patient'])){
            $addRDV->idPatients = htmlspecialchars($_POST['patient']);
        }
        else{
            $formErrors['patient'] = 'Veuillez choisir un patient';
        }
    }
    if (empty($formErrors)){
        $addRDV->addAppointment();
        $methodMessage = 'Le rendez-vous a bien été enregistré.';
    }
    else {
        $methodMessage = 'Une erreur est survenue.';
    }
}  

