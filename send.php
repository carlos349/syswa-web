<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
class Mails {
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
            $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'syswainfo@gmail.com';                     // SMTP username
            $mail->Password   = 'l26151369';                               // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

            //Recipients
            $mail->setFrom($origenEmail, 'Syswa informaion');
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
                }).then((result) => {})
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
                }).then((result) => {})
            </script>';
        }
    }
}


?>