<?php
//Conecto el form con el server a través de los name 
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$email = $_POST["email"];
$mensaje = $_POST["mensaje"];

//Como me va a llegar el cuerpo del mensaje 
$mensaje = "El mensaje fue enviado por" . $nombre . ",\r\n";
$mensaje = "Su apellido es:" . $apellido . "\r\n";
$mensaje .= "Su email es:" . $email . "\r\n";
$mensaje .= "Mensaje:" $_POST["mensaje"] . "\r\n";
$mensaje .="Enviado el" .date("d/m/Y", time());

$destinatario = "arq.marisel@gmail.com";
$asunto = "Este mail fue enviado desde la web de Time Step";

//Funcion mail
//Receptor del mail 
mail($destinatario,$asunto, utf8_decode($mensaje). $header);

//Redireccion una vez enviado el mail
header("Location:exito.html");

?>