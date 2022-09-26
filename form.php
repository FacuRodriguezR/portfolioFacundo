<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// mensaje

$mesagge = "Este mensaje fue enviado por" . $name . ",/r/n";
$mesagge. = "Su e-mail es: " . $email . ",/r/n";
$mesagge. = "Asunto: " . $_POST['message']; . ",/r/n";


$para = "facuprn54@gmail.com"
$asunto = "Este mail fue enviado desde tu portfolio"

mail($para, $asunto, utf8_decode($message), $header);

header('Location:exito.html');

?>