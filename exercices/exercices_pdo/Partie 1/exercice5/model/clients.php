<?php
function getClientsName(){
    try {
        $db = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'admin', '!18m02j12');
    }
    catch (Exception $error){
        die ($error->getMessage());
    }
    $allClientsQuery = $db->query(
        'SELECT
            `clients`.`lastName`
            ,`clients`.`firstName`
        FROM
            `clients`
        WHERE
            `clients`.`lastName` LIKE \'M%\'
        ORDER BY
            `clients`.`lastName` ASC');
    $data = $allClientsQuery->fetchAll(PDO::FETCH_OBJ);

    return $data;
};