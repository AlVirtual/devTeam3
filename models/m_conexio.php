<?php 
    class Conexio{

        private $con;

        public function __construct(){
            $this->con = new mysqli("localhost", "root", "", "tododb");
            } //dasfdsadf
      
        
        public function getTasks(){
            $query =$this->con->query('SELECT * FROM tasks');

            $consulta = [];

            $i=0;
            while($fila = $query->fetch_assoc()){
                $consulta[$i] = $fila;
                $i++;
            }

            return $consulta;

        }
    }
    
?>