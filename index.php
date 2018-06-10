<?php

//Este archivo es el encargado de juntar todos los engranajes y hacer que funcionen
//El orden de los requires es importante, poniendo siempre el index.view.php al final
//No es necesario hacer dentro de los archivos externos referencias al index.php como ../index.php
//Para las rutas hay que tomar en cuenta la ubicación del archivo desde el que se hace el require

//--Session
session_start();

if (isset($_SESSION['usuario'])) {
    //header('Location: index.php');
}else {
    header('Location: php/registrarse.php');
}

// requires
//Validacion del contacto en la página principal
require 'php/validacion_contacto.php';

//Paginación y obtención de los artículos en la página principal
require 'php/paginacion_articulos_index.php';

//Vista principal
require 'views_php/index.view.php';



?>
