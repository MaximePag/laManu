<?php
function getClientsInfo(){
    try {
        $db = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'admin', '!18m02j12');
    }
    catch (Exception $error){
        die ($error->getMessage());
    }
    $allClientsQuery = $db->query(
        'SELECT
            `clients`.`id`
            , `clients`.`lastName`
            , `clients`.`firstName`
            , DATE_FORMAT(`birthDate`, \'%d/%m/%Y\') AS `birthDateFR`
            , `clients`.`cardNumber`
            , `cards`.`cardTypesId`
        FROM
            `clients`
            LEFT JOIN `cards` ON `clients`.`cardNumber` = `cards`.`cardNumber` 
            LEFT JOIN `cardTypes` ON `cards`.`cardTypesId` = `cardTypes`.`id`');
    $data = $allClientsQuery->fetchAll(PDO::FETCH_OBJ);

    return $data;
};