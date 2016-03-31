<?php
/*
Desarrollado por www.cesarcancino.com
*/

//Recupero los datoss enviados desde el formulario.
$nom=$_POST["nom"];
$correo=$_POST["correo"];
$grupo=$_POST["grupo"];
$sex=$_POST["sex"];
$guitar=$_POST["guitar"];
$detalle=$_POST["detalle"];
//**************************************************************
//envío el correo
$mi_mail="jonathanzx87@gmail.com";
$remitente="Remitente<jonathanzx87@gmail.com>";
$asunto="Asunto del correo"; //Asunto 
$cuerpo="
<html> 
<body> 
<table> 
<tr bgcolor='#f0f0f0'><td>
<font size='1' face='Verdana'>
Nombre:&nbsp;"
.$nom."<br>Tel&eacute;fono:&nbsp;"
.$correo."<br>Correo:&nbsp;"
.$grupo."Tel&eacute;fono:&nbsp;"
.$sex."<br>Correo:&nbsp;"
.$guitar."<br>Mensaje:&nbsp;"
.$detalle."
</font> 
</td>
</tr>
</table>
</body> 
</html>
"; //mensaje
$sheader="From:".$remitente."\nReply-To:".$remitente."\n"; 
$sheader=$sheader."X-Mailer:PHP/".phpversion()."\n"; 
$sheader=$sheader."Mime-Version: 1.0\n"; 
$sheader=$sheader."Content-Type: text/html";
mail($mi_mail,$asunto,$cuerpo,$sheader); 
//**********************************************
/*de manera opcional ( pero recomendable )
podemos redireccionar al usuario
al alguna página de nuestro sitio,
en este caso lo redireccionaremos al mismo formulario
*/
echo "<script type='text/javascript'>
alert('Su mensaje ha sido enviado exitosamente')
</script>";
echo"<script type='text/javascript'>
window.location='index.php
'</script>";
?>