<?php
require_once("models/tasques.class.php");

class TasquesController extends Controller 
{    
    public function obtenirTasca($id)
	{
        $tascaNova = new tasques();
        $tascaNova->set_idTasca($id);
        return $tascaNova->obtenir();
    }
    
    public function creaTasca()
	{
		//rebre les dades del formulari i verficar-les si cal

        //Llamada al modelo
        $tascaNova = new tasques('$_REQUEST[name]','$_REQUEST[description]','$_REQUEST[startDate]','$_REQUEST[endDate]','$_REQUEST[users_id]','$_REQUEST[status_id]');
                
        $tascaNova->afegir();   //afegir a la DB

        //Llamada a la vista
        //mostrant feedback
        require_once("views/totesTasques.php");
	}  

    

    public function modificaTasca()
	{
		//rebre les dades del formulari i verficar-les si cal

        //Llamada al modelo
        $tascaNova = new tasques('$_REQUEST[name]','$_REQUEST[description]','$_REQUEST[startDate]','$_REQUEST[endDate]','$_REQUEST[users_id]','$_REQUEST[status_id]');
        
        $tascaNova->set_idTasca('$_REQUEST[id]');
        
        $tascaNova->modificar();
        
        //Llamada a la vista
        //mostrant feedback
        require_once("views/totesTasques.php");
	}  


}