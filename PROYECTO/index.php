<?php
#index, es la puerta de entrada a la aplicación
#require() requerido
#include() incluir

require_once "controlador/plantilla.controlador.php";

#para el controlador de los formularios
require_once "controlador/formularios.controlador.php";
require_once "modelo/formularios.modelo.php";
//crear una instancia
$plantilla = new ControladorPlantilla();
$plantilla->ctrTraerPlantilla();

    