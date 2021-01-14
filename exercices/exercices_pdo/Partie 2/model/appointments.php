<?php
class RDV{
    public $id = 0;
    public $dateHour = '';
    public $idPatients = 0;
    private $db = NULL;
    public function __construct(){
        try {
            $this->db = new PDO('mysql:host=localhost;dbname=hospitalE2N;charset=utf8', 'admin', '!18m02j12');
        }
        catch (Exception $error){
            die ($error->getMessage());
        }
    }
    public function addAppointment(){
        $query = $this->db->prepare(
            'INSERT INTO `appointments` (`dateHour`,`idPatients`) 
            VALUES(:dateHour, :idPatients)');
        $query->bindValue(':dateHour', $this->dateHour, PDO::PARAM_STR);
        $query->bindValue(':idPatients', $this->idPatients, PDO::PARAM_STR);
        return $query->execute();
    }
    public function getAppointmentList(){
        $query = $this->db->query(
            'SELECT
                `appointments`.`id` AS `appId`,
                DATE_FORMAT(`dateHour`, \'%d/%m/%Y %Hh%i\') AS `dateHourFR`,
                `idPatients`,
                `patients`.`firstname`,
                `patients`.`lastname`,
                `patients`.`id`
            FROM
                `appointments`
            INNER JOIN
                `patients`
            ON
                `appointments`.`idPatients` = `patients`.`id`'
            );
        $data = $query->fetchAll(PDO::FETCH_OBJ);
    
        return $data;
    }
    public function getAppointmentDetails(){
        $query = $this->db->prepare(
            'SELECT
                `appointments`.`id`,
                DATE_FORMAT(`dateHour`, \'%d/%m/%Y %Hh%i\') AS `dateHourFR`,
                `patients`.`firstname`,
                `patients`.`lastname`,
                DATE_FORMAT(`patients`.`birthDate`, \'%d/%m/%Y\') AS `birthDateFR`,
                `patients`.`phone`,
                `patients`.`mail`
            FROM
                `appointments`
            INNER JOIN
                `patients`
            ON
                `appointments`.`idPatients` = `patients`.`id`
            WHERE
                `appointments`.`idPatients` = :idPatients'
            );
            $query->bindValue(':idPatients', $this->idPatients, PDO::PARAM_INT);
            $query->execute();
            return $query->fetch(PDO::FETCH_OBJ);
    }
    public function modifyAppointment(){
        $query = $this->db->prepare(
            'UPDATE `appointments`
            SET `dateHour` = :dateHour,
            `idPatients` = :idPatients
            WHERE
            `id` = :id'
        );
        $query->bindValue(':dateHour', $this->dateHour, PDO::PARAM_STR);
        $query->bindValue(':idPatients', $this->idPatients, PDO::PARAM_STR);
        $query->bindValue(':id', $this->id, PDO::PARAM_INT);
        return $query->execute();
    }
    public function getAppointmentPatientList(){
        $query = $this->db->prepare(
            'SELECT
                `appointments`.`id` AS `appId`,
                DATE_FORMAT(`dateHour`, \'%d/%m/%Y %Hh%i\') AS `dateHourFR`,
                `idPatients`,
                `patients`.`firstname`,
                `patients`.`lastname`,
                `patients`.`id`
            FROM
                `appointments`
            INNER JOIN
                `patients`
            ON
                `appointments`.`idPatients` = `patients`.`id`
            WHERE
                `appointments`.`idPatients` = :id'
            );
        $query->bindValue(':id', $this->id, PDO::PARAM_INT);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
}
//-----Portées des attributs-----
//Private accessible uniquement dans la class
//Protected accessible dans la class et les enfants
//Public accessible dans la class, les enfants et dans les instances
/* 

:marqueur nominatif

bindValue() = Vérifie une injection SQL, Remplace le marqueur nominatif par une valeur

$this->attribut = Acceder aux attributs et méthodes de l'objet en lui même

*/