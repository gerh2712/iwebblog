<?php

//Esta variable permite mostrar el mensaje de error en caso de que no se haya 
//introducido algún dato
$errores = '';
$enviado = '';

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
    }else {
        //Mensaje de error si no se introdujo un nombre 
        $errores .= 'Por favor ingresa un nombre <br />';
    }
}
 
    require '../index.view.php'   

?>
