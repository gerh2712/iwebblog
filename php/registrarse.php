<?php
session_start();

//Si ya hay sesión enviar al index.php
if (isset($_SESSION['usuario'])) {
    header('Location: ../index.php');
}else {

    
    
    if (isset($_POST['submit_registro'])) {
        
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $usuario = filter_var($_POST['usuario'], FILTER_SANITIZE_STRING);
            $email = $_POST['email'];
            $email2 = $_POST['email2'];
            $contraseña = $_POST['contraseña'];
            //Asegurando contraseña
            $contraseña = hash('sha512', $contraseña);
        
            //echo $usuario . $email . $email2 . $contraseña;
        
            $errores = '';
        
            //Validación llenar todos los campos
            if (empty($usuario) or empty($email) or empty($email2) or empty($contraseña)) {
                $errores .= "<div class='alert  danger-color-dark  text-justify text-light'>
        
                                <strong>Aviso: </strong> Rellena todos los campos correctamente.                       
        
                            </div>";
            }else {
                //Validación de conexión, ejecución
                try{
                    $conexion = new PDO('mysql:host=localhost;dbname=iwb_database;charset=utf8','root','');
                }catch(PDOExceeption $e){
                    echo "Error: " . $e->getMessage();
                }
        
                //Conexión con la base de datos & obtención de usuario para la validación
                $statement = $conexion->prepare('SELECT * FROM usuarios_login WHERE usuario = :usuario LIMIT 1');
                $statement->execute(array(':usuario' => $usuario));
                $resultado = $statement->fetch();
                
                //Validación existencia de usuario
                if ($resultado != false) {
                    $errores .= 
                        "<div class='alert  danger-color-dark  text-justify text-light'>
        
                            <strong>Aviso: </strong> El usuario ya existe.                       
        
                        </div>";
                }        
                
                if ($email != $email2) {
                    $errores .= 
                        "<div class='alert  danger-color-dark  text-justify text-light'>
        
                            <strong>Aviso: </strong> Los emails son diferentes                       
        
                        </div>";
                }
        
            }
        
            if ($errores == '') {
                
                $conexion = new PDO('mysql:host=localhost;dbname=iwb_database;charset=utf8','root','');
                $statement = $conexion->prepare('INSERT INTO usuarios_login (id, usuario, pass, mail) VALUES(null, :usuario, :pass, :mail)');
                $statement->execute(array(  
                    ':usuario'=>$usuario,
                    ':pass'=>$contraseña,
                    ':mail'=>$email
                ));
        
                echo 'Hola Mundo';
            
            }
           
            
        }

    }elseif (isset($_POST['submit_login'])) {
        
        //LOGIN
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            
            $usuario_login = filter_var($_POST['usuario_login'], FILTER_SANITIZE_STRING);
            $password_login = $_POST['password_login'];
            $password_login = hash('sha512', $password_login);
            echo "<br>" . $usuario_login . "<br>" . $password_login;

            try {
                $conexion = new PDO('mysql:host=localhost;dbname=iwb_database;charset=utf8', 'root', '');
            }catch(PDOException $e){
                echo "Error: " . $e->getMessage();
            }

            $statement = $conexion->prepare( 
                'SELECT * FROM usuarios_login WHERE usuario = :usuario_login OR mail = :usuario_login AND pass = :password_login'
            );
            $statement->execute(
                array(
                ':usuario_login'=>$usuario_login,        
                ':password_login'=>$password_login
                )
            );
            $coincidencia = $statement->fetch();    
            var_dump($coincidencia);
            
            if ($coincidencia !== false) {
                $_SESSION['usuario'] = $usuario_login;
                header('Location: ../index.php');
            }
        }

    }

    //requires
    require 'validacion_contacto.php';
    require '../views_php/registrarse.view.php';    


}




//Guardando datos del formulario en variables







?>