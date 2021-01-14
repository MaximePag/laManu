<?php
function getClientsSelected($limit=20){
    try {
        $db = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'admin', '!18m02j12');
    }
    catch (Exception $error){
        die ($error->getMessage());
    }
    $allClientsQuery = $db->query('SELECT `id`, `lastName`, `firstName`, DATE_FORMAT(`birthDate`, \'%d/%m/%Y\') AS `birthDateFR` FROM `clients` LIMIT '.$limit);
    $data = $allClientsQuery->fetchAll(PDO::FETCH_OBJ);

    return $data;
};