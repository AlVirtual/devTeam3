

<?php
require('../models/m_conexio.php');

$con = new Conexio();

$tasques = $con->getTasks();

require('../views/v_veure_tasques.php')
 
?>