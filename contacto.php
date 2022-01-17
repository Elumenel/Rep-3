<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];

//ENVIAR EMAIL
$mensaje_enviar = "Nombre: ".$nombre." ".$apellido."\nCorreo: ".$correo."\nMensaje: ".$mensaje;

mail("c4st3ll4r1n@gmail.com", "Mensaje enviado desde mi sitio personal", $mensaje_enviar);

//INSERTAR EN DB
$conexion = mysqli_connect("localhost", "root", "", "castellarin_florencia");

mysqli_query($conexion, "INSERT INTO mensajes (`nombre`, `apellido`, `correo`, `mensaje`) VALUES ('$nombre', '$apellido', '$correo', '$mensaje')");

mysqli_close($conexion);

//ENVIAR CONFIRMACION POR PAGINA
header("Location: index.php?status=ok#footer-container");
 ?>
