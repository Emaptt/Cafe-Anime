<?php

$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];

$formcontent="
    E-mail: $correo \n
    Mensaje: $mensaje  
";

$recipient = "emanuelgpanza@gmail.com";

$subject = "Mensaje de la web Café Anime";

$header = "From: $email \r\n";
$header .= "Content-Type: text/plain; charset=UTF-8";
mail($recipient, $subject, $formcontent, $header) or die("Error!");
header("Location: confirmacion-form.html");

?>