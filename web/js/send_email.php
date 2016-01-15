<?php
if(isset($_POST["Nombre"]) && isset($_POST["Email"]) && isset($_POST["Mensaje"]) ){
$to = "cabaniaslamorena@gmail.com";
$subject = "WEB E-mail Contacto - CABANIAS LA MORENA";
$contenido .= "Nombre: ".$_POST["Nombre"]."\n";
$contenido .= "Email: ".$_POST["Email"]."\n";
$contenido .= "Telefono: ".$_POST["Telefono"]."\n";
$contenido .= "Contenido: ".$_POST["Mensaje"]."\n\n";
$header = "From: no-reply@webcabaniaslamorena.com.ar\n";
$header .= "Mime-Version: 1.0\n";
$header .= "Content-Type: text/plain";
if(mail($to, $subject, $contenido ,$header)){
echo 1;
}
else
echo 0;
}
?>