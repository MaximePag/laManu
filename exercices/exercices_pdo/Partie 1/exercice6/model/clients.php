<?php
function getShowList(){
    try {
        $db = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'admin', '!18m02j12');
    }
    catch (Exception $error){
        die ($error->getMessage());
    }
    $allShowsQuery = $db->query(
        'SELECT
            `shows`.`title`
            , `shows`.`performer`
            , DATE_FORMAT(`shows`.`date`, \'%d/%m/%Y\') AS `dateFR`
            , `shows`.`startTime` 
        FROM
            `shows` 
        ORDER BY 
            `shows`.`title` ASC');
    $data = $allShowsQuery->fetchAll(PDO::FETCH_OBJ);

    return $data;
};