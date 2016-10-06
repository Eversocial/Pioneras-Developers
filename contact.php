<?
$nombre  = $_REQUEST["nombre"];
$apellido  = $_REQUEST["apellido"];
$usertwitter  = $_REQUEST["usertwitter"];
$email = $_REQUEST["email"];
$charla = $_REQUEST["charla"];
$descriptionconference = $_REQUEST["descriptionconference"];
$descriptionabout  = $_REQUEST["descriptionabout"];
$recursos = $_REQUEST["recursos"];
//$msg   = $_REQUEST["msg"];
$to    = "desarrollo@eversocial.co"; // <--- Change email ID here
if (isset($email) && isset($nombre)) {
   $subject = "$nombre Mensaje de formulario de contacto de charlas Pioneras";
        $headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
$headers .= "From: ".$nombre." <".$email.">\r\n"."Reply-To: ".$email."\r\n" ;
$msg     = "Mensaje de aspirante a charla o conferencia en Pioneras Developers<br/> Mensaje de: $nombre $apellido<br/> Email: $email <br/> Usuario de Twitter: $twitter<br/> Nombre de la charla: $charla<br/> Breve descripción de la charla: $descriptionconference<br/> Breve descripción sobre mí (trayectoria, ocupación, etc) : $descriptionabout <br/> Recursos necesarios : $recursos ";
  $mail =  mail($to, $subject, $msg, $headers);
 if($mail)
    {
        echo 'success';
    }

else
    {
        echo 'failed';
    }
}

?>
