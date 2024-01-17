<?php
// Recopilamos los datos del formulario
$nombre = $_POST['name'];
$email = $_POST['email'];
$asunto = $_POST['Asunto'];
$mensaje = $_POST['message'];

// Creamos el contenido del correo electrónico
$contenido = "Nombre: $nombre\n";
$contenido .= "Email: $email\n\n";
$contenido .= "Asunto: $asunto\n\n";
$contenido .= "Mensaje:\n$mensaje\n";

// Configuramos los encabezados del correo electrónico
$headers = "From: $nombre <$email>\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// Enviamos el correo electrónico
$para = "facuprn54@gmail.com"; // Coloca aquí la dirección de correo electrónico del destinatario
$asunto_correo = "Mensaje de $nombre desde el sitio web"; // Coloca aquí el asunto del correo electrónico
mail($para, $asunto_correo, $contenido, $headers);

// Redirigimos al usuario de vuelta al formulario
header('Location: index.html');
?>