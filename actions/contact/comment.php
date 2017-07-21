<?php
include '../../config.php';
require '../../lib/contact.php';
require '../../lib/functions.php';
$contact = new contact($datosConexionBD);

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['comment']))
{
  $contact->city = detect_city();
  
  $to      = $settings['contact_email'];
  $subject = '[Nuevo Mensaje] [WEBSITE LA CHINESCA || CENTRO HISTORICO] ['.$_POST['name'].']';
  $message = $_POST['comment'];
  $headers = 'From: '. $_POST['email'] . "\r\n" .
      'X-Mailer: PHP/' . phpversion();
  
  if(mail($to, $subject, $message, $headers))
  {
     echo "Gracias tu comentario fue enviado";
  }
  else
  {
    echo "Error al enviar";
  }
}
else
{
  echo "Error: falta uno o mas datos";
}
?>