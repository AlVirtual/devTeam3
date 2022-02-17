<table>
<?php 
    // mostra TOTES les variables POST rebudes. 
    // Util mentre es fan proves

    foreach ($_POST as $key => $value) {
        echo "<tr>";
        echo "<td>";
        echo $key;
        echo "</td>";
        echo "<td>";
        echo $value;
        echo "</td>";
        echo "</tr>";
    }


?>
</table>

<?php
;
$accio = $_POST['accio'];
$id = $_POST['id'];
$userName = $_POST['userName'];
$taskName = $_POST['taskName'];
$taskDescription = $_POST['taskDescription'];
$taskStart = $_POST['taskStart'];
$taskEnd = $_POST['taskEnd'];
$taskStatus = $_POST['taskStatus'];

require('../models/tasques_model.php');
$con = new Tasques();

switch ($accio) {
    case 'afegir':
        
        $tasques = $con->createTask($userName,$taskName,$taskDescription,$taskStart,$taskEnd,$taskStatus);
        require('../views/v_veure_tasca.php');
        break;
    case 'modificar';

        $tasques = $con->updateTask($id);
        require('../views/v_modificar_tasca.php');
        break;
    case 'esborrar';

        $tasques = $con->deleteTask($id);
        require('../views/v_veure_tasca.php');
        break;
    case 'obtenir';
        $tasques = $con->readTask($id);

        require('../views/v_veure_tasca.php');
        break;
    case 'obtenirTotes';
        $tasques = $con->getTask();

        require('../views/v_veure_tasca.php');
        break;
}


?>