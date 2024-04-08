<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    $destinatario = 'obuitragocamelo@yahoo.es'; // Dirección de correo a donde enviar el mensaje

    // Asunto del correo
    $asunto = 'Nuevo mensaje desde formulario de contacto';

    // Cuerpo del correo
    $cuerpoMensaje = "Nombre: $nombre\n";
    $cuerpoMensaje .= "Email: $email\n";
    $cuerpoMensaje .= "Mensaje:\n$mensaje\n";

    // Encabezados adicionales
    $headers = "From: $nombre <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Envío del correo
    mail($destinatario, $asunto, $cuerpoMensaje, $headers);

    // Redireccionar o mostrar un mensaje de éxito
    header('Location: contacto_exito.html'); // Redirige a una página de éxito
    exit();
}
?>
