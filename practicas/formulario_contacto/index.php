<?php
$errores = '';
$enviado = '';
//Ha enviado dato por POST
if (isset($_POST['submit'])) {
  $nombre = $_POST['nombre'];
  $correo = $_POST['correo'];
  $mensaje = $_POST['mensaje'];

  if (!empty($nombre)) {
    //Limpia espacios en blanco al inicio y al final
    $nombre = trim($nombre);
    //Eliminar etiquetas que no deben ir en una cadena de texto.
    $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
  }else {
    //Si envía vacio el input nombre:
    $errores .= 'Por favor ingresa un nombre.<br/>';
  }

  if (!empty($correo)) {
    $correo = filter_var($correo, FILTER_SANITIZE_EMAIL);

    if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){
        //Si envía un correo invalido el input correo:
        $errores .= "Por favor ingresa un correo valido.<br/>";
    }
  }else {
    //Si envía vacio el input correo:
    $errores .= "Por favor ingresa un correo.<br/>";
  }

  if (!empty($mensaje)) {
    $mensaje = htmlspecialchars($mensaje);
    $mensaje = trim($mensaje);
    $mensaje = stripslashes($mensaje);
  } else {
    $errores .= 'Por favor ingresa un mensaje.<br/>';
  }

  if (!$errores) {
    $enviar_a = 'smithrivas.dev@gmail.com';
    $asunto = 'Correo enviado desde mipagina.com';
    $mensaje_preparado = "De: $nombre \n";
    $mensaje_preparado .="Correo: $correo \n";
    $mensaje_preparado .= "Mensaje: ".$mensaje;

    //mail($enviar_a, $asunto, $mensaje_preparado);
    $enviado = 'true';
  }
}

require 'index.view.php';
?>
