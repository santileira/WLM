<?php
	$usersmtp =""; // Entre las comillas va el usuario de autenticacion smtp que podra ver en su panel de control  
	$pass=""; // Entre las comillas va el password de la cuenta de correo  
	$destino="cabaniaslamorena@gmail.com"; // Entre las comillas la direccion de correo donde va a recibir los mails  

// Se verifica que los datos han sido enviados desde el formulario, para la validación con el SMTP
if ( $_POST['enviar'] == "1")
{
	if ( $_POST['nombre'] != "" && $_POST['apellido'] != "" && $_POST['email'] != "" )
	
	{
		// Se incluye la librería necesaria para el envio
		require_once("fzo.mail.php");
		
		$mail = new SMTP("localhost",$usersmtp,$pass);
		
		// Se configuran los parametros necesarios para el envío
		$de = "no-reply@cabaniaslamorena.com.ar";
		$a = $destino;
		$asunto = "E-mail Contacto - CABANIAS LA MORENA";
		$cc = $_POST['cc'];
		$bcc = $_POST['bcc'];

		
			$cuerpo = "Este es un e-mail enviado desde el formulario de contacto de la pagina CABANIAS LA MORENA\n\n";
			$cuerpo .= "Nombre: " .$_POST['nombre'] . "\n";
			$cuerpo .= "Apellido: " .$_POST['apellido'] . "\n";
			$cuerpo .= "Direccion: " .$_POST['direccion'] . "\n";
			$cuerpo .= "Telefono: " .$_POST['telefono'] . "\n";
			$cuerpo .= "Email: " .$_POST['email'] . "\n";
			$cuerpo .= "Consulta: " .$_POST['consulta'] . "\n";
		
		

		$header = $mail->make_header(
						$de, 
						$a, 
						$asunto, 
						$_POST['prioridad'], 
						$cc, 
						$bcc
						);
		
		/*	
			Pueden definirse más encabezados. Tener en cuenta la terminación de la 
			linea con (\r\n)
			
			$header .= "Reply-To: ".$_POST['from']." \r\n";
			$header .= "Content-Type: text/plain; charset=\"iso-8859-1\" \r\n";
			$header .= "Content-Transfer-Encoding: 8bit \r\n";
			$header .= "MIME-Version: 1.0 \r\n";
		*/
		
		// Se envia el correo y se verifica el error
		$error = $mail->smtp_send($de, $a, $header, $cuerpo, $cc, $bcc);
		if ($error == "0")
		
		header("Location:contactofinal.htm");
		
			
		else
		echo $error;
	}
	else
	{
		 
		echo("Complete los campos Requeridos ");
		
	}
}
?>
<style type="text/css">
<!--
.Estilo1 {font-size: smaller}
-->
</style>

<title>www.cabaniaslamorena.com.ar - Caba&ntilde;as La Morena - Alojamiento - Caba&ntilde;as</title><div align="center"><br />
    <br />
    <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="800" height="320">
      <param name="movie" value="headerlamorena.swf" />
      <param name="quality" value="high" />
      <embed src="headerlamorena.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="800" height="320"></embed>
    </object>
    <br />
  <br />
  <br>
<a href="reservas.htm" class="Estilo1">Volver al Formulario de Contacto</a></div>
