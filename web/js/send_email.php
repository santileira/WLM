<?php
if (isset($_REQUEST['Email']))  {
    //Email information
    $admin_email = "santiagoleira10@gmail.com";
    $name = $_REQUEST['Nombre'];
    $email = $_REQUEST['Email'];
	$telefono = $_REQUEST['Telefono'];
    $message = $_REQUEST['Mensaje'];
	$asunto = "E-mail Contacto - CABAÑAS LA MORENA - WEB";
	
	$mensajeFinal = "Nombre: " . $name . " \r\n"; 
	$mensajeFinal .= "E-mail: " . $email . " \r\n"; 
	$mensajeFinal .= "Teléfono: " . $telefono . " \r\n";
	$mensajeFinal .= "Mensaje: " . $message .  " \r\n"; 


    //send email
    if (mail($admin_email, $asunto , $mensajeFinal, "From:" . $email)) {
        echo 1;
    }
    else {
    	echo 0;
    }
}
?>