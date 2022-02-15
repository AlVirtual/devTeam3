<?php

class tasques{
    private $db;
    private $idTasca;
    private $nomTasca;
    private $descripcio;
    private $startDate;
    private $endDate;
    private $user_id;
    private $estatTasca_id;
    
    public function __construct(){
        require_once("config/db.inc.php");
        $this->db = $dbh;   
    }

    public function _construct($nomTasca, $descripcio, $startDate, $endDate, $user_id, $estatTasca_id){
        require_once("config/db.inc.php");
        $this->db = $dbh; 

        $this->nomTasca = $nomTasca;
        $this->descripcio = $descripcio;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->user_id = $user_id;
        $this->estatTasca_id = $estatTasca_id;
        
    }

    public function get_idTasca(){
        return $this->idTasca;
    }

    public function set_idTasca($num){
        $this->idTasca = $num;
    }

    public function afegir(){
        $this->db->query("insert into tasks(
            name, description, startDate, endDate, users_id, status_id) 
            values (
                $this->nomTasca,
                $this->descripcio,
                $this->startDate,
                $this->endDate,
                $this->user_id,
                $this->estatTasca_id
                )") 
                or die($this->db->error);

        //posar a $this->idTasca = idAmbQueSHaAfegit;
    }

    public function modificar(){
        $this->db->query("update tasks(
            name, description, startDate, endDate, users_id, status_id) 
            values (
                $this->nomTasca,
                $this->descripcio,
                $this->startDate,
                $this->endDate,
                $this->user_id,
                $this->estatTasca_id
                ) 
            where id =  $this->idTasca") 
                or die($this->db->error);

        //comprovar si s'ha modificat ?
    }

    public function esborrar(){
        $this->db->query("DELETE FROM tasks WHERE id = $this->idTasca") or die($this->db->error);
    }

    public function obtenir(){
        $registre=$this->db->query("select * from tasks where id = $this->idTasca") or die($this->db->error);
        $this->nomTasca = $registre['nomTasca'];
        $this->descripcio = $registre['descripcio'];
        $this->startDate = $registre['startDate'];
        $this->endDate = $registre['endDate'];
        $this->user_id = $registre['user_id'];
        $this->estatTasca_id = $registre['estatTasca_id'];
    }

    public function obtenirTotes(){
        return $this->db->query("select * from tasks") or die($this->db->error);

        //estudiar si tornar-ho així o crear un array de tasques o una classes Tasques ??? decidir
    }


}
?>
