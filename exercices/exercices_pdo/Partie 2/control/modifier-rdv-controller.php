<?php
$patientClass = new Patient;
$patientList = $patientClass->getPatientList();
$rdvId = $_POST['modify'];
echo $rdvId;
$formErrors = array();
if (isset($_POST['modify'])){
    $modifyRDV = new RDV;
    $modifyRDV->id = $rdvId;
    // Vérifications Date
    if (isset($_POST['date'])){
        if (!empty($_POST['date'])){
            if (isset($_POST['hour'])){
                if (!empty($_POST['hour'])){
                    $dateHour = $_POST['date'] . ' ' . $_POST['hour'];
                    $modifyRDV->dateHour = htmlspecialchars($dateHour);
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
            $modifyRDV->idPatients = htmlspecialchars($_POST['patient']);
        }
        else{
            $formErrors['patient'] = 'Veuillez choisir un patient';
        }
    }
    if (empty($formErrors)){
        $modifyRDV->modifyAppointment();
        $methodMessage = 'Le rendez-vous a bien été enregistré.';
        var_dump($modifyRDV);
    }
    else {
        $methodMessage = 'Une erreur est survenue.';
    }
}  

