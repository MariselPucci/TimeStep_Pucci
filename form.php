<?php
//Conecto el form con el server a través de los name 
$nombre = $_GET['name'];
$apellido = $_GET['lastname'];
$email = $_GET['mail'];
$mensaje = $_GET['mensaje'];

//Como me va a llegar el cuerpo del mensaje 
$mensaje = "El mensaje fue enviado por: " . $nombre . ",\r\n";
$mensaje .= "Su apellido es: " . $apellido . ",\r\n";
$mensaje .= "Su email es: " . $email . ",\r\n";
$mensaje .= "Mensaje: ". $_GET['mensaje'] . "\r\n";
$mensaje .="Enviado el: " .date('d/m/Y', time());

$para = 'arq.marisel@gmail.com';
$asunto = 'Este mail fue enviado desde la web de Time Step';

//Funcion mail
//Receptor del mail 
mail($para, $asunto, utf8_decode($mensaje));

//Redireccion una vez enviado el mail
header('Location:pages/exito.html');

?>