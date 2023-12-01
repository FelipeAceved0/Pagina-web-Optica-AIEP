<?php
 $nombre=$_POST['nombre'];

 $telefono=$_POST['telefono'];
 $correo=$_POST['correo'];
 $fecha=$_POST['fecha'];
 $sucursal=$_POST['sucursal'];
 $checkbox= isset($_POST["checkbox"]) ? "7000" : "No gratuito"; 
 $mensaje=$_POST['mensaje'];

 $subject='Formulario de contacto';
 $para='correoprueba3006@gmail.com';
 echo"<script language='javascript'>
 alert('hola');
 </script>";
 $header = 'From: ' .$nombre;
 $msjCorreo = "Nombre: $nombre\n Telefono:\n $telefono Correo:\n $correo Fecha de hora medica:\n $fecha Sucursal:\n $sucursal Precio:\n $checkbox. " ;
 echo "<script language='javascript'>
 alert('hola2');
 </script>"; 
if ($_POST['submit']) 
{
     echo "<script language='javascript'>
 alert('hola3');
 </script>";
 if (mail($para, $subject, $msjCorreo, $header)) 
 {
 echo "<script language='javascript'>
 alert('Mensaje enviado, muchas gracias.');
 </script>";
 } 
 else 
 {
echo "<script language='javascript'>
 alert('fallado');
 </script>";
}
} 
?>