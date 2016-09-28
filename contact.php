<?
$name  = $_REQUEST["name"];
$lastname  = $_REQUEST["lastname"];
$email = $_REQUEST["email"];
$mobile = $_REQUEST["mobile"];
$ciudad = $_REQUEST["ciudad"];
$area  = $_REQUEST["area"];
$coment  = $_REQUEST["coment"];
//$msg   = $_REQUEST["msg"];
$to    = "comunicaciones@arquitecturayconcreto.com, marian@eversocial.co, desarrollo@eversocial.co"; // <--- Change email ID here
if (isset($email) && isset($name)) {
   $subject = "$name sent you a message via All in One Template";
        $headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
$headers .= "From: ".$name." <".$email.">\r\n"."Reply-To: ".$email."\r\n" ;
$msg     = "Mensaje enviado desde landing del proyecto Ciudad del Bosque<br/> Mensaje de: $name  $lastname<br/> Email: $email <br/> Teléfono: $mobile<br/> Ciudad: $ciudad<br/> Área: $area<br/> Comentarios: $coment  "; //<br/>Message: $msg
    
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