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
require('../models/m_altres.php');
require('../models/m_conexio.php');

$con = new Conexio();

$tasques = $con->getTasks();

require('../views/v_veure_tasques.php')
 
?>