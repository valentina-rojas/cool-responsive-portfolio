<?php
if(isset($_POST['submit'])) {
    // Recoger datos del formulario
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Correo de destino
    $to = "valentinarojas618@gmail.com";

    // Asunto del correo
    $email_subject = "Nuevo mensaje de $fullname: $subject";

    // Contenido del correo
    $email_body = "Has recibido un nuevo mensaje de $fullname ($email):\n\n";
    $email_body .= "Número de teléfono: $phone\n\n";
    $email_body .= "Mensaje:\n$message";

    // Cabeceras del correo
    $headers = "From: $email\n";
    $headers .= "Reply-To: $email\n";

    // Enviar correo
    mail($to, $email_subject, $email_body, $headers);

    // Redireccionar después de enviar el correo
    header("Location: index.html");
    exit();
}
?>