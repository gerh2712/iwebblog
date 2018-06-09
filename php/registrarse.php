<?php
session_start();

if (isset($_SESSION['usuario'])) {
    header('Location: ../index.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = filter_var($_POST['usuario'], FILTER_SANITIZE_STRING);
    $email = $_POST['email'];
    $email2 = $_POST['email2'];
    $contraseña = $_POST['contraseña'];

    echo $usuario . $email . $email2 . $contraseña;

    $errores = '';

    if (empty($usuario) or empty($email) or empty($email2) or empty($contraseña)) {
        $errores .= "<div class='alert  danger-color-dark  text-justify text-light'>

                        <strong>Aviso: </strong> Rellena todos los campos correctamente.                       

                    </div>";
    }else {

        try{
            $conexion = new PDO('mysql:host=localhost;dbname=iwb_database','root','');
        }catch(PDOExceeption $e){
            echo "Error: " . $e->getMessage();
        }

        $statement = $conexion->prepare('SELECT * FROM usuarios_login WHERE usuario = :usuario LIMIT 1');
        $statement->execute(array(':usuario' => $usuario));
        $resultado = $statement->fetch();
        
        if ($resultado != false) {
            $errores .= 
                "<div class='alert  danger-color-dark  text-justify text-light'>

                    <strong>Aviso: </strong> El usuario ya existe.                       

                </div>";
        }
    }
    
}

//requires
require 'validacion_contacto.php';
require '../views_php/registrarse.view.php';

?>