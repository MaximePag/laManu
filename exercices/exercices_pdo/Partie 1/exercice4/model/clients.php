<?php
function getClientsCard(){
    try {
        $db = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'admin', '!18m02j12');
    }
    catch (Exception $error){
        die ($error->getMessage());
    }
    $allClientsQuery = $db->query(
        'SELECT
            `clients`.`id`
            ,`clients`.`lastName`
            ,`clients`.`firstName`
            ,DATE_FORMAT(`birthDate`, \'%d/%m/%Y\') AS `birthDateFR`
            ,`clients`.`card`
            ,`clients`.`cardNumber` 
        FROM
            `clients` 
            INNER JOIN `cards` ON `clients`.`cardNumber` = `cards`.`cardNumber` 
            INNER JOIN `cardTypes` ON `cards`.`cardTypesId` = `cardTypes`.`id` 
        WHERE `cardTypes`.`id` = 1');
    $data = $allClientsQuery->fetchAll(PDO::FETCH_OBJ);

    return $data;
};