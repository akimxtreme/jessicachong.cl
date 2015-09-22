<?php
// Where will you get the forms' results?
define("ORDER_FORM", 'info@jessicachong.cl');

$post = (!empty($_POST)) ? true : false;

if($post){
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$evento = $_POST['evento'];
$cita = $_POST['cita'];
$mensaje = $_POST['mensaje'];

// ************************ MENSAJE ************************************* //
$message = '<table border="1" bordercolor="#333" bgcolor="#FFF" width="650" align="center" style="font-family:Verdana, Geneva, sans-serif;">';
$message.= '<tr><th colspan="2" style="color:#4c1660">SOLICITUD DE CITA</th></tr>';

// name
$message.='<tr>';
$message.='<th style="color:#8D8D8D;" valign="middle" >NOMBRE(S) Y APELLIDO(S)</th>';
$message.='<td style="color:#000;" valign="middle" align="center">'. $name .'</td>';
$message.='</tr>';
    
// email
$message.='<tr>';
$message.='<th style="color:#8D8D8D;" valign="middle" >CORREO ELECTRONICO</th>';
$message.='<td style="color:#000;" valign="middle" align="center">'. $email .'</td>';
$message.='</tr>';

// phone
$message.='<tr>';
$message.='<th style="color:#8D8D8D;" valign="middle" >TELEFONO</th>';
$message.='<td style="color:#000;" valign="middle" align="center">'. $phone .'</td>';
$message.='</tr>';

// evento
$message.='<tr>';
$message.='<th style="color:#8D8D8D;" valign="middle" >FECHA DEL EVENTO</th>';
$message.='<td style="color:#000;" valign="middle" align="center">'. $evento .'</td>';
$message.='</tr>';
    
// cita
$message.='<tr>';
$message.='<th style="color:#8D8D8D;" valign="middle" >FECHA Y HORA DE LA CITA</th>';
$message.='<td style="color:#000;" valign="middle" align="center">'. $cita .'</td>';
$message.='</tr>';
    
    
// mensaje
$message.='<tr>';
$message.='<th style="color:#8D8D8D;" valign="middle" >MENSAJE</th>';
$message.='<td style="color:#000;" valign="middle" align="center">'. $mensaje .'</td>';
$message.='</tr>';

$message.='</table>';
    
    
// ************************ MENSAJE SOLICITUD DE CITA ************************************* //
/*
$para  = 'usuario1@dominio.com' . ', '; // atención a la coma
$para .= 'otrousuario@otrodominio.com';
*/
// Asunto
$titulo = 'Solicitud de Cita - Jessica Chong Designs';
 

// Cabecera que especifica que es un HMTL
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Cabeceras adicionales
$cabeceras .= 'From: Portal Web - Jessica Chong Designs <'. $email .'> Solicitud de Cita ' . "\r\n";

// enviamos el correo!
mail(ORDER_FORM, $titulo, $message, $cabeceras);

    
    
    
// ************************ MENSAJE RESPUESTA AUTOMATICA ************************************* //
// Respuesta Automatica Solicitante!
$message2 = "<p>Recibimos su Mensaje, sera revisado por nuestro personal lo mas pronto posible. Gracias por preferirnos. Saludos.</p>";
$cabeceras2  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras2 .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$cabeceras2 .= 'From: Jessica Chong Designs <'. ORDER_FORM .'>' . "\r\n";
mail($email, 'Jessica Chong Designs', $message2, $cabeceras2);

echo '<html><head><meta http-equiv="REFRESH" content="0; url=index.html"></head></html>';
}

?>
