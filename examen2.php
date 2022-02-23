<?php

class Persona {
    public $nom = "";
    public $edat = 0;
    public $email = "";

    public function __construct($nom, $edat, $email){
        $this->nom = $nom;
        $this->edat = $edat;
        $this->email = $email; 
    }

}

function tornaValorDePropietat($objecte, $propietat){
    if (isset($objecte->$propietat)){
        return $objecte->$propietat;
    } else {
        return "no encontrado.";
    }

}

function tornaTotesPropietat($objecte){
    return array_keys(get_object_vars($objecte));
}

$joan = new Persona("Joan", 18, "joan@gmail.com");

echo tornaValorDePropietat($joan, "email")."<br>";

echo tornaValorDePropietat($joan, "anyNaixement")."<br>";

print_r(tornaTotesPropietat($joan));

?>