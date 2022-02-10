<?php
        $mysql=new mysqli("localhost","root","","tododb");
        if ($mysql->connect_error)
            die('Error a la connexió de base de dades');
        
              $borrar_id = $_POST['borrar'];
              foreach($borrar_id as $fila){
                $borrant = $mysql->query("DELETE FROM tasks WHERE id = $fila") or die($mysql->error);
               
                }  
                $mysql->close();
                header("location: borrar.php");
        
    
?>