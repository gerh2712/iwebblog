<?php

//Registrarse e Iniciar Sesión

if (isset($_SESSION['usuario'])) {
    header('Location: ../index.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = filter_var($_POST['usuario'], FILTER_SANITIZE_STRING);
    $password = $_POST['contraseña'];
    $password = hash('sha512', $password);

    try {
        $conexion = new PDO('mysql:host=localhost;dbname=iwb_database;charset=utf8', 'root', '');
    }catch(PDOException $e){
        echo "Error: " . $e->getMessage();
    }

    $statement = $conexion->prepare(
        'SELECT FROM usuarios_login WHERE usuario = :usuario AND pass = :pass'
    );
    $statement->execute(
        array(
        ':usuario'=>$usuario,
        ':pass'=>$password
        )
    );
    $coincidencia = $statement->fetch();
    var_dump($coincidencia);
}

require '../views_php/login.view.php';

?>