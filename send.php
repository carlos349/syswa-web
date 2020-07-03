<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
class Mails {
    
    public function constractMail(){
        require 'PHPMailer/Exception.php';
        require 'PHPMailer/PHPMailer.php';
        require 'PHPMailer/SMTP.php';

        $firtName = $_POST['firtName'];
        $lastName = $_POST['lastName'];
        $mail = $_POST['mail'];
        if ($_POST['number']) {
            $number = $_POST['code'].' '.$_POST['number']; 
        }else{
            $number = 'Ninguno escrito por el cliente.';
        }
        $suscription = $_POST['ifsuscription'];
        $type = $_POST['type'];

        $origenNombre = 'Contrato de servicio';
        $origenEmail = 'syswainfo@gmail.com';
        $destinatarioEmail = "syswainfo@gmail.com"; 
        $destinatarioEmailTwo = $mail;
        //cuerpo del email:
        $cuerpoMensaje = "El cliente:".$firtName." ".$lastName." ha contratado el servicio ".$type."<br>";
        $cuerpoMensaje .= "Correo: ".$mail."<br>";
        $cuerpoMensaje .= "Teléfono: ".$number."<br>";
        //fin cuerpo del email.

        //cuerpo dos del email:
        $cuerpoMensajeDos = '
            <div style="width: 100%; padding:0;text-align:center;">
                <div style="width: 85%;height: 8vh;margin: auto;background-color: #172b4d;box-shadow: 0 2px 5px 0 rgba(0,0,0,.14);padding: 20px;font-family: "Google Sans",Roboto,RobotoDraft,Helvetica,Arial,sans-serif;color:#172b4d;text-align:justify;-webkit-box-shadow: 0px 6px 8px -8px rgba(0,0,0,0.73);-moz-box-shadow: 0px 6px 8px -8px rgba(0,0,0,0.73);box-shadow: 0px 6px 8px -8px rgba(0,0,0,0.73);">
                    <div style="width: 100px;margin:auto;border-radius:55%;background-color:#f8f9fa;padding: 10px;">     
                        <img style="width: 100%;" src="http://syswa.net/views/images/syswa-isotipo.png" alt="Logo kkprettynails">
                    </div>
                </div>
                <div style="width: 100%;margin: auto;padding-top: 5%;font-family: "Google Sans",Roboto,RobotoDraft,Helvetica,Arial,sans-serif;color:#172b4d;padding-bottom: 20px;">
                    <center>
                        <div style="width:60%;text-align: center;">
                            <h1 style="text-align: center;color:#172b4d;">Bienvenid@ </h1>
                            <p style="text-align:center;margin-top:10px;font-size:18px;"> <strong>Hola '.$firtName.' '.$lastName.'</p>
                            <p style="text-align:left;font-size:14px;font-weight: 300;text-align: center;width: 60%;margin:auto;"><strong> 
                                Nos alegra que te hayas interesado en nuestros servicios, pronto nuestro equipo se pondrá en contacto contigo ofreciéndote la información que necesites.</strong>
                            </p>
                        <div>
                    </center>
                </div>
                <div style="width: 85%;background-color: #f0f1f3;box-shadow: 0 2px 5px 0 rgba(0,0,0,.14);margin: auto;padding: 20px;font-family: "Google Sans",Roboto,RobotoDraft,Helvetica,Arial,sans-serif;color:#172b4d;padding-bottom:20px;-webkit-box-shadow: 0px -4px 11px 0px rgba(0,0,0,0.12);-moz-box-shadow: 0px -4px 11px 0px rgba(0,0,0,0.12);box-shadow: 0px -4px 11px 0px rgba(0,0,0,0.12);">
                    <center>
                    <div style="width:60%;">
                        <center>
                        <p style="text-align:center;font-size:12px;"> +56 9 7262 8949 &nbsp;&nbsp;   syswainfo@gmail.com</p> 
                        <p style="text-align:center;font-size:12px;">Te atendemos todos los dias, solo contáctanos.</p>
                        <a href="http://syswa.net" style="color:#172b4d;text-decoration: none;" style="text-align:center;margin-top:12px;"><strong>Syswa.net</strong></a>&nbsp;&nbsp;
                        <a href="https://www.instagram.com/syswanet/" style="color:#172b4d;text-decoration: none;" style="text-align:center;margin-top:12px;"><strong>@syswanet</strong></a>
                        </center>
                    </div>
                    </center>
                </div>
            </div>
        ';
        //fin cuerpo dos del email.

        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'AKIA3PQB77VV744RUZEU';                     // SMTP username
            $mail->Host       = 'email-smtp.sa-east-1.amazonaws.com';                    // Set the SMTP server to send through
            $mail->Password   = 'BDlDydRxcHML6fDvoaCHLYsgwEf8OrLXZ8cB+3anDD/s';                               // SMTP password
            $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

            //Recipients
            $mail->setFrom($origenEmail, 'Syswa informacion');
            $mail->addAddress($origenEmail, 'Syswa');     // Add a recipient

            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Informacion a cliente';
            $mail->Body    = $cuerpoMensaje;

            $mail->send();

            $mailTwo = new PHPMailer(true);

                try {
                    //Server settings
                    $mailTwo->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
                    $mailTwo->isSMTP();                                            // Send using SMTP
                    $mailTwo->SMTPAuth   = true;                                   // Enable SMTP authentication
                    $mailTwo->Username   = 'AKIA3PQB77VV744RUZEU';                     // SMTP username
                    $mailTwo->Host       = 'email-smtp.sa-east-1.amazonaws.com';                    // Set the SMTP server to send through
                    $mailTwo->Password   = 'BDlDydRxcHML6fDvoaCHLYsgwEf8OrLXZ8cB+3anDD/s';                               // SMTP password
                    $mailTwo->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                    $mailTwo->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

                    //Recipients
                    $mailTwo->setFrom($origenEmail, 'Syswa informacion');
                    $mail­>AddReplyTo($origenEmail, 'Syswa informacion');
                    $mailTwo->addAddress($destinatarioEmailTwo, $firtName);     // Add a recipient

                    // Content
                    $mailTwo->isHTML(true);                      // Set email format to HTML
                    $mailTwo->Subject = 'Bienvenido a SYSWA';
                    $mailTwo->Body    = $cuerpoMensajeDos;
                    
                    $mailTwo->send();
                    echo '
                    <script>
                        Swal.fire({
                        icon: "success",
                        title: "¡Listo!",
                        text: "Nos pondremos en contacto contigo lo antes posible.",
                        showClass: {
                            popup: "animate__animated animate__fadeInDown"
                            },
                            hideClass: {
                            popup: "animate__animated animate__fadeOutUp"
                            }
                        }).then((result) => {
                            window.location="http://syswa.net/servicios";
                        })
                    </script>';
                } catch (Exception $e) {
                    echo $e. '
                    <script>
                        Swal.fire({
                        icon: "error",
                        title: "¡No Enviado!",
                        text: "Experimentamos problemas con el correo.",
                        showClass: {
                            popup: "animate__animated animate__fadeInDown"
                            },
                            hideClass: {
                            popup: "animate__animated animate__fadeOutUp"
                            }
                        }).then((result) => {
                            
                        })
                    </script>';
                }
        } catch (Exception $e) {
            echo $e. '
            <script>
                Swal.fire({
                icon: "error",
                title: "¡No Enviado!",
                text: "Experimentamos problemas con el correo.",
                showClass: {
                    popup: "animate__animated animate__fadeInDown"
                    },
                    hideClass: {
                    popup: "animate__animated animate__fadeOutUp"
                    }
                }).then((result) => {
                    
                })
            </script>';
        }
    }
    
    public function contactMail()
    {
        require 'PHPMailer/Exception.php';
        require 'PHPMailer/PHPMailer.php';
        require 'PHPMailer/SMTP.php';

        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $mensaje = $_POST['mensaje'];
        $asuntoEmail = $_POST['asunto']; 

        $origenNombre = 'Información a cliente';
        $origenEmail = 'syswainfo@gmail.com';
        $destinatarioEmail = "syswainfo@gmail.com"; 

        //cuerpo del email:
        $cuerpoMensaje = "Nombre:".$nombre."\r\n";
        $cuerpoMensaje .= "Correo:".$correo."\r\n";
        $cuerpoMensaje .= "Mensaje:\r\n".$mensaje."\r\n";
        //fin cuerpo del email.

        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'AKIA3PQB77VV744RUZEU';                     // SMTP username
            $mail->Host       = 'email-smtp.sa-east-1.amazonaws.com';                    // Set the SMTP server to send through
            $mail->Password   = 'BDlDydRxcHML6fDvoaCHLYsgwEf8OrLXZ8cB+3anDD/s';                               // SMTP password
            $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

            //Recipients
            $mail->setFrom($origenEmail, 'Syswa informacion');
            $mail->addAddress($origenEmail, 'Syswa');     // Add a recipient

            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $asuntoEmail;
            $mail->Body    = $cuerpoMensaje;

            $mail->send();
            echo '
            <script>
                Swal.fire({
                icon: "success",
                title: "¡Enviado!",
                text: "Nos pondremos en contacto contigo lo antes posible.",
                showClass: {
                    popup: "animate__animated animate__fadeInDown"
                    },
                    hideClass: {
                    popup: "animate__animated animate__fadeOutUp"
                    }
                }).then((result) => {
                    window.location="http://syswa.net/servicios";
                })
            </script>';
        } catch (Exception $e) {
            echo '
            <script>
                Swal.fire({
                icon: "error",
                title: "¡No Enviado!",
                text: "Experimentamos problemas con el correo.",
                showClass: {
                    popup: "animate__animated animate__fadeInDown"
                    },
                    hideClass: {
                    popup: "animate__animated animate__fadeOutUp"
                    }
                }).then((result) => {
                    window.location="http://syswa.net/servicios";
                })
            </script>';
        }
    }
}


?>