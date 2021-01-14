<?php
$patientClass = new Patient;
$patientList = $patientClass->getPatientList();
if(isset($_GET['sendSearch'])){
    $search = htmlspecialchars($_GET['search']);
    $resultsNumber = $patientClass->countSearchResult($search);
    $link = 'liste-patients.php?search=' . $_GET['search'] . '&sendSearch=';
    if($resultsNumber == 0){
        $searchMessage = 'Aucun resultat ne correspond à votre recherche';
    }else{
        $searchMessage = 'Il y a ' . $resultsNumber . ' résultats';
        $patientsList = $patientClass->searchPatientsListByName($search);
    }
}else{
    $patientsList = $patientClass->getPatientList();
    $resultsNumber = count($patientsList);
    $searchMessage = 'Il y a ' . $resultsNumber . ' patients';
    $link = 'liste-patients.php?';
}