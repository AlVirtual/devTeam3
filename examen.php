<?php
/*
Crear un array que contingui informació de 5 cotxes. Cada element del array és un objecte que conté els camps: 

model (string)
marca(string)
cilindrada (number)
tieneTurbo (boolean). 

- Guarda en una variable anomenada cocheFavorito el segon element del array.

206, Peugeot, 1.4, false
Tipo, Fiat, 1.6, true
Model 3, Tesla, 200, true
Prius, Toyota, 1.8, true
Ibiza, Seat, 1.4, true

*/

$cotxes = [];

class cotxe {
    public $model = "";
    public $marca = "";
    public $cilindrada = 0;
    public $tieneTurbo = false;

    public function __construct($model, $marca, $cilindrada, $tieneTurbo){
        $this->model = $model;
        $this->marca = $marca;
        $this->cilindrada = $cilindrada;
        $this->tieneTurbo = $tieneTurbo;
    }
}


$cotxes[0] = new $cotxe("206", "Peugeot", 1.4, false);
$cotxes[1] = new $cotxe("Tipo", "Fiat", 1.6, true);
$cotxes[2] = new $cotxe("Model 3", "Tesla", 200, true);
$cotxes[3] = new $cotxe("Prius", "Toyota", 1.8, true);
$cotxes[4] = new $cotxe("Ibiza", "Seat", 1.4, true);

// $cocheFavorito = new $cotxe();

$cocheFavorito = $cotxes[1];


// Mitjançant un bucle for crea un array amb els models dels cotxes.
$models = [];

for ($i = 0; $i<=4; $i++){
    $models[$i] = $cotxes[$i]->model;     
}


//ordena ascendent
$models = sort($models);

$models2 = array();

array_push($models2, null);



/*
Implementi la funció perquè llanci un error si es crida sense arguments o l'argument és indefinit. En cas contrari, hauria de retornar el
 valor donat.

- Crear una funció calculadora que rebi dos valors i un string (que pot ser "suma", "resta", "multiplicació"). Cridar a aquesta funció
 i mostrar el resultat per consola.

- Crear una funció que rebi un array de valors i una posició, i retorni el valor del array que coincideixi amb aquesta posició.
*/

function llencaError($param){
    if (!isset($param)){
        throw new Exception('There is an error.');
    } else {
        return $param;
    }
}

function calculadora($v1, $v2, $operacio){
    switch($operacio){
        case("suma"):
            return $v1+$v2;
            break;
        case("resta"):
            return $v1-$v2;
            break;
        case("multiplicació"):
            return $v1*$v2;
            break;
    }
}

function tornaElement($valors, $posicio){
    return $valors[$posicio-1];
}