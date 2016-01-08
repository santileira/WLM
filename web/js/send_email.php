<?php
if (isset($_REQUEST['email']))  {
    //Email information
    $admin_email = "santiagoleira10@gmail.com";
    $name = $_REQUEST['Nombre'];
    $email = $_REQUEST['E-mail'];
	$telefono = $_REQUEST['Telefono'];
    $message = $_REQUEST['Mensaje'];

    //send email
    if (mail($admin_email, $name, $email, $message, "From:" . $email)) {
        echo 1;
    }
    else {
    	echo 0;
    }
}
?>