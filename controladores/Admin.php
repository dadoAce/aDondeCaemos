<?php

class Admin extends App
{

    function __construct()
    {
    }

    public function index()
    {
        $this->inicio();
    }

    /* Vista */
    public function login()
    { 
        $template["contenido"]  = "admin/inicio_sesion";
        $template["nombre_pagina"] ="login";
        /* Mostrar la plantilla dibde se mostrara la el contenido */
        $this->vista("admin/layout_Admin", $template);
    }

    public function inicio()
    {  
        /* Direccion de vista en variable */

        $template["contenido"]  = $this->vista("Admin/dashboard_admin");
        /* Mostrar la plantilla dibde se mostrara la el contenido */
        $this->vista("Admin/layout_Admin", $template);
    }

    // USUARIOS

    public function usuarios()
    {
        /* Llamar al Modelo Usuarios */
        $this->modelo("UsuarioModel");
        /* Crear Objeto */
        $usuarioM = new UsuarioModel();

        /* Crear variables */
        $datos["usuarios"] = $usuarioM->usuariosEstatus("activo");  
        $datos["contenido"]  = "admin/usuarios_admin";  
        /* Mostrar la plantilla dibde se mostrara la el contenido */
        $this->vista("Admin/layout_Admin", $datos);
    }

    public function detallesUsuario($idUsuario){

        /* Llamar al Modelo Usuarios */
        $this->modelo("UsuarioModel");
        /* Crear Objeto */
        $usuarioM = new UsuarioModel();
        /* Crear variables */
        $datos["usuario"] = $usuarioM->select($idUsuario);  
        $datos["detallesPersona"] = $usuarioM->personaDetalles($idUsuario);  
        $datos["contenido"]  = "admin/usuario_detalles";  
        /* Mostrar la plantilla dibde se mostrara la el contenido */
        $this->vista("Admin/layout_Admin", $datos);
    }

    // Ubicaciones

    public function Ubicaciones()
    {
        /* Llamar al Modelo Usuarios */
        $this->modelo("UbicacionesModel");
        /* Crear Objeto */
        $modelo = new UbicacionesModel();

        /* Crear variables */
        $datos["ubicaciones"] = $modelo->selectAll();  
        $datos["contenido"]  = "admin/ubicaciones_admin";  
        /* Mostrar la plantilla dibde se mostrara la el contenido */
        $this->vista("Admin/layout_Admin", $datos);
    }

    public function ubicaciones_detalles(){
         /* Llamar al Modelo Usuarios */
         $this->modelo("UbicacionesModel");
         /* Crear Objeto */
         $modelo = new UbicacionesModel();
 
         /* Crear variables */
         $datos["ubicaciones"] = $modelo->selectAll();  
         $datos["contenido"]  = "admin/ubicaciones_detalles";  
         /* Mostrar la plantilla dibde se mostrara la el contenido */
         $this->vista("Admin/layout_Admin", $datos);
    }

    // EVENTOS
    public function Eventos()
    {
        /* Llamar al Modelo Usuarios */
        $this->modelo("UsuarioModel");
        /* Crear Objeto */
        $usuarioM = new UsuarioModel();

        /* Crear variables */
        $datos["usuarios"] = $usuarioM->usuariosEstatus("activo");  
        $datos["contenido"]  = "admin/ubicaciones_admin";  
        /* Mostrar la plantilla dibde se mostrara la el contenido */
        $this->vista("Admin/layout_Admin", $datos);
    }

    // SERVICIOS
    public function Servicios()
    {
        /* Llamar al Modelo Usuarios */
        $this->modelo("ServiciosModel");
        /* Crear Objeto */
        $modelo = new ServiciosModel();

        /* Crear variables */
        $datos["usuarios"] = $modelo->selectAll();  
        $datos["contenido"]  = "admin/servicios_admin";  
        /* Mostrar la plantilla dibde se mostrara la el contenido */
        $this->vista("Admin/layout_Admin", $datos);
    }

    public function crearServicio(){
        if (!isset($_POST) || $_POST == null) {
            echo "<h6>Este no es el camino</h6>";
            return;
        }
        $datos["nombre_servicio"] = $_POST["nombre"];
        $datos["estatus"] = $_POST["estatus"]; 

        
        $this->modelo("ServiciosModel");
        $modelo = new ServiciosModel();

        $result = $modelo->save($datos);
        $this->header("/Admin/Servicios");
    }

    public function Front()
    {
        /* Llamar al Modelo Usuarios */
        $this->modelo("UsuarioModel");
        /* Crear Objeto */
        $usuarioM = new UsuarioModel();

        /* Crear variables */
        $datos["usuarios"] = $usuarioM->usuariosEstatus("activo");  
        $datos["contenido"]  = "admin/ubicaciones_admin";  
        /* Mostrar la plantilla dibde se mostrara la el contenido */
        $this->vista("Admin/layout_Admin", $datos);
    }

}
