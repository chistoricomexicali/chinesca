<?php
include '../../config.php';
require '../../lib/contact.php';
require '../../lib/functions.php';
$contact = new contact($datosConexionBD);

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['comment']))
{
  $contact->name = $_POST['name'];
  $contact->email = $_POST['email'];
  $contact->comment = $_POST['comment'];
  $contact->city = detect_city();
  if($contact->saveComment())
  {
    echo "Gracias tu comentario fue enviado";
  }else{
    echo "Error al guardar";
  }
}
else
{
  echo "Error: falta uno o mas datos";
}
?>