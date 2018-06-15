<?php

//Este archivo es el encargado de juntar todos los engranajes y hacer que funcionen
//El orden de los requires es importante, poniendo siempre el index.view.php al final
//No es necesario hacer dentro de los archivos externos referencias al index.php como ../index.php
//Para las rutas hay que tomar en cuenta la ubicación del archivo desde el que se hace el require

//--Session
session_start();
    




    // requires
    
    //Validacion del contacto en la página principal
    require 'php/validacion_contacto.php';    

    //Vista principal
    
    require 'views_php/entrada.view.php';





?>

