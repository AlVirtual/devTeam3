<?php
        $mysql=new mysqli("localhost","root","","tododb");
        if ($mysql->connect_error)
            die('Error a la connexió de base de dades');
        
              $registros=$mysql->query("select id, name, description, startDate, endDate, users_id, status_id from tasks") or die($mysql->error);
              
              echo "<form action='eliminar.php' method='post'>";
   
              while ($reg=$registros->fetch_array())
              {
                 
                         
                  echo "<input type='checkbox' name='borrar[]' value='" . $reg['id'] . "'>";
                  echo $reg['id'] . ' ' . $reg['name'] . ' ' . $reg['description'] . ' ' . $reg['startDate'] . ' ' . $reg['endDate'] . ' ' . $reg['users_id'] . ' ' . $reg['status_id'] . '<br>';
                  
              }
              echo "<input type='submit' value='ESBORRAR REGISTRES MARCATS'>";

              echo "</form>";
          
                   
        
        $mysql->close();

        
    
?>