<?php
class patient{
    public $id = 0;
    public $lastName = '';
    public $firstName = '';
    public $birthDate = '0000-00-00';
    public $phone = '';
    public $mail = '';
    public function addPatient(){
        try {
            $db = new PDO('mysql:host=localhost;dbname=hospitalE2N;charset=utf8', 'admin', '!18m02j12');
        }
        catch (Exception $error){
            die ($error->getMessage());
        }
        $query = $db->prepare(
            'INSERT INTO `patients` (`lastname`,`firstname`, `birthdate`, `phone`, `mail`) 
            VALUES(:lastName, :firstName, :birthDate, :phone, :mail )');
        $query->bindValue(':lastName', $this->lastName, PDO::PARAM_STR);
        $query->bindValue(':firstName', $this->firstName, PDO::PARAM_STR);
        $query->bindValue(':birthDate', $this->birthDate, PDO::PARAM_STR);
        $query->bindValue(':phone', $this->phone, PDO::PARAM_STR);
        $query->bindValue(':mail', $this->mail, PDO::PARAM_STR);
        return $query->execute();
    }
    public function ifPatientExist(){
        try {
            $db = new PDO('mysql:host=localhost;dbname=hospitalE2N;charset=utf8', 'admin', '!18m02j12');
        }
        catch (Exception $error){
            die ($error->getMessage());
        }
        $query = $db->prepare(
            'SELECT COUNT(`lastName`) AS `lN`, COUNT(`firstName`) AS `fN`, COUNT(`mail`) AS `ma` FROM `patients` WHERE `lastName` = :lastName AND `firstName` = :firstName AND `mail` = :mail');
            
        $query->bindValue(':lastName', $this->lastName, PDO::PARAM_STR);
        $query->bindValue(':firstName', $this->firstName, PDO::PARAM_STR);
        $query->bindValue(':mail', $this->mail, PDO::PARAM_STR);
        $query->execute();
        $data = $query->fetch(PDO::FETCH_OBJ);
        if ($data->lN == 0 && $data->fN == 0 && $data->ma == 0){
            $return = 0;
        }
        else{
            $return = 1;
        }
        return $return;
        
    }
    public function getPatientList(){
        try {
            $db = new PDO('mysql:host=localhost;dbname=hospitalE2N;charset=utf8', 'admin', '!18m02j12');
        }
        catch (Exception $error){
            die ($error->getMessage());
        }
        $query = $db->query(
            'SELECT
                `id`,
                `lastname`,
                `firstname`
            FROM
                `patients`'
            );
        $data = $query->fetchAll(PDO::FETCH_OBJ);
    
        return $data;
    }
    public function getPatientInfo(){
        try {
            $db = new PDO('mysql:host=localhost;dbname=hospitalE2N;charset=utf8', 'admin', '!18m02j12');
        }
        catch (Exception $error){
            die ($error->getMessage());
        }
        $query = $db->prepare(
            'SELECT
                `id`,
                `lastname`,
                `firstname`,
                DATE_FORMAT(`birthDate`, \'%d/%m/%Y\') AS `birthdateFR`,
                `phone`,
                `mail`
            FROM
                `patients`
            WHERE
                `id` = :idInfo'
            );
        $query->bindValue(':idInfo', $this->id, PDO::PARAM_STR);
        $query->execute();
        $data = $query->fetch(PDO::FETCH_OBJ);
    
        return $data;
    }
    public function modifyPatient(){
        try {
            $db = new PDO('mysql:host=localhost;dbname=hospitalE2N;charset=utf8', 'admin', '!18m02j12');
        }
        catch (Exception $error){
            die ($error->getMessage());
        }
        $query = $db->prepare(
            'UPDATE `patients`
            SET `lastname` = :lastname,
            `firstname` = :firstname,
            `birthdate` = :birthdate,
            `phone` = :phone,
            `mail` = :mail
            WHERE
            `id` = :id'
        );
        $query->bindValue(':lastname', $this->lastName, PDO::PARAM_STR);
        $query->bindValue(':firstname', $this->firstName, PDO::PARAM_STR);
        $query->bindValue(':birthdate', $this->birthDate, PDO::PARAM_STR);
        $query->bindValue(':phone', $this->phone, PDO::PARAM_STR);
        $query->bindValue(':mail', $this->mail, PDO::PARAM_STR);
        $query->bindValue(':id', $this->id, PDO::PARAM_INT);
        return $query->execute();
    }
    public function searchPatientsListByName($search) {
        $searchPatientsListByNameQuery = $this->db->prepare(
            'SELECT `id`, `lastname`, `firstname`, `mail`, DATE_FORMAT(`birthDate`, \'%d/%m/%Y\') AS `birthDateFr` 
            FROM `patients`
            WHERE `lastname` LIKE :search OR `firstname` LIKE :search
            ORDER BY `lastname` AND `firstname`');
        $searchPatientsListByNameQuery->bindValue(':search', $search . '%', PDO::PARAM_STR);
        $searchPatientsListByNameQuery->execute();
        return $searchPatientsListByNameQuery->fetchAll(PDO::FETCH_OBJ);
        
    }
}
//-----Portées des attributs-----
//Private accessible uniquement dans la class
//Protected accessible dans la class et les enfantsx
//Public accessible dans la class, les enfants et dans les instances
/* 


:marqueur nominatif


bindValue() = Vérifie une injection SQL, Remplace le marqueur nominatif par une valeur


$this->attribut = Acceder aux attributs et méthodes de l'objet en lui même


prepare()  = Prépare une requête SQL avant de l'executer à utiliser quand on attend un marqueur nominatif par exemple
execute()  =


query() = Simple requête qui s'execute tout de suite


mot clé static exemple:

private static $instance = null; ==

empêche l'attribut d'être utilisé dans une instance d'objet exemple:

$var = new Objet;           NE MARCHERAS PAS
$var->instance;

sinon utiliser $var = Objet::instance

self:: équivalent au $this-> pour les attributs statics
*/