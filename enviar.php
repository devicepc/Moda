<?php
 $destino  = "devicepc01@hotmail.com";
$nombre = $_Post["nombre"];
$correo = $_Post["correo"];
$telefono = $_Post["telefono"];
$mensaje = $_Post["mensaje"];
    
$contenido = "Nombre: ".$nombre ."\nCorreo: " .$correo ."\nTelefono: " .$telefono ."\nMensaje: " .$mensaje;

mail($destino,"Consulta WEB", $contenido );
header("Location:index.html");
    ?>