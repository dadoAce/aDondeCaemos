<?php

/* Clase de ejemplo para modelo

 * Esta clase hereda los metodos de la Clase MODELO
 * Favor de checar los metodos basicos
 * 
 *  */

class ServiciosModel extends Modelo {

    public $tabla = "servicios";
    public $pk = "id";
    /* Opcion de usar un archivo entidad para filtrar algunas devoluciones; Se incluye una entidad de ejemplo: */
    public $entidad = true;
    public $entidad_nombre = "UsuarioEntidad";
    public $columnas = array('nombre_servicio','estatus', 'fecha_creacion', 'fecha_modificacion', 'fecha_eliminado');

    public function __construct() {
        
    }

    public function usuariosEstatus($estatus) {
        $query = "select * from usuarios where estatus= '$estatus'";

        /* Usar getROW para traer 1 registro; 
         * getQuery para ejecutar y traer varios registros en un Arrary; 
         * query para solo ejecutar sin esperar retorno;  */
        $result = $this->getQuery($query);
        return $result;
    } 
 

}
