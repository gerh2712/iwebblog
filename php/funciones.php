<?php

//Conexión a la base de datos
function conexion ($bd_config){
    try{
        $conexion = new PDO(
            'mysql:host=localhost;dbname=' . $bd_config['dataBase'] . ';charset=utf8',
            $bd_config['user'],
            $bd_config['pass']
        );
        return $conexion; 
    }catch(PDOException $e){
        return false;
    }
}

//Limpiar datos mediante la función trim, que quita espacios al inicio y al final
function limpiarDatos($datos)
{
    $datos = trim($datos);
    $datos = stripslashes($datos);
    $datos = htmlspecialchars($datos);
    return $datos;
}

function paginaActual()
{
    return isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
}

function obtenerArticulos($conexion, $artPorPagina){
    
    $inicioMostrar = (paginaActual() > 1) ? (paginaActual() * $artPorPagina - $artPorPagina) : 0;
    $articulos = $conexion->prepare("
        SELECT SQL_CALC_FOUND_ROWS * FROM articulos
        LIMIT $inicioMostrar, $artPorPagina
    ");

    $articulos->execute();
    return $articulos->fetchAll();

}

?>