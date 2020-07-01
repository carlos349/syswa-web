<?php

	$nombre = $_POST['nombre'];
	$correo = $_POST['correo'];
	$mensaje = $_POST['mensaje'];

    $origenNombre = 'Información a cliente';
    $origenEmail = 'syswainfo@gmail.com';
    $destinatarioEmail = "syswainfo@gmail.com"; //destinatario del email, o sea, a quien le estamos enviando el email
    $uid = md5(uniqid(time())); 
    $asuntoEmail = $_POST['asunto']; //asunto del email
    
    //cuerpo del email:
    $cuerpoMensaje = "Nombre:".$nombre."\r\n";
    $cuerpoMensaje .= "Correo:".$correo."\r\n";
	$cuerpoMensaje .= "Mensaje:\r\n".$mensaje."\r\n";
    //fin cuerpo del email.
    
    //cabecera del email (forma correcta de codificarla)
    $header = "From: " . $origenNombre . " <" . $origenEmail . ">\r\n";
    $header .= "Reply-To: " . $origenEmail . "\r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-Type: multipart/mixed; boundary=\"" . $uid . "\"\r\n\r\n";
    //armado del mensaje y attachment
    $mensaje = "--" . $uid . "\r\n";
    $mensaje .= "Content-type:text/plain; charset=utf-8\r\n";
    $mensaje .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
    $mensaje .= $cuerpoMensaje . "\r\n\r\n";
    //envio el email y verifico la respuesta de la función "email" (true o false)
    if (mail($destinatarioEmail, $asuntoEmail, $mensaje, $header)) {
        echo 'El archivo fue enviado correctamente';
    } else {
        echo 'Error, no se pudo enviar el email';
    }
    echo ', la página será recargada en ' . $tiempoEspera . ' segundos.';
    echo '<meta http-equiv="refresh" content="' . $tiempoEspera . '">';
    exit();

?>