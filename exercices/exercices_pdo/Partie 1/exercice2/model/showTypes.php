<?php
function getShowTypes(){
    try {
        $db = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'admin', '!18m02j12');
    }
    catch (Exception $error){
        die ($error->getMessage());
    }
    $allShowTypesQuery = $db->query('SELECT `type` FROM `showTypes`');

    $data = $allShowTypesQuery->fetchAll(PDO::FETCH_OBJ);

    return $data;
};