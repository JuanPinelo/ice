<?php

//vars
$subject = "Contacto WEBSITE";
$to = "info@icesureste.mx";

$from = "info@icesureste.mx";
$cc = "innovacion@icesureste.mx";

//data
$msg = "Nombre: "  .$_POST['name']    ."<br>\n";
$msg .= "Correo Electrónico: "  .$_POST['email']    ."<br>\n";
$msg .= "Teléfono: "  .$_POST['phone']    ."<br>\n";
$msg .= "Comentarios: "  .$_POST['message']    ."<br>\n";

//Headers
$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";
$headers .= "From: <".$from. ">" ;
$headers .= "cc: <".$cc.">";

   if(mail($to, $subject, $msg, $headers)){
   	echo "<script>alert('Se ha enviado su correo satisfactoriamente');</script>";
   }
   else{
   	echo "<script>alert('Ocurrión un error al enviar el correo');</script>";
   }
   return;
   

?>
