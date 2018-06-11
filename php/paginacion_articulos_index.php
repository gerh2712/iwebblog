<?php 

//Requires esenciales
require 'config.php';
require 'funciones.php';

//---paginacion
try{
    //Establecer la conexión
    $conexion = conexion($bd_config);

    $pagina = paginaActual();

    $artPorPagina = 6;

    $articulos = obtenerArticulos($conexion, $blog_index_config['artPorPagina']);  

    if (!$articulos) {
        header('Location: index.php');
    }

    $totalArticulos = $conexion->query('SELECT FOUND_ROWS() as total');
    $totalArticulos = $totalArticulos->fetch()['total'];

    $numeroPaginas = ceil($totalArticulos / $artPorPagina);

    



}catch(PDOException $e){
    //Mostrar mensaje de error si no se establece la conexión
    echo "Error: " . $e->getMessage();
}

?>