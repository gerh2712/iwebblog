<?php 

try{
    //Establecer la conexión
    $conexion = new PDO ('mysql:host=localhost;dbname=iwb_articulos','root','');

    $pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;

    $artPorPagina = 6;

    $inicioMostrar = ($pagina > 1) ? ($pagina * $artPorPagina - $artPorPagina) : 0;

    $articulos = $conexion->prepare("
        SELECT SQL_CALC_FOUND_ROWS * FROM articulos
        LIMIT $inicioMostrar, $artPorPagina
    ");

    $articulos->execute();
    $articulos = $articulos->fetchAll();

    if (!articulos) {
        header('Location: ../index.php');
    }



}catch(PDOException $e){
    //Mostrar mensaje de error si no se establece la conexión
    echo "Error: " . $e->getMessage();
}

?>