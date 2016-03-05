<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1 );

$template = "<html>
            <body>
                Ha recibido un contacto desde el home de S4N. <br>
                Empresa: ".$_POST['company']." <br>
                Nombre: ".$_POST['name']." <br>
                País: ".$_POST['country']." <br>
                Correo electrónico: ".$_POST['email']." <br>
                Mensaje: ".$_POST['message']." <br>
                <br>
                Atentamente:
                <br>
                <br>
                Equipo de S4N
            </body>
         </html>";

require_once('PHPMailer/class.smtp.php');
require_once('PHPMailer/class.phpmailer.php');
$mailer = new PHPMailer();
$mailer->IsSMTP(); 
$mailer->Host = "smtp.gmail.com";
$mailer->SMTPAuth   = true;
$mailer->SMTPSecure = "tls";
$mailer->Port       = "587";           
$mailer->Username   = "seven4nliferay@gmail.com"; 
$mailer->Password   = "seven4n2016";
$mailer->SetFrom      ("seven4nliferay@gmail.com", "S4N -  Contactenos");
$mailer->Subject    = "Correo de contactenos";
$mailer->AltBody    = "Para poder observar este mensaje correctamente, utilicé un visor de correo compatible";
$mailer->MsgHTML($template);
$mailer->AddAddress("info@s4n.co", "Info @ S4N");
$mailer->Send();
echo 'Al final';

?>
