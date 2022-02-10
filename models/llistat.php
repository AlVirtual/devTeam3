<?php
        $mysql=new mysqli("localhost","root","","tododb");
        if ($mysql->connect_error)
            die('Error a la connexió de base de dades');
        
              $registros=$mysql->query("select id, name, description, startDate, endDate, users_id, status_id from tasks") or die($mysql->error);
              
              echo '<table class="tablalistado">';
              echo '<tr><th>Id</th><th>Nom</th><th>Descripció</th><th>Data inici</th><th>Data fi</th><th>Usuari</th><th>Estat</th></tr>';
              while ($reg=$registros->fetch_array())
              {
                  echo '<tr>';
                  echo '<td>';
                  echo $reg['id'];
                  echo '</td>';
                  echo '<td>';
                  echo $reg['name'];
                  echo '</td>';
                  echo '<td>';
                  echo $reg['description'];
                  echo '</td>';
                  echo '<td>';
                  echo $reg['startDate'];
                  echo '</td>';
                  echo '<td>';
                  echo $reg['endDate'];
                  echo '</td>';
                  echo '<td>';
                  echo $reg['users_id'];
                  echo '</td>';
                  echo '<td>';
                  echo $reg['status_id'];
                  echo '</td>';
                  echo '</tr>';  
              }
              echo '<table>';      
        
        $mysql->close();

        
    
?>