<?php

require('models/conexio.php');

$con = new Conexio();

switch ($accio) {
    case 'alta':
        $tasques = $con->afegir();
        break;
    case 'modificar';
        $tasques = $con->modificar();
        break;
    case 'esborrar';
        $tasques = $con->esborrar();
        break;
    case 'obtenir';
        $tasques = $con->obtenir();
        break;
    case 'obtenirTotes';
        $tasques = $con->obtenirTotes();
        break;
} 


?>