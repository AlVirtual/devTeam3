<?php

require('models/conexio.php');

$con = new Conexio();

$tasques = $con->obtenirTotes();

require('Views/veure_tasques.php')
 
?>