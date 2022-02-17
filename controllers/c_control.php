
<?php

$accio = $_POST['accio'];
$id = $_POST['id'];
$userName = $_POST['userName'];
$taskName = $_POST['taskName'];
$taskDescription = $_POST['taskDescription'];
$taskStart = $_POST['taskStart'];
$taskEnd = $_POST['taskEnd'];
$taskStatus = $_POST['taskStatus'];

require('../models/m_altres.php');
require('../models/m_conexio.php');
$con = new Conexio();

switch ($accio) {
    case 'afegir':        
        $con->createTask(
            $userName,
            $taskName,
            $taskDescription,
            $taskStart,
            $taskEnd,
            $taskStatus);
        require('../views/v_veure_tasques.php');
        break;

    case 'modificar':
        $tasca = $con->readTask($id);
        require('../views/v_modificar_tasca.php');
        break;

    case 'modificat':
        $tasques = $con->updateTask(            
            $id,
            $userName,
            $taskName,
            $taskDescription,
            $taskStart,
            $taskEnd,
            $taskStatus
        );
        require('../views/v_veure_tasques.php');
        break;

    case 'esborrar';
        $con->deleteTask($id);
        require('../views/v_veure_tasques.php');
        break;
        
    case 'obtenir';
        $tasca = $con->readTask($id);
        require('../views/v_veure_tasques.php');
        break;
        
    case 'obtenirTotes';
        $tasques = $con->getTasks();
        require('../views/v_veure_tasques.php');
        break;
}


?>