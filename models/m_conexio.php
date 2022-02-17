<?php 
    class Conexio{

        private $con;

        //constructor amb parametres de la conexió
        public function __construct(){
            $this->con = new mysqli("localhost", "root", "", "tododb");
        }

        //funció tancar conexió
        public function conClose(){
            $this->con->close();
        }
      
        //funció per obtenir totes les tasques
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


        public function createTask(
            $userName,
        $taskName,
        $taskDescription,
        $taskStart,
        $taskEnd,
        $taskStatus){
            $this->con->query("INSERT INTO tasks(userName,taskName,taskDescription,taskStart,taskEnd,taskStatus) 
                                        values($userName,$taskName,$taskDescription,$taskStart,$taskEnd,$taskStatus)");
            
            
            
        }


        public function readTask($id){
            $query = $this->con->query("SELECT * FROM tasks WHERE idTask=$id");
            
            $result = $query->fetch_assoc();

            return $result;

        }


        public function updateTask(
            $id,
            $userName,
            $taskName,
            $taskDescription,
            $taskStart,
            $taskEnd,
            $taskStatus
        ){
            
            $this->con->query("UPDATE tasks(userName,taskName,taskDescription,taskStart,taskEnd,taskStatus) WHERE idTask=$id SET ($userName,$taskName,$taskDescription,$taskStart,$taskEnd,$taskStatus)");


        }


        public function deleteTask($id){
            $this->con->query("DELETE * FROM tasks WHERE idTask=$id");

        }
        
    }









    
?>