<?php 
    class Conexio{

        private $con;

        public function __construct(){
            $this->con = new mysqli("localhost", "root", "", "tododb");
            }
      
        
        public function getTasks(){
            $query =$this->con->query("SELECT * FROM tasks");

            $consulta = [];

            $i=0;
            while($fila = $query->fetch_assoc()){
                $consulta[$i] = $fila;
                $i++;
            }

            return $consulta;

        }


        public function createTask($userName,$taskName,$taskDescription,$taskStart,$taskEnd,$taskStatus){
            $query = $this->con->query("INSERT INTO tasks(userName,taskName,taskDescription,taskStart,taskEnd,taskStatus) 
                                        values($userName,$taskName,$taskDescription,$taskStart,$taskEnd,$taskStatus)");
            
            $query = $result;

            return $result;
            
        }


        public function readTask($id){
            $query = $this->con->query("SELECT * FROM tasks WHERE idTask=$id");
            $query = $consulta;

            $result = $consulta->fetch_assoc();

            return $result;

        }


        public function updateTask($id){
            $query = $this->con->query("SELECT * FROM tasks WHERE idTask=$id");
            


        }


        public function deleteTask($id){
            $query = $this->con->query("DELETE * FROM tasks WHERE idTask=$id");

        }
        




    }









    
?>