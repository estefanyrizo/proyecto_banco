<?php
/*
* Clase controladora para navegar en la vista de inicio de la aplicacion web
* @name Principal
* @Author Estefany Rizo
* @Version 1.0.0
* @since PHP 7.4
*/

namespace App\Controllers;
class Principal extends BaseController {

    public function index ()
    {
        return view("pagina_inicio");
    } //Fin metodo

} //Fin clase
