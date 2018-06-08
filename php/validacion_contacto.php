<?php

//Esta variable permite mostrar el mensaje de error en caso de que no se haya 
//introducido algún dato
$var1 = ''; //errores
$var2 = ''; //validacion

//Condicional que permite saber si se ha hecho clic en enviar
if(isset($_POST['benviar']))  {
    
    //Se obtienen los respectivos valores según se hayan introducido
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];

    //Valida el nombre
    if (!empty($nombre)) {

        //Quita espacios al principio y al final 
        $nombre = trim($nombre);
        //Sanitiza el string
        $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
    }elseif (empty($nombre)) {
        //Mensaje de error si no se introdujo un nombre 
        $var1 .= '<br />Por favor ingresa un nombre';
    }

    if (!empty($email)) {
        $email = trim($email);
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $var1 .= '<br /> Por favor ingresa un correo válido';
        }
    }else {
        $var1 .= '<br /> Por favor ingresa un correo';
    }

    if (!empty($asunto)) {
        $asunto = htmlspecialchars($asunto);
        $asunto = trim($asunto);
        $asunto = filter_var($asunto, FILTER_SANITIZE_STRING);
        $asunto = stripslashes($asunto);
    }else {
        $var1 .= '<br /> Por favor ingresa un asunto';
    }

    if (!empty($mensaje)) {
        $mensaje = htmlspecialchars($mensaje);
        $mensaje = trim($mensaje);
        $mensaje = filter_var($mensaje, FILTER_SANITIZE_STRING);
        $mensaje = stripslashes($mensaje);
    }else {
        $var1 .= '<br /> Por favor ingresa un mensaje';
    }

    if (!$var1) {
        $enviar_a = 'iwebblog@outlook.com';
        $tituloCorreo = 'Contacto desde formulario iwebblog.com';
        $correo = "De: $nombre \n";
        $correo .= "Correo: $email \n";
        $correo .= "Mensaje: \n $mensaje";

        //mail($enviar_a, $tituloCorreo, $correo);
        $var2 = true;
    }

}


?>