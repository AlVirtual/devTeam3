
<?php

if (isset($_POST["accio"])) {
    $accio = $_POST['accio'];
    $id = $_POST['id'];

    if (isset($_POST["userName"])) {
        $userName = $_POST['userName'];
        $taskName = $_POST['taskName'];
        $taskDescription = $_POST['taskDescription'];
        $taskStart = $_POST['taskStart'];
        $taskEnd = $_POST['taskEnd'];
        $taskStatus = $_POST['taskStatus'];
    }
}


require('../models/m_altres.php');
require('../models/m_conexio.php');
$con = new Conexio();

if (!isset($accio) || is_null($accio)) {
    $tasques = $con->getTasks();
    require('../views/v_veure_tasques.php');    

} else {
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
        $con->updateTask(            
            $id,
            $userName,
            $taskName,
            $taskDescription,
            $taskStart,
            $taskEnd,
            $taskStatus
        );

        $tasques = $con->getTasks();
        require('../views/v_veure_tasques.php');
        break;

    case 'esborrar':
        $con->deleteTask($id);
        
        $tasques = $con->getTasks();
        require('../views/v_veure_tasques.php');
        break;
        
    case 'obtenir':
        $tasca = $con->readTask($id);
        require('../views/v_veure_tasques.php');
        break;
        
    default:
        $tasques = $con->getTasks();
        require('../views/v_veure_tasques.php');
        break;
    }
}


?>