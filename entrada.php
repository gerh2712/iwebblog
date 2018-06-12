<?php
session_start();

//requires esenciales
require 'php/config.php';
require 'php/funciones.php';

//TODO: Agregar sesiones cuando pueda ofrecer funciones adicionales

//Conectar a la base de datos
$conexion = conexion($bd_config);
$id_articulo = id_articulo($_GET['id']);

if (!$conexion) {
    header('Location: error.php');
}

if (empty($id_articulo)) {
    header('Location: ../index.php');
}

$entrada = obtenerArticulosId($conexion, $id_articulo);

if (!$entrada) {
    header('Location: ../index.php');
}

$entrada = $entrada[0];

 //requires
 require 'php/validacion_contacto.php';
 require 'views_php/entrada.view.php'; 

?>