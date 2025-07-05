<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombre = $_POST["nombre"];
  $email = $_POST["email"];
  $mensaje = $_POST["mensaje"];

  $destinatario = "karmelix@gmail.com"; // Reemplaza con tu dirección de correo
  $asunto = "Nuevo mensaje de formulario de contacto";
  $cuerpo = "Nombre: " . $nombre . "\n";
  $cuerpo .= "Email: " . $email . "\n";
  $cuerpo .= "Mensaje:\n" . $mensaje;

  $headers = "From: " . $email . "\r\n"; // Opcional, para que el correo se vea desde el email del usuario

  if (mail($destinatario, $asunto, $cuerpo, $headers)) {
    echo "¡El mensaje ha sido enviado con éxito!";
  } else {
    echo "Hubo un error al enviar el mensaje.";
  }
}
?>