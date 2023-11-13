<?php

/* Clase de ejemplo para modelo

 * Esta clase hereda los metodos de la Clase MODELO
 * Favor de checar los metodos basicos
 * 
 *  */

class UbicacionesModel extends Modelo {

    public $tabla = "ubicaciones";
    public $pk = "id";
    /* Opcion de usar un archivo entidad para filtrar algunas devoluciones; Se incluye una entidad de ejemplo: */
    public $entidad = true;
    public $entidad_nombre = "UsuarioEntidad";
    public $columnas = array(  'nombre', 'direccion','img_principal', 'url_google_maps', 'fecha_creacion', 'fecha_modificacion', 'eliminado');

    public function __construct() {
        
    }

    public function usuariosEstatus($estatus) {
        $query = "select * from ubicaciones where estatus= '$estatus'";

        /* Usar getROW para traer 1 registro; 
         * getQuery para ejecutar y traer varios registros en un Arrary; 
         * query para solo ejecutar sin esperar retorno;  */
        $result = $this->getQuery($query);
        return $result;
    }
    public function personaDetalles($idUsuario) {
        $query = "select * from ubicaciones where usuario_id= '$idUsuario'"; 
        /* Usar getROW para traer 1 registro; 
         * getQuery para ejecutar y traer varios registros en un Arrary; 
         * query para solo ejecutar sin esperar retorno;  */
        $result = $this->getQuery($query);
        return $result;
    }

    /*     * Ejemplo de crear QUERY directa */

    public function iniciarSesion($datos) {
       $query = "select * from usuarios where correo = '" . $datos["correo"] . "' and contrasenia = '" . $datos["password"] . "'";

        /* Usar getROW para traer 1 registro; 
         * getQuery para ejecutar y traer varios registros en un Arrary; 
         * query para solo ejecutar sin esperar retorno;  */
        $result = $this->getRow($query); 
        return $result;
    }

}
